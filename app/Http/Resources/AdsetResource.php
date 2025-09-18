<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdsetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        // Assume json_data is already decoded into an array
        $jsonData = $this->json_data;

        // Get the latest object from the json_data array
        $latestData = end($jsonData);

        // Extract revenue and spend from the latest object
        $latestRevenue = $latestData['revenue'] ?? 0;
        $latestSpend = $latestData['spend'] ?? 0;

        return [
            'id' => $this->id,
            'account_id' => $this->account_id,
            'account_name' => $this->account_name,
            'tmz_city' => $this->tmz_city,
            'platform' => $this->platform,
            'json_data' => $jsonData,
            'last_updated_ts' => $this->last_updated_ts,
            'ts_created' => $this->ts_created,
            'revenue' => number_format($latestRevenue, 2),
            'spend' => number_format($latestSpend, 2),
            'profit' => number_format($latestRevenue - $latestSpend, 2),
        ];
    }
}
