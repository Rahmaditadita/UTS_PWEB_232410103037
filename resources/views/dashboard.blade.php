@extends('layouts.app')

@section('content')
<h2>Dashboard</h2>
<p>Selamat datang, {{ $username ?? 'User' }}!</p>
@endsection
