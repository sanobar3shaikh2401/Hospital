<!doctype html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="index.css" rel="stylesheet" type="text/css">

<title> LPG Service </title>
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
<center><h1>LPG Team Service</h1></center>

&nbsp 
&nbsp 
<header>

<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>
</ul>

</header>
&nbsp
&nbsp
&nbsp
&nbsp
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Location.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">view</th>
  </tr>

  <tr>
<td><h3>&nbsp Name:Meera bharat gas agency</h3>
<h3>&nbsp Mobileno:0217-2375577,9765525306</h3>
 <h3>&nbsp Time:9:00am</h3>
 <h3>&nbsp Address:Shop no 15/16narmada complex hydrabad road,solapur-413001</h3>
<td><img src="images/Screenshot_20190206_184358.png" height="200" width="450"></td>
</tr>

<tr>
 <td><h3>&nbsp Name:Sudhir gas agency</h3>
 <h3>&nbsp Mobileno:0217-2627766,0217-2626700,0217-2745878,09422065934</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:plot number 1255,dajipeth sholaspur,solapur-413005(jodbhavi peth)</h3>
<td><img src="images/aruna.png" height="200" width="450"></td>s
 </tr>

<tr>
 <td><h3>&nbsp Name:Navbharat motor agency</h3>
 <h3>&nbsp Mobileno:0217-2318169,0217-2312150,0217-2313655</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:148 post box no 58,railway lines,solapur-413001</h3>
<td><img src="images/Screenshot_20190206_184439.png" height="200" width="450"></td>
 </tr>

<tr>
<td><h3>&nbsp Name:Sandeep Treders</h3>
<h3>&nbsp Mobileno:09422458824</h3>
<h3>&nbsp Time:12:00am-11:59pm</h3>
<h3>&nbsp Address:932, shukrawar peth,baswar road,solapur-413001</h3>
<td><img src="images/Screenshot_20190206_184512.png" height="200" width="450">
</tr>

<tr>
 <td><h3>&nbsp Name:Prithviraj bharatgas Agency </h3>
 <h3>&nbsp Mobileno:0217-2262213</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:Shop No 16,17,Shilpa complex,Sharad Pawar High School Road,Solapur-413003</h3>
<td> <img src="images/Screenshot_20190206_184512Screenshot_20190206_184512.png" height="200" width="450"></td>
</tr>

<tr>
<td><h3>&nbsp Name:Aruna Gas Agency</h3>
 <h3>&nbsp Mobileno:0217-27207008,0217-27206775,0217-2621152,09822773111</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:Shop no 7 A super Market,sidheshwar peth, Solapur-413003</h3>
 <td> <img src="images/aruna.png" height="200" width="450"></td>

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