<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReferenceController extends Controller
{
    public function reference(){
        return view('frontend.references.references');
    }

     public function references_fright(){
        return view('frontend.references.references_fright');
    }

     public function references_imo(){
        return view('frontend.references.references_imo');
    }

     public function references_quality(){
        return view('frontend.references.references_quality');
    }

     public function references_services(){
        return view('frontend.references.references_services');
    }
}
