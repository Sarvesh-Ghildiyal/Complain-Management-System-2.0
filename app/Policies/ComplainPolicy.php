<?php

namespace App\Policies;

use App\Models\Complain;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ComplainPolicy
{
    /**
     * Determine whether the user can view any models.
     */
     /**
     * Run before any other authorization checks.
     *
     * @param  \App\Models\User  $user
     * @param  string  $ability
     * @return void|bool
     */
    public function before(User $user, $ability)
    {
        if ($user->role === 'admin') {
            return true;
        }

        // If you return null, the authorization will proceed to the next check.
        // If you return false here, all subsequent checks will be denied.
    }

}
