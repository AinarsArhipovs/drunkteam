var ok=0;
function check_first_name()
{
 var f_val=$("#first_name").val();
 if(f_val=="")
 {
  $("#first_name").css({"border":"1px solid red"});
  $("#first_name_error").text("First Name Must Be Filled!");
  $("#first_name_error").css({"margin-top":"5px"});
 }
 else
 {
  $("#first_name").css({"border":"1px solid grey"});
  $("#first_name_error").text("");
  $("#first_name_error").css({"margin-top":"0px"});
  ok++;
 }
}

function check_last_name()
{
 var l_val=$("#last_name").val();
 if(l_val=="")
 {
  $("#last_name").css({"border":"1px solid red"});
  $("#last_name_error").text("Last Name Must Be Filled!");
  $("#last_name_error").css({"margin-top":"5px"});
 }
 else
 {
  $("#last_name").css({"border":"1px solid grey"});
  $("#last_name_error").text("");
  $("#last_name_error").css({"margin-top":"0px"});
  ok++;
 }
}

function check_email()
{
 var email_val=$("#email").val();
 if(email_val=="" || email_val.indexOf("@")==-1 || email_val.indexOf(".")==-1)
 {
  $("#email").css({"border":"1px solid red"});
  $("#email_error").text("Email Must Contain @ and .");
  $("#email_error").css({"margin-top":"5px"});
 }
 else
 {
  $("#email").css({"border":"1px solid grey"});
  $("#email_error").text("");
  $("#email_error").css({"margin-top":"0px"});
  ok++;
 }
}

function check_pass()
{
 var pass_val=$("#pass1").val();
 if(pass_val=="" || pass_val.length<8)
 {
  $("#pass1").css({"border":"1px solid red"});
  $("#pass1_error").text("Password Must Be Filled And Greater Or Equal To 8!");
  $("#pass1_error").css({"margin-top":"5px"});
 }
 else
 {
  $("#pass1").css({"border":"1px solid grey"});
  $("#pass1_error").text("");
  $("#pass1_error").css({"margin-top":"0px"});
  ok++;
 }
}

function check_pass2()
{
 var pass2_val=$("#pass2").val();
 if(pass2_val=="" || pass2_val!=$("#pass").val())
 {
  $("#pass2").css({"border":"1px solid red"});
  $("#pass2_error").text("Password Must Be Filled And Matched With Above!");
  $("#pass2_error").css({"margin-top":"5px"});
 }
 else
 {
  $("#pass2").css({"border":"1px solid grey"});
  $("#pass2_error").text("");
  $("#pass2_error").css({"margin-top":"0px"});
  ok++;
 }
}

function check_form()
{
 if(ok==5)
 {
  return true;
 }
}