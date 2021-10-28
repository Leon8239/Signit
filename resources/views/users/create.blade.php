@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="my-10">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="p-2 bg-gray-200 @error('email') is-invalid @enderror" />
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-10">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="p-2 bg-gray-200 @error('email') is-invalid @enderror" />
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-10">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" class="p-2 bg-gray-200 @error('email') is-invalid @enderror" />
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Create </button>
    </form>
@endsection
