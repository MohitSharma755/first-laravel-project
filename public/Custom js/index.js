

function minus() {


    var a = document.getElementById("inputme").innerText;
    var m = parseInt(a);
    var sum = m - 1;
    document.getElementById("inputme").innerText = sum;

}


function add() {

    var a = document.getElementById("inputme").innerText;
    var m = parseInt(a);
    var sum = m + 1;
    document.getElementById("inputme").innerText = sum;



}


// This function calculate for price.
function countadd(id) {
    var id = id;
//   alert(id)
    var rate = 'price' + id;
    var quantity = 'quantity' + id;
    var totalprice = 'totalprice' + id;

    var rate_final = document.getElementById(rate).innerText;
    var quantity_final = document.getElementById(quantity).innerText;


    var a = parseFloat(rate_final);
    var weight = parseFloat(quantity_final) + 1;

    var sum = a * weight;
    // alert(weight);
    // alert(b);
    var price = sum;
    document.getElementById(quantity).innerText = weight;

    document.getElementById(totalprice).innerText = sum;
    console.log(weight);
    console.log(sum);
    // var userid = document.getElementById('userid').innerHTML;




}
function countminus(id) {

    var id = id;

    var rate = 'price' + id;
    var quantity = 'quantity' + id;
    var totalprice = 'totalprice' + id;

    var rate_final = document.getElementById(rate).innerText;
    var quantity_final = document.getElementById(quantity).innerText;


    var a = parseFloat(rate_final);
    var weight = parseFloat(quantity_final) - 1;

    var sum = a * weight;

    document.getElementById(quantity).innerText = weight;

    document.getElementById(totalprice).innerText = sum;
    // var price = sum;
    // $.post("cartquantinsert.php", {
    //     action: "add",
    //     weight: weight,
    //     id: id,
    //     sum: price

    // },
    // function (data) {
    //     // alert(data)
    // });


}
function change() {
    window.location.href = 'seller_login.php';
}

function remove() {
    var fifth = document.getElementById("remove");
    fifth.remove();
}
function category(cat){

    var cate=cat;
    console.log(cate);

}
