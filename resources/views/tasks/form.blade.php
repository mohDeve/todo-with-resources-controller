@extends('layouts.app')
@section('title',isset($task) ?'Update Task':'Add New Task')
@section('content')
{{-- {{ $errors }} --}}
    <form class="shadow-xl p-2 rounded-md border" action="{{isset($task) ? route('tasks.update',['task'=>$task]) : route('tasks.store') }}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
            
        @endisset
        <div class="mb-3">
            <label for="title" class="block mb-2 underline uppercase font-bold">Title:</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}"  class="shadow-lg outline-none w-full mb-2 border rounded-lg  ">
            @error('title')
                <div class="text-red-500 underline text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="block mb-2 underline uppercase font-bold">Description</label>
            <textarea name="description" id="description"   class="shadow-lg outline-none w-full mb-2 border rounded-lg" rows="3">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
            <div class="text-red-500 underline text-sm">
                {{ $message }}
            </div class="">
        @enderror
        </div>
        <div class="mb-3">
            <label for="Long_description" class="block mb-2 underline uppercase font-bold">Long Description</label>
            <textarea name="long_description" id="long_description"  class="shadow-lg outline-none w-full mb-2 border rounded-lg" rows="3">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
            <div class="text-red-500 underline text-sm">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="flex gap-3">
            <button type="submit" class="underline decoration-pink-300 underline-offset-4">
                @isset($task)
                    Update Task
                    @else 
                    Add Task
                @endisset
            </button>
            <a href="{{ route('tasks.index') }}" class="underline decoration-sky-300 underline-offset-4">Cancel</a>
        </div>
    </form>
@endsection