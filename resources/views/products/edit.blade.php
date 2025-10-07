<form action="/products/{{$product->id}}/update" method="post">
    @csrf
    @METHOD('put')
    <p>{{$product->id}}</p>
    <input type="text" name="name" value="{{$product->name}}"><br><br>
    <input type="number" name="quantity" value="{{$product->quantity}}"><br><br>
    <textarea name="description"></textarea><br><br>
    <input type="submit" value="Submit">

</form>