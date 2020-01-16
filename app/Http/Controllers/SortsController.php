<?php

namespace App\Http\Controllers;

use App\Sort;
use Illuminate\Http\Request;

class SortsController extends Controller
{

    public function getsorts(Request $request){

        $sorts = Sort::all()->toArray();

        return response()->json($sorts);
    }



}
