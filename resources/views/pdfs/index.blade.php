<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>
<h1>Products</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    @foreach($product as $products)
    <tr>
        <td>{{$products->name}}</td>
        <td>{{$products->price}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>