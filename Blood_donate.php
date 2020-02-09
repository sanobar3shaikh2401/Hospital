<!doctype html>

<html>
<head>
<link href="index.css" rel="stylesheet" type="text/css">
<title>Blood bank</title>
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
<body>
<center><h1>BLOOD  DONATION SERVICE</h1></center>

&nbsp 
&nbsp 
<header>

<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>

</ul>

</header>


<center><h1>Blood bank</h1></center>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Location.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">view</th>
  </tr>
  <tr>
<td><h3>&nbsp Name:SMT Gopabai Damani Blood Bank</h3>
<h3>&nbsp Mobileno:0217-2722106,0217-2726856</h3>
<h3>&nbsp Time:12:00am-11:59pm</h3>
<h3>&nbsp Address:Dufferin ckowk,railway lines,solapur city,solapur-413001</h3>
<td><img src="images/damani.jpg" height="200" width="450"></td>
 </tr>

<tr>  
<td> <h3>&nbsp Name:Damani Blood Bank</h3>
 <h3>&nbsp Mobileno:0217-272658</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:Railway lines,solapur-413001</h3>
<td><img src="images/damani.jpg" height="200" width="450"></td>
 </tr>

  <tr>
<td><h3>&nbsp Name:Dr-Hegdewar Blood Bank</h3>
 <h3>&nbsp Mobileno:0217-2311215</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:1st Floor,sahyadri shoping center,solapur city,solapur-413001</h3>
  <td><img src="images/dr-hegdewar-blood-bank.jpg" height="200" width="450"></td>
  </tr>

  <tr>
<td> <h3>&nbsp Name:Sidheshwar Blood Bank</h3>
 <h3>&nbsp Mobileno:0217-2323222,0217-6004222,09850220047</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:Survey number 126,kalyani tower,sidheshwar peth,solapur-413001</h3>
<td><img src="images/default-blood-banks-9.jpg" height="200" width="450"></td>
  </tr>

  <tr>
<td><h3>&nbsp Name:Akshay blood bank</h3>
 <h3>&nbsp Mobileno:0217-2315025</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:Laxmi Narayan Appartment, Sadar Bazar, Solapur-413003</h3>
 <td><img src="images/Screenshot_20190126_093428.png" height="200" width="450"></td>
 </tr>

<tr>
<td> <h3>&nbsp Name:Chattrapati shivaji maharaj sarvopchar hospital blood bank</h3>
 <h3>&nbsp Mobileno:0217-2749440</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:Civil hospital compound,ground floor,new B wing building,solapur city, Solapur-413003</h3>
 <td><img src="images/default-blood-banks.jpg" height="200" width="450"></td>
</tr>

<tr>
<td><h3>&nbsp Name:Solapur blood bank</h3>
 <h3>&nbsp Mobileno:0217-2317242,9823681900,09225526850</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:110/11 1st floor vijayalaxmi arcade,railway line,Solapur-413003</h3>
 <td><img src="images/solapur-blood-bank.jpg" height="200" width="450"></td>
</tr>

<tr>
<td> <h3>&nbsp Name:Adhar blood bank</h3>
 <h3>&nbsp Mobileno:0217-2622999</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:410 1st floor jamaya complex,Solapur market,solapur-413003(near jama masjid)</h3>
<td> <img src="images/Screenshot_20190127_200725.png" height="200" width="450"></td>
</tr>

<tr>
<td><h3>&nbsp Name:Mallikarjun blood bank</h3>
 <h3>&nbsp Mobileno:0217-2310555,9766301152</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:942,first floor & second floor,lashkar road,satrasta, Solapur-413003</h3>
  <td><img src="images/default-blood-banks-9.jpg" height="200" width="450"></td>
</tr>

<tr>
<td><h3>&nbsp Name:Medicare blood bank</h3>
 <h3>&nbsp Mobileno:08983555150</h3>
 <h3>&nbsp Time:12:00am-11:59pm</h3>
 <h3>&nbsp Address:Congress bhavan compound,sidheshwar peth,Solapur-413003</h3>
<td><img src="images/Screenshot_20190127_201549.png" height="200" width="450"></td>
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

<footer>
<h2><a href="contact.php">Contact Us</a></h2>
&nbsp
&nbsp
&nbsp
&nbsp
</footer>

</body>
</html>