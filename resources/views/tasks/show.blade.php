@extends('layouts.app')

@section('title',$task->title)

@section('content')
<a href="{{ route('tasks.index') }}" class="underline flex mb-4 max-w-[104px]" >
    <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
      </svg>
      Back Home
      
</a>
 <p class="text-sky-600 underline mb-2">Description:</p>
<p>{{ $task->description }}</p> 
<p class="text-sky-600 underline my-2">Long Description:</p>   
<p class="mb-5">{{ $task->long_description }}</p>   
<div>
<p class="flex gap-2 my-4">
    <span class="text-sky-600">
        Created At:
    </span>
    {{ $task->created_at->diffForHumans() }}  
    <span>
        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
          </svg>
          
    </span>
    <span class="text-sky-600">
        Updated In:
    </span>
      {{ $task->updated_at->diffForHumans() }}
</p>    
</div> 

<div class="flex gap-3 mb-4">
    <a href="{{ route('tasks.edit',['task'=>$task]) }}" class="bg-sky-200 rounded p-2 text-slate-500 hover:text-black hover:bg-white hover:underline">Edit</a>
    <div>
        <form action="{{ route('tasks.destroy',['task'=>$task]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-sky-200 rounded p-2 text-slate-500 hover:text-black hover:bg-white hover:underline">Delete</button>
        </form>
    </div>
</div>
<div class="flex justify-between content-center">

    <p class="mb-4">
        Task is : 
        <span class="font-bold underline   {{   $task->completed ? 'text-green-600' : 'text-red-600'}}">
            {{  $task->completed ? 'Completed' : 'Not Completed'}}
        </span>
    </p>
    
    <div class="bg-sky-200 rounded p-2 text-slate-500 hover:text-black hover:bg-white hover:underline">
        <form action="{{ route('tasks.toggle',['task'=>$task]) }}" method="post">
            @csrf
            @method('Put')
            <button type="submit">mark as {{  $task->completed ? 'Not Completed' : 'Completed'}}</button>
        </form>
    </div>
</div>
@endsection