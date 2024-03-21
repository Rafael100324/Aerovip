<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return view('pagamento', compact('cards'));
    }

    public function destroy($id)
    {
        $card = Card::findOrFail($id);
        $card->delete();
        return redirect()->route('voo');
    }

    protected $card;

    public function construct(Card $card)
    {
        $this->card = $card;
    }
}
