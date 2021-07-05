<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl to-gray-100 leading-tight">
        {{$title}}
    </h2>

    <a href="{{ route('databuku.create') }}">
        <button class="px-2 py-1 mb-2 mt-3 text-sm rounded text-green-600 border border-green-600 hover:bg-green-600 hover:text-white"><i class="fas fa-plus pr-2"></i>Tambah</button>
    </a>
    <table class="min-w-full divide-y divide-gray-200 overflow-x-scroll" height="5">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Judul Buku
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Jumlah Buku
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ISBN
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Klasifikasi
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Kode Buku
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Kode Lemari
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php $no = 1; ?>
            @foreach ($databuku as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$no}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->judul_buku}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->jumlah_buku}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->ISBN}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->klasifikasi}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->kode_buku}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->kode_lemari}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <form action="{{route('databuku.destroy', $item->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin menghapus data ini ?')">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('databuku.edit',$item->id)}}" class="px-4 py-1 text-sm rounded text-blue-600 border border-blue-500 hover:text-white hover:bg-blue-600"><i class="fas fa-pencil-alt"></i></a>
                        <button type="submit" class="px-4 mt-2 py-1 text-sm rounded text-red-500 border border-red-500 hover:text-white hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                        <a href="{{route('databuku.show',$item->id)}}" class="px-4 py-1 text-sm rounded text-green-600 border border-green-500 hover:text-white hover:bg-green-600"><i class="fas fa-info"></i></a>
                    </form>
                </td>
            </tr>
            <?php $no++; ?>
            @endforeach
            <!-- More items... -->
        </tbody>
    </table>
    <div class="">
        {{ $databuku->links() }}
    </div>
</x-template-layout>