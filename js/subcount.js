//Made by JonBot415 ;)
var sub_count = ""; 

var user_name = "Vidlii";

setInterval(function(){ 

$.get("ajax/fetch.php?username="+user_name, function(data) {
	
	if (data == "not_found") {
	document.getElementById("avatar").src = "assets/error.png";
	document.getElementById("username").innerHTML = "";
	document.getElementById("subs").innerHTML = "";
	document.getElementById("error").innerHTML = "User does not exist.";
	} else if (data == "banned") {
	document.getElementById("avatar").src = "assets/error.png";
	document.getElementById("username").innerHTML = "";
	document.getElementById("subs").innerHTML = "";
	document.getElementById("error").innerHTML = "This user has been banned from Vidlii.";
	} else {
	document.getElementById("error").innerHTML = "";
	user_data = data.split("|");
	
	if (sub_count !== user_data[0]) {
	var sub_element = document.getElementById("subs");
	sub_element.innerHTML = user_data[0]+" Subscribers";
	sub_element.className = "fadeInUp animated";
	setTimeout(function(){ sub_element.className = "done"; }, 800)
	}
	sub_count = user_data[0];
	}
});

}, 3000);


function set_username() {

user_name = document.getElementById("user").value;
$.get("ajax/fetch.php?username="+user_name, function(data) {
	
if (data == "not_found") {
	document.getElementById("avatar").src = "assets/error.png";
	document.getElementById("username").innerHTML = "";
	document.getElementById("subs").innerHTML = "";
	document.getElementById("error").innerHTML = "User does not exist.";
	} else if (data == "banned") {
	document.getElementById("avatar").src = "assets/error.png";
	document.getElementById("username").innerHTML = "";
	document.getElementById("subs").innerHTML = "";
	document.getElementById("error").innerHTML = "This user has been banned from Vidlii.";
	} else {
	document.getElementById("error").innerHTML = "";
	user_data = data.split("|");
	sub_count = user_data[0];
	var sub_element = document.getElementById("subs");
	sub_element.innerHTML = user_data[0]+" Subscribers";
	sub_element.className = "fadeInUp animated";
	setTimeout(function(){ sub_element.className = "done"; }, 800)
	document.getElementById("username").innerHTML = user_data[2];
	document.getElementById("avatar").src = user_data[1];
}
});
	
}


function enter_username(e){
  e=e||window.event;
  var key = e.keyCode;
  if(key==13) //Enter
  {
	 set_username();
     return false; //return true to submit, false to do nothing
  }
}
