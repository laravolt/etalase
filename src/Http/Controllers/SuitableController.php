<?php

namespace Laravolt\Etalase\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Laravolt\Etalase\Table\UserTable;
use Laravolt\Suitable\Builder;
use Laravolt\Suitable\Plugins\Pdf;
use Laravolt\Suitable\Plugins\Spreadsheet;
use Laravolt\Suitable\Segments\Segment;
use Laravolt\Suitable\Tables\BasicTable;
use Laravolt\Suitable\Toolbars\Action;
use Laravolt\Suitable\Toolbars\DropdownFilter;

class SuitableController extends Controller
{
    public function __invoke()
    {
        // $users = User::all();

        // $users = DB::table('users')->select('*')->paginate();

        $users = [
            ['name' => 'Bayu Hendra', 'email' => 'uyab.exe@gmail.com'],
            ['name' => 'Hendra Winata', 'email' => 'bayu.hendra@javan.co.id'],
        ];

        return (new UserTable($users))
            ->view('etalase::example.suitable');
    }
}
