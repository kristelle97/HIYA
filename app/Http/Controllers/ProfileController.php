<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Rules\CountryRule;
use App\Rules\WorkAreaRule;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(  )
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('profile.form');
    }

    public function update(ProfileRequest $request) {
        \Auth::user()->update($request->all());

        flash()->success('Profile updated.');
        return redirect()->route('home');
    }
}
