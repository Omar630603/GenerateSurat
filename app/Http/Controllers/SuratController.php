<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function store(Request $request){
        $letter = new Letter;
        $letter->title  = $request->Title;
        $letter->toWhom  = $request->ToWhom;
        $letter->body  = $request->Body;

        $saved = $letter->save();

        if(!$saved){
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data is not vaild or empty'
                ]
            );
        }else{   
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data inserted successfully'
                ]
            );
        }
    }
}
