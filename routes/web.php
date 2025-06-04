<?php

use App\Models\Pegawai;
use Livewire\Volt\Volt;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserCreate;
use App\Livewire\Pegawai\PegawaiEdit;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pegawai\PegawaiIndex;
use App\Livewire\Pegawai\PegawaiCreate;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('users', UserIndex::class)->name('users.index');
    Route::get('users/create', UserCreate::class)->name('users.create');
    Route::get('users/{id}/edit', UserEdit::class)->name('users.edit');

    Route::get('pegawai', PegawaiIndex::class)->name('pegawai.index');
    Route::get('pegawai/create', PegawaiCreate::class)->name('pegawai.create');
    Route::get('pegawai/{id}/edit', PegawaiEdit::class)->name('pegawai.edit');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
