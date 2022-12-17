<?php 

namespace App\Services\Tools;

use App\Interfaces\FormatInterface;
use Illuminate\Database\Eloquent\Collection;

class PDFFormat implements FormatInterface
{

    public function format(Collection $data)
    {
        return "PDF formatted";

    }

    

}