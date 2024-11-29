<div class="container mt-4">
<link href="{{ asset('css/customers.css') }}" rel="stylesheet">

    <h3 class="text-center mb-4">Tampilan Data Customers</h3>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Member Status</th>
                <th>
                    <a href="{{ route('customer.create') }}" class="btn btn-success">Create Customer</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataCustomer as $v)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $v->customer_name }}</td>
                <td>{{ $v->email }}</td>
                <td>{{ $v->phone }}</td>
                <td>{{ $v->address }}</td>
                <td>{{ $v->member_status ? 'Yes' : 'No' }}</td>
                <td>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<a href="{{ route('customer.edit', $v->customer_id) }}" class="btn btn-warning btn-sm">
    <i class="fas fa-edit"></i> Edit
</a>
<form action="{{ route('customer.destroy', $v->customer_id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="fas fa-trash-alt"></i> Delete
    </button>
</form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
