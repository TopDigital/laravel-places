<?php

namespace TopDigital\Places\Policies;

use TopDigital\Places\Models\Place;
use TopDigital\Auth\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class PlacePolicy
{
    use HandlesAuthorization;

    public function index(?User $user) : bool
    {
        return true;
    }

    public function view(?User $user) : bool
    {
        return true;
    }

    public function create(?User $user) : bool
    {
        return $user->can('create place');
    }

    public function update(?User $user, Place $updatedPlace) : bool
    {
        return $user->can('update place');
    }

    public function delete(?User $user, Place $deletedPlace) : bool
    {
        return $user->can('delete place');
    }
}
