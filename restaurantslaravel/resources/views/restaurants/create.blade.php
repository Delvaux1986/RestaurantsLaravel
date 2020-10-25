@extends('app')

@section('title','Add Restaurant')

@section('content')
   <form action="/restaurant/create" method="POST">
    {{ csrf_field() }} 
       <input type="text" name="name" placeholder="Enter name of your restaurant">
       <input type="text" name="address" placeholder="Enter name of your address of the restaurant">
       <input type="number" name="zipCode" placeholder="Enter zipCode of the restaurant">
       <input type="text" name="town" placeholder="Enter the town of the restaurant">
       <input type="text" name="country" placeholder="Enter the country of the restaurant">
       <input type="textarea" name="description" placeholder="A little description" >
       <input type="number" name="review" placeholder="number of review">
       <input type="submit" value="send">
   </form>
   {{-- @error('name', 'address' , 'zipCode' , 'town' , 'country' , 'description' ,'review') {{$message}} @enderror --}}
@endsection