@extends ('base')

@section ('content')
<ul>
@forelse ($stockItems as $item)
    <li><a href="stock/{{ $item->id }}">[{{ $item->barcode }}] {{ $item->name }}</a></li>
@empty
    <li><code>--== NO STOCK ITEMS ==--</code></li>
@endforelse
</ul>
@endsection
