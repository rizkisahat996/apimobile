<?php

namespace App\Http\Controllers;

use App\Http\Resources\MobileResources;
use App\Models\Task;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class MobileController extends Controller
{
    public function index()
    {
        $task = Task::get();
        
        return MobileResources::collection($task);
    }

    public function store(Request $request)
    {
        $task = new Task; 
        $task->user_id = 1;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = "in_progress";
        $task->deadline = Carbon::now();

        $task->save(); 
        
        return MobileResources::collection($task);
    }

    public function update(Request $request, string $id)
    {
        $task = Task::find($id); 

        $task->status = "done";

        $task->save();
        
        return MobileResources::collection($task);
    }

    public function destroy(Task $task)
    {
        Task::destroy($task->id);
        
        return MobileResources::collection($task);
    }

}
