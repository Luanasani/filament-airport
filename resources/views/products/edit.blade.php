<form method = "POST" action="{{route('products.store', ['id'=>$product->id])}}">
    <input type="text" name="title" value= "{{$product->title}}">
    <input type="text" name="price" value= "{{$product->price}}">
    <input type="submit" name="submit">
    @csrf





</form>