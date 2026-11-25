@extends('layouts.app',['title'=>'Users'])
@section('content')
<div class="page-heading"><div class="eyebrow">User Accounts</div><h1>Users.</h1><p class="lead">Create, edit, validate, and upload avatars for user records.</p><a class="button" href="{{ route('users.create') }}">Add User</a></div>
@if(session('success'))<div class="notice">{{ session('success') }}</div>@endif
<div class="table-wrap"><table><thead><tr><th>Avatar</th><th>Username</th><th>Full Name</th><th>Email</th><th>Action</th></tr></thead><tbody>
@forelse($users as $user)<tr><td><img src="{{ $user->avatar?asset('storage/'.$user->avatar):asset('images/avatar-placeholder.svg') }}" alt="{{ $user->full_name }}" width="48" height="48" style="border-radius:50%;object-fit:cover"></td><td><strong>{{ $user->username }}</strong></td><td>{{ $user->full_name }}</td><td>{{ $user->email }}</td><td><a href="{{ route('users.edit',$user) }}">Edit</a></td></tr>@empty<tr><td colspan="5">No users yet.</td></tr>@endforelse
</tbody></table></div>
@endsection
