<?php

return [
    'api_url' => env('FB_API_URL', 'https://graph.facebook.com/'),
    'api_url_write' => env('FB_API_URL_WRITE', 'https://browsergamelabs.com/adspire/graph.facebook.com.php'),
    'api_version' => env('FB_API_VERSION', 'v19.0'),
    'fb_kpi' => env('FB_FB_KPI', 'fb-kpi.dev.php'),
    'fb_kpi_account_update_launcher' => env('FB_FB_KPI_ACCOUNT_UPDATE_LAUNCHER', 'fb-kpi-account-update-launcher.dev.php'),
    'fb_kpi_account_update' => env('FB_FB_KPI_ACCOUNT_UPDATE', 'fb-kpi-account-update.dev.php'),
    'fb_auto_pause' => env('FB_FB_AUTO_PAUSE', 'fb-auto-pause.dev.php'),
];
