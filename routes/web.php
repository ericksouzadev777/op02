<?php

use App\Livewire\Pages\Admin\Home\Index as HomeAdmin;
use App\Livewire\Pages\Funnel\Index as HomeFunnel;;
use App\Livewire\Pages\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');;
Route::get('/admin', HomeAdmin::class)->name('home.admin');;
Route::get('/funnel', HomeFunnel::class)->name('funnel.home');;
