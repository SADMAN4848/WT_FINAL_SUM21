function get(id){
	return document.getElementById(id);
}

function checkCategory(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","check_category.php?catName="+e.value,true);
	xhr.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200){
		if(this.responseText.trim() == "invalid"){
			get("err_catName").innerHTML = "Category already exists";
		}
		else{
			get("err_catName").innerHTML = "";
		}
	}
};
xhr.send();
}