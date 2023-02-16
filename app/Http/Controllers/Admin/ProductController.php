<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(ProductFormRequest $request)
    {
        $data = $request->validated();

        if($request->has('image')){
            $image = str_replace('public/products', '', $request->file('image')->store('public/products'));
            $data['image']  = $image;
        }

        $product = Product::create($data);

        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        // Для 'active' селекта временный массив (нужно будет в базе сделать отдельную таблицу)
        $product['active_arr'] = [
            '0' => '0',
            '1' => '1',
        ];

        // И ещё массив для категорий))
        $product['category_arr'] = [
            '0' => 'Диваны',
            '1' => 'Столы',
            '2' => 'Кресла',
            '3' => 'Кровати',
            '4' => 'Стулья',
        ];

        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(ProductFormRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->validated();

               if($request->has('image')){
            $image = str_replace('public/products', '', $request->file('image')->store('public/products'));
            $data['image'] = $image;
        }

        $product->update($data);

        session()->flash('edit_status', 'Запись ' . $product->name . ' успешно отредактирована');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return back();
    }
}
