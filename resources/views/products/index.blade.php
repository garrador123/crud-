<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CRUD</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <style>
body {
    font-family: 'Orbitron';font-size: 22px;
}
</style>
</head>
<body>
    <h1 class="title">☣Products☣</h1>
    <div>
        @if(session()->has('success'))
        <div>
        {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <table class="table" border="2" >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
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
                    <td>
                        <a href="{{route('product.edit',['product'=>$product])}}"class="new-product-link">edit?</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy',['product'=>$product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="center">
    <a href="{{route('product.create')}}" class="new-product-link">new product?</a>
    </div>
</body>
</html>