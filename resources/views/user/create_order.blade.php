@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold text-indigo-700 mb-4">Book a Tour</h2>
    <form action="{{ route('orders.store') }}" method="POST">
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
            <label class="block text-sm font-medium">Booking Date</label>
            <input type="date" name="booking_date" class="w-full border-gray-300 rounded shadow-sm" required>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Confirm Booking
        </button>
    </form>
</div>
@endsection
