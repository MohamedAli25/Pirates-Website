<?php

namespace App\Http\Controllers;

use App\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seminar.show_all', [
            'seminars' => Seminar::all()
        ]);
    }

    /**
     * Display a listing of the resource in detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDetailed()
    {
        return view('seminar.show_all_detailed', [
            'seminars' => Seminar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seminar.create');
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
            'description' => 'required'
        ]);
        Seminar::create($validatedData);
        return redirect("/seminar/show-detailed");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar)
    {
        return view('seminar.show_one', compact('seminar'));
    }

    /**
     * Display the specified resource in detail.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function showDetailed(Seminar $seminar)
    {
        return view('seminar.show_one_detailed', compact('seminar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminar $seminar)
    {
        return view('seminar.edit', compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminar $seminar)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $seminar->update($validatedData);
        return redirect("/seminar/show-detailed");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar)
    {
        $seminar->delete();
        return redirect("/seminar/show-detailed");
    }
}
