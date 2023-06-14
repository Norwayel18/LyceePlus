@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("{{ asset('media/hero.jpg') }}");
      background-repeat: no-repeat;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
        height: 100vh;
    }

    .container-rectangle {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .rectangle {
        width: 400px;
        height: 205px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 10px;
        text-decoration: none;
        color: white;
        transition: width 0.5s ease-in-out;
    }

    .rectangle:hover {
        width: 700px;
    }
    .rectangle-1 {
        background: rgb(171,42,42);
        background: linear-gradient(273deg, rgba(171,42,42,1) 0%, rgba(210,113,113,1) 100%);
    }

    .rectangle-2 {
        background: rgb(49,101,34);
        background: linear-gradient(273deg, rgba(49,101,34,1) 0%, rgba(96,182,94,1) 74%, rgba(113,210,115,1) 100%);
    }

    .rectangle-3 {
        background: rgb(184,182,80);
        background: linear-gradient(273deg, rgba(184,182,80,1) 0%, rgba(244,218,111,1) 100%);
    }

    .rectangle i {
        font-size: 90px;
        margin-bottom: 10px;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<h1 class="text-center text-white">Manage Students</h1>

<div class="container-rectangle">
    <a href="/AddStudents">
        <div class="rectangle rectangle-1">
            <i class="fas fa-users"></i>
            <span>Students</span>
        </div>
    </a>
    <a href="/Students">
        <div class="rectangle rectangle-2">
            <i class="fas fa-list"></i>
            <span>View students</span>
        </div>
    </a>>
</div>
@endsection
