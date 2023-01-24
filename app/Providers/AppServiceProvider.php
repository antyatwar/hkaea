<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        View::composer('*', function ($view) {
            View::share('title', __(ucfirst(Route::getCurrentRoute()?->getName())));
        });

        Filament::serving(function () {
            Filament::registerViteTheme('resources/css/filament.css');
        });

        Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
            return $builder
                ->items([
                    NavigationItem::make(__('Dashboard'))
                        ->icon('heroicon-o-home')
                        ->activeIcon('heroicon-s-home')
                        ->isActiveWhen(fn (): bool => request()->routeIs('filament.pages.dashboard'))
                        ->url(route('filament.pages.dashboard')),
                ])
                ->groups([
                    NavigationGroup::make(__('Competitions'))
                        ->items([
                            NavigationItem::make(__('Competitions'))
                                ->icon('heroicon-o-lightning-bolt')
                                ->activeIcon('heroicon-s-lightning-bolt')
                                ->badge(\App\Models\Competition::count())
                                ->isActiveWhen(fn (): bool => request()->routeIs('filament.resources.competitions.*'))
                                ->url(route('filament.resources.competitions.index')),
                        ]),
                    NavigationGroup::make(__('Members'))
                        ->items([
                            NavigationItem::make(__('Users'))
                                ->icon('heroicon-o-user')
                                ->activeIcon('heroicon-s-user')
                                ->badge(\App\Models\User::count())
                                ->isActiveWhen(fn (): bool => request()->routeIs('filament.resources.users.*'))
                                ->url(route('filament.resources.users.index')),
                        ]),
                    NavigationGroup::make(__('News'))
                        ->items([
                            NavigationItem::make(__('Posts'))
                                ->icon('heroicon-o-pencil-alt')
                                ->activeIcon('heroicon-s-pencil-alt')
                                ->badge(\App\Models\Post::count())
                                ->isActiveWhen(fn (): bool => request()->routeIs('filament.resources.posts.*'))
                                ->url(route('filament.resources.posts.index')),
                            NavigationItem::make(__('Categories'))
                                ->icon('heroicon-o-collection')
                                ->activeIcon('heroicon-s-collection')
                                ->badge(\App\Models\Category::count())
                                ->isActiveWhen(fn (): bool => request()->routeIs('filament.resources.categories.*'))
                                ->url(route('filament.resources.categories.index')),
                        ]),
                ]);
        });
    }
}
