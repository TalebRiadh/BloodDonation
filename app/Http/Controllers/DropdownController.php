<?php

namespace App\Http\Controllers;

use App\Commune;
use Illuminate\Http\Request;

class DropdownController extends Controller
{
     public function getCommuneList(Request $request){
        $communes = Commune::all()->where("wilaya_id", $request->wilaya_id)
            ->pluck("name","id");
        return response()->json($communes);
     }


}
