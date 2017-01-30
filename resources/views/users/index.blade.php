@extends ('base')

@section ('content')
<ul>
@forelse ($users as $user)
    <li><a href="users/{{ $user->id }}">[{{ $user->name }}] {{ $user->created_at }}</a></li>
@empty
    <li><code>--== NO USERS ==--</code></li>
@endforelse
</ul>
@endsection
