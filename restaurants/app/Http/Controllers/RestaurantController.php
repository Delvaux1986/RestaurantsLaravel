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
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants/edit' , compact('restaurant'));
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
        $this->validate($request , [
            'name' => 'required',
            'address' => 'required',
            'zipCode' => 'required',
            'town' => 'required',
            'country' => 'required',
            'description' => 'required',
            'review' => 'required',
        ]);

        $restaurant = Restaurant::find($id);

        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->zipCode = $request->input('zipCode');
        $restaurant->town = $request->input('town');
        $restaurant->country = $request->input('country');
        $restaurant->description = $request->input('description');
        $restaurant->review = $request->input('review');
        $restaurant->save();

        return redirect('/');
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
