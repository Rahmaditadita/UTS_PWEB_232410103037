@extends('layouts.app')

@section('content')
    <div class="pengelolaan">
        <h2>Pengelolaan Data</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
