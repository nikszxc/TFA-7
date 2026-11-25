@extends('layouts.app',['title'=>$mode==='edit'?'Edit Customer':'Create Customer'])
@section('content')
<div class="page-heading"><div class="eyebrow">Customer form</div><h1>{{ $mode==='edit'?'Edit Customer.':'Create Customer.' }}</h1><p class="lead">Laravel validation preserves old input and displays clear errors.</p></div>
@if($errors->any())<div class="notice errors"><strong>Please correct the following:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form class="hero" method="POST" action="{{ $mode==='edit'?route('customers.update',$customer):route('customers.store') }}">@csrf @if($mode==='edit') @method('PUT') @endif
<p><label for="full_name">Full name</label><input id="full_name" name="full_name" value="{{ old('full_name',$customer->full_name) }}" required></p><p><label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email',$customer->email) }}" required></p><p><label for="phone">Phone</label><input id="phone" name="phone" value="{{ old('phone',$customer->phone) }}"></p><button class="button" type="submit">{{ $mode==='edit'?'Update Customer':'Save Customer' }}</button></form>
@endsection
