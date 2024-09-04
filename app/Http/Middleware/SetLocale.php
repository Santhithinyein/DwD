public function handle($request, Closure $next)
{
    $locale = session('locale', config('app.locale'));
    app()->setLocale($locale);
    return $next($request);
}
