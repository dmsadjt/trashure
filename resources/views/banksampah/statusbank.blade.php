@extends('layouts.navbarBanks')
@section('title','Dashboard')
@section('content')


<h1 class="text-center mt-5">PILIH STATUS BANK ANDA</h1>

<div class="d-grid gap-3 col-4 mx-auto tombol">
    {{-- @foreach ($status as $s) --}}
    <button class="btn btn-primary mb-3" type="button"></button>
    <button class="btn btn-primary" type="button"></button>
    {{-- @endforeach --}}
</div>


@endsection
