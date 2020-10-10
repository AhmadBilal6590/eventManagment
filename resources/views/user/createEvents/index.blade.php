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

<div class=" container">
<h2>All the Events</h2>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Title</td>
            <td>Date & Time</td>
            <td>Ticket Price</td>
            <td>Ticket Quantity</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>


    @foreach($event as $key => $value)
     
        <tr>
            <td>{{ $value->title }}</td>
            <td>{{ $value->date_time }}</td>
            <td>{{ $value->ticket_price }}</td>
            <td>{{ $value->ticket_quantity }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
              
                <!-- <a class="btn btn-small btn-warning" href="{{ URL::to('event/' . $value->id) }}">S</a> -->

              

                <form action="{{ URL::to('event/' . $value->id) }}"  method="post"  class="pull-right"  >
                     @csrf
                     <input type="hidden" name="_method"  value="DELETE" />
                    <button class="btn btn-small btn-warning" >Delete this Event</button>

                </form>
                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('event/' . $value->id) }}">Show this Event</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('event/' . $value->id . '/edit') }}">Edit this Event</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>


@endsection
<!-- </body>
</html> -->

