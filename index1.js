function check()
{
	var x=document.getElementById("email").value;
	var y=document.getElementById("password").value;
	 if((x.length)==0&&(y.length==0))
	{
		alert("Password and VT no. must not be empty");
		return false;
	}
	 else if((x.length)==0 )
	{
		alert("Password must not be empty");
		return false;
	}
	 else if((y.length)==0 )
		{
			alert("VT no. must not be empty");
			return false;
		}
}