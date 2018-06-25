@extends('layouts.admin');


@section('content')

    <h1>Users</h1>

    @if($users)
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><img height="50" src="{{ $user->photo ? $user->photo->file : 'http://via.placeholder.com/50x50' }}" alt=""></td>
                <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>
                <td>{{ $user->is_active == 1 ? 'Yes' : 'No' }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>{{ $user->updated_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
@stop
