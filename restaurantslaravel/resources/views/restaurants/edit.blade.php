@extends('app')

@section('title','Edit Restaurant')

@section('content')
   <form action="/restaurants/edit/{{$restaurant->id}}" method="POST" class="d-flex flex-column">
    {{ csrf_field() }}
    {{ method_field('PATCH') }} 
       <input type="text" name="name" value="{{ $restaurant->name }}" class="mt-2">
       <input type="text" name="address" value="{{ $restaurant->address }}" class="mt-2">
       <input type="number" name="zipCode" value="{{ $restaurant->zipCode }}" class="mt-2">
       <input type="text" name="town" value="{{ $restaurant->town }}" class="mt-2">
       <input type="text" name="country" value="{{ $restaurant->country }}" class="mt-2">
       <input type="textarea" name="description" value="{{ $restaurant->description }}"  class="mt-2">
       <input type="number" name="review" value="{{ $restaurant->review }}" class="mt-2">
       <input type="submit" value="send">
   </form>
   {{-- @error('name', 'address' , 'zipCode' , 'town' , 'country' , 'description' ,'review') {{$message}} @enderror --}}
@endsection