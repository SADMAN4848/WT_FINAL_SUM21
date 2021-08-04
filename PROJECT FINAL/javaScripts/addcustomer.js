var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		
		function validate(){
			refresh();
			if(get("c_name").value == ""){
				hasError = true;
				get("err_c_name").innerHTML = "*Name input field can not be empty";
			}
			if(get("c_uname").value == ""){
				hasError = true;
				get("err_c_uname").innerHTML = "*Username input field can not be empty";
			}
			if(get("c_pass").value == ""){
				hasError = true;
				get("err_c_pass").innerHTML = "*Password input field can not be empty";
			}
			else if(get("c_pass").value.length <=5){
				hasError = true;
				get("err_c_pass").innerHTML = "*Password length must be at least 5";
			}
			if(get("c_dob_day").selectedIndex == 0){
				hasError = true;
				get("err_c_dob_day").innerHTML = "*Day must be selected";
			}
			if(get("c_dob_month").selectedIndex == 0){
				hasError = true;
				get("err_c_dob_month").innerHTML = "*Month must be selected";
			}
			if(get("c_dob_year").selectedIndex == 0){
				hasError = true;
				get("err_c_dob_year").innerHTML = "*Year must be selected";
			}
			if(!get("male").checked && !get("female").checked){
				hasError = true;
				get("err_c_gender").innerHTML = "*Gender must be selected";
			}
			if(get("c_email").value == ""){
				hasError = true;
				get("err_c_email").innerHTML = "*Email input field can not be empty";
			}
			if(get("c_address").value == ""){
				hasError = true;
				get("err_c_address").innerHTML = "*Address input field can not be empty";
			}
			
			if(get("c_phone").value==""){
				hasError = true;
				get("err_c_phone").innerHTML = "*Phone input field can not be empty";
			}
			if(get("c_nid").value==""){
				hasError = true;
				get("err_c_nid").innerHTML = "*NID input field can not be empty";
			}
			
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_c_name").innerHTML ="";
			get("err_c_uname").innerHTML ="";
			get("err_c_pass").innerHTML ="";
			get("err_c_dob_day").innerHTML="";
			get("err_c_dob_month").innerHTML = "";
			get("err_c_dob_year").innerHTML = "";
			get("err_c_gender").innerHTML = "";
			get("err_c_email").innerHTML = "";
			get("err_c_address").innerHTML = "";
			get("err_c_phone").innerHTML = "";
			get("err_c_nid").innerHTML = "";
		}