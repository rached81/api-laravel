<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Services\Tools\PDFFormat;
use App\Services\Category\CategoryServices;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryServices;
    private $pDFFormat;

    public function __construct(CategoryServices $categoryServices, PDFFormat $pDFFormat)
    {
        $this->categoryServices = $categoryServices;
        $this->pDFFormat = $pDFFormat;
        
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::orderByDesc('created_at')->get();
        return $categories->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(Category::create($request->all()))
       {
        return response()->json([
                'success' => 'Catégorie créée avec succès'
            ], 200);
       }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
        //->response()->json()
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($category->update($request->all()))
       {
        return response()->json([
                'success' => 'Catégorie Modifiée avec succès'
            ], 200);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateReportPDF()
    {
   
        $categories = $this->categoryServices->reportByPeriod(now()->subMonths(3), now());
        // return $categories->toJson(JSON_PRETTY_PRINT);

         return response()->json(['data'  => $this->pDFFormat->format($categories)], 200);
    }
}
