<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\Contact\MailJob;
use Exception;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(ContactRequest $request){
        try {
            $contactData = [
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->msg,
            ];
            contact::create($contactData);
            dispatch(new MailJob($contactData))->delay(10);
            return response()->json(['msg' => 'OK',"succes" => true], 200);

        } catch (Exception $e) {
            return response()->json(['status'=> 'ERROR','success' => false ,'msg' => $e->getMessage()], 500);
        }
    }
}

