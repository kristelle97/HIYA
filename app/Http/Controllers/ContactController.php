<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(  )
    {
        $this->middleware('auth');
    }

    public function store( StoreContactRequest $request )
    {
        $data = $request->only(['content','receiver_id']);
        $data['sender_id'] = \Auth::id();

        Contact::create($data);
        flash()->success('Your message was sent.');

        return redirect()->back();
    }
}
