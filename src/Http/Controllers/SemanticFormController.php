<?php

namespace Laravolt\Etalase\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class SemanticFormController extends Controller
{
    use ValidatesRequests;

    public function create()
    {
        return view('etalase::semantic-form.create');
    }

    public function store()
    {
        dd(request()->all());
    }
}
