<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $events = Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);

    }


    public function create(){

        return view('events.create');

    }

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime('now')).".".$extension;

            $requestImage->move(public_path('dist/img/events'), $imageName);

            $event->image = $imageName;
        }
        $user = auth()->user();
        $event->user_id =  $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento cadastrado com sucesso!');

    }


    public function show($id){

        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);

    }

    public function dashboard(){

        $user = auth()->user();

        $events = $user->events;

        $eventAsParticipant = $user->eventsAsParticipant;

        return view('events.dashboard', ['events' => $events, 'eventAsParticipant' => $eventAsParticipant]);

    }

    public function joinEvent($id){

        $user = auth()->user();

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua Presença foi confirmada no evento: '.$event->title);

    }

    public function edit($id){

        $event = Event::findOrFail($id);

         return view('events.edit', ['event' => $event]);


    }


    public function update(Request $request){

        $event = Event::findOrFail($request->id);
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            unlink(public_path('dist/img/events/' . $event->image));
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('dist/img/events'), $imageName);
            $data['image'] = $imageName;
        }
        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento Excluido com sucesso!');

    }

    public function destroy($id){

        $event = Event::findOrfail($id);
        unlink(public_path('dist/img/events/' . $event->image));
        $event->delete();

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');
    }


}
