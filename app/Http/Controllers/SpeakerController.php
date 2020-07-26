<?php

namespace App\Http\Controllers;

use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('speaker.show_all', [
            'speakers' => Speaker::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('speaker.create');
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
        $photoPath = Storage::putFile('public/speaker', $request->file('photo'));
        $validatedData['photo'] = str_replace('public', 'storage', $photoPath);
        Speaker::create($validatedData);
        return redirect("/speaker");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function show(Speaker $speaker)
    {
        return view('speaker.show_one', compact('speaker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Speaker $speaker)
    {
        return view('speaker.edit', compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speaker)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        if ($request->file('photo')) {
            $photoPathOld = str_replace('storage', 'public', $speaker->photo);
            Storage::delete($photoPathOld);
            $photoPathNew = Storage::putFile('public/speaker', $request->file('photo'));
            $validatedData['photo'] = str_replace('public', 'storage', $photoPathNew);
        }
        $speaker->update($validatedData);
        return redirect("/speaker");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speaker $speaker)
    {
        $photoPath = str_replace('storage', 'public', $speaker->photo);
        Storage::delete($photoPath);
        $speaker->delete();
        return redirect("/speaker");
    }
}
