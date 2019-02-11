<?php

namespace Laravolt\Etalase\Http\Controllers;

use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function __invoke($query = null)
    {
        try {
            $results = [
                [
                    'name'        => "<strong>Sragen Tengah</strong>, Sragen, Sragen, Jawa Tengah",
                    'description' => 'Sragen Tengah, Sragen, Sragen, Jawa Tengah',
                    'value'       => 1,
                ],
                [
                    'name'        => "<strong>Puro</strong>, Karangmalang, Sragen, Jawa Tengah",
                    'description' => 'Puro, Karangmalang, Sragen, Jawa Tengah',
                    'value'       => 2,
                ],
            ];


            $json = ['success' => true, 'results' => $results];

            return response()->json($json);
        } catch (\Exception $e) {
            return view('etalase::missing', compact('page'));
        }
    }
}
