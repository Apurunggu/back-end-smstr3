<?php

namespace App\Http\Controllers;

use App\Models\Student;  
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function getUser()
    {
        $user = [
            'nama' => 'Muhammad Nizar Al-Faiq',
            'jurusan' => 'Teknik Informatika' 
        ];

        return response()->json($user, 200);
    }

    // public function index()
    // {
    //     $students = Student::all();  
    //     return view('students.index', compact('students'));

    // }
    public function index()
    {
        $students = Student::all();
    
        $data = [
            'message' => 'Get all students',
            'data' => $students
        ];
    
        return response()->json($data);  
    }
    

    public function store(Request $request) {
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
    
        $student = Student::create($input);
    
        $data = [
            'message' => 'Student is created successfully',
            'data' => $student,
        ];
    
        return response()->json($data, 201);
    }
    

    public function update(Request $request, $id)
{
   
    $request->validate([
        'nama' => 'sometimes|required|string|max:255',
        'nim' => 'sometimes|required|string|max:20|unique:students,nim,'.$id, 
        'email' => 'sometimes|required|string|email|max:255|unique:students,email,'.$id,
        'jurusan' => 'sometimes|required|string|max:255',
    ]);

    
    $student = Student::findOrFail($id); 

    
    $student->update($request->all());

    
    $data = [
        'message' => 'Student updated successfully',
        'data' => $student,
    ];

    return response()->json($data, 200);
}

public function destroy($id)
{
   
    $student = Student::findOrFail($id); 


    $student->delete();

   
    $data = [
        'message' => 'Student deleted successfully',
    ];

    return response()->json($data, 200);
}

}