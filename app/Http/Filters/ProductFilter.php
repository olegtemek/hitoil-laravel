<?php

namespace App\Http\Filters;

class ProductFilter extends QueryFilter
{
  public function brand($data)
  {
    return $this->builder->whereHas('brand', function ($q) use ($data) {
      $q->whereIn('brand_id', $data);
    });
  }

  public function volume($data)
  {
    return $this->builder->whereHas('volume', function ($q) use ($data) {
      $q->whereIn('volume_id', $data);
    });
  }

  public function viscosity($data)
  {

    return $this->builder->whereHas('viscosity', function ($q) use ($data) {
      $q->whereIn('viscosity_id', $data);
    });
  }
  public function type($data)
  {
    return $this->builder->whereHas('type', function ($q) use ($data) {
      $q->whereIn('type_id', $data);
    });
  }
}
