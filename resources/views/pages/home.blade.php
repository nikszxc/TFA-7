@extends('layouts.app',['title'=>'Home'])
@section('content')
<section class="hero"><div class="eyebrow">Nica / Point of sale</div><h1>Records.<br>Ready.</h1><p class="lead">A monochrome account management system for customers and users, inspired by the Ace Divino project.</p><a class="button" href="{{ route('customers.index') }}">Open Customers</a></section>
<div class="lines"><section><h2>01</h2><p>Manage customer records.</p></section><section><h2>02</h2><p>Create and edit user accounts.</p></section><section><h2>03</h2><p>Upload secure public avatars.</p></section></div>
@endsection
