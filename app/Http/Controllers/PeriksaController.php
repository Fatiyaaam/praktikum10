<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use App\Models\Pasien;
use App\Models\Periksa;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PeriksaController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Periksa',
        ];
        $list_periksa = Periksa::all();
        View::share($data_layout);
        return view('periksa.show', ['list_periksa' => $list_periksa]);
    }

}
