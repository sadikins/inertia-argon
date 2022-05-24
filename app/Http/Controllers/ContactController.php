<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index()
     {

        $contacts = Contact::paginate(5);


        return Inertia::render('Contacts/Index', [
            'contacts' => $contacts,
        ]);
     }
}
