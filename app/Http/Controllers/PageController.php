<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    private $validCredentials = [
        'username' => 'Hanna-lee',
        'password' => '12345678'
    ];
    public function login()
    {
        return view('login');
    }
    
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($request->username === $this->validCredentials['username'] &&
            $request->password === $this->validCredentials['password']) {
            return redirect()->route('dashboard', ['username' => $request->username]);
        }

        return back()->withErrors([
            'error' => 'Username atau password salah'
        ])->withInput($request->only('username'));
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Hanna-lee');

        return view('dashboard', [
            'username' => $username
        ]);
    }

    public function pengelolaan()
    {
        $jadwalPertemuan = [
            'Senin' => [
                [
                    'tanggal' => '2023-10-30',
                    'mata_pelajaran' => 'Matematika',
                    'lokasi' => 'Ruang A1',
                    'platform' => 'Offline',
                    'jam' => '08:00-10:00'
                ],
                [
                    'tanggal' => '2023-10-30',
                    'mata_pelajaran' => 'Kimia',
                    'lokasi' => 'Lab Kimia',
                    'platform' => 'Offline',
                    'jam' => '13:00-15:00'
                ]
            ],
            'Selasa' => [
                [
                    'tanggal' => '2023-10-31',
                    'mata_pelajaran' => 'Bahasa Indonesia',
                    'lokasi' => 'Ruang B2',
                    'platform' => 'Offline',
                    'jam' => '09:00-11:00'
                ],
                [
                    'tanggal' => '2023-10-31',
                    'mata_pelajaran' => 'Sejarah',
                    'lokasi' => 'Zoom Meeting',
                    'platform' => 'Online',
                    'link' => 'https://zoom.us/j/111222333',
                    'jam' => '14:00-16:00'
                ]
            ],
            'Rabu' => [
                [
                    'tanggal' => '2023-11-01',
                    'mata_pelajaran' => 'Bahasa Inggris',
                    'lokasi' => 'Zoom Meeting',
                    'platform' => 'Online',
                    'link' => 'https://zoom.us/j/123456789',
                    'jam' => '10:00-12:00'
                ],
                [
                    'tanggal' => '2023-11-01',
                    'mata_pelajaran' => 'Ekonomi',
                    'lokasi' => 'Ruang C3',
                    'platform' => 'Offline',
                    'jam' => '15:00-17:00'
                ]
            ],
            'Kamis' => [
                [
                    'tanggal' => '2023-11-02',
                    'mata_pelajaran' => 'Fisika',
                    'lokasi' => 'Lab IPA',
                    'platform' => 'Offline',
                    'jam' => '08:00-10:00'
                ],
                [
                    'tanggal' => '2023-11-02',
                    'mata_pelajaran' => 'Seni Budaya',
                    'lokasi' => 'Aula',
                    'platform' => 'Offline',
                    'jam' => '13:00-15:00'
                ]
            ],
            'Jumat' => [
                [
                    'tanggal' => '2023-11-03',
                    'mata_pelajaran' => 'Fisika',
                    'lokasi' => 'Lab IPA',
                    'platform' => 'Offline',
                    'jam' => '09:00-11:00'
                ],
                [
                    'tanggal' => '2023-11-03',
                    'mata_pelajaran' => 'Olahraga',
                    'lokasi' => 'Lapangan',
                    'platform' => 'Offline',
                    'jam' => '14:00-16:00'
                ]
            ]
        ];

        return view('pengelolaan', ['jadwalPertemuan' => $jadwalPertemuan]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Hanna-lee');
        $password = '********';

        return view('profile', [
            'username' => $username,
            'password' => $password
        ]);
    }

        public function show()
    {
        return view('profile');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}
