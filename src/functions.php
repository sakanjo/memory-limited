<?php

namespace SaKanjo\MemoryLimited;

use Closure;

if (! function_exists('SaKanjo\MemoryLimited\run_memory_limited')) {
    function run_memory_limited(int $mb, Closure $callback): mixed
    {
        $org = ini_get('memory_limit');

        ini_set('memory_limit', $mb.'M');

        $result = $callback();

        ini_set('memory_limit', $org);

        return $result;
    }
}
