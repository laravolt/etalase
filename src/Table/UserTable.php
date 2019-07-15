<?php

namespace Laravolt\Etalase\Table;

use Laravolt\Suitable\Columns\Avatar;
use Laravolt\Suitable\Columns\Boolean;
use Laravolt\Suitable\Columns\Date;
use Laravolt\Suitable\Columns\DateTime;
use Laravolt\Suitable\Columns\Id;
use Laravolt\Suitable\Columns\Image;
use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\Raw;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\Columns\View;
use Laravolt\Suitable\TableView;

class UserTable extends TableView
{
    protected $search = false;

    protected function columns()
    {
        return [
            // Numbering::make('No'),
            // Avatar::make('name', 'Avatar'),
            Text::make('name')->sortable(),
            Text::make('created_at'),
            // View::make('users.address', 'Address'),
            // RestfulButton::make('post'),
            // Raw::make(function ($item) {
            //     return $item->roles->implode('name', ' & ');
            // }, 'Roles')
            // Image::make()
            // Boolean::make('status'),
            // Date::make('created_at', 'Member Since'),
            // DateTime::make('updated_at', 'Last Login'),
        ];
    }
}
