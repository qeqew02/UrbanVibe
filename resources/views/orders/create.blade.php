@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container mt-5">
        <h2>Formulir Pemesanan</h2>
        <hr>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="mb-3">
                <label for="customer_name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>
            <div class="mb-3">
                <label for="customer_contact" class="form-label">Kontak</label>
                <input type="text" class="form-control" id="customer_contact" name="customer_contact" required>
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control" id="size" name="size" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
        </form>
    </div>
</section>
@endsection
