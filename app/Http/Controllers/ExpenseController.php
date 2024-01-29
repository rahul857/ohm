<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function expense(){
        $expenses =Expense::all();
        return view ('Pages.Expense',compact('expenses'));
    }
    public function expenseForm(){
        return view('Backend.ExpenseForm');
    }

    public function expenestore(Request $request){


        //dd($request->all());
         //return redirect()->back();
         Expense::create([
             'User_ID'=>$request->user_id,
             'Title'=>$request->title,
             'Catrgory_ID'=>$request->category_id,
             'Expense_By'=>$request->expense_by,
             'Description'=>$request->description,
             'Amount'=>$request->amount,
             'Date'=>$request->date,

             
         ]);
 
         return redirect()->route('expense');
 }
}
