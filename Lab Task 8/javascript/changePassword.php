

<script type="text/javascript">

function validation()
{

  var currentPassword= document.getElementById("currentPassword");
  var newPassword=document.getElementById("newPassword");
  var retypeNewPassword=document.getElementById("retypeNewPassword");


  if(currentPassword.value.trim()=="")
  {
    document.getElementById("currentPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(currentPassword.value.length<8)
    {
    document.getElementById("currentPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("currentPasswordErr").innerHTML= "";
    }
}

  if(newPassword.value.trim()=="")
  {
    document.getElementById("newPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(newPassword.value.length<8)
    {
    document.getElementById("newPasswordErr").innerHTML= "*Password must not be less than eight (5) characters";
      return false;
    }
    else {
      document.getElementById("newPasswordErr").innerHTML= "";
    }
}

 if(retypeNewPassword.value.trim()=="")
 {
 document.getElementById("retypePasswordErr").innerHTML= "*Confirm Password is required";
   return false;
 }
 else {
    if(!(newPassword.value==retypeNewPassword.value))
    {
      document.getElementById("retypePasswordErr").innerHTML= "*Password and confirm password have to be same";
    return false;
    }
    else {
      document.getElementById("retypePasswordErr").innerHTML= "";
    }

}


return true;

}


function checkCurrentpassword()
{
  var currentPassword= document.getElementById("currentPassword");

  if(currentPassword.value.trim()=="")
  {
    document.getElementById("currentPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(currentPassword.value.length<8)
    {
    document.getElementById("currentPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("currentPasswordErr").innerHTML= "";
    }
}
}

function checkNewpassword()
{
  var newPassword= document.getElementById("newPassword");
  if(newPassword.value.trim()=="")
  {
    document.getElementById("newPasswordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(newPassword.value.length<8)
    {
    document.getElementById("newPasswordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("newPasswordErr").innerHTML= "";
    }
}
  }


function checkRetypepassword()
{
    var retypeNewPassword= document.getElementById("retypeNewPassword");

    if(retypeNewPassword.value.trim()=="")
    {
    document.getElementById("retypePasswordErr").innerHTML= "*Confirm Password is required";
      return false;
    }
    else {
       if(!(newPassword.value==retypeNewPassword.value))
       {
         document.getElementById("retypePasswordErr").innerHTML= "*Password and confirm password have to be same";
       return false;
       }
       else {
         document.getElementById("retypePasswordErr").innerHTML= "";
       }

   }
}



</script>