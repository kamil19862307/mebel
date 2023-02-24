<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ColorFormRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $colors = Color::orderBy('created_at', 'DESC')->limit(100)->get();

        return view('admin.colors.index', [
            'colors' => $colors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(ColorFormRequest $request): object
    {
        Color::create($request->validated());

        return redirect(route('admin.colors.index'));
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
        $color = Color::findOrfail($id);

        return view('admin.colors.edit', [
            'color' => $color,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(ColorFormRequest $request, $id)
    {
        $color = Color::findOrFail($id);

        $color->update($request->validated());

        alert('Цвет успешно изменён');

        return redirect(route('admin.colors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $color = Color::findOrFail($id);

        alert('Запись '. $color->name .' успешно удалена');

        Color::destroy($id);

        return back();
    }
}
