function validateLogIn(){
	//get value from document
	var usr=document.getElementById("username").value;
	var pwd1=document.getElementById("pwd").value;
	
	//check the values by regex expression
	var reg=/^[A-Za-z][A-Za-z0-9]{5,22}$/;
	
	var userCheck=true;
	var passCheck=reg.test(pwd1);
	var flag=0;
	//checking for user name and password format verification
	if (userCheck== true &&passCheck == true ) 
	{
        document.getElementById("result").style.display = "block";
        document.getElementById("result").style.color = "green";
        document.getElementById("result").innerHTML = "successful";
		return true;

    } 
	
	if(userCheck == false)
	{
        document.getElementById("result1").style.display = "block";
        document.getElementById("result1").style.color = "red";
        document.getElementById("result1").innerHTML = "User Name format wrong";
		flag=1;
    }
	
	if(passCheck == false) {
        document.getElementById("result3").style.display = "block";
        document.getElementById("result3").style.color = "red";
        document.getElementById("result3").innerHTML = "Password format wrong";
		flag=1;
    }
	
	if(flag==1)
		return false;
	
}