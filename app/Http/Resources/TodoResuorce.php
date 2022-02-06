<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;


class TodoResuorce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $date = $this->created_at;

        return [
            'title' => '타이틀 : ' . $this->title,
            'conetnet' => '컨텐트 : ' . $this->content,
            'create_at' => Carbon::parse($date)->diffForHumans()
        ];
        //return parent::toArray($request);
    }
}
