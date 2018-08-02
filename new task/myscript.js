 
 function validateEmail()
      {
         var emailID = document.frmRegistration.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.frmRegistration.email.focus() ;
            return false;
         }
         return( true );
      }
 
       function validate()
      {
      	if( document.frmRegistration.username.value == "" )
         {
            alert( "Please provide your username!" );
            document.frmRegistration.username.focus() ;
            return false;
         }
      
         if( document.frmRegistration.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.frmRegistration.name.focus() ;
            return false;
         }
         if( document.frmRegistration.dob.value == "" )
         {
            alert( "Please provide your Date of Birth!" );
            document.frmRegistration.dob.focus() ;
            return false;
         }
         if( document.frmRegistration.gender.value == "" )
         {
            alert( "Please provide your Gender!" );
            document.frmRegistration.gender.focus() ;
            return false;
         }
         if( document.frmRegistration.web.value == "" )
         {
            alert( "Please provide your Website name!" );
            document.frmRegistration.web.focus() ;
            return false;
         }
         if( document.frmRegistration.addr.value == "" )
         {
            alert( "Please provide your Address!" );
            document.frmRegistration.addr.focus() ;
            return false;
         }
         if( document.frmRegistration.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.frmRegistration.email.focus() ;
            return false;
         }
         else{
         	 if(validateEmail()== false)
         	 	return validateEmail();
         }
         if( document.frmRegistration.ph.value == "" )
         {
            alert( "Please provide your Phone Number!" );
            document.frmRegistration.ph.focus() ;
            return false;
         }
         if( document.frmRegistration.password.value == ""||
         document.frmRegistration.password.value.length < 7 )
         {
            alert( "Please provide a password greater than 7 characters" );
            document.frmRegistration.password.focus() ;
            return false;
         }
         
         return( true );
      }