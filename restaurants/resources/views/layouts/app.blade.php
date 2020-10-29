<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
    <nav class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/restaurants/create') }}" class="nav-link">New Restaurant</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">login</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">Register</a>
        </li>
        <li class="nav-item">
            <form id="logout-form" action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
            <button type="submit" class="nav-link btn btn-link">Logout</button>
        </form>
        </li>
        <li class="nav-item">
            <a href="/user/Auth::id()" class="nav-link">Profile</a>
        </li>
    </nav>


 <body class="bg-dark text-center d-flex align-items-center flex-column">

        
    @yield('content')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>
