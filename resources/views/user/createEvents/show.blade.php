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

<!-- <div class="container">




    <div class="jumbotron text-center">
        <h3>{{ $event->title }}</h3>
        <p>
            <strong>Title : </strong> {{ $event->title }}<br>
            <strong>Date & Time : </strong> {{ $event->date_time }}<br>
            <strong>Ticket Price :</strong> {{ $event->ticket_price }}<br>
            <strong>Ticket Quantity : {{ $event->ticket_quantity }}<br>
            <!-- <strong>Header Image : {{ $event->header_image }}<br>
            <strong>Gallery Image : {{ $event->gallery_image }}<br> -->


        <!-- </p>
    </div>
    <div >
    <img src="{{asset('uploads/images/'. $event->header_image ) }}"  width="200px" height="200px" alt="Any alt text"/>
    </div>
  <br>
    <div >
    <img src="{{asset('uploads/images/'.$event->gallery_image  ) }}"  width="200px" height="200px" alt="Any alt text"/>
    </div>
 -->
<!-- 
</div>  -->

<div class="container">

<h2>Showing {{ $event->title }}</h2>
<!-- <div class="content"> -->
         <div class="row justify-content-center">
          <div class="col-md-">
            <div class="card card-user">
              <div class="image">
                <img src="{{asset('uploads/images/'. $event->header_image ) }}"   height="200px" alt="Any alt text">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{asset('uploads/images/'.$event->gallery_image  ) }}"  alt="Any alt text">
                    <h5 class="title">{{ $event->title }}</h5>
                  </a>
                
                </div>
                <p class="description text-center  text-dark ">
                Ticket Price : {{ $event->ticket_price }} <br>
              Ticket Quantity : {{ $event->ticket_quantity }}
                </p>
              </div>
              <div class="card-footer">
                <hr>

                <p class="description text-dark ">
                  Date & Time  : {{ $event->date_time }}
                  </p>
                <!-- <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
        </div>
        <!-- </div> -->
</div>

@endsection
<!-- </body>
</html> -->