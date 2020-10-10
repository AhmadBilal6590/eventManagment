<!-- <!DOCTYPE html>
<html>
<head>
    <title>Event App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('event') }}">Event</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('event') }}">View All Event</a></li>
        <li><a href="{{ URL::to('event/create') }}">Create a Event</a>
    </ul>
</nav> -->

@extends('layouts.app')

@section('content')






<!-- if there are creation errors, they will show here -->

<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->



<div class="container" >

<h2 class="col-md-4">Create a Event</h2>
<form action="http://eventmanagment.localhost/event"  method="post"  enctype="multipart/form-data" >
    @csrf

    <div class="form-group">
    <label> Title </label>
   <input type="text"  class="form-control" name="title" /> 
   @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror  
       </div>
    <div class="form-group">
    <label> Date & time </label>
   <input type="date"  class="form-control" name="date_time" /> 
   @error('date_time')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror  
    </div>

    <div class="form-group">
    <label>Ticket Price</label>
   <input type="text"  class="form-control" name="ticket_price" /> 
   @error('ticket_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror  
    </div>

    <div class="form-group">
    <label>Ticket Quantity</label>
   <input type="text"  class="form-control" name="ticket_quantity"/> 
   @error('ticket_quantity')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror  
    </div>

           <div class="form-group ">
                <label>Header Image</label>
                <div class="custom-file">
                    <input type="file" name="header_image" class="custom-file-input" id="header_image" required>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <label class="custom-file-label" for="validatedCustomFile"></label>
                    <!-- <div class="invalid-feedback">Bitte laden Sie hier Ihr Firmenlogo hoch.</div> -->
                </div>
            </div>

            <div class="form-group ">
                <label>Gallery Image</label>
                <div class="custom-file">
                    <input type="file" name="gallery_image" class="custom-file-input" id="gallery_image" required>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <label class="custom-file-label" for="validatedCustomFile"></label>
                    <!-- <div class="invalid-feedback">Bitte laden Sie hier Ihr Firmenlogo hoch.</div> -->
                </div>
            </div>
   
        <input type="submit" class="btn btn-primary"  >Create the Event! </input>
        </form>
</div>

@endsection
<!-- </body>
</html> -->