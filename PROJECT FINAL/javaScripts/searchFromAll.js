	var allSearch = false;
	function get(Id){
		return document.getElementById(Id);
	}
	function viewGForm(){
		var g_f = get("all_search");
		if(allSearch){
			g_f.style.display="none";
			allSearch = false;
		}
		else{
		g_f.style.display="inline";
		allSearch = true;
		}
	}