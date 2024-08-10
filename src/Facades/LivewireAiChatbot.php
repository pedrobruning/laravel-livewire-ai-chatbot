<?php

namespace PedroBruning\LivewireAiChatbot\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PedroBruning\LivewireAiChatbot\LivewireAiChatbot
 */
class LivewireAiChatbot extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PedroBruning\LivewireAiChatbot\LivewireAiChatbot::class;
    }
}
