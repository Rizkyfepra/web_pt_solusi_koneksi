<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin email (seeding / referensi)
    |--------------------------------------------------------------------------
    |
    | Digunakan saat seed akun admin. Akses panel dicek lewat kolom users.role,
    | bukan email ini. Pastikan nilai ada di .env agar config:cache aman.
    |
    */

    'email' => env('ADMIN_EMAIL'),

];
