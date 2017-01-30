@extends ('base')

@section ('content')
<a href="../users">Back</a>
<h1>{{ $users->name }}</h1>
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
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
   </tr>
</tbody>
</table>
@endsection
