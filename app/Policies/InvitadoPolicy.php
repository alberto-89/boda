<?php

namespace App\Policies;

use App\User;
use App\Invitado;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvitadoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pass(User $user, Invitado $invitado)
    {
        return $user->id == $invitado->user_id;
    }
}
