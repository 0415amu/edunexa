<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SchoolResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
{
    return [
        'id' => $this->id,
        'name' => $this->name,
        'code' => $this->code,
        'email' => $this->email,
        'phone' => $this->phone,
        'address' => $this->address,
        'city' => $this->city,
        'state' => $this->state,
        'pincode' => $this->pincode,
        'logo' => $this->logo,
        'status' => $this->status,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
}
}
