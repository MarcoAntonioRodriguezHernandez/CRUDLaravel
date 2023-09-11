<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Loan;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['people'] = Person::paginate(5);
        return view('people.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $fileds = [
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'address' => 'required|string|max:200',
            'phone' => ''
        ];
        $message = [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre no debe exceder los 50 caracteres',
            'surname.required' => 'El apellido es requerido',
            'surname.max' => 'El apellido no debe exceder los 50 caracteres',
            'address.required' => 'La dirección es requerida',
            'address.max' => 'La dirección no debe exceder los 200 caracteres',
            'phone.required' => 'El telefono es requerida',
        ];
        $this->validate($request, $fileds, $message);

        $personData = request()->except('_token');
        Person::insert($personData);
        return redirect('people')->with('message', 'Usuario agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $people = Person::findOrFail($id);
        return view('people.edit', compact('people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $fileds = [
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'address' => 'required|string|max:200',
            'phone' => 'required'
        ];
        $message = [
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre no debe exceder los 50 caracteres',
            'surname.required' => 'El apellido es requerido',
            'surname.max' => 'El apellido no debe exceder los 50 caracteres',
            'address.required' => 'El genero es requerido',
            'address.max' => 'El genero no debe exceder los 50 caracteres',
            'phone.required' => 'La edad es requerida',
        ];
        $this->validate($request, $fileds, $message);


        $peopleData = request()->except(['_token', '_method']);
        Person::where('id', '=', $id)->update($peopleData);

        $people = Person::findOrFail($id);
        return redirect('people')->with('message', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Loan::where('person_id', '=', $id)->delete();
        Person::destroy($id);
        return redirect('people')->with('message', 'Usuario eliminado correctamente');
    }
}
