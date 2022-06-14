<?php

namespace App\Actions;

use App\Events\UserUpdated;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Lorisleiva\Actions\Concerns\AsAction;

class UserUpdateTask
{
    use AsAction;

    public function handle(User $user)
    {
        Log::info("User $user->email updated!");
    }

    public function asListener(UserUpdated $event)
    {
        $this->handle($event->user);
    }
}
