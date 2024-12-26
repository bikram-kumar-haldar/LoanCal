@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-50">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Calculate Your EMI</h1>

        <!-- EMI Calculation Form -->
        <form action="{{ route('loan.calculate.emi') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="loan_amount" class="block text-sm font-medium text-gray-800 mb-2">Loan Amount</label>
                <input type="number" id="loan_amount" name="loan_amount" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
                <label for="interest_rate" class="block text-sm font-medium text-gray-800 mb-2">Interest Rate (%)</label>
                <input type="number" id="interest_rate" name="interest_rate" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
                <label for="loan_tenure" class="block text-sm font-medium text-gray-800 mb-2">Loan Tenure (Years)</label>
                <input type="number" id="loan_tenure" name="loan_tenure" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-green-500 focus:border-green-500" required>
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition duration-300">
                Calculate EMI
            </button>
        </form>

        <!-- EMI Result -->
        @isset($emi)
            <div class="mt-6 bg-green-100 border border-green-500 text-green-700 p-4 rounded-lg">
                <p class="text-center font-medium">Your monthly EMI for the loan is {{ $emi }} TK.</p>
            </div>
        @endisset

        <!-- Action Buttons -->
        <div class="mt-8 flex justify-between gap-4">
            <!-- Check Loan Eligibility Button -->
            <a href="{{ route('loan.eligibility') }}" class="w-1/2 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition duration-300">
                Check Loan Eligibility
            </a>

            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="w-1/2">
                @csrf
                <button type="submit" class="w-full bg-gray-700 text-white py-2 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 transition duration-300">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
