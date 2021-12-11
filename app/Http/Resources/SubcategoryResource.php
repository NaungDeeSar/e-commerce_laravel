<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CategoryResource;
class SubcategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
      public static $wrap = 'subcategory';
 public function toArray($request)
  {
      return [
          'id' => $this->id,
          'name' => $this->name,
          'category_id' =>$this->category_id,
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at,
      ];
  }
}
