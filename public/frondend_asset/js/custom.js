$(document).ready(function(){

    // $('#result').delay(10000).load(location.href);

    getData();
    count();



    $('.view_detail').click(function(){
        var id = $(this).data('id');
        var name = $(this).data('name');
        var photo = $(this).data('photo');
        var price = $(this).data('price');
        var discount = $(this).data('discount');
        var brand = $(this).data('brand');
        var subcategory = $(this).data('subcategory');
        var description = $(this).data('description');

        $(".pimg").attr('src',"admin/"+photo);
        $(".pprice").html(" "+price+ "MMK");
        $(".pbrand").html(" Brand:"+brand);
        $(".psubcategory").html(" Category:" +subcategory);
        $(".pdiscount").html(" "+discount+ "MMK");
        $(".pdescription").html("Description: </br>"+description);

        $(".cart_data").data('id',$(this).data('id'));
        $(".cart_data").data('name',$(this).data('name'));
        $(".cart_data").data('photo',$(this).data('photo'));
        $(".cart_data").data('price',$(this).data('price'));
        $(".cart_data").data('discount',$(this).data('discount'));
        $(".cart_data").data('brand',$(this).data('brand'));
        $(".cart_data").data('subcategory',$(this).data('subcategory'));
        $(".cart_data").data('description',$(this).data('description'));

        $('#detailModal').modal('show');

    });

    // Count
    function count(){
        var shopString = localStorage.getItem("heinshop");
        if (shopString) {
            var shopArray = JSON.parse(shopString);
            if (shopArray!=0) {
                var count=shopArray.length;
                $("#item_count").attr('data-count',count);
            }else {
                $("#item_count").attr('data-count',0);  
            }

        }else {
            $("#item_count").attr('data-count',0);  
        }
    };


    // Add To Cart
    $(".addtocart").on('click',function(e){

        var item_qty=parseInt($('#qty').val());
        var id = $(this).data('id');
        var name = $(this).data('name');
        var photo = $(this).data('photo');
        var price = $(this).data('price');
        var discount = $(this).data('discount');
        var qty=0;
        if (item_qty) {
            qty+=item_qty;

        }

        var shop_item = {
            id:id,
            name:name,
            price:price,
            discount:discount,
            photo:photo,
            qty:qty
        }

        var shopString = localStorage.getItem("heinshop");
        var shopArray;
        if (shopString==null) {
            shopArray=Array();
        }else {
            shopArray=JSON.parse(shopString);
        }

        var status = false;
        $.each(shopArray,function(i,v){
            if (id==v.id) {
                status = true;
                if (!item_qty) {
                    v.qty++;
                }else{
                    v.qty+=item_qty;
                }
            }
        })

        if (status==false) {
            shopArray.push(shop_item);

        }

        var shopData = JSON.stringify(shopArray);
        localStorage.setItem("heinshop", shopData);
        
        // $.ajaxSetup ({
        //  cache: false
        // });
        // var ajax_load = "<img src='http://automobiles.honda.com/images/current-offers/small-loading.gif' alt='loading...' />";

     //    var loadUrl = window.location.href;
     //    console.log(loadUrl);
     //    $(this).load(loadUrl);
        // $('#product_detail').modal('hide');
        // $(".modal-backdrop").remove();


     // location.reload();



        count();

    });

    // Show to Table Data
    function getData(){
        var shopString = localStorage.getItem("heinshop");
        if (shopString) {
            var shopArray = JSON.parse(shopString);

            var html='';
            var no=1;
            var total=0;
            $.each(shopArray,function(i,v){
                var name = v.name;
                var unit_price = v.price;
                var discount = v.discount;
                var photo=v.photo;
                var qty = v.qty;
                if (discount) {
                    var price_show=discount+'<del class="d-block text-danger">'+unit_price+'</del>';
                    var price = discount;
                }else{
                    var price_show = unit_price;
                    var price = unit_price;
                }
                var  nStr=price_show;
                var x = nStr.split('.');
                var x1 = x[0];
                var x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                var price_show=(x1 + x2);
                var p=$.number(price*qty);
                html += `<tr>
                            <td class="cart_product">
                                <a href="">
                                <img src="${photo}" alt="" width="120px" style="border:2px dashed #FE980F"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">${name}</a></h4>
                               
                            </td>
                            <td class="cart_price">
                                <p>${price_show}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up max"   data-item_i="${i}" href="#"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value=" ${qty}" autocomplete="off" size="2">
                                    <a class="cart_quantity_down min" data-item_i="${i}" href="#"> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">${p} Ks</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>`; 

                   total += price*qty;

                

            });
               
            html+=`<tr>
                <td colspan="4" class="text-muted">Total</td>
                <td class="cart_total_price">${total} Ks</td>
                </tr>`

            $("tbody").html(html);
            $(".total").val(total);

        }else{
            html='';
            $("tbody").html(html);
        }

    }



    $("tbody").on('click','.max',function(){

        var item_i = $(this).data('item_i');

        var shopString = localStorage.getItem("heinshop");
        if (shopString) {

            var shopArray = JSON.parse(shopString);

            $.each(shopArray,function(i,v){
                if (item_i==i) {
                    v.qty++;
                }

            })

            var shopData=JSON.stringify(shopArray);
            localStorage.setItem("heinshop",shopData);
            getData();
            count();

        }

    });

    $("tbody").on('click','.min',function(){
        var item_i = $(this).data('item_i');

        var shopString = localStorage.getItem("heinshop");
        if (shopString) {

            var shopArray = JSON.parse(shopString);

            $.each(shopArray,function(i,v){
                if (item_i==i) {
                    v.qty--;
                    if (v.qty==0) {
                        shopArray.splice(item_i,1);
                    }
                }

            })

            var shopData=JSON.stringify(shopArray);
            localStorage.setItem("heinshop",shopData);
            getData();
            count();

        }

    })


     $("tbody").on('click','.cart_quantity_delete',function(){
        var id=$(this).data('item_i');
            
            var itemlist=localStorage.getItem("heinshop");
            var itemArray=JSON.parse(itemlist);

            itemArray.splice(id,1);

            var itemstring=JSON.stringify(itemArray);
            localStorage.setItem("heinshop",itemstring);
            getData();
            count();

     })





})