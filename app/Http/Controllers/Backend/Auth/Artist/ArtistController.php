<?php

namespace App\Http\Controllers\Backend\Auth\Artist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Auth\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('backend.auth.artist.index',compact('artists'));
    }

    public function create()
    {
        return view('backend.auth.artist.create');
    }

    public function store(Request $request){
         $formInput = new Artist;


        $formInput = $request->only(
            'fullname',
            'email',
            'contact',
            'address',
            'message',
            'image'
        );

        Artist::create($formInput);
        // $formInput->save();
        return redirect()->route('admin.artist.index')->withFlashSuccess(__('alerts.backend.artist.created'));
    }


    public function show($id){
        $artistInfo = Artist::find($id);
        return view('backend.auth.artist.show',compact('artistInfo'));

    }

    public function edit($id){
        $artistInfo = Artist::find($id);
        return view('backend.auth.artist.edit',compact('artistInfo'))->withFlashSuccess(__('alerts.backend.artist.updated'));
    }

    public function update($id, Request $request){


        $formInput = $request->only(
            'fullname',
            'email',
            'contact',
            'address',
            'message'
        );

        $artist = Artist::findorfail($id);
        $updateNow = $artist->update($formInput);


        return back();
    }

    public function destroy($id){
        Artist::where('id',$id)->delete();
        return redirect()->route('admin.artist.index')->withFlashSuccess(__('alerts.backend.artist.deleted'));
    }
}
