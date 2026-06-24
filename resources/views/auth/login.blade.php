<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - DayDash</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4a90e2',
                        accent: '#d9534f'
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen">

    <div class="max-w-7xl mx-auto min-h-screen px-8">

        <!-- Header -->
        <div class="flex justify-between items-center py-10">

            <h1 class="text-4xl font-extrabold text-yellow-600">
                DayDash
            </h1>

            <div class="flex items-center space-x-10">
                <a href="/auth/login"
                   class="text-lg font-semibold text-yellow-600">
                    Log In
                </a>

                <a href="/auth/register"
                   class="text-lg font-medium text-gray-700 hover:text-yellow-600">
                    Sign Up
                </a>
            </div>

        </div>

        <!-- Content -->
        <div class="flex items-center">

            <!-- Left Side -->
            <div class="w-1/2 flex justify-center">
                <img
                    src="{{ asset('images/authh.jpg') }}"
                    alt="Illustration"
                >
            </div>

            <!-- Right Side -->
            <div class="w-1/2 flex justify-center">

                <div class="w-full max-w-md bg-white p-10">

                    <h1 class="text-4xl font-extrabold text-gray-900">
                        Welcome to
                        <span class="text-yellow-600">DayDash!</span>
                    </h1>

                    <p class="text-gray-500 mt-3">
                        Sign in to your account to continue
                    </p>

                    <form action="/login" method="POST" class="mt-8 space-y-4">
                        @csrf

                        <input
                            type="text"
                            name="username"
                            placeholder="Enter your username"
                            required
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">

                        <input
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                            class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">

                        <button
                            type="submit"
                            class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:opacity-90">
                            Sign In
                        </button>

                    </form>

                    <p class="text-center text-sm text-gray-500 mt-6">
                        Don't have an account?
                        <a href="/auth/register"
                           class="text-primary font-semibold">
                            Sign Up
                        </a>
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>

</html>