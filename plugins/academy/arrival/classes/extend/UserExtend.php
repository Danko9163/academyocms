<?php namespace Academy\Arrival\Classes\Extend;

use RainLab\User\Models\User;

class UserExtend
{
    public static function userExtend_hasManyArrivals()
    {
        User::extend(function ($model) {
            $model->hasMany['arrivals'] = ['Academy\Arrival\Models\Arrival'];
        });
    }
}
