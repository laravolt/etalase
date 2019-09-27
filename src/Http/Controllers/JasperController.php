<?php

declare(strict_types=1);

namespace Laravolt\Etalase\Http\Controllers;

use Illuminate\Routing\Controller;
use PHPJasper\PHPJasper;

class JasperController extends Controller
{
    public function index()
    {
        $input = resource_path('jasper/coba.jasper');
        $output = storage_path('app/reports');
        $options = [
            'format' => ['pdf'],
            'params' => [
                'nama' => 'Elang Putra Sartika',
                'institusi' => 'Universitas Islam Indonesia',
                'barcode' => '082196560301',
            ],
        ];

        $jasper = new PHPJasper();
        $jasper->process(
            $input,
            $output,
            $options
        )->execute();
    }
}
