<?php

namespace App\Http\Controllers;

use App\Models\Student;  
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();  
        return view('students.index', compact('students'));

    }

    public function store(Request $request) 
    {
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:students,nim',
            'email' => 'required|string|email|max:255|unique:students,email',
            'jurusan' => 'required|string|max:255',
        ]);

       
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,  
        ];

        $student = Student::create($input);

        $data = [
            'message' => 'Student created successfully',
            'data' => $student,
        ];

        return response()->json($data, 201);
    }
}
