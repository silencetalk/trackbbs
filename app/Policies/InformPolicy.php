<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Inform;

class InformPolicy extends Policy
{
    public function update(User $user, Inform $inform)
    {
        // return $inform->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Inform $inform)
    {
        return true;
    }
}
