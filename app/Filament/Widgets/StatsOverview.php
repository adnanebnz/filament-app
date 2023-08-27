<?php

namespace App\Filament\Widgets;

use Filament\Forms\Components\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $usersCount = \App\Models\User::count();
        $postsCount = \App\Models\Post::count();
        $categoriesCount = \App\Models\Category::count();
        return [
            Stat::make('Total Users', $usersCount),
            Stat::make('Total Posts', $postsCount),
            Stat::make('Total Categories', $categoriesCount),
        ];
    }
}
