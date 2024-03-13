<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method('post')
        <div>
            <label >Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div>
        <div>
            <label >Quantity</label>
            <input type="text" name="qty" placeholder="Enter Quantity">
        </div>
        <div>
            <label >Price</label>
            <input type="text" name="price" placeholder="Enter Price">
        </div>
        <div>
            <label >Description</label>
            <input type="text" name="description" placeholder="Enter Description">
        </div>
        <div>
            <input type="submit" value="save a new Product">
        </div>
    </form>
</body>
</html>