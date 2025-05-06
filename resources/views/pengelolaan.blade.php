<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Pertemuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/pengelolaan.css') }}">
    <style>
        .day-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .badge-online {
            background-color: #0d6efd;
        }
        .badge-offline {
            background-color: #198754;
        }
        .table-responsive {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <h1 class="text-center mb-4">Jadwal Pertemuan Mingguan</h1>

        @foreach($jadwalPertemuan as $hari => $jadwalHari)
        <div class="table-responsive mb-4">
            <h3 class="mb-3">{{ $hari }}</h3>
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                        <th>Lokasi</th>
                        <th>Platform</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwalHari as $jadwal)
                    <tr>
                        <td>{{ $jadwal['jam'] }}</td>
                        <td>{{ $jadwal['mata_pelajaran'] }}</td>
                        <td>{{ $jadwal['lokasi'] }}</td>
                        <td>
                            @if($jadwal['platform'] == 'Online')
                                <span class="badge badge-online text-white">Online</span>
                            @else
                                <span class="badge badge-offline text-white">Offline</span>
                            @endif
                        </td>
                        <td>
                            @if(isset($jadwal['link']))
                                <a href="{{ $jadwal['link'] }}" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-video"></i> Join
                                </a>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>

    <script src="{{ asset('js/pengelolaan.js') }}"></script>
</body>
</html>
