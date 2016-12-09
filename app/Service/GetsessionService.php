<?php

namespace App\Service;


class GetsessionService
{
    public function getSession($key)
    {
        return (var_dump(session('employee')));
    }
}