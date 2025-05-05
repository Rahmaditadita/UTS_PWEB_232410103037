@extends('layouts.app')

@section('content')
<h2>Profile</h2>
<p>Ini adalah halaman profile dari <strong>{{ $username ?? 'User' }}</strong>.</p>
@endsection
