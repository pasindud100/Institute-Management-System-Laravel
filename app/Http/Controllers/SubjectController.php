<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view("subjects.index", compact("subjects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("subjects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sub_name' =>'required|string|max:255',
            'credit_hours'=> 'required|string|max:255',
        ]);

        Subject::create($validated);

        return redirect()->route('subjects.index')
            ->with('success', 'Subject created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $validated = $request->validate([
            'sub_name' =>'required|string|max:255',
            'credit_hours'=> 'required|string|max:255',
        ]);

        
        $subject->update($validated);   
        return redirect()->route('subjects.index')->with('success','Subjects updated successfully');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index')->with('success','Subject deleted successfully');
    }
}
