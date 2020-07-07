$(document).ready(function(){
$("#register_form").on("submit",function(){
    var DOMAIN = "http://localhost/OnPoint_Inventory/public_html";

    var status = false;
    var name = $("#username");
    var email = $("#email");
    var pass1 = $("#password1");
    var pass2 = $("#password2");
    var type = $("#usertype");
    
    var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
     //Name validation
    if(name.val() == "" || name.val().length < 6){
        name.addClass("border-danger");
        $("#u_error").html("<span class='text-danger'>Please Enter Name and Name should be more than 6 char</span>");
        status = false;
    }
    else{
        name.removeClass("border-danger");
        $("#u_error").html("");
        status = true;
    } //email validation
    if(!e_patt.test(email.val())){
        email.addClass("border-danger");
        $("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
        status = false;
    }else{
        email.removeClass("border-danger");
        $("#e_error").html("");
        status = true;
    }
})

})