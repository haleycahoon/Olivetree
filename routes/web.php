<?php
use Illuminate\Support\Facades\Route;
///////////////////////////////////////////////////////////////////////////////////
// HEADER links
/////////////////////////////////////////////////
// nav bar links
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('Men', function () {
    return view('men');
})->name('men');

Route::get('Women', function () {
    return view('women');
})->name('women');

Route::get('Accessories', function () {
    return view('accessories');
})->name('accessories');

Route::get('Toys', function () {
    return view('toys');
})->name('toys');
/////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////
// FOOTER links
////////////////////////////////////////////////////////
// customer service section
Route::get('Contact Us', function () {
    return view('footerpages.customerservice.contactus');
})->name('contactus');

Route::get('Shipping Information', function () {
    return view('footerpages.customerservice.shippinginfo');
})->name('shippinginfo');

Route::get('Track Your Order', function () {
    return view('footerpages.customerservice.trackorder');
})->name('trackorder');

Route::get('Returns & Exchanges', function () {
    return view('footerpages.customerservice.returnsandexchanges');
})->name('returnsandexchanges');
////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
// helpful links section
Route::get('FAQS', function () {
    return view('footerpages.helpful.faqs');
})->name('faqs');

Route::get('Help', function () {
    return view('footerpages.helpful.help');
})->name('help');

Route::get('Sign In', function () {
    return view('footerpages.helpful.signin');
})->name('signin');

Route::get('Rewards', function () {
    return view('footerpages.helpful.rewards');
})->name('rewards');

Route::get('Wishlist', function () {
    return view('footerpages.helpful.wishlist');
})->name('wishlist');
////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
// about section
Route::get('About Us', function () {
    return view('footerpages.about.aboutus');
})->name('aboutus');

Route::get('Our Team', function () {
    return view('footerpages.about.ourteam');
})->name('ourteam');

Route::get('Our Mission', function () {
    return view('footerpages.about.ourmission');
})->name('ourmission');

Route::get('Careers', function () {
    return view('footerpages.about.careers');
})->name('careers');
////////////////////////////////////////////////////////

////////////////////////////////////////////////////////
// site info section
Route::get('Privacy Policy', function () {
    return view('footerpages.siteinfo.privacypolicy');
})->name('privacypolicy');

Route::get('Terms of Service', function () {
    return view('footerpages.siteinfo.termsofservice');
})->name('termsofservice');
////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////
