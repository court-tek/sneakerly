<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ArticlePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->role_id = 1 || $user->role_id == 2;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Article $article): bool
    {
        return $user->role_id == 2 || (auth()->check() && $article->user_id === auth()->id());
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role_id == 2 || $user->role_id == 3;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Article $article): bool
    {
        return $user->role_id == 2 || (auth()->check() && $article->user_id == auth()->id());
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Article $article): bool
    {
        return $user->id === 2 || (auth()->check() && $article->user_id === auth()->id);
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Article $article): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can permanently delete the model.
     */
    // public function forceDelete(User $user, Article $article): bool
    // {
    //     //
    // }
}
