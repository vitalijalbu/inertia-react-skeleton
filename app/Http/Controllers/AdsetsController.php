<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdsetResource;
use App\Models\Adset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class AdsetsController extends Controller
{

    public function index()
    {
        $data = Adset::select(
            'adset_id',
            'adsets_analytics.json_data',
            'adsets_analytics.daily_json_data',
            'account_analytics.tmz_city',
            'adsets_analytics.campaign_id',
            'adsets_analytics.last_updated_ts',
            'adsets_analytics.adset_name',
            'adsets_analytics.campaign_name',
            'account_analytics.account_id',
            'account_analytics.account_name'
        )
            ->leftJoin('account_analytics', 'adsets_analytics.account_id', '=', 'account_analytics.account_id')
            ->where(function ($query) {
                $query->where('adsets_analytics.last_updated_ts', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 8 DAY)'))
                    ->orWhereNull('adsets_analytics.last_updated_ts');
            })
            ->limit(6000)
            ->get();

        // Transform the data using the AccountResource
        $res = AdsetResource::collection($data);

        // Your logic for displaying a specific listing and its similar products
        return Inertia::render('adsets/index', ['data' => $res]);
    }

    public function view($slug)
    {
        // Get the specific listing by ID
        $data = Adset::where('adset_id', $slug)
            ->firstOrFail();
        // Your logic for displaying a specific listing and its similar products
        return Inertia::render('adsets/view', ['data' => $data]);
    }

}
