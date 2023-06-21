<!DOCTYPE html>
<html>
<head>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 

</head>
<body>

<h2>jQuery Ajax Form</h2>

<p>Please fill all fields in the form</p>

<span id="error" style="display: none"></span>
<form action="javascript:void(0)" method="post" id="ajax-form">

<label>Name</label>
<input type="text" name="name" id="name" ><br><br>

<label>Email</label>
<input type="email" name="email" id="email" ><br><br>

<label>Mobile</label>
<input type="text" name="mobile" id="mobile" ><br><br>

<input type="submit" name="submit" value="submit">
</form>

<script type="text/javascript">
$(document).ready(function($){

$('#ajax-form').submit(function(e){
e.preventDefault();

//name 
var name = $("input#name").val();
if(name == ""){
$("#error").fadeIn().text("Name required.");
$("input#name").focus();
return false;
}
// email 
var email = $("input#email").val();
if(email == ""){
$("#error").fadeIn().text("Email required");
$("input#email").focus();
return false;
}
// mobile number 
var mobile = $("input#mobile").val();
if(mobile == ""){
$("#error").fadeIn().text("Mobile number required");
$("input#mobile").focus();
return false;
}

// ajax
$.ajax({
type:"POST",
url: "ajax-form-store.php",
data: $(this).serialize()
});
});  
return false;
});
</script>
</body>
</html>