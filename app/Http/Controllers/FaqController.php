<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Blog\Http\Controllers\BlogController;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        $blogPosts = app(BlogController::class)->getBlogPosts();

        return view('/faqs', compact('faqs', 'blogPosts'));
    }

// **note: When you return the same view from different methods,
// it's essentially overwriting the variables you passed in the previous method.
// Question: why i can't use different method to pass data on same view file??

    // public function showFAQPage()
    // {
    //     $blogPosts = app(BlogController::class)->getBlogPosts();

    //     // dd($blogPosts);
    //     return view('/faqs', compact('blogPosts'));
    // }
}
