<?php

namespace Spatie\FilamentMarkdownEditor;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Filament\Support\Assets\Js;

class MarkdownEditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-markdown-editor')
            ->hasAssets()
            ->hasViews();
    }

    public function bootingPackage()
    {
        FilamentAsset::register([
            Js::make('spatie-markdown-editor', __DIR__.'/../resources/dist/editor.js')
        ]);

        FilamentAsset::register([
            Css::make('fontawesomecss', 'https://pro.fontawesome.com/releases/v5.15.4/css/all.css'),
            Css::make('easymde', 'https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css'),
            Css::make('spatie-markdown-editor', __DIR__.'/../resources/css/editor.css')
        ]);
    }
}
