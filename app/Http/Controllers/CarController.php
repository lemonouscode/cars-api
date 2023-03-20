<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        // Getting data from request
        $per_page = $request->per_page;
        $page = $request->page;

        // Calculating where which page to get
        $toSkip = $page * $per_page;

        // Instantiation of query
        $myQuery = Car::query();

        $cars = Car::all();
        if($per_page){
            $cars = $myQuery->paginate($per_page);
        }
        if($page){
            $cars = $myQuery->skip($toSkip)->paginate($per_page);
        }
        
        return response()->json($cars);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCarRequest $request)
    {
        //
        $car = Car::create($request->validated());
        return response()->json($car);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $car = Car::findOrFail($id);
        return response()->json($car);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, string $id)
    {
        //
        $car = Car::findOrFail($id)->update($request->validated());
        return response()->json($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $car = Car::findOrFail($id)->delete();
        return response()->json($car);

    }
}