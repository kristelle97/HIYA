<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Rules\CountryRule;
use App\Rules\WorkAreaRule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.form');
    }

    public function update(ProfileRequest $request)
    {
        \Auth::user()->update($request->all());

        if ($request->photo) {
            $fileName = 'uploads/avatars/' . \Auth::id() . '-' . Str::random(10) . '.' . $request->photo->getClientOriginalExtension();
            $imgData = Image::make($request->photo);

            if ($imgData->width() > $imgData->height()) {
                $imgData = $imgData->resize(null, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(300, 300)
                    ->encode();
            } else {
                $imgData = $imgData->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(300, 300)
                    ->encode();
            }

            \Storage::put('public/' . $fileName, $imgData);

            \Auth::user()->update([
                'picture_url' => 'storage/' . $fileName
            ]);
        }

        flash()->success('Profile updated.');
        return redirect()->route('profile.index');
    }
}
