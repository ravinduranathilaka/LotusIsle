@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-indigo-700 mb-4">Manage Reviews</h2>
    @foreach ($reviews as $review)
        <div class="bg-white p-4 rounded shadow mb-4">
            <p class="text-gray-800"><strong>User:</strong> {{ $review->user->name }}</p>
            <p class="text-gray-600 mt-1"><strong>Review:</strong> {{ $review->content }}</p>
            <form method="POST" action="{{ route('admin.reviews.destroy', $review->id) }}" class="mt-2">
                @csrf
                @method('DELETE')
                <button class="text-red-600 hover:underline text-sm">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
