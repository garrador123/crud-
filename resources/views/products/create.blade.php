<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <style>
body {
    font-family: 'Orbitron';font-size: 22px;
}
</style>
    <title>create</title>
</head>
<body>
    <h1 class="title">create a Product</h1>
    <div class="">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div class="card">       
        <div class="form-control">
            <label>Name</label>
            <input type="text" name="name" placeholder="enter your name" >
        </div>
        <div class="form-control">
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Quantity" >
        </div>
        <div class="form-control">
            <label>price</label>
            <input type="text" name="price" placeholder="$$$" >
        </div>
        <div class="form-control">
            <label>description</label>
            <input type="text" name="description" placeholder="☣" >
        </div>
        <div>
            <input type="submit" value="save new product" >
        </div>
    </div>
    </form>
</body>
</html>