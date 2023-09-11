<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['authors'] = Authors::paginate(5);
        return view('author.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('author.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
        $fileds = [
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'gender' => 'required|string|max:50',
            'age' => 'required'
        ];
        $message = [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre no debe exceder los 50 caracteres',
            'surname.required' => 'El apellido es requerido',
            'surname.max' => 'El apellido no debe exceder los 50 caracteres',
            'gender.required' => 'El genero es requerido',
            'gender.max' => 'El genero no debe exceder los 50 caracteres',
            'age.required' => 'La edad es requerida',
        ];
        $this->validate($request, $fileds, $message);

        $authorData = request()->except('_token');
        Authors::insert($authorData);
        return redirect('authors')->with('message', 'Autor agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Authors $authors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $authors = Authors::findOrFail($id);
        return view('author.edit', compact('authors'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $fileds = [
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'gender' => 'required|string|max:50',
            'age' => 'required'
        ];
        $message = [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre no debe exceder los 50 caracteres',
            'surname.required' => 'El apellido es requerido',
            'surname.max' => 'El apellido no debe exceder los 50 caracteres',
            'gender.required' => 'El genero es requerido',
            'gender.max' => 'El genero no debe exceder los 50 caracteres',
            'age.required' => 'La edad es requerida',
        ];
        $this->validate($request, $fileds, $message);


        $authorData = request()->except(['_token', '_method']);
        Authors::where('id', '=', $id)->update($authorData);

        $authors = Authors::findOrFail($id);
        return redirect('authors')->with('message', 'Autor actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Book::where('author_id', '=', $id)->delete();
        Authors::destroy($id);
        return redirect('authors')->with('message', 'Autor eliminado correctamente');
    }
}
