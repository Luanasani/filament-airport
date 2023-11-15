

@foreach($products as $product)
    {{$product->title}}<br>
    <a href="{{url('product/edit/'.$product->id)}}">edit</a><br>
@endforeach

<a href="{{route('products.create')}}">asdf</a>