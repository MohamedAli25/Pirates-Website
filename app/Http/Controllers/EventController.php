<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event.show_all', [
            'events' => Event::all()
        ]);
    }

    /**
     * Display a listing of the resource in detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDetailed()
    {
        return view('event.show_all_detailed', [
            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
            'photo' => 'required'
        ]);
        $validatedData['shown'] = $request->has('shown');
        $validatedData['available'] = $request->has('available');
        $photoPath = Storage::putFile('public/event', $request->file('photo'));
        $validatedData['photo'] = str_replace('public', 'storage', $photoPath);
        Event::create($validatedData);
        return redirect("/event/show-detailed");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.show_one', compact('event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function showDetailed(Event $event)
    {
        return view('event.show_one_detailed', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $validatedData['shown'] = $request->has('shown');
        $validatedData['available'] = $request->has('available');
        if ($request->file('photo')) {
            $photoPathOld = str_replace('storage', 'public', $event->photo);
            Storage::delete($photoPathOld);
            $photoPathNew = Storage::putFile('public/event', $request->file('photo'));
            $validatedData['photo'] = str_replace('public', 'storage', $photoPathNew);
        }
        $event->update($validatedData);
        return redirect("/event/show-detailed");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $photoPath = str_replace('storage', 'public', $event->photo);
        Storage::delete($photoPath);
        $event->delete();
        return redirect("/event/show-detailed");
    }
}
