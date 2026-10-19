<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Hanya 1 akun admin (email = config admin.email) yang boleh mengelola panel.
        Gate::define('manage-gallery', function (User $user) {
            return $user->isAdmin();
        });
    }
}