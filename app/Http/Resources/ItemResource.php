<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\BrandResource;
use App\Http\Resources\SubcategoryResource;
class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

      public static $wrap = 'category';
     public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'codeno' => $this->codeno,
            'name' => $this->name,
            'photo' =>url($this->photo),
            'price'=>$this->price,
            'discount'=>$this->discount,
            'brand_id'=>new BrandResource($this->brand),
            'subcategory_id'=>new SubcategoryResource($this->subcategory),
            'detail'=>$this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
