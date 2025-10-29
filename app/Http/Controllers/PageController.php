<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $meta_title = 'Home - My Site';
        $meta_description = 'Welcome to the home page.';

        return view('pages.home', compact('meta_title', 'meta_description'));
    }

    public function about()
    {
        $meta_title = 'About Us - My Site';
        $meta_description = 'Learn more about us.';

        return view('pages.about', compact('meta_title', 'meta_description'));
    }

    public function shop()
    {
        $meta_title = 'Shop - My Site';
        $meta_description = 'Browse our products.';

        return view('pages.shop', compact('meta_title', 'meta_description'));
    }

    public function contact_us()
    {
        $meta_title = 'Contact Us - My Site';
        $meta_description = 'Get in touch with us.';

        return view('pages.contact_us', compact('meta_title', 'meta_description'));
    }
}
