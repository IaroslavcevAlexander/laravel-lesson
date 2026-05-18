<?php

namespace App\View\Composers;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $view->with('users_cnt', 125);
    }
}
