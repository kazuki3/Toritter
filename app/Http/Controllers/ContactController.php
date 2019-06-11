<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\Http\Requests\CreateContact;

class ContactController extends Controller
{
    public function create(CreateContact $request) {
        $contact = new Contact();
        $contact->Name = $request->Name;
        $contact->Phonenumber = $request->Phonenumber;
        $contact->Email = $request->Email;
        $contact->Requirement = $request->Requirement;
        $contact->WayToContact = $request->WayToContact;
        $TimeZone = $request->TimeZone;
        $TimeZone = implode(',', $TimeZone);
        $contact->TimeZone = $TimeZone;

        if (is_null($request->Other)) {
            $contact->Other = "特になし";
        } else {
            $contact->Other = $request->Other;
        }

        $contact->user_id = Auth::user()->id;
        $contact->save();

        return redirect('/');
    }
}
