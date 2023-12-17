@extends('layouts.tabler')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center mb-3">
            <div class="col">
                <h2 class="page-title">
                    {{ __('Create Barang Masuk') }}
                </h2>
            </div>
        </div>

        @include('partials._breadcrumbs')
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            <form action="{{ route('barang_masuk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">
                                    {{ __('Barang Masuk Details') }}
                                </h3>

                                <div class="row row-cards">
                                    <div class="col-md-12">
                                        <div class="col-sm-6 col-md-12">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">
                                                    Product name
                                                    <span class="text-danger">*</span>
                                                </label>
    
                                                @if ($product->count() === 1)
                                                    <select name="name" id="name"
                                                            class="form-select @error('name') is-invalid @enderror"
                                                            readonly
                                                    >
                                                        @foreach ($product as $product)
                                                            <option value="{{ $product->name }}" selected>
                                                                {{ $product->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <select name="name" id="name"
                                                            class="form-select @error('name') is-invalid @enderror"
                                                    >
                                                        <option selected="" disabled="">
                                                            Select a Product:
                                                        </option>
    
                                                        @foreach ($product as $product)
                                                            <option value="{{ $product->name }}" @if(old('name') == $product->name) selected="selected" @endif>
                                                                {{ $product->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                @endif
    
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <x-input name="quantity_in" :required="true"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">
                                    {{ __('Save') }}
                                </button>

                                <a class="btn btn-outline-warning" href="{{ route('barang_masuk.index') }}">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@pushonce('page-scripts')
    <script src="{{ asset('assets/js/img-preview.js') }}"></script>
@endpushonce
