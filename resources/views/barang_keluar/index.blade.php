@extends('layouts.tabler')

@section('content')
<div class="page-body">
    @if($barang_keluar->isEmpty())
        <x-empty
            title="No Barang Keluar Found"
            message="Try adjusting your search or filter to find what you're looking for."
            button_label="{{ __('Add your first Customer') }}"
            button_route="{{ route('barang_keluar.create') }}"
        />
    @else
        <div class="container-xl">

            {{---
            <div class="card">
                <div class="card-body">
                    <livewire:power-grid.customers-table/>
                </div>
            </div>
            ---}}

            @livewire('tables.barang_keluar-table')
        </div>
    @endif
</div>
@endsection
