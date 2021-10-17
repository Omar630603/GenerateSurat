<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;
use PDF;

class SuratController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'Title' => 'required',
            'ToWhom' => 'required',
            'Body' => 'required',
        ]);
        $letter = new Letter;
        $letter->title  = $request->Title;
        $letter->toWhom  = $request->ToWhom;
        $letter->body  = $request->Body;

        $letter->save();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }
    public function previewLetter(Request $request)
    {
        $letter = Letter::where('id', $request->id)->first();
        return view('letterTemplate', ['letter' => $letter]);
    }
    public function delete(Request $request)
    {
        $letter = Letter::where('id', $request->id)->first();
        $letter->delete();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data has been deleted successfully'
            ]
        );
    }
    public function printPDF($id)
    {
        $letter = Letter::where('id', $id)->first();
        $pdf = PDF::loadview('letterPDF', ['letter' => $letter]);
        return $pdf->stream();
    }
    public function edit($id)
    {
        $letter = Letter::where('id', $id)->first();
        return view('editLetter', ['letter' => $letter]);
    }
    public function edting(Request $request)
    {
        $letter = Letter::where('id', $request->id)->first();
        $letter->title  = $request->Title;
        $letter->toWhom  = $request->ToWhom;
        $letter->body  = $request->Body;

        $letter->save();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data edited successfully'
            ]
        );
    }
}
