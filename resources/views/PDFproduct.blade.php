<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <h1>{{ $title }}</h1>

    <p>{{ $date }}</p>
  
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Code</th>
            <th>Barcode</th>
            <th>Quantity</th>
            <th>Buying Price</th>
            <th>Selling Price</th>
            <th>Notes</th>
            <th>Category</th>
            <th>Unit</th>
            <th>Date</th>
        </tr>
        @foreach($product as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->code }}</td>
                <td>{!! $barcode !!}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->buying_price }}</td>
                <td>{{ $item->selling_price }}</td>
                <td>{{ $item->notes }}</td>
                <td>{{ $item->category->name }}</td>
                <td>{{ $item->unit->short_code }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>