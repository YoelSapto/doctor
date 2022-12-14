<?php

namespace App\Http\Middleware;

use App\Models\ManagementAccess\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = \Auth::user();

        if (!app()->runningInConsole() && $user) {
            $roles = Role::with('permission')->get();
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permission as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }

            foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function (\App\Models\User $user)
                use ($roles) {
                    return count(array_intersect($user->role->pluck('id')
                        ->toArray(), $roles)) > 0;
                });
            }
        }

        return $next($request);
    }
}
