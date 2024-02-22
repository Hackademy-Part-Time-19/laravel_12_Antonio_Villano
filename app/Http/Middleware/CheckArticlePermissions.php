<?php

namespace App\Http\Middleware;

use App\Models\Article;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckArticlePermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        // per verificare se l'utente può modificare l'articolo vado a usare il parametro $request->id per recuperare il modello e lo comparo con quello dell'utente loggato
        if(auth()->user()->id == Article::find($request->article)->user_id){
            return $next($request);
        }
        //nel caso non si verifichi vado a reindirizzare con il messaggio di blocco
        return redirect()->back()->with(['delete'=>'Non hai il permesso per effettuare questa operazione']);
    }
}
