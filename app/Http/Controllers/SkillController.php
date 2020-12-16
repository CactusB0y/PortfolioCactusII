<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('backoffice.skill',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nom' => 'required',
            'maitrise' => 'required',
        ]);

        $store = new Skill;
        $store->nom = $request->nom;
        $store->maitrise = $request->maitrise;
        $store->save();
        return redirect()->back()->with('storeskill', 'skills ajouter!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = Skill::find($id);
        return view('backoffice.skillEdit',compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'maitrise' => 'required|max:100',
        ]);

        $update = Skill::find($id);
        $update->nom = $request->nom;
        $update->maitrise = $request->maitrise;
        $update->save();
        return redirect('/skill')->with('statusskill', 'skills updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Skill::find($id);
        $delete->delete();
        return redirect()->back()->with('deleteskill', 'skills deleted!');
    }
}
