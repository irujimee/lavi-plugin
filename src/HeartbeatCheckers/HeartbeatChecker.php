<?php

namespace Irujimee\Vite\HeartbeatCheckers;

interface HeartbeatChecker
{
    public function ping(string $url, int $timeout): bool;
}
