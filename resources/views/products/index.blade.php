<ul>
    @foreach ($products as $product)
    <li>
        <h1>{{$product->name}}</h1>
        <p>{{$product->description}}</p>
        <a href="/products/{{$product->id}}/show">Show Product</a>
        <form action="/products/{{$product->id}}" method="post">
            @csrf
            @METHOD('delete')
    
            <input type="submit" value="Delete">

        </form>
    </li>

    @endforeach
</ul>
<a href="/products/create">create New Products</a>