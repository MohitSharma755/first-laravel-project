function del(x) {
    // alert(x);
    var id = x;
    id.remove()=innerHtml;
    $.post("deletecart.php", {
        action: "delete",
        id: id,

    },function (data) {
        // alert(data);
       if(data==1){

            $.ajax({
                type: "POST",
                url: "cartfetch.php",
                data:{
                    'action':"showdata"
                },
                success: function (data) {
                    // alert(data);
                    $('#addtocart').html(data);

                }
            });
       }
    })

};


