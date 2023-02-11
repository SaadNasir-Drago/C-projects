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


xttp.open("POST","/SHIFTING PARTNER/Control/transporter_ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("name="+name);


}
