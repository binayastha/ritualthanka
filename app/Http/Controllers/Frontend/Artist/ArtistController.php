<?php

namespace App\Http\Controllers\Frontend\Artist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Auth\Artist;

class ArtistController extends Controller
{
    //
    function index(){
        $artists = Artist::all();
        return view('frontend.artist.index',compact('artists'));
    }
    public function show($id){
        $artistInfo = Artist::find($id);
        return view('frontend.artist.show',compact('artistInfo'));
    }

}
