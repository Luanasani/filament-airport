<form method = "POST" action="{{route('products.store')}}">
    <input type="text" name="title">
    <input type="text" name="price">
    <input type="submit" name="submit">
    @csrf





</form>

<a href="{{route('products.index')}}">zurück zur liste</a>