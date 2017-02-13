@extends ('base')

@section ('content')
<a href="../tasks">Back</a>
<h1>{{ $task->name }}</h1>
<h2>Details</h2>
<table>
<thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{{ $task->name }}</td>
        <td>{{ $task->unique_id }}</td>
   </tr>
</tbody>
</table>
@endsection
