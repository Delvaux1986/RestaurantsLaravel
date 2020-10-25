<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RestaurantController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::get();
        return view('restaurants.index',compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $restaurant =  $request->validate([
        //     'name' => 'required|min:2',
        //     'address' => 'required|min:2',
        //     'zipCode' => 'required|numeric',
        //     'town' => 'required|min:2',
        //     'country' => 'required|min:2',
        //     'description' => 'required|min:2',
        //     'review' => 'required|numeric'
        // ]);
        $restaurant = new Restaurant;
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->zipCode = $request->zipCode;
        $restaurant->town = $request->town;
        $restaurant->country = $request->country;
        $restaurant->description = $request->description;
        $restaurant->review = $request->review;

        $restaurant->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant , $id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants/show' , compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
