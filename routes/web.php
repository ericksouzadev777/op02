<?php

use App\Livewire\Pages\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');;
Route::get('/admin', \App\Livewire\Pages\Admin\Home\Index::class)->name('home.admin');;


