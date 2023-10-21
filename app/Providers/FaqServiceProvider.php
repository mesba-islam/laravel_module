<?php

namespace App\Http\Controllers\FaqController;
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Faq;

class FaqServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('faqData', function ($app) {
            return Faq::all(); // Retrieve FAQ data as needed
        });
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $faqData = \App\Models\faq::all(); // Replace with your actual query to retrieve FAQ data.
        view()->share('faqData', $faqData);
    }
}
