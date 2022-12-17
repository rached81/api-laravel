<?php
namespace App\Services\Category;
use App\Models\Category;
use Carbon\CarbonInterface;

class CategoryServices
{
    public function reportByPeriod(CarbonInterface $stratDate, CarbonInterface $endDate)
    {
        return  Category::whereBetween('created_at', [$stratDate, $endDate])
            ->latest()
            ->get();

             
    }


}

?>