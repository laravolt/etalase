<?php

namespace Laravolt\Etalase\Table;

use Laravolt\Suitable\Columns\Date;
use Laravolt\Suitable\Columns\DateTime;
use Laravolt\Suitable\Columns\Id;
use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;

class UserTable extends TableView
{
    protected function columns()
    {
        return [
            Numbering::make('No'),
            Id::make('id'),
            Text::make('name'),
            Text::make('email'),
            Date::make('created_at'),
            DateTime::make('updated_at'),
        ];
    }
}
