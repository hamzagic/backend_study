
$("#submit").click(function(){

var userName = $("#user").val();
var pwd = $("#pwd").val();
var errors = "";

if (userName == "") {

	errors += "<p>Username field is required.</p>";

}

if (pwd =="") {


	errors += "<p>Password field is required</p>";
};

if (true) {};

if (errors != "") {

	errors = "<p>The following errors occurred: </p>" + errors;
	$("#errors").html(errors);
	return false;
} else {

	return true;
}


});









