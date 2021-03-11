<?php

namespace App\Http\Middleware\Database;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Connect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
		    $this->massage="Yes! Successfully connected to the DB: " 
			    	   . DB::connection()->getDatabaseName();
	    } 
	    else {
               die("Could not find the database. Please check your configuration.");
            }
	} 
	catch (\Exception $e) {
		die("Could not open connection to database server. 
		     Please check your configuration.".$e);
        }    	    
        return $next($request);
    }
}
