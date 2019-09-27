<?php

namespace Laravolt\Etalase\Http\Controllers;

use Laravolt\Platform\Services\FileUploader;

class Upload
{
    public function __invoke()
    {
        dd(FileUploader::handle('files'));
    }
}
