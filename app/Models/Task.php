<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Task extends Model
{
    use HasFactory;
    protected $fillable=['title','description','long_description'];
    public function toggle(){
        $this->completed = !$this->completed;
        $this->save();
    }
}
