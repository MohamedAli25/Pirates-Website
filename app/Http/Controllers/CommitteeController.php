<?php

namespace App\Http\Controllers;

use App\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('viewAny');
        return view('committee.show_all', [
            'committees' => Committee::all()
        ]);
    }

    /**
     * Display a listing of the resource in detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDetailed()
    {
        // $this->authorize('viewAny');
        return view('committee.show_all_detailed', [
            'committees' => Committee::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create');
        return view('committee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('create');
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        Committee::create($validatedData);
        return redirect("/committee/show-detailed");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function show(Committee $committee)
    {
        // $this->authorize('view');
        return view('committee.show_one', compact('committee'));
    }

    /**
     * Display the specified resource in detail.
     *
     * @param  \App\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function showDetailed(Committee $committee)
    {
        // $this->authorize('view');
        return view('committee.show_one_detailed', compact('committee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function edit(Committee $committee)
    {
        // $this->authorize('update');
        return view('committee.edit', compact('committee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Committee $committee)
    {
        // $this->authorize('update');
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $committee->update($validatedData);
        return redirect("/committee/" . $committee->id . "/show-detailed");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Committee $committee)
    {
        // $this->authorize('delete');
        $committee->delete();
        return redirect("/committee/show-detailed");
    }
}
