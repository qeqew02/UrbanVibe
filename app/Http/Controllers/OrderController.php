<?php
namespace App\Http\Controllers;

use App\Products;
use App\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    /**
     * Tampilkan daftar pesanan.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orders = Transaction::with('product')->where('user_id', auth()->id())->get(); // Mengambil transaksi berdasarkan user yang login
        return view('orders.index', compact('orders'));
    }

    /**
     * Form untuk membuat pemesanan produk tertentu.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $product = Products::findOrFail($id);
        return view('orders.create', compact('product'));
    }

    /**
     * Simpan pemesanan baru.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->id);        
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_name' => 'required|string|max:255',
            'customer_contact' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        // Menyimpan transaksi
        Transaction::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->user()->id,
            'customer_name' => $request->customer_name,
            'customer_contact' => $request->customer_contact,
            'size' => $request->size,
            'quantity' => $request->quantity,
            'status' => 'pending', // status awal pesanan adalah pending
        ]);

        return redirect()->route('order.create', $request->product_id)
                         ->with('success', 'Pesanan berhasil dibuat!');
    }
}
