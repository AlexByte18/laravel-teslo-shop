<?php

namespace Modules\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Requests\StoreCategoryRequest;
use Modules\Category\Resources\CategoryCollection;
use Modules\Category\Resources\CategoryResource;

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

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();

        $category = Category::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'user_id' => auth()->user()->id,
        ]);

        return new CategoryResource($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->noContent();
    }

    public function update(Category $category, StoreCategoryRequest $request)
    {
        $data = $request->validated();

        $category->update([
            'name' => $data['name'],
            'description' => $data['description']
        ]);

        return new CategoryResource($category);
    }
}
