<?php

namespace Imanghafoori\PasswordHistory\Observers;

use Imanghafoori\PasswordHistory\Facades\PasswordHistoryManager;

class UserObserver
{
    public function saved($user)
    {
        PasswordHistoryManager::logForUserModel($user);
    }
}
