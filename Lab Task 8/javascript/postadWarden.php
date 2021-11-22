
<script type="text/javascript">

function validation()
{
  var name= document.getElementById("pname");
  var email= document.getElementById("email");
  var addp= document.getElementById("addp");
  var addpi= document.getElementById("addpi");
  var addpa=document.getElementById("addpa");


  //alert("hello");

  if(name.value.trim()=="" )
  {
     document.getElementById("pnameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("pnameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("pnameErr").innerHTML= "";

  }

  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }


  if(addp.value.trim()=="")
  {
    document.getElementById("addpErr").innerHTML= "*Course name is requied";
    return false;
  }
  else {

      document.getElementById("addpErr").innerHTML= "";
}

if (addpi.value.trim()=="") {
  document.getElementById("addpiErr").innerHTML = "addpi is required";
  return false;
} else {


  if(isNaN(addpi.value))
  {
    document.getElementById("addpiErr").innerHTML ="Please input Numeric Number";
    return false;
  }
  else {

        if(addpi.value>10000 || addpi.value<500)
        {
            document.getElementById("addpiErr").innerHTML = "addpi must be between 500 to 10000";
          return false;
        }
        else {
            document.getElementById("addpiErr").innerHTML = "";
        }

            }
        }

    if(addpa.value.trim()=="")
        {
          document.getElementById("addpaErr").innerHTML= "addpa is required";
          return false;
        }
        else {

          if(addpa.value.length<20)
          {
            document.getElementById("addpaErr").innerHTML="addpa must not be less than eight (20) characters";
            return false;
          }
          else {
            document.getElementById("addpaErr").innerHTML="";
          }

          }

return true;


}


function checkpname()
{
  var name= document.getElementById("pname");
  if(name.value.trim()=="" )
  {
     document.getElementById("pnameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("pnameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("pnameErr").innerHTML= "";

  }
}

function checkEmail()
{
  var email= document.getElementById("email");
  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

}


function checkaddp()
{
    var addp= document.getElementById("addp");
  if(addp.value.trim()=="")
  {
    document.getElementById("addpErr").innerHTML= "*prisoner's name is requied";
    return false;
  }
  else {

      document.getElementById("addpErr").innerHTML= "";

}
}

function checkaddpi()
{
  var addpi=document.getElementById("addpi");

  if (addpi.value.trim()=="") {
    document.getElementById("addpiErr").innerHTML = "prisoner's national id  is required";
    return false;
  } else {


    if(isNaN(addpi.value))
    {
      document.getElementById("addpiErr").innerHTML ="Please use digits";
      return false;
    }
    else {

          if(addpi.value>10000 || addpi.value<500)
          {
              document.getElementById("addpiErr").innerHTML = "prisoner prisoner's national id required";
            return false;
          }
          else {
              document.getElementById("addpiErr").innerHTML = "";
          }

              }
          }
}

function checkaddpa()
{
  var addpa=document.getElementById("addpa");

  if(addpa.value.trim()=="")
      {
        document.getElementById("addpaErr").innerHTML= "prisoner's address is required";
        return false;
      }
      else {

        if(addpa.value.length<20)
        {
          document.getElementById("addpaErr").innerHTML="prisoner's addres must not be less than eight (20) characters";
          return false;
        }
        else {
          document.getElementById("addpaErr").innerHTML="";
        }

        }
}

function checkGender()
{
  var gender= document.getElementsByName("gender");

  if(!(gender[0].checked || gender[1].checked || gender[2].checked))
  {
    document.getElementById("genderErr").innerHTML= "*Gender is requied";
    return false;
  }
  else {
    document.getElementById("genderErr").innerHTML= "";
  }
}

</script>