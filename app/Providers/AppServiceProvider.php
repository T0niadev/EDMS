<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Department;
use App\Models\Foldera;
use App\Models\Folderb;
use App\Models\Folderc;
use App\Models\Folderd;
use App\Models\Content;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        
        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'd', Department::where('id', auth()->user()->department)->first(),
            );
        });

        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'fas', Foldera::where('department_id', auth()->user()->department)->whereNull('document')->orderBy('created_at', 'asc')->get(),
        );
        });

        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'im', Content::whereIn('ext', ['jpeg', 'jpg', 'png'])->where('user_id', auth()->user()->id)->get(),
            );
        });

        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'rp', Content::whereIn('ext', ['pdf','docx', 'doct', 'ppt'])->where('user_id', auth()->user()->id)->get(),
            );
        });

        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                
                'an', Content::whereIn('ext', ['csv', 'xlsx'])->where('user_id', auth()->user()->id)->get(),
            );
        });

        //admin
        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'fat', Department::orderBy('created_at', 'desc')->get(),
            );
        });
        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'iml', Content::whereIn('ext', ['jpeg', 'jpg', 'png'])->get(),
            );
        });

        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'rpl', Content::whereIn('ext', ['pdf','docx', 'doct', 'ppt'])->get(),
            );
        });

        view()->composer ('layouts.partials.sidebar', function ($view) {
            $view->with(
                'anl', Content::whereIn('ext', ['csv', 'xlsx'])->get(),
            );
        });

     

    }
}
