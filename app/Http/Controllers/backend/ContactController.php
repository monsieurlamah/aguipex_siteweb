<?php

namespace App\Http\Controllers\backend;

use Exception;
// use App\Mail\SendMaill;
use App\Mail\SendMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeContactRequest;

class ContactController extends Controller
{
    public function store(Contact $contact, storeContactRequest $request)
    {
        // dd($request->email());
        try {
            $data = Contact::create($request->all());
            if ($data) {
                $email = 'michel.camara@aguipex.gov.gn';
                $details = [
                    'title' => 'MAIL SITE WEB AGUIPEX',
                    'body' => $request->message .' '. $request->email,
                ];
                
                \Mail::to($email)->send(new SendMail($details));
                return redirect()->back()->with('success_msg', 'Votre message a été envoyé avec succès. Merci!');
            }
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Erreur lors de l'enregistrement du contact");
        }
    }
}
