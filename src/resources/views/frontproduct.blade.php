<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <table class="product-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Size</th>
                    <th>Stock</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through products in your backend rendering -->
                @foreach($products as $product)
                <tr>
                    <td><img src="{{ $product->image->thumbnail }}" alt="{{ $product->name }}"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
