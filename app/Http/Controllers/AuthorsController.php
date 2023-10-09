<?php
namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * This function of the controller is returning the view of index with all the information of the authors
     * @return JsonResponse This is returning a json response with the data of the authors
     */
    public function index():JsonResponse
    {
        //
        $authors = Authors::all();
        return response()->json($authors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request This parameter is the request of the data in the form on view author/create.blade.php
     * @return JsonResponse This is returning a json response with the message with data of the author
     */
    public function store(Request $request): JsonResponse
    {
        //
        $authorData = new Authors;
        $authorData->name = $request->name; //Example of recived data: 'Juan'
        $authorData->surname = $request->surname; //Example of recived data: 'Perez'
        $authorData->gender = $request->gender; //Example of recived data: 'Hombre'
        $authorData->age = $request->age; //Example of recived data: 20
        $authorData->save();
        $data = [
            'message' => 'Autor agregado correctamente',
            'author' => $authorData
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     * This method is returning the view of show with the all the information of the author
     * @param Authors $authors This parameter is the id of the author
     * @return JsonResponse This is returning a json response with the data of the author
     */
    public function show(Authors $authors): JsonResponse
    {
        //
        return response()->json($authors);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request This parameter is the request of the data in the form on view author/edit.blade.php
     * @param $id| This id is used to find all the data of an author
     */
    public function update(Request $request,$id): JsonResponse
    {
        $authorData = Authors::findOrFail($id);
        $authorData->name = $request->name; //Example of recived data: 'Juan'
        $authorData->surname = $request->surname; //Example of recived data: 'Perez'
        $authorData->gender = $request->gender; //Example of recived data: 'Hombre'
        $authorData->age = $request->age; //Example of recived data: 20
        $authorData->save();
        $data = [
            'message' => 'Autor actualizado correctamente',
            'author' => $authorData
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     * @param $id |This parameter is the id of the author
     * @return JsonResponse
     */
    public function destroy($id):JsonResponse
    {
        $authorData = Authors::findOrFail($id);
        $authorData->delete();
        $data = [
            'message' => 'Autor eliminado correctamente',
            'author' => $authorData
        ];
        return response()->json($data);
    }
}
