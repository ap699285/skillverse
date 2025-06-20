<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class AllowedRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();
        $role_id = Auth::user()->role_id;

        $isAllowed = DB::table('katalog_menu_validation as kmv')
            ->leftjoin('katalog_role_menu_validation as krmv', 'kmv.id', 'krmv.menu_validation_id')
            ->select(
                'kmv.id'
            )
            ->where('kmv.path', $path)
            ->where('krmv.role_id', $role_id)
            ->where('krmv.is_active', 1)
            ->first();

        if ($isAllowed) {
            return $next($request);
        } else {
            abort(403, 'Access Denied!');
        }
    }
}
