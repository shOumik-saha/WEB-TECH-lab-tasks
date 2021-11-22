
<script type="text/javascript">
  function validation()
  {
    var username= document.getElementById("username");
    var password= document.getElementById("password");

    //alert("hello");

    if(username.value.trim()=="" )
    {
       document.getElementById("nameErr").innerHTML= "*Username is requied";
       return false;
    }
    else{
      document.getElementById("nameErr").innerHTML= "";
    }

   if(password.value.trim()=="" )
    {
       document.getElementById("passwordErr").innerHTML= "*Password is requied";
       return false;
    }
    else{
      document.getElementById("passwordErr").innerHTML= "";
    }


      return true;

  }

  function checkUsername()
  {
    var username= document.getElementById("username");
    if(username.value.trim()=="" )
    {
       document.getElementById("nameErr").innerHTML= "*Username is requied";
       return false;
    }
    else{
      document.getElementById("nameErr").innerHTML= "";
    }
  }

  function checkPassword()
  {
    if(password.value.trim()=="" )
     {
        document.getElementById("passwordErr").innerHTML= "*Password is requied";
        return false;
     }
     else{
       document.getElementById("passwordErr").innerHTML= "";
     }
  }
</script>