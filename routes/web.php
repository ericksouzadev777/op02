<?php

use App\Livewire\Pages\Admin\Home\Index as HomeAdmin;
use App\Livewire\Pages\Funnel\Index as HomeFunnel;;
use App\Livewire\Pages\Admin\Funnel\Index as HomeFunnelAdmin;
use App\Livewire\Pages\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');;
Route::get('/admin', HomeAdmin::class)->name('home.admin');;

Route::get('/admin/funnel', HomeFunnelAdmin::class)->name('home.funnel.admin');;
Route::get('/admin/funnel/{funnelId}/step', HomeFunnelAdmin::class)->name('home.funnel.admin');;


Route::view('/funnel/1',  'funnel.step1')->name('funnel.step.1');
Route::view('/funnel/2',  'funnel.step2')->name('funnel.step.2');
Route::view('/funnel/3',  'funnel.step3')->name('funnel.step.3');
Route::view('/funnel/4',  'funnel.step4')->name('funnel.step.4');
Route::view('/funnel/5',  'funnel.step5')->name('funnel.step.5');
Route::view('/funnel/6',  'funnel.step6')->name('funnel.step.6');
Route::view('/funnel/7',  'funnel.step7')->name('funnel.step.7');
Route::view('/funnel/8',  'funnel.step8')->name('funnel.step.8');
Route::view('/funnel/9',  'funnel.step9')->name('funnel.step.9');
Route::view('/funnel/10', 'funnel.step10')->name('funnel.step.10');
Route::view('/funnel/11', 'funnel.step11')->name('funnel.step.11');
Route::view('/sacar', 'funnel.sacar')->name('funnel.sacar');
Route::view('/loading', 'funnel.loading')->name('funnel.loading');
Route::view('/pagar', 'funnel.pagar')->name('funnel.pagar');
