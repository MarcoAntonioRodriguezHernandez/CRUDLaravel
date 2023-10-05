<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Authors;
use App\Models\Categorie;
use App\Models\Loan;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['books'] = Book::paginate(5);
        return view('books.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        //
        $authors = Authors::all();
        $categories = Categorie::all();
        return view('books.create', compact('categories', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request This parameter is the request of the data in the form on view book/create.blade.php
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        //
        $fileds = [
            'title' => 'required|string|max:50',
            'editorial' => 'required|string|max:50',
            'year_edition' => 'required',
            'isbn' => 'required',
            'category_name',
            'author_name'
        ];
        $message = [
            'title.required' => 'El titulo es requerido',
            'title.max' => 'El titulo no debe exceder los 50 caracteres',
            'editorial.required' => 'La editorial es requerida',
            'editorial.max' => 'La editorial no debe exceder los 50 caracteres',
            'year_edition.required' => 'La fecha de edición es requerida',
            'isbn.required' => 'El ISBN es requerido',
            'category_name.required' => 'La categoria es requerida',
            'author_name.required' => 'El autor es requerido',
        ];
        $this->validate($request, $fileds, $message);

        $bookData = request()->except('_token');
        Book::insert($bookData);

        return redirect('books')->with('message', 'Libro agregado correctamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id| This parameter is the id from the book that you want to edit
     */
    public function edit($id)
    {
        //
        $authors = Authors::all();
        $categories = Categorie::all();
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book', 'categories', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     * @param $request| This request is getting all the data from the form to update
     * @param $id| This parameter is the id from the book that you need to update the data
     */
    public function update(Request $request, $id)
    {
        //
        $fileds = [
            'title' => 'required|string|max:50',
            'editorial' => 'required|string|max:50',
            'year_edition' => 'required',
            'isbn' => 'required',
            'category_name',
            'author_name'
        ];
        $message = [
            'title.required' => 'El titulo es requerido',
            'title.max' => 'El titulo no debe exceder los 50 caracteres',
            'editorial.required' => 'La editorial es requerida',
            'editorial.max' => 'La editorial no debe exceder los 50 caracteres',
            'year_edition.required' => 'La fecha de edición es requerida',
            'isbn.required' => 'El ISBN es requerido',
            'category_id.required' => 'El id de categoria es requerido',
            'author_id.required' => 'El id de autor es requerido',
        ];
        $this->validate($request, $fileds, $message);
        $bookData = request()->except(['_token', '_method']);
        Book::where('id', '=', $id)->update($bookData);
        $book = Book::findOrFail($id);
        return redirect('books')->with('message',
            'Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     * @param $id| This parameter is to destroy a register in the query by id
     */
    public function destroy($id)
    {
        //
        Loan::where('book_id', '=', $id)->delete();
        Book::destroy($id);
        return redirect('books')->with('message',
            'Libro eliminado correctamente');
    }
}
