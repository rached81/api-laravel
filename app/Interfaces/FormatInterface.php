<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface FormatInterface
{

    public function format(Collection $data);

}


