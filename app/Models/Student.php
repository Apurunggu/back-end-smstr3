<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Tambahkan ini

class Student extends Model
{
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];

    public static function getAllStudents()
    {
        // Menggunakan DB untuk menjalankan query langsung
        $students = DB::select('select * from students');
        return $students;
    }
}
