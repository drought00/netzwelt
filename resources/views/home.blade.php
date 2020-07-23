@extends('layout')

@section('content')

<div>
    <h1>Home</h1>
    Welcome {{ session('username') }}!!
    <a href="logout">Logout</a>
</div>

@endsection