
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


function showuser()
{
var name=document.getElementById("name").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","/SHIFTING PARTNER/Control/ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("name="+name);



}