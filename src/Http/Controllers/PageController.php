<?php

namespace Laravolt\Etalase\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function __invoke($page)
    {
        try {
            return view('etalase::example.'.$page);
        } catch (\Exception $e) {
            return view('etalase::missing', compact('page'));
        }
    }
}
