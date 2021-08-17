<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware {
    
    public function handle(Request $request, Closure $next) {
        $locale = $request->route('language');

        if (! in_array($locale, ['en', 'de', 'it'])) abort(404);

        App::setLocale($locale);
        return $next($request);
    }
}
