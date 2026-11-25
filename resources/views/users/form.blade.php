@extends('layouts.app',['title'=>$mode==='edit'?'Edit User':'Create User'])
@section('content')
<div class="page-heading"><div class="eyebrow">User form</div><h1>{{ $mode==='edit'?'Edit User.':'Create User.' }}</h1><p class="lead">Username and email uniqueness plus image uploads up to 2MB are validated.</p></div>
@if($errors->any())<div class="notice errors"><strong>Please correct the following:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form class="hero" method="POST" action="{{ $mode==='edit'?route('users.update',$user):route('users.store') }}" enctype="multipart/form-data">@csrf @if($mode==='edit') @method('PUT') @endif
<p><label for="username">Username</label><input id="username" name="username" value="{{ old('username',$user->username) }}" required></p><p><label for="full_name">Full name</label><input id="full_name" name="full_name" value="{{ old('full_name',$user->full_name) }}" required></p><p><label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email',$user->email) }}" required></p><p><label for="avatar">Profile picture (image, max 2MB)</label><input id="avatar" type="file" name="avatar" accept="image/*"></p><button class="button" type="submit">{{ $mode==='edit'?'Update User':'Save User' }}</button></form>
@endsection
