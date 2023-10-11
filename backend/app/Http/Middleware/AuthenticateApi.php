<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class AuthenticateApi
{
    public function handle($request, Closure $next)
    {
        // Dapatkan nilai api_token dari header atau request parameters sesuai kebutuhan Anda
        $apiToken = $request->header('api_token') ?? $request->input('api_token');

        if (!$apiToken) {
            // Jika api_token tidak ada, pengguna belum login
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Cek apakah api_token sesuai dengan pengguna yang valid
        $user = User::where('api_token', $apiToken)->first();

        if (!$user) {
            // Jika tidak ada pengguna dengan api_token yang sesuai, pengguna belum login
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Jika api_token valid, lanjutkan ke tindakan berikutnya
        return $next($request);
    }
}
 