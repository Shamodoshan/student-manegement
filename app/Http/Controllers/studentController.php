<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class studentController extends Controller
{
    protected $student;

    public function __construct(){
        $this->student = new student();
    }


    public function showData(){
        $response['students'] = $this->student->all();
        return view('pages.student.home')->with($response);
    }


    public function saveData(Request $request){
        $request->validate([
            'stuname' => ['required'],
            'studob' => ['required'],
            'stuaddress' => ['required']

        ]);

        $this->student->create($request->all()); 
        return redirect()->back();

    }


    public function deleteData($stuid){
        $student =$this->student->find($stuid);
        $student->delete();
        return redirect()->back();

    }

    public function editData($stuid){
        $response['student'] = $this->student->find($stuid);
        return view('pages.student.edit')->with($response);
        

    }
    
    public function updateData(Request $request,$stuid){

        $student =$this->student->find($stuid);
        $student->update(array_merge($student->toArray(),$request->toArray()));
        return redirect('student');

    }


    

}
