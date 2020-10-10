@extends('layouts.app')

@section('content')

<div class=" container">
<h2>All Purchased Events</h2>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
        <td>id</td>
            <td>Title</td>
            <td>Date & Time</td>
          
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>


    @foreach($events as $key => $value)
     
        <tr>
        <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->date_time }}</td>
            <td> <a class="btn btn-small  btn-danger" href="{{ route('delete',[$value->id]) }}">delete</a></td>

           
        </tr>
    @endforeach
    </tbody>
</table>

</div>


@endsection
