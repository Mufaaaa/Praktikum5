@extends('layout.guest')

@section('content')
<div class="ml-10 mt-20">
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Nama Produk</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Deskripsi Produk</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Harga Produk</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @if(count($nama) > 0)
                    @foreach ($nama as $index => $item)
                    <tr class="hover:bg-gray-100 transition duration-200">
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $item }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $desc[$index] ?? '-' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Rp {{ number_format($harga[$index] ?? 0, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center px-6 py-4 text-gray-500">Tidak ada data produk.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
