<?php

use Lembarek\ShareFiles\Models\File;

function createFile($overs = [], $limit=1)
{
    return factory(File::class, $limit)->create($overs);
}

