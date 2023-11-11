<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <h1>Create Products</h1>

    <form action="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label for="">Quantity</label>
            <input type="text" name="quantity" placeholder="quantity"/>
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="price"/>
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="description"/>
        </div>
        <div>
            <input type="submit" value="Save A New Product">
        </div>
    </form>
</body>
</html>