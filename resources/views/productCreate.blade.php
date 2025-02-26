<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">
            <input type="text" name="name" placeholder="product name">
        </label>
        <label for="price">
            <input type="text" name="price" placeholder="product price">
        </label>
        <label for="decription">
            <input type="text" name="description" placeholder="product decription">
        </label>
    <button type="submit">save product</button>
    </form>
</body>
</html>