@extends('layouts.admin')
@section('title', 'Kelola Transaksi')

@section('main-content')
<nav class="navbar navbar-light px-0 py-3">
    <h1 class="h3 mb-4 text-gray-800">{{ __('Kelola Transaksi') }}</h1>
</nav>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row mx-1 mb-5">
    <div class="col-lg-12 bg-white rounded shadow">
        <div class="my-3 d-inline-block w-100">
            <h6 class="m-0 font-weight-bold text-danger">Daftar Transaksi</h6>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama User</th>
                        <th>Produk</th>
                        <th>Size</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $transaction->customer_name }}</td>
                        <td>{{ $transaction->product->title }}</td>
                        <td>{{ $transaction->size }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>@rupiah($transaction->quantity * $transaction->product->price)</td>
                        <td>
                            <span class="badge {{ $transaction->status === 'pending' ? 'bg-warning' : ($transaction->status === 'completed' ? 'bg-success' : 'bg-danger') }}">
                                {{ ucfirst($transaction->status) }}
                            </span>
                        </td>
                        <td>
                            <form action="{{ route('admin.transactions.update', $transaction->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <div class="input-group">
                                    <select name="status" class="form-control">
                                        <option value="pending" {{ $transaction->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="completed" {{ $transaction->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="cancelled" {{ $transaction->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="text-center mx-auto" style="width: fit-content;">
            {{$transactions->links()}}
        </div> --}}
    </div>
</div>
@endsection
