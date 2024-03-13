<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form method="post" action="{{route('products.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label >Name</label>
            <input type="text" name="name" placeholder="Enter Name" value="{{$product->name}}">
        </div>
        <div>
            <label >Quantity</label>
            <input type="text" name="qty" placeholder="Enter Quantity" value="{{$product->qty}}">
        </div>
        <div>
            <label >Price</label>
            <input type="text" name="price" placeholder="Enter Price" value="{{$product->price}}">
        </div>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="Enter Description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="update Product">
        </div>
    </form>
</body>
</html>