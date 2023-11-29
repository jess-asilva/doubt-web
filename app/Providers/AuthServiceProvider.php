<?php

namespace App\Providers;

use App\Models\Publication;
use App\Models\Schedule;
use App\Models\User;
use App\Policies\PublicationPolicy;
use App\Policies\SchedulePolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Publication::class => PublicationPolicy::class,
        User::class => UserPolicy::class,
        Schedule::class => SchedulePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::define('create-publication', [PublicationPolicy::class, 'create']);
        Gate::define('viewAny-user', [UserPolicy::class, 'viewAny']);
        Gate::define('create-schedule', [SchedulePolicy::class, 'create']);
        Gate::define('delete-schedule', [SchedulePolicy::class, 'delete']);
    }
}
