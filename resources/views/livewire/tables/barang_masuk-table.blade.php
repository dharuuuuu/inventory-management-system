<div class="card">
    <div class="card-header">
        <div>
            <h3 class="card-title">
                {{ __('Barang Masuk') }}
            </h3>
        </div>

        <div class="card-actions">
            <x-action.close route="{{ route('PDFbarang_masuk') }}" />
            <x-action.create route="{{ route('barang_masuk.create') }}" />
        </div>
    </div>

    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="text-secondary">
                Show
                <div class="mx-2 d-inline-block">
                    <select wire:model.live="perPage" class="form-select form-select-sm" aria-label="result per page">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="25">25</option>
                    </select>
                </div>
                entries
            </div>
            <div class="ms-auto text-secondary">
                Search:
                <div class="ms-2 d-inline-block">
                    <input type="text" wire:model.live="search" class="form-control form-control-sm" aria-label="Search invoice">
                </div>
            </div>
        </div>
    </div>

    <x-spinner.loading-spinner/>

    <div class="table-responsive">
        <table wire:loading.remove class="table table-bordered card-table table-vcenter text-nowrap datatable">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('id')" href="#" role="button">
                        {{ __('Id') }}
                        @include('inclues._sort-icon', ['field' => 'id'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('name')" href="#" role="button">
                        {{ __('Name') }}
                        @include('inclues._sort-icon', ['field' => 'name'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('quantity_in')" href="#" role="button">
                        {{ __('Quantity In') }}
                        @include('inclues._sort-icon', ['field' => 'quantity_in'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('created_at')" href="#" role="button">
                        {{ __('Date') }}
                        @include('inclues._sort-icon', ['field' => 'created_at'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    {{ __('Action') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($barang_masuk as $barang_masuk)
                <tr>
                    <td class="align-middle text-center">
                        {{ $barang_masuk->id }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $barang_masuk->name }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $barang_masuk->quantity_in }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $barang_masuk->created_at }}
                    </td>
                    <td class="align-middle text-center">
                        <x-button.show class="btn-icon" route="{{ route('barang_masuk.show', $barang_masuk) }}"/>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="align-middle text-center" colspan="8">
                        No results found
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{-- <div class="card-footer d-flex align-items-center">
        <p class="m-0 text-secondary">
            Showing <span>{{ $barang_masuk->firstItem() }}</span> to <span>{{ $barang_masuk->lastItem() }}</span> of <span>{{ $barang_masuk->total() }}</span> entries
        </p>

        <ul class="pagination m-0 ms-auto">
            {{ $barang_masuk->links() }}
        </ul>
    </div> --}}
</div>
