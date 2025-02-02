<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('create-admin', function () {
    if (!Role::where('name', 'admin')->exists()) {
        Role::create(['name' => 'admin']);
    }

    $user = User::create([
        'name' => 'max',
        'email' => 'druss.altos@gmail.com',
        'password' => Hash::make('78951021'),
    ]);

    $user->assignRole('admin');

    $this->info('Admin user created successfully!');
});