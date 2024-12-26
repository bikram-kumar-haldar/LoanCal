<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ABCD Bank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-200 to-blue-100 min-h-screen flex items-center justify-center">
    <div class="max-w-3xl bg-white shadow-lg rounded-lg p-8">
        <!-- Logo and Heading -->
        <div class="text-center mb-6">
            <h1 class="text-5xl font-extrabold text-indigo-700 mb-2">Welcome To ABCD Bank</h1>
            <p class="text-lg text-gray-700 italic">Your trusted partner in financial growth</p>
        </div>
        <!-- Content Section -->
        <div class="text-center">
            <p class="text-xl text-gray-800 mb-6">Check your loan eligibility by logging in or registering below.</p>
            <!-- Buttons -->
            <div class="space-x-4">
                <a href="{{ route('login') }}" 
                   class="bg-green-700 text-white px-8 py-3 rounded-full shadow-lg hover:bg-green-800 text-lg transition">
                   Login
                </a>
                <a href="{{ route('register') }}" 
                   class="bg-blue-700 text-white px-8 py-3 rounded-full shadow-lg hover:bg-blue-800 text-lg transition">
                   Register
                </a>
            </div>
        </div>
    
</body>
</html>
