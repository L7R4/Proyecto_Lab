<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
//     public function index(Request $request)
// {
//     $query = $request->input('name'); 
//     $students = Student::when($query, function ($queryBuilder) use ($query) {
//         return $queryBuilder->where('name', 'LIKE', "%{$query}%"); // Filtrar estudiantes por nombre
//     })->get();

//     return view('students.index', compact('students'));
// }
    public function index(Request $request)
    {
        $nameQuery = $request->input('name');
        $courseId = $request->input('course_id'); // Obtener el ID del curso del formulario

        $students = Student::when($nameQuery, function ($queryBuilder) use ($nameQuery) {
            $queryBuilder->where('name', 'LIKE', "%{$nameQuery}%"); // Filtrar estudiantes por nombre
        })
        ->when($courseId, function ($queryBuilder) use ($courseId) {
            $queryBuilder->whereHas('courses', function ($query) use ($courseId) {
                // $query->where('courses.id', $courseId); // Filtrar por curso
            });
        })
        ->get();

        $courses = Course::all(); // Obtener todos los cursos para el filtro

        return view('students.index', compact('students', 'courses', 'courseId'));
    }

    public function create()
    {
        return view('students.create'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|unique:students,email', 
        ]);

        Student::create($validated); 
        return redirect()->route('students.index'); 
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student')); 
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|unique:students,email,' . $student->id,
        ]);

        $student->update($validated); 

        return redirect()->route('students.index'); 
    }

   
    public function destroy(Student $student)
    {
        $student->delete(); 

        return redirect()->route('students.index');
    }
}
