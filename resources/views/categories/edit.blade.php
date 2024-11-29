<h1> Form Category</h1>
<link href="{{ asset('css/categories.css') }}" rel="stylesheet">
<form action="{{route('category.update',$dataEditcategory->category_id)}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    Category Name : <input type="text" name="category_name" value="{{$dataEditcategory->category_name}}"/></br>
    Description :<textarea name="description">{{$dataEditcategory->description}}</textarea></br>
    <button type="submit">Save</button>
</form>     