<?php

namespace App\Filament\Resources\ContactResource\Widgets;

use App\Models\Contact;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContactOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Get current date/time
        $now = Carbon::now();

        // Get the start of the current month, week, and today
        $startOfMonth = $now->copy()->startOfMonth();
        $startOfWeek = $now->copy()->startOfWeek();
        $startOfDay = $now->copy()->startOfDay();

        // Get the end of the current month (to use for total contacts in the month)
        $endOfMonth = $now->copy()->endOfMonth();

        // --- Monthly Data ---
        $monthChartData = [];
        for ($i = 0; $i < $now->day; $i++) {
            $date = $startOfMonth->copy()->addDays($i);
            $contactCount = Contact::whereDate('created_at', $date)->count();
            $monthChartData[] = $contactCount;
        }

        // --- Weekly Data ---
        $weekChartData = [];
        for ($i = 0; $i < 7; $i++) {
            $date = $startOfWeek->copy()->addDays($i);
            $contactCount = Contact::whereDate('created_at', $date)->count();
            $weekChartData[] = $contactCount;
        }

        // --- Daily Data ---
        $todayChartData = [
            $contactCount = Contact::whereDate('created_at', $startOfDay)->count()
        ];

        // --- Stats ---
        return [
            Stat::make('Total Contacts for the Month', Contact::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count())
                ->label('Total Contacts this Month')
                ->value(Contact::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count())
                ->description('Total contacts added this month')
                ->icon('heroicon-o-users')
                ->color('success')
                ->chart($monthChartData), // Line chart for the entire month

            Stat::make('Total Contacts for the Week', Contact::whereBetween('created_at', [$startOfWeek, $now])->count())
                ->label('Total Contacts this Week')
                ->value(Contact::whereBetween('created_at', [$startOfWeek, $now])->count())
                ->description('Total contacts added this week')
                ->icon('heroicon-o-users')
                ->color('primary')
                ->chart($weekChartData), // Line chart for the current week

            Stat::make('Total Contacts Today', Contact::whereDate('created_at', $startOfDay)->count())
                ->label('Total Contacts Today')
                ->value(Contact::whereDate('created_at', $startOfDay)->count())
                ->description('Total contacts added today')
                ->icon('heroicon-o-users')
                ->color('warning')
                ->chart($todayChartData), // Line chart for today
        ];
    }

    protected function getWidgetAttributes(): array
    {
        return [
            'class' => 'mx-auto w-full md:w-1/2', // Center the widget with Tailwind
        ];
    }
}
