<?php

namespace App\Http\Controllers;

use App\Quote;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * /
    public function __construct()
    {
        $this->middleware('auth');
	}
	*/

    public function index()
	{
		$quotes = DB::table('quotes')->orderBy('created_at', 'desc')->take(20)->get();
		return view('index')->with('quotes', $quotes);
	}
	
    public function afficherTous()
	{
		return redirect('/');
	}
	
    public function afficher(int $n)
	{
		$quote = Quote::find($n);
		return view('afficher')->with('quote', $quote);
	}
	
    public function ajouter(Request $request)
	{
        if ( Auth::check() ) {
			
			if ( $request->input('quote') !== null ) {

				$quote = new Quote;
				$quote->content = $request->input('quote');
				$quote->user_id = Auth::id();
				$quote->save();
				
				$message = 'Votre citation a bien été ajouté !';

				return view('ajouter')->with('message', $message);

			} else {
				
				return view('ajouter')->with('message', '');
				
			}

			return redirect('/');
			
        }
	}
	
    public function supprimer(int $n)
	{
		
        if ( Auth::check() ) {
			
			$quote = Quote::find($n);
			return view('supprimer');
		}
	}
	
    public function modifier(int $n)
	{
        if ( Auth::check() ) {
			
			$quote = Quote::find($n);
			$quote->content = $request->input('quote');
			//updated_at
			return view('modifier')->with('quote', $quote);

		}
	}
	
    public function afficherUser(int $n)
	{
		$user = User::find($n);

		return view('afficherUser')->with('user', $user);
	}
}
