function validateLogIn(){
	//get value from document
	var usr=document.getElementById("username").value;
	var pwd2=document.getElementById("pwd").value;
  var pwd3=document.getElementById("pwd1").value;
	
	//check the values by regex expression
	var reg=/^[A-Za-z][A-Za-z0-9]{5,22}$/;
	
	var userCheck=true;
	var passCheck=reg.test(pwd2);
	var flag=0;
	//checking for user name and password format verification
	if (passCheck == true && pwd2==pwd3 ) 
	{
        document.getElementById("result").style.display = "block";
        document.getElementById("result").style.color = "green";
        document.getElementById("result").innerHTML = "successful";
		return true;

    } 
	
	
	if(passCheck == false) {
        document.getElementById("result3").style.display = "block";
        document.getElementById("result3").style.color = "red";
        document.getElementById("result3").innerHTML = "Password format wrong";
		flag=1;
    }
    
    if(pwd2 != pwd3) {
        document.getElementById("result3").style.display = "block";
        document.getElementById("result3").style.color = "red";
        document.getElementById("result3").innerHTML = "Password Does not Match";
		flag=1;
    }
	
	if(flag==1)
		return false;
	
}