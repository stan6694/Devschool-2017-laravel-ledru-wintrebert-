<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(10);

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
        //enregistre le formulaire de creation d'events
        $this->validate($request,
            [
                'nom' => 'required|min:6',
                'description' => 'required|min:20',
                'date de debut' => 'required|min:6',
                'date de fin' => 'required|min:6',
                'lieu' => 'required|min:6',
                'tarif' => 'required|min:6'
            ],
            [
                'nom.required' => 'nom requis',
                'nom.min' => 'le titre doit faire au moins 6 caracteres',
                'description.required' => 'description requise',
                'description.min' => 'la description doit faire au moins 20 caracteres',
                'date de debut.required' => 'date de debut requise',
                'date de debut.min' => 'la date de debut doit faire au moins 6 caracteres',
                'lieu.required' => 'lieu requise',
                'tarif.required' => 'tarif requis',
                'tarif.min' => 'le tarif doit faire au moins 6 caracteres'

            ]);

        $event = new Event;
        $input = $request->input();
        $input['organisateur'] = Auth::user()->id;
        $event->fill($input)->save();



        return redirect()
            ->route('event.index')
            ->with('success', 'l\'evenement a bien été ajouté');
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
