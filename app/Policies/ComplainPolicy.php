<?php

namespace App\Policies;

use App\Models\Complain;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ComplainPolicy
{
    public function create(User $user)
    {
        // dd($user->role);
        return $user->role === 'user';
    }
    
}