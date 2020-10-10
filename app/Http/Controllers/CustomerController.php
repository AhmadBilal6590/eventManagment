<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Ticket;
use DB;


class CustomerController extends Controller
{
   

    public function index()
    {
        return view('user.customer');
    }


    public function eventsList()
    {
       $events = Event::all();
       $user = Auth::user();

        // load the view and pass the sharks
        // return View::make('user.customerViewEvents')
        //     ->with('data', $data);
            return view('user.customerViewEvents', compact('events', 'user'));

    }

 
    public function store($event_id,$user_id)
    {      

           $event = Event::find($event_id);
           if(!$event)
           {
            $ticket = new ticket ;
            $ticket->user_id = $user_id;
            $ticket->event_id = $event_id;
            $ticket->save();
            Session::flash('message', 'Successfully Purchased!');
            return redirect('/customer/eventsList');
           }
           else{

            Session::flash('message', 'Already Purchased!');
            return redirect('/customer/eventsList');

           }
    
    }

    public function   purchaseList()
    {

        $events =DB::table('events')
                ->join('tickets','events.id', '=', 'tickets.event_id')
                ->select('events.title','events.date_time','tickets.id')
                ->get();
                return View::make('user.purchaseList')
                ->with('events', $events);

      
    }
    
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the event!');
        return Redirect::to('customer');
        //
    }

    


}
