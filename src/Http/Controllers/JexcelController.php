<?php

declare(strict_types=1);

namespace Laravolt\Etalase\Http\Controllers;

use App\Http\Requests\Jexcel\Store;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PHPJasper\PHPJasper;

class JexcelController extends Controller
{
    public function create()
    {
        return view('etalase::jexcel.create');
    }

    public function store(Store $request)
    {

    }
}
