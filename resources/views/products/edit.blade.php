<h1>Form Product</h1>
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
<form action="{{ route('product.update', $dataEditproduct) }}" method="POST" enctype="multipart/form-data"> 
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<label>Product Name</label>
<input type="text" name="products_name" value="{{ $dataEditproduct->products_name}}"><br/>

<label for="photo">Foto Produk:</label>
<input type="file" name="photo"><br>
    @if($dataEditproduct->photo)
        <p>Foto Saat Ini: <img src="{{ asset('storage/' . $dataEditproduct->photo) }}" alt="{{ $dataEditproduct->name}}" width="100"></p>
    @endif
<label>Product Category</label>
<select name="category_id">
    <option value="">Select Category</option>
    @foreach ($categories as $v)
    <option value="{{$v->category_id}}" {{ $v->category_id ==
        $dataEditproduct->category_id ? 'selected' : ''}}>{{$v->category_name}}</option>
    @endforeach
</select></br>
<label>Price</label>
<input type="text" name="price" value="{{ $dataEditproduct->price}}"><br/>
<label>Stock</label>
<input type="text" name="stock" value="{{ $dataEditproduct->stock}}"><br/>
<label>Product Description</label>
<textarea type="text" name="product_description"> {{ $dataEditproduct->product_description}}</textarea><br/>
<button type="submit">Save</button>
</form>
