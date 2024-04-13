<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <style>
body {
    font-family: 'Orbitron';font-size: 22px;
}
</style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>edit</title>
</head>
<body>
    <h1 class="title">edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update',['product'=>$product])}}">
    @csrf
    @method('put')
    <div class="card">
        <div class="form-control">
            <label>Name</label>
            <input type="text" name="name" placeholder="enter your name" value="{{$product->name}}" >
        </div>
        <div class="form-control">
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Quantity"  value="{{$product->qty}}">
        </div>
        <div class="form-control">
            <label>price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}" >
        </div>
        <div class="form-control">
            <label>description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}" >
        </div>
        <div class="form-control">
            <input type="submit" value="update" >
        </div>
    </div>
    </form>
</body>
</html>