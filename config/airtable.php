<?php

return [
    'api_token' => env('FB_API_TOKEN'),
    'kpi_base_id' => env('FB_KPI_BASE_ID'),
    'automation_logs_table' => env('FB_AUTOMATION_LOGS_TABLE'),
    'ay_api_settings' => env('FB_AY_API_SETTINGS'),
    'fb_automation' => env('FB_FB_AUTOMATION'),
    'fb_accounts' => env('FB_FB_ACCOUNTS'),
    '[auto] kpi_update' => env('FB_AUTO_KPI_UPDATE'),
    'campaign' => env('FB_CAMPAIGN'),
    '[auto ss] fb_kpi' => env('FB_AUTO_SS_FB_KPI'),
    '[auto ss] fb_kpi_finalize' => env('FB_AUTO_SS_FB_KPI_FINALIZE'),
    '[auto] pause_fb_adsets' => env('FB_AUTO_PAUSE_FB_ADSETS'),
    '[auto] resume_fb_adsets_scheduled' => env('FB_AUTO_RESUME_FB_ADSETS_SCHEDULED'),
    '[auto] pause_tiktok_adsets' => env('FB_AUTO_PAUSE_TIKTOK_ADSETS'),
    '[auto] resume_tiktok_adsets_scheduled' => env('FB_AUTO_RESUME_TIKTOK_ADSETS_SCHEDULED'),
    'queue' => env('FB_QUEUE'),
    'queue_all' => env('FB_QUEUE_ALL'),
    'webhook_queue_1' => env('FB_WEBHOOK_QUEUE_1'),
    'webhook_queue_2' => env('FB_WEBHOOK_QUEUE_2'),
    'webhook_queue_3' => env('FB_WEBHOOK_QUEUE_3'),
];
