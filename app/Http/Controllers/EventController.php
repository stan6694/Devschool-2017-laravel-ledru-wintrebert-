<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lister les events
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //afficher les formulaire de creation d'event
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD


        $post = new Post;
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;
        $post->fill($input)->save();


=======
        //enregistre le formulaire de creation d'events

        $event = new Event;
        $input = $request->input();
        $input['organisateur'] = Auth::user()->id;
        $event->fill($input)->save();


>>>>>>> dc0b2af2ccb34a4d59ce78de0a5bb25ac8189058
        return redirect()
            ->route('posts.index')
            ->with('success', 'l\'article a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        //afficher un evenement
        return view('events.show', compact('event'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //affiche le formulaire d'edition de l'evenement
        $event = Event::findOrFail($id);

        return view('events.edit', compact('events'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //enrgistre le formulaire d'edition

        $event = Event::findOrFail($id);
        $input = $request->input();
        $event->fill($input)->save();

        return redirect()->route('event.show', $id)
            ->with('success', 'l\'evenement a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //supprime l'evenement dans la db
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()
            ->route('event.index')
            ->with('success', 'l\'evenement a bien été supprimé');
    }
}
