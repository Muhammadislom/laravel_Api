<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'img' => $this->img,
            'category' => $this->category,
//            'parent_category_id' => $this->category->parentCategory
//            'parent_category_id' => new ParentCategoryResource($this->category->parentCategory)
        ];
    }
}
