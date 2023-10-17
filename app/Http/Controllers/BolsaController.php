<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BolsaRequest;
use App\Jobs\BolsaJob;
use App\Models\bolsa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BolsaController extends Controller
{
    public function send(BolsaRequest $request){
        try {
            $filename = time()."-".$request->name.".".$request->file->getClientOriginalExtension();
            $bolsaData = [
                'name' => $request->name,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->msg,
                'file' => $filename,
            ];
            bolsa::create($bolsaData);

            Storage::disk('public_bolsa')->put($filename, file_get_contents($request->file));
            dispatch(new BolsaJob($bolsaData))->delay(10);
            return response()->json(['msg' => 'OK',"succes" => true], 200);

        } catch (Exception $e) {
            return response()->json(['status'=> 'ERROR','success' => false ,'msg' => $e->getMessage()], 500);
        }
    }
}
