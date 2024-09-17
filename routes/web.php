<?php

use App\Livewire\Pages\Annotations;
use Illuminate\Support\Facades\Route;

Route::get('/', Annotations::class)->name('home');
