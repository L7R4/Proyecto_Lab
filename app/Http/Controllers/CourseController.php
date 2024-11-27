<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\Commission;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::with('commissions', 'subject'); // Incluimos las relaciones necesarias

        // Filtrar por materia si se proporciona
        if ($request->has('subject_id') && $request->subject_id != '') {
            $query->where('subject_id', $request->subject_id);
        }

        // Filtrar por comisiones si se proporciona
        if ($request->has('commission_id') && $request->commission_id != '') {
            $query->whereHas('commissions', function ($q) use ($request) {
                $q->where('id', $request->commission_id); // Filtrar cursos que tienen esta comisión
            });
        }

        $courses = $query->get();
        $subjects = Subject::all();
        $commissions = Commission::all(); // Todas las comisiones disponibles para el filtro

        return view('courses.index', compact('courses', 'subjects', 'commissions'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('courses.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        Course::create($request->only('name', 'subject_id'));
        return redirect()->route('courses.index');
    }

    public function edit(Course $course)
    {
        $subjects = Subject::all();
        return view('courses.edit', compact('course', 'subjects'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $course->update($request->only('name', 'subject_id'));
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
