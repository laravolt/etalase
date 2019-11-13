<?php

namespace Laravolt\Etalase\Http\Controllers;

use Illuminate\Routing\Controller;
use Laravolt\Indonesia\Models\Kabupaten;
use Laravolt\Indonesia\Models\Provinsi;

class SearchController extends Controller
{
    public function __invoke($query = null)
    {
        try {
            sleep(1);
            if ($query) {
                $kabupaten = Kabupaten::with('province')->search($query)->get();
            } elseif (request('parent')) {
                $kabupaten = Kabupaten::with('province')->where('province_id', request('parent'))->get();
            } else {
                $kabupaten = Provinsi::all();
            }

            $results = $kabupaten->transform(function($item){
                return [
                    'name' => "{$item->name}",
                    'value' => $item->getKey(),
                ];
            });


            $json = ['success' => true, 'results' => $results];

            return response()->json($json);
        } catch (\Exception $e) {
            return view('etalase::missing', compact('page'));
        }
    }
}
