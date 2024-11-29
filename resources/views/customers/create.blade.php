<h1> Form Customer</h1>
<link href="{{ asset('css/customers.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<form action="{{route('customer.store')}}" method="post">
    {{ csrf_field() }}
    <label>Customer Name :</label>
    <input type="text" name="customer_name"></br>
    <label>Email :</label>
    <input type="email" name="email"></br>
    phone : <input type="number" name="phone"></br>
    Member Status :
    <input type="radio" name="member_status" value=1 checked>Admin
    <input type="radio" name="member_status" value=0 checked>Cashier</br>
    Address : <textarea name="address"></textarea></br>
    <button type="submit">Save</button>
</form>