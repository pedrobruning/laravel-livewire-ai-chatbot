<?php

namespace PedroBruning\LivewireAiChatbot;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireAiChatbotServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-livewire-ai-chatbot')
            ->hasViews();
    }
}
