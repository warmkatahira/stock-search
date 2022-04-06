<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品一覧
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <table class="w-full">
            <thead class="text-white">
                <tr class="bg-teal-400">
                    <th class="px-4 py-3">商品コード</th>
                    <th class="px-4 py-3">JANコード</th>
                    <th class="px-4 py-3">商品名01</th>
                    <th class="px-4 py-3">商品名02</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($items as $item)
                    <tr class="border">
                        <td class="px-4 py-3 text-center">{{ $item->item_code }}</td>
                        <td class="px-4 py-3 text-center">{{ $item->individual_jan_code }}</td>
                        <td class="px-4 py-3 text-center">{{ $item->item_name_01 }}</td>
                        <td class="px-4 py-3 text-center">{{ $item->item_name_02 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>