<h1>Form Product</h1>
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
<form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<label>Product Name</label>
<input type="text" name="products_name"><br/>

<label>Foto Produk</label>
<input type="file" name="photo"><br>

<label>Product Category</label>
<select name="category_id">
    <option value="">Select Category</option>
    @foreach ($dataCategory as $v)
    <option value="{{$v->category_id}}">{{$v->category_name}}</option>
    @endforeach
</select></br>
<label>Price</label>
<input type="text" name="price"><br/>
<label>Stock</label>
<input type="text" name="stock"><br/>
<label>Product Description</label>
<textarea type="text" name="product_description"></textarea><br/>
<button type="submit">Save</button>
</form> 