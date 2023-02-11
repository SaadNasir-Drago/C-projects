/*function namecheck()
{
    var name=document.getElementById("name").value;
    if(name.length>3)
    {
document.getElementById("message").innerHTML="your name is correct";
return true;
    } 
    else{
        document.getElementById("message").innerHTML="Name is too small . Please enter full name";
        return false;
    }
}*/

function shifterformcheck()
{
    var name=document.getElementById("name").value;
    var nid=document.getElementById("nid").value;
    var dob=document.getElementById("dob").value;
    var uname=document.getElementById("uname").value;
    var pass=document.getElementById("pass").value;

    if(name.length<4)
    {
        document.getElementById("message").innerHTML="Name is too small . Please enter full name";
        return false;
    } 
    if(nid.length<10)
    {
        document.getElementById("message").innerHTML="Please enter 10 digit NID number";
        return false;
    }
    if(dob=="")
    {
        document.getElementById("message").innerHTML="Please enter your date of birth";
        return false;
    }
    if(uname.length<7)
    {
        document.getElementById("message").innerHTML="Please enter atleast 7 characters username";
        return false;
    }
    if(pass.length<8)
    {
        document.getElementById("message").innerHTML="Please enter atleast 8 characters password";
        return false;
    }
    if (document.getElementById("male").checked == false &&  document.getElementById("female").checked == false  &&  document.getElementById("others").checked == false)
  {  
    document.getElementById("message").innerHTML="Please select a radio button";
    return false;
  }
  if (document.getElementById("availability").checked == false)
  {  
    document.getElementById("message").innerHTML="Please select a check box";
    return false;
  }
}



function transporterformcheck()
{
    var name=document.getElementById("name").value;
    var nid=document.getElementById("nid").value;
    var model=document.getElementById("model").value;
    var tnumber=document.getElementById("tnumber").value;
    var lid=document.getElementById("lid").value;
    var led=document.getElementById("led").value;
    var uname=document.getElementById("uname").value;
    var pass=document.getElementById("pass").value;

    if(name.length<4)
    {
        document.getElementById("message").innerHTML="Name is too small . Please enter full name";
        return false;
    } 
    if(nid.length<10)
    {
        document.getElementById("message").innerHTML="Please enter 10 digit NID number";
        return false;
    }
    if(model=="")
    {
        document.getElementById("message").innerHTML="Please enter your transports model";
        return false;
    }
    if(tnumber=="")
    {
        document.getElementById("message").innerHTML="Please enter your transports number properly";
        return false;
    }
    if(lid=="")
    {
        document.getElementById("message").innerHTML="Please enter your license issue date";
        return false;
    }
    if(led=="")
    {
        document.getElementById("message").innerHTML="Please enter your license expire date";
        return false;
    }
    if(uname.length<7)
    {
        document.getElementById("message").innerHTML="Please enter atleast 7 characters username";
        return false;
    }
    if(pass.length<8)
    {
        document.getElementById("message").innerHTML="Please enter atleast 8 characters password";
        return false;
    }
    if (document.getElementById("2years").checked == false &&  document.getElementById("3-5years").checked == false  &&  document.getElementById(">5years").checked == false)
  {  
    document.getElementById("message").innerHTML="Please select a radio button";
    return false;
  }
  if (document.getElementById("availability").checked == false)
  {  
    document.getElementById("message").innerHTML="Please select a check box";
    return false;
  }
}









function clientformcheck()
{
    var name=document.getElementById("name").value;
    var nid=document.getElementById("nid").value;
    var address=document.getElementById("address").value;
    var email=document.getElementById("email").value;
    var uname=document.getElementById("uname").value;
    var pass=document.getElementById("pass").value;

    if(name.length<4)
    {
        document.getElementById("message").innerHTML="Name is too small . Please enter full name";
        return false;
    } 
    if(nid.length<10)
    {
        document.getElementById("message").innerHTML="Please enter 10 digit NID number";
        return false;
    }
    if(address=="")
    {
        document.getElementById("message").innerHTML="Please enter your full address";
        return false;
    }
    if(email=="")
    {
        document.getElementById("message").innerHTML="Please enter email properly";
        return false;
    }
    if(uname.length<7)
    {
        document.getElementById("message").innerHTML="Please enter atleast 7 characters username";
        return false;
    }
    if(pass.length<8)
    {
        document.getElementById("message").innerHTML="Please enter atleast 8 characters password";
        return false;
    }
}







function orderformcheck()
{
    var name=document.getElementById("name").value;
    var uname=document.getElementById("uname").value;
    var pass=document.getElementById("pass").value;
    var address=document.getElementById("address").value;
    var d_address=document.getElementById("d_address").value;
    var person=document.getElementById("person").value;

    if(name.length<4)
    {
        document.getElementById("message").innerHTML="Name is too small . Please enter full name";
        return false;
    } 
    if(uname.length<7)
    {
        document.getElementById("message").innerHTML="Please enter your username correctly";
        return false;
    }
    if(pass.length<8)
    {
        document.getElementById("message").innerHTML="Please enter your password correctly";
        return false;
    }
    if(address=="")
    {
        document.getElementById("message").innerHTML="Please enter your full present address";
        return false;
    }
    if(d_address=="")
    {
        document.getElementById("message").innerHTML="Please enter your full destination address";
        return false;
    }
    if(person<1)
    {
        document.getElementById("message").innerHTML="Please enter how many shifter you need!";
        return false;
    }
    if (document.getElementById("yes").checked == false &&  document.getElementById("no").checked == false)
  {  
    document.getElementById("message").innerHTML="Please select a radio button for transportation";
    return false;
  }
  if (document.getElementById("time").checked == false)
  {  
    document.getElementById("message").innerHTML="Please select a check box for your preferred time";
    return false;
  }
    
}


function fetchuser()
{
var name=document.getElementById("name").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","/SHIFTING PARTNER/Control/shifter_ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("name="+name);


}
