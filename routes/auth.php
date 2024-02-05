use Illuminate\Http\Request;
 
/**
 * Get the path the user should be redirected to.
 */
protected function redirectTo(Request $request): string
{
    return route('login');
}