<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;


Route::fallback(function(){
    return redirect('/tasks');
});
Route::resource('tasks',TaskController::class);

Route::put('tasks/{task}/toggle', function (Task $task) {
    $task->toggle();
    return redirect()->back();
})->name('tasks.toggle');

Route::delete('/tasks',function(Task $task){
   $task->all()->delete() ;
    return redirect()->route('tasks.index');
  })->name('tasks.destroyAll');