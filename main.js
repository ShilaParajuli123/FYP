$(document).ready(function()
{
    cat();
    product();
    //categoryfunction
    function cat()
    {
        $.ajax(
            {
                url : "action.php",
                method: "POST",
                data :{category:1},
                success: function (data)
                {
                    $("#get_category").html(data);
                }
            }
        )
    }

    //function for product
    function product()
    {
        $.ajax(
            {
                url : "action.php",
                method: "POST",
                data :{product:1},
                success: function (data)
                {
                    $("#get_product").html(data);
                }
            }
        )
    }

    //delegate page for category
    $("body").delegate(".category","click",function(event)
    {
        event.preventDefault();
        var cid = $(this).attr('cid');
        $.ajax({
                    url : "action.php",
                    method: "POST",
                    data :{get_selected_Category:1, cat_id:cid},
                    success: function (data)
                    {
                        $("#get_product").html(data);
                    }
                })
    })

    //search
    $("#search_btn").click(function()
    {
        var keyword= $("#search").val();
        if (keyword!="")
        {
            $.ajax({
                url : "action.php",
                method: "POST",
                data :{search:1, keyword:keyword},
                success: function (data)
                {
                    $("#get_product").html(data);
                }
            })
        }
    })

    ///add to cart
    $("body").delegate("#product","click",function(event)
    {
        event.preventDefault();
        var p_id = $(this).attr('pid');
        $.ajax({
            url:"action.php",
            method : "POST",
            data :{addProduct:1,proId:p_id},
            success :function(data)
            {
                alert(data);
            }
        })
    })

//end of main script function
})