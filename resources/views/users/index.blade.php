<div class="container mt-4">
    <h3 class="mb-3">Tampil Data Users</h3>
    <a href="{{route('user.create')}}" class="btn btn-primary mb-3">Create User</a>
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUser as $v)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $v->name }}</td>
                <td>{{ $v->email }}</td>
                <td>{{ $v->role }}</td>
                <td>
                    <a href="{{ route('user.edit', $v->user_id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('user.destroy', $v->user_id) }}" method="POST" class="d-inline">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
