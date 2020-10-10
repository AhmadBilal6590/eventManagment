<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Event::all();

        // load the view and pass the sharks
        return View::make('user.createEvents.index')
            ->with('event', $events);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('user.createEvents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|min:4|max:255|',
            'date_time'      => 'required|',
            'ticket_price' => 'required',
            'ticket_quantity' => 'required',
            'header_image' => 'required',
            'gallery_image' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect('event/create')
                        ->withErrors($validator);
                       
        }
    
         else {
          
            $event = new event ;
            // dd($request->input('header_image'));
            $event->title = $request->input('title');
            $event->date_time = $request->input('date_time');
            $event->ticket_price = $request->input('ticket_price');
            $event->ticket_quantity = $request->input('ticket_quantity');
            // $event->header_image = $request->file('header_image');
            if ($request->hasfile('header_image')) {
                $file = $request->file('header_image');
                $extension = $file->getClientOriginalExtension(); 
                $filename = time() . '.' . $extension;
                $file->move('uploads/images/', $filename);
    
                $event->header_image = $filename;

            } else {
                return $request;
                $event->header_image  = '';
            }
            if ($request->hasfile('gallery_image')) {
                $file = $request->file('gallery_image');
                $extension = $file->getClientOriginalExtension(); 
                $filename = time() . '.' . $extension;
                $file->move('uploads/images/', $filename);
    
                $event->gallery_image = $filename;

            } else {

                return $request;
                $event->gallery_image = '';
            }
            // $event->gallery_image= $request->file('gallery_image');
            $event->save();
            Session::flash('message', 'Successfully created event!');
            return Redirect::to('event');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        // show the view and pass the shark to it
        return View::make('user.createEvents.show')
            ->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $event = Event::find($id);

        // show the edit form and pass the shark
        return View::make('user.createEvents.edit')
            ->with('event', $event);
    }
    //resume

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $validator=Validator::make($request->all(),[
            'title'       => 'required|min:4|max:255|',
            'date_time'      => 'required|',
            'ticket_price' => 'required|numeric',
            'ticket_quantity' => 'required|numeric',
            'header_image' => 'required',
            'gallery_image' => 'required',



        ]);

        // process the login
        if ($validator->fails()) {
            return redirect('event/' . $id . '/edit')
                ->withErrors($validator);
               
        } else {
           
            $event = new event ;
            $event->title = $request->input('title');
            $event->date_time = $request->input('date_time');
            $event->ticket_price = $request->input('ticket_price');
            $event->ticket_quantity = $request->input('ticket_quantity');

            if ($request->hasfile('header_image')) {
                $file = $request->file('header_image');
                $extension = $file->getClientOriginalExtension(); 
                $filename = time() . '.' . $extension;
                // $file->move('uploads/images/', $filename);
    
                $event->header_image = $filename;

            } else {
                return $request;
                $event->header_image  = '';
            }

            if ($request->hasfile('gallery_image')) {
                $file = $request->file('gallery_image');
                $extension = $file->getClientOriginalExtension(); 
                $filename = time() . '.' . $extension;
                // $file->move('uploads/images/', $filename);
    
                $event->gallery_image = $filename;

            } else {

                return $request;
                $event->gallery_image = '';
            }
            
            $event->save();
           
            // redirect
            Session::flash('message', 'Successfully updated event!');
            return Redirect::to('event');
        //
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the event!');
        return Redirect::to('event');
        //
    }
}
