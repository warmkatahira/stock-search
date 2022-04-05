<script src="{{ asset('js/stock_search.js') }}" defer></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            在庫数検索
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="w-10/12 mx-auto md:max-w-md">
            <input id="item_info" class="w-full py-2 border-b focus:outline-none focus:border-b-2 focus:border-indigo-500"></textarea>
        </div>
    </div>
    <div class="w-10/12 mx-auto md:max-w-md bg-white rounded-lg border border-gray-200 shadow-md sm:p-3 lg:p-4">
        <h5 id="search_result" class="align-middle text-xl font-medium text-red-500 mb-3">検索結果</h5>
        <label for="search_item_brand_name" class="block text-sm font-medium text-gray-900 underline">ブランド名</label>
        <p id="search_item_brand_name" class="mt-2 mb-5"></p>
        <label for="search_item_item_code" class="block text-sm font-medium text-gray-900 underline">商品コード</label>
        <p id="search_item_item_code" class="mt-2 mb-5"></p>
        <label for="search_item_individual_jan_code" class="block text-sm font-medium text-gray-900 underline">JANコード</label>
        <p id="search_item_individual_jan_code" class="mt-2 mb-5"></p>
        <label for="search_item_item_name_01" class="block text-sm font-medium text-gray-900 underline">商品名01</label>
        <p id="search_item_item_name_01" class="mt-2 mb-5"></p>
        <label for="search_item_item_name_02" class="block text-sm font-medium text-gray-900 underline">商品名02</label>
        <p id="search_item_item_name_02" class="mt-2 mb-5"></p>
        <label for="search_item_location" class="block text-sm font-medium text-gray-900 underline">ロケーション</label>
        <p id="search_item_location" class="mt-2 mb-5"></p>
        <label for="search_item_stock_quantity" class="block text-sm font-medium text-gray-900 underline">在庫数</label>
        <p id="search_item_stock_quantity" class="mt-2"></p>
    </div>
</x-app-layout>