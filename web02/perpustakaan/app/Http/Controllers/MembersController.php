<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Members::all();
        return view('admin.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required',
        ]);
        Members::create($validated);
        return redirect('/dashboard/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Members::find($id);
        return view('admin.member.show', ['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Members::find($id);
        return view('admin.member.edit', ['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Members::find($id);
        // validate
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required',
        ]);
        $member->update($validated);
        return redirect('/dashboard/member')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Members::destroy($id);
        return redirect('/dashboard/member');
    }
}
