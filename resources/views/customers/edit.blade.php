<h1>Form Customer</h1>
<link href="{{ asset('css/customers.css') }}" rel="stylesheet">
<form action="{{route('customer.update',$dataEditcustomer->customer_id)}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />
    <label>Customer Name : </label>
    <input type="text" name="customer_name" value="{{$dataEditcustomer->customer_name}}"></br>
    <label> Email :</label>
    <input type="email" name="email" value="{{$dataEditcustomer->email}}"></br>
    <label> Phone :</label>
    <input type="number" name="phone" value="{{$dataEditcustomer->phone}}"></br>
    Member Status : 
    <input type="radio" name="member_status" value=1 {{ ($dataEditcustomer->member_status== 1) ?
    'checked' : ""}}>True
    <input type="radio" name="member_status" value=0 {{ ($dataEditcustomer->member_status== 0) ?
     'checked' : ""}}>False </br>
    Address : <textarea name="address">{{$dataEditcustomer->address}}</textarea></br>
    <button type="submit">Save</button>
</form>
