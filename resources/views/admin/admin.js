$(document).ready(function () {
    getdata();
});
function getdata(){
    $.ajax({
        type: "POST",
        url: "adminajax.php",
        // data: "data",
        // dataType: "dataType",
        success: function (data) {
            $("#admin").html(data);
        }
    });
}


 
    // document.getElementById("delete")
    function delte(x){
        var id=x;
        
        $.post("deleteproduct.php",{
            action:"delete",
            id:id,
        },
            function(data){
                if(data==1){
                    $.ajax({
                        type: "POST",
                        url: "adminajax.php",
                        // data: "data",
                        // dataType: "dataType",
                        success: function (data) {
                            $("#admin").html(data);
                        }
                    }); 
                }

                // alert(data);
            
        });
    }
 