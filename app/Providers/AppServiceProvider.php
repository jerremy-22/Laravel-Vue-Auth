<?php
use Laravel\Sanctum\Sanctum;

class AppServiceProvider
{
    public function register(): void
    {
        Sanctum::ignoreMigrations();
    }
}
