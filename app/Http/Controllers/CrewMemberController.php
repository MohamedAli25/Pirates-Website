<?php

namespace App\Http\Controllers;

use App\Committee;
use App\CrewMember;
use App\Position;
use App\Rules\UserEmailExists;
use App\User;
use Illuminate\Http\Request;

class CrewMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crew_member.show_all', [
            'crewMembers' => CrewMember::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crew_member.create', [
            'committees' => Committee::all(),
            'positions' => Position::all()
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
        $request->validate([
            'email' => ['required', 'email', new UserEmailExists],
            'committee_id' => 'required|numeric',
            'position_id' => 'required|numeric',
        ]);
        $user = User::where('email', request('email'))->first();
        $validatedData['email_id'] = $user->id;
        $validatedData['committee_id'] = request('committee_id');
        $validatedData['position_id'] = request('position_id');
        CrewMember::create($validatedData);
        return redirect("/crew-member");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CrewMember  $crewMember
     * @return \Illuminate\Http\Response
     */
    public function show(CrewMember $crewMember)
    {
        return view('crew_member.show_one', compact('crewMember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CrewMember  $crewMember
     * @return \Illuminate\Http\Response
     */
    public function edit(CrewMember $crewMember)
    {
        return view('crew_member.edit', [
            'crewMember' => $crewMember,
            'committees' => Committee::all(),
            'positions' => Position::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CrewMember  $crewMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrewMember $crewMember)
    {
        $validatedData = $request->validate([
            'committee_id' => 'required|numeric',
            'position_id' => 'required|numeric'
        ]);
        $crewMember->update($validatedData);
        return redirect("/crew-member/" . $crewMember->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CrewMember  $crewMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrewMember $crewMember)
    {
        $crewMember->delete();
        return redirect("/crew-member");
    }
}
