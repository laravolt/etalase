<?php

namespace Laravolt\Etalase\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller;
use Laravolt\Etalase\Table\UserTable;
use Laravolt\Suitable\Plugins\Pdf;
use Laravolt\Suitable\Plugins\Spreadsheet;
use Laravolt\Suitable\Tables\BasicTable;

class SuitableController extends Controller
{
    public function __invoke()
    {
        $users = User::autoSort('s', 'd')->paginate(5);

        return (new BasicTable($users))
            ->only('id', 'name', 'email')
            ->plugins([
                new Pdf('users.pdf'),
                new Spreadsheet('users.xls')
            ])
            ->view('etalase::example.suitable');
    }
}
