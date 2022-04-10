<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musician;
use App\Models\Profile;

class RelationshipController extends Controller
{
    public function relation($id){

        $musician = Musician::find($id);

        return view('has_one.relation')->with('musician', $musician);

    }


    // accessing musicians from profiles (reverse)
    public function relationReverse($id){

        $profile = Profile::find($id);

        return view('has_one.relation_reverse')->with('profile', $profile);

    }
}
