<?php

namespace Laravolt\Etalase\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller;
use Laravolt\Etalase\Table\UserTable;
use Laravolt\Suitable\Plugins\Pdf;
use Laravolt\Suitable\Plugins\Spreadsheet;

class SuitableController extends Controller
{
    public function __invoke()
    {
        $users = User::autoSort()->paginate(5);
        $userTable = new UserTable($users);

        $table = $userTable
            ->plugins([
                (new Pdf('users.pdf')),
                (new Spreadsheet('users.xls')),
            ]);

        return $table->view('etalase::example.suitable');
    }
}
