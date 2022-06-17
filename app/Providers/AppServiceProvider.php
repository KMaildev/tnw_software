<?php

namespace App\Providers;

use App\Models\FollowUp;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity;

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
        $today = date("Y-m-d");
        $follow_up_total = FollowUp::where('follow_up_date', $today)
            ->count();
        view()->share('follow_up_total', $follow_up_total);


        $activitieslogs = Activity::select('log_name')
            ->groupBy('log_name')
            ->get();
        view()->share('activitieslogs', $activitieslogs);
    }
}
