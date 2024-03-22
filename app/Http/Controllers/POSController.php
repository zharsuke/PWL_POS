<?php

namespace App\Http\Controllers;

use App\Models\m_user;
use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // The eloquent function displays data using pagination
        $useri = m_user::with('level')->get();
        return view('m_user.index', compact('useri'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('m_user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Perform data validation
        $request->validate([
            'level_id' => 'required',
            'user_id' => 'max 20',
            'username' => 'required',
            'nama' => 'required',
        ]);
        // Eloquent function to add data
        m_user::create($request->all());
        return redirect()->route('m_user.index')->with('success', 'user added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, m_user $useri)
    {
        $useri = m_user::findOrFail($id);
        return view('m_user.show', compact('useri'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $useri = m_user::find($id);
        return view('m_user.edit', compact('useri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
        ]);
        // eloquent function to update our input data
        m_user::find($id)->update($request->all());
        // If the data is successfully updated, it will return to the main page
        return redirect()->route('m_user.index')
            ->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $useri = m_user::findOrFail($id)->delete();
        return \redirect()->route('m_user.index')
            ->with('success', 'data deleted successfully');
    }
}
