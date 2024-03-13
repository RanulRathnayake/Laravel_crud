<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>products</h1><br>
    <a href="{{route('products.create')}}">Create Product</a>
    <div>
        @if (session('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('products.edit',$product->id)}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('products.destroy',$product->id)}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>