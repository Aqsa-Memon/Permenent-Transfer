<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');  
});

Route::get('/blog', function () {
    return view('Blog'); 
});
Route::get('/upgrade', function () {
    return view('Upgrade'); 
});

Route::get('/account.billing', function () {
    return view('Account.Billing');
});

Route::get('/account.security', function () {
    return view('Account.Security');
});

Route::get('/account.settings', function () {
    return view('Account.Settings');
});

Route::get('/community', function () {
    return view('Community');
});

Route::get('/community.list', function () {
    return view('CommunityList');
});

Route::get('/dashboard.analysis', function () {
    return view('Dashboard.Analysis');
});

Route::get('/dashboard.gettingstarted', function () {
    return view('Dashboard.GettingStarted');
});

Route::get('/services.database', function () {
    return view('Services.Database');
});

Route::get('/services.databaseadd', function () {
    return view('Services.DatabaseAdd');
});

Route::get('/services.databasedetail', function () {
    return view('Services.DatabaseDetail');
});

Route::get('/services.hosting', function () {
    return view('Services.Hosting');
});

Route::get('/services.storage', function () {
    return view('Services.Storage');
});

Route::get('/services.storagefolder', function () {
    return view('Services.StorageFolder');
});

Route::get('/services.users', function () {
    return view('Services.Users');
});

Route::get('/support.docs', function () {
    return view('Support.Docs');
});

Route::get('/support.docsdetail', function () {
    return view('Support.DocsDetail');
});

Route::get('/support.knowledgebase', function () {
    return view('Support.KnowledgeBase');
});

Route::get('/support.tickets', function () {
    return view('Support.Tickets');
});

Route::get('/support.ticketsdetail', function () {
    return view('Support.TicketsDetail');
});