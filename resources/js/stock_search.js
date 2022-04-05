document.getElementById("item_info").onchange = function() {
    const item_info_val = document.getElementById("item_info");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },    
        url: '/stock_search/' + item_info_val.value,
        type: 'GET',
        dataType: 'json',
        success: function(data){
            // 通信が成功した場合の処理
            document.getElementById("search_result").innerHTML = '検索結果@Success';
            document.getElementById("search_item_brand_name").innerHTML = data['search_info']['brand_name'];
            document.getElementById("search_item_item_code").innerHTML = data['search_info']['item_code'];
            document.getElementById("search_item_individual_jan_code").innerHTML = data['search_info']['individual_jan_code'];
            document.getElementById("search_item_item_name_01").innerHTML = data['search_info']['item_name_01'];
            document.getElementById("search_item_item_name_02").innerHTML = data['search_info']['item_name_02'];
            document.getElementById("search_item_location").innerHTML = data['search_info']['location'];
            document.getElementById("search_item_stock_quantity").innerHTML = data['search_stock_quantity']['stock_quantity'];
        },
        error: function(){
            // 通信が失敗した場合の処理
            document.getElementById("search_result").innerHTML = '検索結果@Failure';
            document.getElementById("search_item_brand_name").innerHTML = '';
            document.getElementById("search_item_item_code").innerHTML = '';
            document.getElementById("search_item_individual_jan_code").innerHTML = '';
            document.getElementById("search_item_item_name_01").innerHTML = '';
            document.getElementById("search_item_item_name_02").innerHTML = '';
            document.getElementById("search_item_location").innerHTML = '';
            document.getElementById("search_item_stock_quantity").innerHTML = '';
        }
    });
};