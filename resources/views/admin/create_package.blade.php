@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-indigo-700 mb-4">Create New Package</h2>
    <form action="{{ route('admin.packages.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 gap-4">
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input type="text" name="title" class="w-full border-gray-300 rounded shadow-sm" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Description</label>
                <textarea name="description" class="w-full border-gray-300 rounded shadow-sm" rows="3" required></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium">Price</label>
                <input type="number" name="price" step="0.01" class="w-full border-gray-300 rounded shadow-sm" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Category</label>
                <select name="category_id" class="w-full border-gray-300 rounded shadow-sm">
                    <option value="">None</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="is_special" value="1" class="rounded text-indigo-600">
                <label class="text-sm font-medium">Mark as Special</label>
            </div>
        </div>
        <button type="submit" class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Save Package
        </button>
    </form>
</div>
@endsection
