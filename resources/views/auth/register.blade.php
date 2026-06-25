@extends('layouts.auth')

@section('title', 'Sign Up - DayDash')

@section('form_content')
<h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">
    Welcome to
    <span class="text-yellow-600">DayDash!</span>
</h1>

<p class="text-gray-500 mt-3">
    Sign up with your email and password to stay connected with us
</p>

<form action="/register" method="POST" class="mt-8 space-y-4">
    @csrf

    <input
        type="text"
        name="username"
        placeholder="Enter your username"
        required
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">

    <input
        type="email"
        name="email"
        placeholder="Enter your email"
        required
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">

    <input
        type="password"
        name="password"
        placeholder="Enter your password"
        required
        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">

    <button
        type="submit"
        class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:opacity-90">
        Create Account
    </button>
</form>

<p class="text-center text-sm text-gray-500 mt-6">
    Already Registered?
    <a href="/auth/login"
        class="text-primary font-semibold">
        Sign In
    </a>
</p>
@endsection