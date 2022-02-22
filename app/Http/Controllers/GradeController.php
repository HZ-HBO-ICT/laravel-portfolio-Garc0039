<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grades.index', [
            'grades' => Grade::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Grade::create($this->validateForm($request));

        return redirect(route('grades.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        return view('grades.show', ['grade' => $grade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($this->validateForm($request));

        return redirect(route('grades.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect(route('grades.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateForm(Request $request): array
    {
        return $request->validate([
            'EC' => 'required|gte:0',
            'best_grade' => 'required|gte:0|lte:10',
            'passed_at' => 'required',
            'course_name' => 'required',
            'test_name' => 'required',
            'lowest_passing_grade' => 'required|gte:0|lte:10',
        ]);
    }
}
