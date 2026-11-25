@extends('layouts.app',['title'=>'Customers'])
@section('content')
<div class="page-heading"><div class="eyebrow">Customer Accounts</div><h1>Customers.</h1><p class="lead">Create, edit, and validate customer records with Eloquent.</p><a class="button" href="{{ route('customers.create') }}">Add Customer</a></div>
@if(session('success'))<div class="notice">{{ session('success') }}</div>@endif
<div class="table-wrap"><table><thead><tr><th>Full Name</th><th>Email</th><th>Phone</th><th>Action</th></tr></thead><tbody>
@forelse($customers as $customer)<tr><td><strong>{{ $customer->full_name }}</strong></td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td><td><a href="{{ route('customers.edit',$customer) }}">Edit</a></td></tr>@empty<tr><td colspan="4">No customers yet.</td></tr>@endforelse
</tbody></table></div>
@endsection
