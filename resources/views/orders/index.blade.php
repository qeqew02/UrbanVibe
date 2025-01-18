@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container mt-5">
        <h2>Pesanan Saya</h2>
        <hr>
        @if($orders->isEmpty())
        <div class="alert alert-info">
            Anda belum melakukan pemesanan.
        </div>
        @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Foto Produk</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Harga Total</th>
                    <th>Tanggal Pesanan</th>
                    <th>Contact Admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $order->product->title }}
                    </td>
                    <td>
                        <img src="{{ asset($order->product->photo) }}" alt="{{ $order->product->title }}" width="100px">
                    </td>
                    <td>{{ $order->quantity }}</td>
                    <td>
                        <span class="badge {{ $order->status === 'pending' ? 'bg-warning' : ($order->status === 'completed' ? 'bg-success' : 'bg-danger') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td> @rupiah ($order->quantity * $order->product->price)</td>
                    <td>{{ $order->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="https://wa.me/6289699858993?text={{ urlencode('Halo Admin, saya ingin konfirmasi pesanan berikut: 
                    - Nama Produk: '.$order->product->title.'
                    - Jumlah: '.$order->quantity.'
                    - Total Harga: Rp '.number_format($order->quantity * $order->product->price, 0, ',', '.').'
                    - Tanggal Pesanan: '.$order->created_at->format('d M Y').'
                    Terima kasih!') }}" target="_blank">
                            Whatsapp
                        </a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</section>
@endsection
