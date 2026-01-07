<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ============================================
// HOME ROUTE
// ============================================
Route::get('/', function () {
    return view('index');
})->name('home');

// ============================================
// TOP MENU ROUTES
// ============================================
Route::get('/blog', function () {
    return view('Blog');
})->name('blog');

Route::get('/upgrade', function () {
    return view('Upgrade');
})->name('upgrade');

Route::get('/community', function () {
    return view('Community');
})->name('community');

Route::get('/community/list', function () {
    return view('CommunityList');
})->name('community.list');

// ============================================
// DASHBOARD ROUTES
// ============================================
Route::prefix('dashboard')->group(function () {
    Route::get('/getting-started', function () {
        return view('DashboardGettingStarted');
    })->name('dashboard.getting.started');
    
    Route::get('/analysis', function () {
        return view('DashboardAnalysis');
    })->name('dashboard.analysis');
});

// ============================================
// SERVICES ROUTES
// ============================================
Route::prefix('services')->group(function () {
    // Database Routes
    Route::get('/database', function () {
        return view('ServicesDatabase');
    })->name('services.database');
    
    Route::get('/database/add', function () {
        return view('ServicesDatabaseAdd');
    })->name('services.database.add');
    
    Route::get('/database/detail', function () {
        return view('ServicesDatabaseDetail');
    })->name('services.database.detail');
    
    // Storage Routes
    Route::get('/storage', function () {
        return view('Storage');
    })->name('services.storage');
    
    Route::get('/storage/folder', function () {
        return view('Services.StorageFolder');
    })->name('services.storage.folder');
    
    // Hosting Route
    Route::get('/hosting', function () {
        return view('Services.Hosting');
    })->name('services.hosting');
    
    // Users Route
    Route::get('/users', function () {
        return view('Services.Users');
    })->name('services.users');
});

// ============================================
// ACCOUNT ROUTES
// ============================================
Route::prefix('account')->group(function () {
    Route::get('/settings', function () {
        return view('Account.Settings');
    })->name('account.settings');
    
    Route::get('/billing', function () {
        return view('Account.Billing');
    })->name('account.billing');
    
    Route::get('/security', function () {
        return view('Account.Security');
    })->name('account.security');
});

// ============================================
// SUPPORT ROUTES
// ============================================
Route::prefix('support')->group(function () {
    // Docs Routes
    Route::get('/docs', function () {
        return view('Support.Docs');
    })->name('support.docs');
    
    Route::get('/docs/detail', function () {
        return view('Support.DocsDetail');
    })->name('support.docs.detail');
    
    // Knowledge Base Route
    Route::get('/knowledge-base', function () {
        return view('Support.KnowledgeBase');
    })->name('support.knowledge.base');
    
    // Tickets Routes
    Route::get('/tickets', function () {
        return view('Support.Tickets');
    })->name('support.tickets');
    
    Route::get('/tickets/detail', function () {
        return view('Support.TicketsDetail');
    })->name('support.tickets.detail');
});

