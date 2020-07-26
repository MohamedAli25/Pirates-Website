<?php

namespace App\Http\Controllers;

use App\Event;
use App\TimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventId = request('event_id');
        $event = Event::findOrFail($eventId);
        $timeSlots = $event->timeSlots();
        return view('time_slot.show_all', [
            'timeSlots' => $timeSlots
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
        $event = Event::findOrFail($eventId);
        return view('time_slot.create', [
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
            'event_id' => 'required|numeric',
            'hrs_number' => 'required|numeric'
        ]);
        TimeSlot::create($validatedData);
        return redirect("/time-slot?event_id=" . request('event_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function show(TimeSlot $timeSlot)
    {
        return view('time_slot.show_one', compact('timeSlot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeSlot $timeSlot)
    {
        return view('time_slot.edit', compact('timeSlot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeSlot $timeSlot)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'hrs_number' => 'required|numeric'
        ]);
        $timeSlot->update($validatedData);
        $eventId = $timeSlot->event->id;
        return redirect("/time-slot?event_id=" . $eventId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TimeSlot  $timeSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeSlot $timeSlot)
    {
        $eventId = $timeSlot->event->id;
        $timeSlot->delete();
        return redirect("/time-slot?event_id=" . $eventId);
    }
}
