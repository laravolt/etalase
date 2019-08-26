<?php

namespace Laravolt\Etalase\Http\Controllers;

use Laravolt\Media\FileUploader;

class Upload
{
    public function __invoke()
    {
        dd(FileUploader::handle('avatar'));
    }
}
