<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles(['admin', 'Pemerintah Kecamatan Laguboti']);
        });
        Gate::define('edit-users', function($user){
            return $user->hasAnyRoles(['admin', 'Pemerintah Kecamatan Laguboti']);
        });
        Gate::define('kelola-pengaduan', function($user){
            return $user->hasAnyRoles(['Pemerintah Desa Sitoluama', 'Pemerintah Kecamatan Laguboti']);
        });
        Gate::define('terima-pengaduan', function($user){
            return $user->hasAnyRoles(['Pemerintah Desa Sitoluama', 'Pemerintah Kecamatan Laguboti']);
        });
        Gate::define('teruskan-pengaduan', function($user){
            return $user->hasRole('Pemerintah Desa Sitoluama');
        });
        Gate::define('tolak-pengaduan', function($user){
            return $user->hasAnyRoles(['Pemerintah Desa Sitoluama', 'Pemerintah Kecamatan Laguboti']);
        });
        Gate::define('pengaduan-masuk', function($user){
            return $user->hasAnyRoles(['Pemerintah Desa Sitoluama', 'Pemerintah Kecamatan Laguboti']);
        });
        Gate::define('pengaduan-diproses', function($user){
            return $user->hasRole(['Pemerintah Desa Sitoluama']);
        });
        Gate::define('pengaduan-diteruskan', function($user){
            return $user->hasRole(['Pemerintah Kecamatan Laguboti']);
        });
        Gate::define('delete-users', function($user){
            return $user->hasRole('admin');
        });
        Gate::define('edit-pengaduan', function($user){
            return $user->hasRole('user');
        });
        Gate::define('hapus-pengaduan', function($user){
            return $user->hasRole('user');
        });
        Gate::define('tambah-pengaduan', function($user){
            return $user->hasRole('user');
        });
        Gate::define('list-pengaduan', function($user){
            return $user->hasAnyRoles(['Pemerintah Desa Sitoluama', 'Pemerintah Kecamatan Laguboti', 'user']);
        });
        
        Gate::define('rekapitulasi-pengaduan', function($user){
            return $user->hasAnyRoles(['Pemerintah Desa Sitoluama, Pemerintah Kecamatan Laguboti, Admin']);
        });
    }
}
