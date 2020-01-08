<?php

namespace Laravolt\Etalase\Http\Controllers;

use Laravolt\Platform\Services\FileUploader;

class Upload
{
    public function __invoke()
    {
        dd(request()->allFiles());
        request()->media('attachments')->store();
        // request()->media('attachments')->toArray();
        // request()->media('attachments')->store();
        // request()->media('attachments')->delete();
        // request()->media('attachments')->sync();
        // dd(FileUploader::handle('attachments'));
    }
}
