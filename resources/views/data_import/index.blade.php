<script src="{{ asset('js/data_import.js') }}" defer></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            データ取込
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="post" action="{{ route('item_info_data_import') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-12">
                <div class="mt-10 col-span-1">
                    <label for="file_select" class="w-full inline-flex justify-center items-center px-4 py-2 bg-gray-600 border border-gray-600 rounded-l cursor-pointer text-sm text-white tracking-widest hover:bg-gray-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        選択
                        <input type="file" id="file_select" name="file_select" class="hidden" accept=".xlsx" required>
                    </label>
                </div>
                <div class="mt-10 col-span-11">
                    <div id="select_fileName" class="w-full inline-flex px-4 py-2 border border-gray-600 rounded-l text-sm tracking-widest focus:outline-none focus:focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        商品情報データを選択して下さい。
                    </div>
                </div>
                <div class="mt-5 col-span-12">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">取込</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>