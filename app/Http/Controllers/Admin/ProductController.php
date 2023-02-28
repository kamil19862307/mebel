<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductFormRequest;
use App\Models\AdminUser;
use App\Models\Color;
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
        $colors = Color::all();

        $products = Product::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.products.index', [
            'products' => $products,
            'colors' => $colors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $colors = Color::all();

        return view('admin.products.create', [
            'colors' => $colors,
            ]);
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

        $product['color_arr'] = Color::all();

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

        alert('Запись '. $product->name .' успешно отредактирована');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        alert('Запись '. $product->name .' успешно удалена');

        Product::destroy($id);

        return back();
    }
}
