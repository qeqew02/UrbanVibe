<?php 
namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('product', 'user')->get(); // Ambil semua transaksi
        return view('cms.transactions.index', compact('transactions'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        $transaction->update(['status' => $request->status]);

        return redirect()->route('admin.transactions.index')->with('success', 'Status transaksi berhasil diperbarui.');
    }
}
