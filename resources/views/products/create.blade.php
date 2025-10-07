<form action="/products" method="post">
    @csrf
    <input type="text" name="name"><br><br>
    <input type="number" name="quantity"><br><br>
    <textarea name="description"></textarea><br><br>
    <input type="submit" value="Submit">

</form>


<a href="/products">Back To List</a>