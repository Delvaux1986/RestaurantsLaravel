@extends('app')

@section('title','Restaurant')

@section('content')
    <form action="/restaurant/create" method="POST" class="d-flex flex-column">
        {{ csrf_field() }} 
        <input type="text" name="login" placeholder="Enter your login"  class="mt-2" autocomplete="on">
        <input type="text" name="password" placeholder="Enter password"  class="mt-2" autocomplete="off">
        <input type="submit" value="Send" class="btn btn-info mt-2">
    </form>


@endsection