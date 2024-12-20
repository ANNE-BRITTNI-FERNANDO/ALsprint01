<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black bg-opacity-90 min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('images/ChessHome.jpg') }}'); background-size: cover; background-position: center;">
    <div class="bg-black bg-opacity-80 px-8 py-12 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-white text-center mb-6">Welcome Back!</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-300">E-mail</label>
                <input id="email" type="email" name="email" class="mt-2 block w-full px-4 py-2 bg-gray-800 text-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-red-500" required autofocus autocomplete="username" placeholder="Enter your email">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                <input id="password" type="password" name="password" class="mt-2 block w-full px-4 py-2 bg-gray-800 text-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-red-500" required autocomplete="current-password" placeholder="Enter your password">
            </div>

            <!-- Log In Button -->
            <div class="mb-4">
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Log In
                </button>
            </div>

            <!-- Sign Up Link -->
            <div class="text-center text-sm text-gray-400">
                New here? 
                <a href="{{ route('register') }}" class="text-red-500 hover:underline">Sign Up instead</a>
            </div>
        </form>
    </div>
</body>
</html>
