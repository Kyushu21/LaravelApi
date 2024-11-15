<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        if ($students->isEmpty()) {
            return response()->json(['message' => 'No students found']);
        }
        return response()->json($students);
    }

    // Otros métodos...
}