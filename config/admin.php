<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email admin (satu akun)
    |--------------------------------------------------------------------------
    |
    | Email ini menentukan siapa satu-satunya admin yang boleh login & akses
    | panel. Ambil dari .env agar tetap aman setelah config:cache.
    |
    */

    'email' => env('ADMIN_EMAIL'),

];
