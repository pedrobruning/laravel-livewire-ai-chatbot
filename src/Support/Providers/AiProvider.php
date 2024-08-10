<?php

namespace PedroBruning\LivewireAiChatbot\Support\Providers;

interface AiProvider
{
    public function talk(string $message): string;
}
