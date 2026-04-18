<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::with('students')->get();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'start_from' => 'required|date',
            'is_active' => 'boolean',
        ]);

        Group::create($validated);
        return redirect()->route('groups.index')->with('success', 'Группа успешно создана');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $group->load('students');
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'start_from' => 'required|date',
            'is_active' => 'boolean',
        ]);

        $group->update($validated);
        return redirect()->route('groups.index')->with('success', 'Группа успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index')->with('success', 'Группа успешно удалена');
    }
}