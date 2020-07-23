@extends('layout')

@section('content')

<div>
<h1>Login</h1>
@if(session('error'))
    <h3>{{session('error')}}</h3>
@endif    
    Username: jing
    Password: pass
    <form method="post" action="/netzwelt/home">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">submit</button>
    </form>
</div>

@endsection