<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * @OA\Info(
 *     title="Auth API Laravel 11",
 *     version="1.0.0",
 *     description="Dokumentasi untuk autentikasi API menggunakan Laravel 11 dan JWT (JSON Web Token). API ini menyediakan endpoint untuk login, register, logout, dan mendapatkan profil pengguna.",
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 */
class Controller 
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
