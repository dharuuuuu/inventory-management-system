<!DOCTYPE html>
<html>
<head>
    <title>Barang Masuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <h1>{{ $title }}</h1>

    <p>{{ $date }}</p>
  
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Quantity In</th>
            <th>Date</th>
        </tr>
        @foreach($barang_masuk as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity_in }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>