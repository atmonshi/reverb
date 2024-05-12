<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('msgs', function ($user) {
    return true;
});