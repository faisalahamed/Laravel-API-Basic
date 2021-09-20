<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function add(Request $request)
    {
        //validate
        $request->validate([
            "name" => 'required',
            "age" => 'required|numeric'
        ]);
        //add
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->save();
        //response
        return response()->json(['message' => 'success']);
    }
    public function getall()
    {
        $student = Student::all();
        return response()->json($student);
    }
    public function find($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->name = !($request->name)?($student->name):($request->name);
        $student->age= !($request->age)?($student->age):($request->age);
        $student->save();
        return response()->json(['message'=>'success']);
    }
    public function delete($id)
    {
        return response()->json(Student::findOrFail($id)->delete());
    }
}
