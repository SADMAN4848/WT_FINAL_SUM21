function get(id){
	return document.getElementById(id);
}
function AjaxUsernameSearch(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","AjaxCheckUsername.php?c_uname="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){ 
			if(this.responseText.trim() == "invalid"){
				get("err_c_uname").innerHTML = " *Username Already Exists";
			}
			else{
				get("err_c_uname").innerHTML="";
			}
		}
	};
	xhr.send();
}
			