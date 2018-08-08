<?php

namespace App\Modules\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;

class RequestController extends Controller
{
    protected $contact;

    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;
    }

    public function postContact(Request $request)
    {
        $data = [
            'fullname' => $request->input('name'),
            'email' =>  $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        $this->contact->create($data);

        return back()->with('success','Thanks for your feedback!');
    }
}
