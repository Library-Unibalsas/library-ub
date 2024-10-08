<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoanController extends Controller
{
    public function index()
    {
        return Loan::with(['user', 'book'])->get(); // Inclui relações se necessário
    }

    public function store(LoanRequest $request)
    {
        $loan = Loan::create($request->validated());
        return response()->json($loan, 201);
    }

    public function show(Loan $loan)
    {
        return $loan->load(['user', 'book']); // Inclui relações se necessário
    }

    public function update(LoanRequest $request, Loan $loan)
    {
        $loan->update($request->validated());
        return response()->json($loan, 200);
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return response()->json(null, 204);
    }
}
