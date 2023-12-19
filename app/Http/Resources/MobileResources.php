<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MobileResources extends JsonResource  
{

  public function __construct($resource)
  {
    parent::__construct($resource);
  }

  public function toArray($request)
  {
    return $this->resource; 
  }

}