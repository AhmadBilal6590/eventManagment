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

<div class="container">

<h2>Edit {{ $event->name }}</h2>



<form action="{{URL::to('event/'.$event->id)}}"  method="post"  enctype="multipart/form-data"  >


    @csrf

    <input type="hidden" name="_method"  value="PATCH" />

    <div class="form-group">
    <label> Title </label>
   <input type="text"  class="form-control" name="title"  value="{{$event->title}}">
   @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror  
       </div>
    <div class="form-group">
    <label> Date & time </label>
   <input type="date"  class="form-control" name="date_time" value="{{$event->date_time}}" > 
   @error('date_time')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror  
    </div>

    <div class="form-group">
    <label>Ticket Price</label>
   <input type="text"  class="form-control" name="ticket_price" value="{{$event->ticket_price}}" > 
   @error('ticket_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror  
    </div>

    <div class="form-group">
    <label>Ticket Quantity</label>
   <input type="text"  class="form-control" name="ticket_quantity" value="{{$event->ticket_quantity}}" > 
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
    <!-- <div class="form-group">
    <label> shark_level </label>
    <select  name="shark_level" class="form-control">
       <option  value="0">
            select a level
        </option>
        <option  value="1">
            Sees SunLight
        </option>
        <option  value="2">
            Foosball Fanatic
        </option>
        <option  value="3">
            Basement Dweller
        </option>
    </select>
  
    @error('shark_level')
    <div  class="alert alert-danger">{{ $message }}</div>
    @enderror  
   </div> -->
        <input type="submit" class="btn btn-primary"  >Edit the Event! </input>
        </form>

</div>

@endSection
<!-- </body>
</html> -->