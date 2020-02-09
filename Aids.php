<!doctype html>

<html>
<head>
<link href="index.css" rel="stylesheet" type="text/css">
<title> AIDS Helpline </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>

<body>
<center><h1>FIRE SERVICES</h1></center>

&nbsp 
&nbsp 
<header>

<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>
</ul>

</header>

&nbsp

&nbsp



<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search forName.." title="Type in a name">
<table id="myTable">
<tr class="header">
<th style="width:60%;">Information</th>
<th style="width:40%;">View</th>
</tr>


<tr>
          

<td><h2>Address:102,ghongade wasti bhaji market,bhavani peth,solapur</h2>
<h2>Name:Shree siddheshwar water supply</h2>
<h2>Timing:5:30am-10:30pm</h2>
<h2>Mobile no:02172321350</h2>
<h2>Reviews:4.0</td></h2>
<td><img src=images/fire1.jpg width="450" height="200" style=float:left></td>
</tr>


  <tr>

<td><h2>Address:Near rupa bhavani mandir,bhavani peth,solapur</h2>
<h2>Name:Fire station</h2>
<h2>Timing:24 hours</h2>
<h2>Mobile no:02172740357/101</h2>
<h2>Reviews:3.8</td></h2>
<td><img src=images/fire2.jpg width="450" height="200" style=float:left></td>
</tr>

  <tr>
    
   
<td><h2>Address:Near mahavir chowk,solapur</h2>
<h2>Name:hotagi road fire services
<h2>Timing:12:00am-11:59pm</h2>
<h2>Mobile no:02172740389/101</h2>
<h2>Reviews:5.0</td></h2>
<td><img src=images/fire3.jpg width="450" height="200" style=float:left></td>

  </tr>


  
  <tr>
    
   
<td><h2>Address:M.I.D.C road,opp.gentyal talkies,solapur</h2>
<h2>Name:Devi fire services</h2>
<h2>Timing:09:00am-09:00pm</h2>
<h2>Mobile no:</h2>
<h2>Reviews:4.0</td></h2>
<td><img src=images/fire4.jpg width="450" height="200" style=float:left></td>
    </tr>

  
  

 
  <tr>
   
<td><h2>Address:Sawarkar ground</h2>
<h2>Name:Fire station</h2>
<h2>Timing:24 hours</h2>
<h2>Mobile no:02172740368</h2>
<h2>Reviews:5.0</td></h2>
<td><img src=images/fire5.jpg width="450" height="200" style=float:left></td>
    </tr>

    <tr>
   
<td><h2>Address:shop no:4,konark plaza,raviwar peth,solapur</h2>
<h2>Name:V.P fire services</h2>
<h2>Timing:12:00am-11:59pm</h2>
<h2>Mobile no:09689361042</h2>
<h2>Reviews:3.8</td></h2>
<td><img src=images/fire6.jpg width="450" height="200" style=float:left></td>
    </tr>
  
 
    <tr>
   
<td><h2>Address:suvarna plaza,shop no:4,near ragoji hospital,sakhar peth,solapur</h2>
<h2>Name:Union fire services</h2>
<h2>Timing:10:00am-00:07pm</h2>
<h2>Mobile no:08600711400</h2>
<h2>Reviews:5.0</td></h2>
<td><img src=images/fire7.jpg width="450" height="200" style=float:left></td>
    </tr>
  
 

   <tr>
   
<td><h2>Address:hande plot,old poona naka,solapur</h2>
<h2>Name:Tapasya cold water fire services</h2>
<h2>Timing:7am-8pm</h2>
<h2>Mobile no:09049996929</h2>
<h2>Reviews:5.0</td></h2>
<td><img src=images/fire8.jpg width="450" height="200" style=float:left></td>
    </tr>
  


</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


&nbsp
&nbsp
&nbsp
&nbsp
<footer>
<h2><a href="contact.php">Contact Us</a></h2>
&nbsp
&nbsp
&nbsp
&nbsp
</footer>


</body>
</html>