@extends('app')

@section('title','{{$restaurant->name}}')

@section('content')
   
    
    
    <section class="card text-center align-items-center mt-5" style="width: 18rem;">
        <section class="card-body">
          <h5 class="card-title">{{ $restaurant->name }}</h5>
          <h6 class="card-subtitle mb-2 text-muted"><strong>{{$restaurant->address}} {{$restaurant->zipCode}} {{$restaurant->town}} {{$restaurant->country}}</strong></h6>
          <p class="card-text">{{$restaurant->description}}</p>
          <p>number of review : {{ $restaurant->review }}</p>
        </section>
      </section>
    
@endsection