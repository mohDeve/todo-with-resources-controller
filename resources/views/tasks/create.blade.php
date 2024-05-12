@extends('layouts.app')

@section('content')

@include('tasks.form')

{{-- {{ $errors }} --}}
    {{-- <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" >
            @error('title')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
            @error('description')
            <div>
                {{ $message }}
            </div>
        @enderror
        </div>
        <div>
            <label for="Long_description">Long Description</label>
            <textarea name="long_description" id="long_description"></textarea>
            @error('long_description')
            <div>
                {{ $message }}
            </div>
        @enderror
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
    <a href="{{ route('tasks.index') }}">Cancel</a> --}}


 
@endsection