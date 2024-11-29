<h3> Tampil Data Categories</h3>
<table border="1">
    <thead>
    <link href="{{ asset('css/categories.css') }}" rel="stylesheet">
        <tr>
            <th>No</th>
            <th>Category Name</th>
            <th>Description</th>
            <th>
                <a href="{{route('category.create')}}"> Create Category</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $dataCategory as $v )
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $v->category_name}}</td>
            <td>{{ $v->description}}</td>
            <td>
                <form action="{{route('category.destroy', $v->category_id)}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{route('category.edit', $v->category_id)}}">Edit</a>
                    <button> Delete </button>
                </form>
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>