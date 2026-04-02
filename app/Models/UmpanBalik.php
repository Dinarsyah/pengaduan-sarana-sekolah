<?php

namespace App\Models;

use App\Models\User;

public function admin()
{
    return $this->belongsTo(User::class, 'admin_id');
}