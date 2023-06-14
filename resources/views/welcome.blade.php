@extends('layouts.app')

@section('content')

@if(Auth::user() && Auth::user()->isTeacher)
  <h1>
    Welcome Teacher 
  </h1>
  <a href='/ManageStudents' class='btn btn-primary'>Manage Student</a>
  <a href='/ManageClasses' class='btn btn-primary'>Manage Classes</a>    
  <a href='/ManageModules' class='btn btn-primary'>Manage Modules</a>    
  <a href='/ManageNotes' class='btn btn-primary'>Manage Notes</a>    
@elseif(Auth::user() && !Auth::user()->isTeacher)
  <h1>
    Welcome Student 
  </h1>
  <a href='/Classmates' class='btn btn-primary'>View Classmates</a>    
  <a href='/StudentModules' class='btn btn-primary'>View Modules</a>    
@else
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Page with Background Image</title>
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
  crossorigin="anonymous"
/>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Oswald:wght@200&display=swap"
  rel="stylesheet"
/>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"
></script>
  <style>
    .logo-container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }
    .logo-container img {
      width: 650px;
      height: 380px;
    }
    .slogan {
      margin-top: 20px;
      color: white;
      font-size: 18px;
    }
    p{
      font-family: "Fjalla One", sans-serif;
    }
    #background-video {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
      }
      #video-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
        z-index: -1;
      }
  </style>
</head>
<body>
  <div class="container-fluid">
    <video id="background-video" autoplay muted loop>
      <source src="{{ asset('media/video.mp4') }}" type="video/mp4" />
    </video>
    <div id="video-overlay"></div>
    <div class="row">
      <div class="col-12">
        <div class="logo-container">
          <img src="{{ asset('media/logo1.png') }}" />
          <p class="slogan" style="font-size:30px;">Connecting <span style="color:#3db2e9">Education</span> Empowering <span style="color:#3db2e9">Futures</span> </p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

@endsection
@endif
