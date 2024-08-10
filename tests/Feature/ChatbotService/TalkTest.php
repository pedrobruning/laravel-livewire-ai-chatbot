<?php

use PedroBruning\LivewireAiChatbot\Support\ChatbotService;
use PedroBruning\LivewireAiChatbot\Support\Providers\AiProvider;

it('should answer when it receives a message input', function () {
    //Arrange
    $provider = mock(AiProvider::class)
        ->shouldReceive('talk')
        ->andReturn('This is an answer');
    $sut = new ChatbotService($provider->getMock());

    //Act
    $result = $sut->talk('Test message');

    //Assert
    expect($result)->toBe('This is an answer');
});
