<ul>
    @foreach ($products as $product)
    <li>
        <h1>{{$product->name}}</h1>
        <p>{{$product->description}}</p>
    </li>

    @endforeach
</ul>
<a href="/products/create">create New Products</a>