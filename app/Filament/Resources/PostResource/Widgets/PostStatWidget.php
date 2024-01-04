<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("All Posts", Post::count()),
        ];
    }
}
