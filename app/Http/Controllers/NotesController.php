<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Module;

class NotesController extends Controller
{
    public function calculate (Request $request){
        $moduleid=$request->input('module_id');
        $exam1 = $request->input('exam1');
        $exam2 = $request->input('exam2');
        $exam3 = $request->input('exam3');
        $average = ($exam1 + $exam2 + $exam3) / 3;

        $examNote = Note::create([
            'module_id' => $moduleid,
            'exam1' => $exam1,
            'exam2' => $exam2,
            'exam3' => $exam3,
            'average' => $average,
        ]);
        return redirect("/Notes")->with('success', 'Exam notes calculated and stored successfully!');
    }

    // public function index() {
    //     $moduleid=Module::all();
    //     $exam1=Note::all();
    //     $exam2=Note::all();
    //     $exam3=Note::all();
    //     $exam4=Note::all();
    //     $average = ($exam1 + $exam2 + $exam3) / 3;
    //     return view("/Notes",compact('average','moduleid','exam1','exam2','exam3',));
    // }
}
