@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow-md rounded p-6">
    <h2 class="text-2xl font-semibold text-center text-indigo-600 mb-4">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium">Name</label>
            <input type="text" name="name" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium">Password</label>
            <input type="password" name="password" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium">Confirm Password</label>
            <input type="password" name="password_confirmation" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">
            Register
        </button>
    </form>
</div>
@endsection
