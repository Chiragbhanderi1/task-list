@extends('layouts.app')
@section('title',"The List of tasks")
@section('content') 
    <nav class="mb-4">
        <a class="link" href="{{route('tasks.create')}}">Add Task !</a>
    </nav>
    <div class="">
        @forelse($tasks as $task)
            <div>
                <a 
                    href="{{route('tasks.show',['task'=> $task->id])}}"
                    @class(['line-through' => $task->completed])
                 >
                 {{$task -> title}}
                </a> 
            </div>
            @empty
            <div>There are no tasks</div>
        @endforelse
    </div>
    @if ($tasks->count())
        <nav class="mt-4">
            {{  $tasks->links() }}
        </nav>
    @endif
@endsection