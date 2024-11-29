<h1>Form Category</h1>
<link href="{{ asset('css/categories.css') }}" rel="stylesheet">
    <form action="{{route('category.store')}}" method="POST">
{{csrf_field() }}
Category Name: <input type="text" name="category_name"/></br>
Description: <textarea name="description"></textarea></br>
<button type="submit">Save</button>
</form>