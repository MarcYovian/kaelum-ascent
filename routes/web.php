<?php

use App\Livewire\Pages\AboutComponent;
use App\Livewire\Pages\HomeComponent;
use App\Livewire\Pages\PortfolioComponent;
use App\Livewire\Pages\ServicesComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/portfolio', PortfolioComponent::class)->name('portfolio');
Route::get('/about', AboutComponent::class)->name('about');
