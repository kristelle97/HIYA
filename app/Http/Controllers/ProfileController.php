<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Rules\CountryRule;
use App\Rules\WorkAreaRule;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        if ($request->photo) {
            $fileName = public_path('/uploads/avatars/') . \Auth::id() . '.' . $request->photo->getClientOriginalExtension();
            Image::make($request->photo)
                 ->resize(300,300)
                 ->save( $fileName );

            \Auth::user()->update([
                'picture_url' =>'/uploads/avatars/' . \Auth::id() . '.' . $request->photo->getClientOriginalExtension()
            ]);
        }

        flash()->success('Profile updated.');
        return redirect()->route('home');
    }
}
