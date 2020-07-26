<?php

namespace App\Http\Controllers;

use App\Event;
use App\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventId = request('event_id');
        $event = Event::find($eventId);
        return view('preference.show_all', [
            'preferences' => $event->preferences
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventId = request('event_id');
        $event = Event::find($eventId);
        return view('preference.create', [
            'event' => $event
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'event_id' => 'required|numeric',
        ]);
        $validatedData['shown'] = $request->has('shown');
        $preference = Preference::create($validatedData);
        $eventId = $preference->event->id;
        return redirect("/preference?event_id=" . $eventId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function show(Preference $preference)
    {
        return view('preference.show_one', compact('preference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function edit(Preference $preference)
    {
        return view('preference.edit', [
            'preference' => $preference,
            'event' => $preference->event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preference $preference)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'event_id' => 'required|numeric',
        ]);
        $validatedData['shown'] = $request->has('shown');
        $preference->update($validatedData);
        return redirect("/preference/" . $preference->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        $eventId = $preference->event->id;
        $preference->delete();
        return redirect("/preference?event_id=" . $eventId);
    }
}
