<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Vérifier si l'utilisateur a le rôle admin
        if (Auth::user()->role !== 'admin') {
            // Si c'est une requête AJAX/API, retourner 403 JSON
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Accès refusé. Vous devez être administrateur.'
                ], 403);
            }

            // Sinon, rediriger vers l'accueil avec un message d'erreur
            return redirect('/')
                ->with('error', 'Accès refusé. Vous devez être administrateur.');
        }

        return $next($request);
    }
}
