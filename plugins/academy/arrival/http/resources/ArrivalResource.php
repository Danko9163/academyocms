<?php namespace Academy\Arrival\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ArrivalResource extends Resource
{

    public function toArray($request)
    {
        return [
            'user_id'   => $this->user_id,
            'arrival'   => $this->arrival->toDateTimeString(),
        ];

        return $response;
    }
}
