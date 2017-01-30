@extends ('base')

@section ('content')
<a href="../stock">Back</a>
<h1>{{ $item->name }}</h1>
<h2>Details</h2>
<table>
<thead>
    <tr>
        <th>Barcode</th>
        <th>Buy At</th>
        <th>Sell At</th>
        <th>Qty in Stock</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>{{ $item->barcode }}</td>
        <td>{{ $item->buy_price }}</td>
        <td>{{ $item->sell_price }}</td>
        <td>{{ $item->quantity }}</td>
    </tr>
</tbody>
</table>
@endsection
