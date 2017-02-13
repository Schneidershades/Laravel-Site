@extends ('base')

@section ('content')
<ul>
@forelse ($tasks as $task)
    <li><a href="tasks/{{ $task->id }}">[{{ $task->name }}] {{ $task->unique_id }}</a></li>
@empty
    <li><code>--== NO TASKS ==--</code></li>
@endforelse
</ul>
@endsection
