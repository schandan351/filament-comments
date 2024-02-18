<?php

namespace Parallax\FilamentComments\Policies;

use Illuminate\Contracts\Auth\Authenticatable;

class FilamentCommentPolicy
{
    public function viewAny(Authenticatable $user): bool
    {
        return true;
    }

    public function view(Authenticatable $user, $filamentComment): bool
    {
        return true;
    }

    public function create(Authenticatable $user): bool
    {
        return true;
    }

    public function update(Authenticatable $user, $filamentComment): bool
    {
        return false;
    }

    public function delete(Authenticatable $user, $filamentComment): bool
    {
        return $user->id === $filamentComment->user_id;
    }

    public function deleteAny(Authenticatable $user): bool
    {
        return false;
    }

    public function restore(Authenticatable $user, $filamentComment): bool
    {
        return false;
    }

    public function restoreAny(Authenticatable $user): bool
    {
        return false;
    }

    public function forceDelete(Authenticatable $user, $filamentComment): bool
    {
        return false;
    }

    public function forceDeleteAny(Authenticatable $user): bool
    {
        return false;
    }
}
