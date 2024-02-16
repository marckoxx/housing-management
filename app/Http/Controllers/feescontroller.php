<?php

namespace App\Http\Controllers;

use App\Models\fees;
use Illuminate\Http\Request;

class feescontroller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $fees = fees::when($search, function ($query, $search) {
            return $query->where('paymentName', 'like', '%' . $search . '%');
        })->get();

        return inertia('admin/fees/index', [
            'fees' => $fees,
        ]);
    }

    public function create()
    {
        return inertia('admin/fees/create');
    }

    public function store(Request $request)
    {
        fees::create([
            'paymentName' => $request->paymentName,
            'description' => $request->description,
            'defAmount' => $request->defAmount,
            'isCurrent' => $request->isCurrent,
        ]);
        return redirect()->route('fees.index');
    }

    public function edit(fees $fee)
    {
        return inertia('admin/fees/edit', compact('fee'));
    }

    public function update(Request $request, fees $fee)
    {
        $fee->update([
            'paymentName' => $request->paymentName,
            'description' => $request->description,
            'defAmount' => $request->defAmount,
            'isCurrent' => $request->isCurrent,
        ]);
        return redirect()->route('fees.index');
    }

    public function destroy(fees $fee)
    {
        $fee->delete();
        return redirect()->route('fees.index');
    }
}
