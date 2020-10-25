@extends('app')

@section('title','All Restaurants')

@section('content')
    @foreach($restaurants as $restaurant)
    
    
    <section class="card text-center align-items-center mt-5" style="width: 18rem;">
        <section class="card-body">
        <a href='./restaurants/{{$restaurant->id}}'><h5 class="card-title">{{ $restaurant->name }}</h5></a>
          <h6 class="card-subtitle mb-2 text-muted"><strong>{{$restaurant->address}} {{$restaurant->zipCode}} {{$restaurant->town}} {{$restaurant->country}}</strong></h6>
          <p class="card-text">{{$restaurant->description}}</p>
          <p>number of review : {{ $restaurant->review }}</p>
        </section>
      </section>
    @endforeach
@endsection