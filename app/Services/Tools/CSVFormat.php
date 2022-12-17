<?php 

namespace App\Services\Tools;

use App\Interfaces\FormatInterface;
use Illuminate\Database\Eloquent\Collection;

class CSVFormat implements FormatInterface
{

    public function format(Collection $data)
    {
        return "CSV formatted";

    }



}