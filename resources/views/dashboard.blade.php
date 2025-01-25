<!DOCTYPE html>
<html lang="en">
<head>
    <x-head />
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Welcome to Dashboard</h2>

            <p>Welcome, {{ Auth::user()->email }}!</p>
            <p>User Type: {{ Auth::user()->user_type }}</p>
            <p>Your WhatsApp Phone Number: {{ Auth::user()->wa_phone_number }}</p>

            <a href="{{ route('logout') }}" class="mt-4 text-red-600">Logout</a>
        </div>
    </div>
</body>
</html>
