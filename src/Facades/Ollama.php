<?php

namespace futuremeng\Ollama\Facades;

use Illuminate\Support\Facades\Facade;
use futuremeng\Ollama\Ollama as OllamaClient;

/**
 * @see OllamaClient
 */
class Ollama extends Facade {

    protected static function getFacadeAccessor(): string
    {
        return OllamaClient::class;
    }
}
