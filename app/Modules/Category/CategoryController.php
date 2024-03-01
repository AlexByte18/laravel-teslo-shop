<?php

namespace Modules\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Resources\CategoryCollection;

class CategoryController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:sanctum');
    }

    public function index(Request $request)
    {
        $categories = Category::paginate();

        return new CategoryCollection($categories);
    }
}
