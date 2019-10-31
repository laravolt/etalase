<?php

namespace Laravolt\Etalase\Table;

use Laravolt\Indonesia\Models\Provinsi;
use Laravolt\Suitable\Builder;
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
use Laravolt\Suitable\Headers\Search\SelectHeader;
use Laravolt\Suitable\Segments\Segment;
use Laravolt\Suitable\TableView;
use Laravolt\Suitable\Toolbars\Action;
use Laravolt\Suitable\Toolbars\DropdownFilter;
use Laravolt\Suitable\Toolbars\Search;

class UserTable extends TableView
{
    protected $search = false;

    protected $title = 'Pengguna Aktif';

    protected function init()
    {
        $this->decorate(function (\Laravolt\Suitable\Builder $table) {
            // $table->getDefaultSegment()->left(Action::make('plus', 'Tambah', '#'));
            $countries = Provinsi::take(3)->pluck('name', 'id')->toArray();
            $table->getDefaultSegment()->left(\Laravolt\Suitable\Toolbars\Text::make('Pengguna'));
            // $table->getDefaultSegment()->right('lima')->prependRight('empat')->appendRight('enam');
        });
    }

    protected function columns()
    {
        $options = ['Root', 'User', 'Gues'];
        return [
            Numbering::make('No'),
            Text::make('name', 'Nama'),
            Text::make('email'),
            // View::make('users.address', 'Address'),
            // RestfulButton::make('post'),
            Raw::make(function ($item) {
                return $item->roles->implode('name', ' & ');
            }, 'Roles'),
            Text::make('status'),
            Date::make('created_at', 'Terdaftar Sejak'),
        ];
    }
}
