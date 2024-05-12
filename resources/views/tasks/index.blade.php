@extends('layouts.app')

@section('title','Lists of Tasks')

@section('content')
{{-- <div>
    <form action="{{ route('tasks.destroyAll') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete All</button>
    </form>
</div> --}}
<div class="my-4" >
    <a href="{{ route('tasks.create') }}" class="underline underline-offset-8 decoration-green-300 hover:decoration-red-600 hover:text-slate-500 ">Add Task</a>
</div>
@forelse ($tasks as $task)

    <div class="flex justify-between mb-3 shadow-sm px-2 py-2 border rounded-lg {{ $task->completed ? 'line-through	disabled': '' }}">

        <a href="{{ route('tasks.show',['task'=>$task]) }}">{{ $task->title }}</a>
        <div class="flex gap-2">
            <a href="{{ route('tasks.edit',['task'=>$task]) }}">
                <svg class="w-6 h-6 text-gray-800 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                  </svg>
                  
            </a>
            <div>
                <form action="{{ route('tasks.destroy',['task'=>$task]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        <svg class="w-6 h-6 text-gray-800 dark:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          
                    </button>
                </form>
            </div>
        </div>
    </div>
    {{-- <p class="my-4">
        @if($loop->count == $loop->last )
        
        <a href="{{ route('tasks.index') }}">Back To Home</a>
    
        @endif
    </p> --}}
    @empty
        no Tasks
    @endforelse
 
    <div class="mb-4">
        {{ $tasks->links()}}
       
    </div>
@endsection