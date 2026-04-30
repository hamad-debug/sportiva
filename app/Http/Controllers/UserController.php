<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show all users
     */
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update user
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Prevent modifying admin user
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard')
                ->with('error', 'Admin user cannot be modified.');
        }

        // ✅ FIX: removed role validation
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // ✅ FIX: only update allowed fields
        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.dashboard')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Delete user
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // HARD protection for admin
        if ($user->role === 'admin') {
            return back()->with('error', 'Admin user cannot be deleted.');
        }

        $user->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'User deleted successfully.');
    }
}