<!DOCTYPE html>
<html>
<head>
<script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i}; 
    return i;
}
</script>
<style>

body   {
        background:url(a.jpg) no-repeat center center fixed;
        background-size:cover;
        background-attachment: fixed;
	    font-family:'Trebuchet MS',Arial,'Comic Sans MS';
	   
       }
 .wrapper{
         width:1186px;
		 height:1100px;
		 margin:0 auto;

        }
 .header{
           float:left;
		   width:100%;
		   height:60px;
		   background-color:#627411;
		   margin-bottom:30px;
        }
.banner{
        float:left;
        width:960px;
        height:360px;
        margin-top:5px;

       }   
  
  ul
  {
    float:left;
	width:100%;
	padding:0;
	margin:0;
	list-style-type:none;
   }
  a
  {
    float:left;
	width:4em%;
	text-decoration:none;
	color:white;
	padding:0.3em 0.6em;
	border-right:2px solid white;
  }
  li
  {
    display:inline;
  }

  </head>
</style>

<body onload="startTime()">
</h1>
<div class="wrapper">

<h1>
<?php
$sayfa=@$_GET["sayfa"];
echo'<div class="header"><ul>
<li><a href="baskanligimiz.php?sayfa=Baskanligimiz">Baskanligimiz </a></li>
<li><a href="software.php?sayfa=Ana sayfa">Kurul </a></li>
<li><a href="normaluser.php?sayfa=Egitim">Egitim </a></li>
<li><a href="deneme.php?sayfa=iletisim">Yapilar</a></li>
<li><a href="deneme.php?sayfa=Siparis Ver">Gider</a></li>
<li><a href="deneme.php?sayfa=Siparis Ver">Gelir</a></li>
<li><a href="deneme.php?sayfa=Siparis Ver">Faaliyet</a></li>
<li><a href="deneme.php?sayfa=Siparis Ver">Fatura</a></li>
</div></ul>';
?> 

</div>
</body>
</html>