@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-indigo-700 mb-4">Write a Review</h2>
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium">Select Package</label>
            <select name="package_id" class="w-full border-gray-300 rounded shadow-sm" required>
                @foreach ($packages as $package)
                    <option value="{{ $package->id }}">{{ $package->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium">Your Review</label>
            <textarea name="content" rows="4" class="w-full border-gray-300 rounded shadow-sm" required></textarea>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Submit Review
        </button>
    </form>
</div>
@endsection
