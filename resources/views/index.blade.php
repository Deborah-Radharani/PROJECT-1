@extends('layouts.app')

@section('title', 'The list of Tasks')

@section('content')

<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
</nav>
<div>
 {{-- @if(count($tasks)) --}}
    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
        @class(['font-bold' =>$task->completed])>{{ $task->title}}</a>
    </div>
    @empty
    <div>There are no tasks!</div>
    @endforelse
      <nav>
    @if ($tasks->count())
    {{$tasks->links()}}
    @endif
</nav>
    @endsection
