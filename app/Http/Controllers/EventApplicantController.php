<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventApplicant;
use App\User;
use Illuminate\Http\Request;

class EventApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event_applicant.show_all', [
            'eventApplicants' => EventApplicant::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User(); // To be changed with the authenticated user
        $eventId = request('event_id');
        $event = Event::find($eventId);
        return view('event_applicant.create', [
            'user' => $user,
            'event' => $event,
            'timeSlots' => $event->timeSlots(),
            'preferences' => $event->preferences()
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
            'user_id' => 'required|numeric',
            'event_id' => 'required|numeric',
            'time_slot_id' => 'required|numeric',
            'first_preference_id' => 'required|numeric',
            'second_preference_id' => 'required|numeric',
        ]);
        EventApplicant::create($validatedData);
        return redirect("/event");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventApplicant  $eventApplicant
     * @return \Illuminate\Http\Response
     */
    public function show(EventApplicant $eventApplicant)
    {
        return view('event_applicant.show_one', compact('eventApplicant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventApplicant  $eventApplicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, EventApplicant $eventApplicant)
    {
        $user = new User(); // To be changed with the authenticated user
        $eventId = request('event_id');
        $event = Event::find($eventId);
        return view('committee.edit', [
            'eventApplicant' => $eventApplicant,
            'user' => $user,
            'event' => $event,
            'timeSlots' => $event->timeSlots(),
            'preferences' => $event->preferences()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventApplicant  $eventApplicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventApplicant $eventApplicant)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'event_id' => 'required|numeric',
            'time_slot_id' => 'required|numeric',
            'first_preference_id' => 'required|numeric',
            'second_preference_id' => 'required|numeric',
        ]);
        $eventApplicant->update($validatedData);
        return redirect("/event");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventApplicant  $eventApplicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventApplicant $eventApplicant)
    {
        $eventApplicant->delete();
        return redirect("/event");
    }
}
