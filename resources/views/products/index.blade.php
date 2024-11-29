<table border="1">
    <thead>
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
        <h1>Form Product</h1>
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Photo</th>
            <th>Product Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>
                <a href="{{route('product.create')}}">Create Products</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataProducts as $y)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $y->products_name }}</td>
            <td>
                @if($y->photo)
                <img src="{{ asset('storage/' . $y->photo) }}" alt="{{$y->products_name}}" width="100">
                @else
                <img src="https://via.placeholder.com/100" alt="No Image" width="100">
                @endif
            </td>
            <td>{{ $y->Categories->category_name }}</td>
            <!-- Categories itu dari public function yg ad di model product -->
            <td>{{ $y->product_description}}</td>
            <td>{{ $y->price }}</td>
            <td>{{ $y->stock }}</td>
            <td>
                <form action="{{route('product.destroy', $y->products_id)}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <a href="{{ route('product.edit', $y->products_id) }}">Edit</a>
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>