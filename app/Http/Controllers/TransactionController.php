<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transaction;
use App\DetailTransaction;

class TransactionController extends Controller
{
    //
    public function index() {
        $Trans = Transaction::where('user' , Auth::id())->get();
        return view('transaction' , ["Transaction" => $Trans]);
    }

    public function detail($id) {
        $Cart = DetailTransaction::where('transaction_id' , $id)->get();

        return view('cart' , ["Cart" => $Cart , "pages" => "detailtransaction"]);
    }
}
