<!doctype html>

<html>
<head>
<link href="index.css" rel="stylesheet" type="text/css">
<title> POLICE Control Service </title>


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
<center><h1>POLICE CONTROL SERVICES</h1></center>

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
    <th style="width:40%;">Services</th>
  </tr>


<tr>
      
    <td><h2>Name:Jail road police station</h2>
    <h2>Address:jali road,near central jail kidwai chowk,muslim peth,solapur</h2>
    <h2>Mobile no::0217413002</h2>
    <h2>Reviews:3.8</h2>
    <td><img src=images/jrps.jpg width="450" height="200" style=float:left></td>
</tr>



  <tr>
   <td><h2>Name:Jodbhavi peth police station</h2>
  <h2>Address:Near Dayanand college,Bhavani peth,solapur</h2>
  <h2>Mobile no:0217413224</h2>
  <h2>Reviews:3.8</td></h2>
  <td> <img src=images/jodbhavi.jpg width="450" height="200" style=float:left></td>
  
  </tr>

  <tr>
    
   <td><h2>Name:I.T.I police station</h2>
   <h2>Address:National Highway 50,B-99,vijapur road,dwarka nagari,solapur</h2>
   <h2>Mobile no:0217413004</h2>
   <h2>Reviews:5.0</td></h2>
   <td><img src=images/fcps.jpg width="450" height="200" style=float:left></td>


  </tr>

  <tr>
    
    <td><h2>Name:Sakhar peth police station</h2>
    <h2>Address:Sakhar peth,shaniwar peth,solapur</h2>
    <h2>Mobile no:0217413002</h2>
   <h2>Reviews:4.0</td></h2>
    <td><img src=images/sakharpeth.jpg width="450" height="200" style=float:left></td>
   </tr>
  
  
  <tr>
    
    <td><h2>Name:Solapur taluka police station</h2>
    <h2>Address:Vijapur road,jawaharlal husing societyr,keshav nagar,solapur</h2>
    <h2>Mobile no:02172744621</h2>
    <h2>Reviews:3.6</td></h2>
    <td><img src=images/taluka.jpg width="450" height="200" style=float:left></td>
    </tr>

  
  
  <tr>
   
    <td><h2>Name:MIDC new police station</h2>
    <h2>Address:Akkalkoat road kamgar vasahat,MIDC,solapur</h2>
    <h2>Mobile no:02172744690</h2>
    <h2>Reviews:4.5</td></h2>
     <td><img src=images/MIDC.jpg width="450" height="200" style=float:left></td>
      </tr>
 
 
  <tr>
    
    <td><h2>Name:Sadar bazar police station</h2>
    <h2>Address:Police station road,off,hotgi road,old gandhi nagar,solapur</h2>
   <h2>Mobile no:02172744641</h2>
   <h2>Reviews:4.8</td></h2>
   <td><img src=images/sadarbajar.jpg width="450" height="200" style=float:left></td>
    </tr>

  
  
  <tr>
    
    <td><h2>Name:Begum peth police station</h2>
   <h2>Address:Rupa bhavani road,begum peth,shaniwarpeth,solapur </h2>
  
  <h2>Mobile no:09011903057</h2>
  <h2>Reviews:3.1</td></h2>
  <td><img src=images/begumpeth.jpg width="450" height="200" style=float:left></td>

 <tr>
    
<td><h2>Name:Navi peth police station</h2>
<h2>Address:Murarji peth,solapur</h2>
<h2>Mobile no:0217413224</h2>
<h2>Reviews:3.7</td></h2>
<td><img src=images/navipeth.jpg width="450" height="200" style=float:left></td>

</tr>


<tr>
    
<td><h2>Name:Saiful police station</h2>
<h2>Address:77k,vijapur road,narendra nagar,saiful,rohini nagar,safalya nagar,solapur</h2>
<h2>Mobile no:0217413004</h2>
<h2>Reviews:4.5</td></h2>
<td><img src=images/saiful.jpg width="450" height="200" style=float:left></td>

</tr>




<tr>
    
<td><h2>Name:Ashok chowk police station</h2>
<h2>Address:Near police head quarters,amrapali chowk,solapur</h2>
<h2>Mobile no:02172744636</h2>
<h2>Reviews:3.9</td></h2>
<td><img src=images/ashokchowk.jpg width="450" height="200" style=float:left></td>

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