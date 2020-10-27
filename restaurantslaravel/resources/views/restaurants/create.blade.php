@extends('app')

@section('title','Add Restaurant')

@section('content')
   <form action="/restaurant/create" method="POST" class="d-flex flex-column">
    {{ csrf_field() }} 
       <input type="text" name="name" placeholder="Enter name of your restaurant"  class="mt-2" autocomplete="on">
       <input type="text" name="address" placeholder="Enter name of your address of the restaurant"  class="mt-2" autocomplete="off">
       <input type="number" name="zipCode" placeholder="Enter zipCode of the restaurant" class="mt-2" autocomplete="off">
       <input type="text" name="town" placeholder="Enter the town of the restaurant" class="mt-2" autocomplete="off">
       <input type="text" name="country" placeholder="Enter the country of the restaurant" class="mt-2" autocomplete="off">
       <input type="textarea" name="description" placeholder="A little description"  class="mt-2" autocomplete="off">
       <input type="number" name="review" placeholder="number of review" class="mt-2" autocomplete="off">
       <input type="submit" value="Send" class="btn btn-info mt-2">
   </form>
   {{-- @error('name', 'address' , 'zipCode' , 'town' , 'country' , 'description' ,'review') {{$message}} @enderror --}}
@endsection