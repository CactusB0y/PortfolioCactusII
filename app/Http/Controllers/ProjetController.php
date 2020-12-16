<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Projet;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        $tags = Tag::all();
        return view('backoffice.projet',compact('projets','tags'));
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
        $images = new Image;
        $images->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img','public');
        $images->save();
        
        $projets = new Projet;
        $projets->nom = $request->nom;
        $projets->date = $request->date;
        $projets->link = $request->link;
        $projets->tag_id = $request->tag_id;
        $projets->image_id = $images->id;
        $projets->save();
        return redirect()->back()->with('storeprojet', 'projet added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projets = Projet::find($id);
        $tags = Tag::all();
        return view('backoffice.projetEdit',compact('projets','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $images = Image::find($id);
        Storage::disk('public')->delete('img/'.$images->src);
        $images->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img','public');
        $images->save();
        
        $projets = Projet::find($id);
        $projets->nom = $request->nom;
        $projets->date = $request->date;
        $projets->link = $request->link;
        $projets->tag_id = $request->tag_id;
        $projets->image_id = $images->id;
        $projets->save();
        return redirect('/projet')->with('statusprojet', 'projet updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Image::find($id);
        Storage::disk('public')->delete('img/'.$img->img);
        $delete = Projet::find($id);
        $delete->images->delete();
        return redirect()->back()->with('deleteprojet', 'projet deleted!');
    }
}
