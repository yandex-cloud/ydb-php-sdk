<?php

namespace YandexCloud\Ydb\Types;

class Uint64Type extends Int64Type
{
    /**
     * @inherit
     */
    protected $unsigned = true;

    /**
     * @inherit
     */
    protected $ydb_type = 'UINT64';
}
