<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');

        $users = User::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })->get();

        return inertia('admin/users/index',[
            'users' => $users,
        ]);
    }

    public function create()
    {
        return inertia('admin/users/create');
    }

    public function store(Request $request)
    {
        User::create([
            'paymentName' => $request->paymentName,
            'description' => $request->description,
            'defAmount' => $request->defAmount,
            'isCurrent' => $request->isCurrent,
        ]);
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return inertia('admin/users/edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'paymentName' => $request->paymentName,
            'description' => $request->description,
            'defAmount' => $request->defAmount,
            'isCurrent' => $request->isCurrent,
        ]);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
