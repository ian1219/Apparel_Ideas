<?php

namespace App\Http\Controllers;

class TermsController extends Controller
{
    public function policies()
    {
        return view('policies.terms&policy');
    }
    public function terms()
    {
        return view('policies.terms');
    }
    public function privacy()
    {
        return view('policies.privacy');
    }
    public function community()
    {
        return view('policies.community');
    }
}
