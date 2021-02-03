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
            $fileName = 'uploads/avatars/' . \Auth::id() . '.' . $request->photo->getClientOriginalExtension();
            $imgData = Image::make($request->photo)
                 ->resize(300,300)
                 ->encode();

            \Storage::put($fileName, 'public/'.$imgData);

            \Auth::user()->update([
                'picture_url' => $fileName
            ]);
        }

        flash()->success('Profile updated.');
        return redirect()->route('home');
    }
}
