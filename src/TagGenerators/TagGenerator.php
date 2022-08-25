<?php

namespace Irujimee\Vite\TagGenerators;

use Irujimee\Vite\Chunk;

interface TagGenerator
{
    public function makeScriptTag(string $url, Chunk $chunk = null): string;

    public function makeStyleTag(string $url, Chunk $chunk = null): string;

    public function makePreloadTag(string $url, Chunk $chunk = null): string;
}
