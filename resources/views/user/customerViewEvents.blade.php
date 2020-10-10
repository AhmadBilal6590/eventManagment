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
          
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>


    @foreach($events as $key => $value)
     
        <tr>
            <td>{{ $value->title }}</td>
            <td>{{ $value->date_time }}</td>
            <td>{{ $value->ticket_price }}</td>
  
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
              
                <!-- <a class="btn btn-small btn-warning" href="{{ URL::to('event/' . $value->id) }}">S</a> -->

              

                <!-- <form action="{{ URL::to('event/' . $value->id) }}"  method="post"  class="pull-right"  >
                     @csrf
                     <input type="hidden" name="_method"  value="DELETE" />
                    <button class="btn btn-small btn-warning" >Delete this Event</button>

                </form> -->
                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="{{ route('store',[$value->id,$user->id]) }}">buy</a>
                <!-- ('sig.edit',[$value->id,$value->ticketid]) -->
                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <!-- <a class="btn btn-small btn-info" href="{{ URL::to('event/' . $value->id . '/edit') }}">Edit this Event</a> -->

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>


@endsection
