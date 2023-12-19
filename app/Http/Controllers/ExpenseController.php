<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function expense(){
        return view ('Pages.Expense');
    }
    public function expenseForm(){
        return view('Backend.ExpenseForm');
    }
}
