<?php

namespace PedroBruning\LivewireAiChatbot\Support;

use PedroBruning\LivewireAiChatbot\Support\Providers\AiProvider;

class ChatbotService
{
    private AiProvider $provider;

    public function __construct(AiProvider $provider)
    {
        $this->provider = $provider;
    }

    public function talk(string $message): string
    {
        return $this->provider->talk($message);
    }
}
