<!doctype html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="index.css" rel="stylesheet" type="text/css">
<title> Hospital Service </title>
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
<center><h1>Hospital Service</h1></center>

&nbsp 
&nbsp 
<header>


<ul>
<li> <a href="Index.php" class="active"><i>HOME</i></a></li>
</ul>

</header>
<center><h2>Nawi peth Hospital</h2></center>
&nbsp
&nbsp

<center><h1>Hospitals</h1></center>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Location.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">view</th>
  </tr>
  <tr>
<td><h3>&nbspName: Kumthekar hospital</h3>
<h3>&nbspMobileno: 9152615629</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Survey no 124/a/4,main road,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/kumthekar hos.jpg" width="450" height="200"  style=float: left></td>

</tr>

<tr>
<td><h3>&nbspName: Chitale Clinic Pvt Ltd</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:165 D,Railway lines,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/chitale.jpg " width="450" height="200" style=float:left></td>

</tr>
<tr>
<td><h3>&nbspName: Sanjeevani Hospital</h3>
 <h3>&nbspMobileno: 9152453235</h3>
<h3>&nbspTime: 12;00am;11:59pm</h3>
 <h3>&nbspAddress:plot no 3,Hotgi road,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/Sanjeevani hos.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Saphalya Clinic</h3>
 <h3>&nbspMobileno: 9152501874</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Vikas nagar,hotgi road,(near mahavir chowk Ganpati temple),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/Saphyala hos.jpg " width="450" height="200" style=float:left></td>

</tr>

<tr>
<td><h3>&nbspName: Kasliwal Hospital</h3>
 <h3>&nbspMobileno: 9152701688</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Kaslival Balrugnalaya 196,(near budhwar peth),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/kasliwal hos.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Arya Hospital</h3>
 <h3>&nbspMobileno: 9152832897</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:341/170 Foot road,near bhaji Market,Ashok Chowk,,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/arya hospital.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:DAGA Clinic </h3>
<h3>&nbspMobileno: 9152741877</h3>
<h3>&nbspTime: 24 hours</h3>
<h3>&nbspAddress:Plot no 6/224,225 Juni mill Compund,Uma Sahakari Grah nirman Sanstha,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/waghane immunity.jpg " width="450" height="200" style=float:left></td>

</tr>
<tr>
<td><h3>&nbspName:Dr.Meena Gunjotikar </h3>
<h3>&nbspMobileno: 9152732977</h3>
<h3>&nbspTime: 24 hours</h3>
<h3>&nbspAddress:71/81 Somwar peth,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/meena.jpg" width="450" height="200" style=float:left></td>

</tr>

<tr>
<td><h3>&nbspName: Shri Basaveshwar Hospital</h3>
<h3>&nbspMobileno: 9152568831</h3>
<h3>&nbspTime: 24 hours</h3>
<h3>&nbspAddress:House No 207,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/shri basaveshwar.jpg" width="450" height="200" style=float:left></td>

</tr>

 <tr>
<td><h3>&nbspName: Meera Hospital</h3>
<h3>&nbspMobileno: 9152584352</h3>
<h3>&nbspTime: 24 hours</h3>
<h3>&nbspAddress:Opposite Morya Ganpati Temple.new RTO office to Ramwadi Road,indira nagar,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/meera.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Jamma Hospital</h3>
<h3>&nbspMobileno: 9152644416</h3>
<h3>&nbspTime: 24 hours</h3>
<h3>&nbspAddress:3/4,shri Mrutunjay Complex,Kumbhar ves,solapur</h3
<h3>Reviwes:</td></h3>
<td><img src="images/jamma.jpg" width="450" height="200" style=float:left></td>
</tr>


<tr>
<td><h3>&nbspName:Akshat child Clinic </h3>
 <h3>&nbspMobileno: 9152503358</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Shubhkmana Bungalow,VIP Road,Satrasta,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/akshta child.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Life Line Hospital</h3>
 <h3>&nbspMobileno: 9152850905</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:plot no:03,vikas Nagar naka,Mhavir chowk,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/lifeline.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Dr.More Varsha</h3>
 <h3>&nbspMobileno: 9152837203</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:phule Plots,Uplai Road ,Barshi,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dr more.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:More Hospital </h3>
 <h3>&nbspMobileno: 9152823920</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:728/1/16,Adhyapak colony,kurdwadi Road,Barshi,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/more-hospital-barshi-solapur-hospitals-qyqwz.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Dr.Sachin Kulkarni Orthopaedic center </h3>
 <h3>&nbspMobileno: 09272392392</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:jule solapur,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/kulkarni.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Raut Accidental & Maternity Hospital</h3>
 <h3>&nbspMobileno: 9152749957</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:157/1,priyanka Building,old Employment chowk,bus stand,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/raut-accidental-maternity-hospital-solapur.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Shrdha Nursing Home</h3>
 <h3>&nbspMobileno: 9152694391</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:2016/1,sadar Bzar,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/shraddha-hospital-barshi-solapur-hospitals-0cgagovi7j.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbsp&nbspName:Apex Hospital </h3>
 <h3>&nbspMobileno: 9152681997</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Hotgi Road,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/Apex hos.jpg" width="450" height="200" style=float:left></td>
</tr>


<tr>
<td><h3>&nbspName: Suratkal Nursing Home</h3>
 <h3>&nbspMobileno: 9152858867</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Jam Mill compound,damani nagar,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/surtakala hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Ashwini Sahakari Rugnalaya Ani Sanshodhan kendra Niy </h3>
 <h3>&nbspMobileno: 02172319900</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Survey No 7107/1 Tank plot No 180,near Strasta Chowk,sadar Bazar,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/ashwini-sahakari-rugnalaya-solapur.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Navneet Hospital </h3>
 <h3>&nbspMobileno: 021230345</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:165/1,Railway Lines,Starasta,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/navneet-hospital.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Raghoji Kidney Hospital And Reserch center pvtLtd</h3>
 <h3>&nbspMobileno: 02172317322</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:146/2,Railway Lines,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dr-vijay-raghoji-raghoji-kidney-hospital.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Gangamai Hospital </h3>
 <h3>&nbspMobileno: 02172383849</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:plot No 1cs No 279/2,Modi Khana ,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dr-s-prabhakar-gangamai.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Chitale Clinic Pvt Ltd</h3>
 <h3>&nbspMobileno: 9152886320</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:165,D Railway Lines,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/chitale-clinic-pvt-ltd-solapur.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Siddheshwar Multispeciality Hospital Pvt Ltd </h3>
 <h3>&nbspMobileno: 02172320840</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress188 ,near st Bus stand Samart Chowk Budhwar peth,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/siddheshwar-multispeciality-hospital.jpg" width="450" height="200" style=float:left></td>
</tr>
<tr>
<td><h3>&nbspName:City Hospital </h3>
 <h3>&nbspMobileno: 02172315155</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:B wing city pride Building,VIP Road,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/city hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Chidgupkar Hospital </h3>
 <h3>&nbspMobileno: 02172326841</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Plot no 190,samart chowk,Budhwar peth,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/default-blood-banks-9.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Ramkrishna Hospital </h3>
<h3>&nbspMobileno: 0217235042</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:162/20 A,church Street,(Railway Lines shanthi sagar mangal karyalya)solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/ramakrishna hospital-front-18710.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Venkatesh Hospital</h3>
 <h3>&nbspMobileno: 02172625005</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Navi peth(near old Mahila bank),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/venkatesh hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Apex Hospital </h3>
 <h3>&nbspMobileno: 9152363374</h3>
<h3>&nbspTime: 24 hours</h3>
<h3>&nbspAddress:Hotgi Road,(Opp axis Bank,Near kinara Hotel),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/Apex hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Katkar Hospital</h3>
 <h3>&nbspMobileno: 02172315375</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:946,saat Rasta,North Sadar Bazar,opposite Mangal Murthi,North Sdar Bazar,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/katkar-opticians.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Dr.Deshmukh Hospital </h3>
 <h3>&nbspMobileno: 02184227580</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Deshpande Plot,Kurudwadi Road,Barshi,,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dr-deshmukh-hospital-barshi-solapur-private-hospitals-mnmwrzb.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Sunrise Hospital </h3>
 <h3>&nbspMobileno: 02172313255</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Survey No 146/B/1.old RTO office,(Railway line near chandele sabah Gruh A),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/sunrise hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Dama Hospital</h3>
 <h3>&nbspMobileno: 02172727286</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:188,pune Road,(near Budhwar peth,Opposite Bank of Maharastra,near hotel Ambassador),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dr-dama.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Iyar Orthopedic Center </h3>
 <h3>&nbspMobileno: 02172317597</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:103,Railway Line,(near Mahapuor Bunglow,opposite Railway Station),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/iyar hospital.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Baldawa Hospital </h3>
 <h3>&nbspMobileno: 0172326853</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Ashok chowk,(near Kasturba market Budhwar peth),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/birajdar hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Life line Hospital and reserch center </h3>
 <h3>&nbspMobileno: 02172605694</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Block n0:-3,Hotgi Road(vikas nagar),solapur</h3>
<h3>Reviwes:</td></h3><td>
<img src="images/life line.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Binit Hospital </h3>
 <h3>&nbspMobileno: 02172319156</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:111Binit Complex,Saat Rasta,(Near Modikhana Opposite Uplap Mangal Karayalaya),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/binit hos.jpg" width="450" height="200" style=float:left></td>
</tr>


<tr>
<td><h3>&nbspName:Metan Hospital </h3>
 <h3>&nbspMobileno: 02172742150</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:19 Jodhbhavi peth,kanna Chowk,Solapur Market(Behind Chodeshwari Temple Jodbhavi peth nagar Bakale Collection),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/mind hospital.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Kumthale Specality Hospital </h3>
 <h3>&nbspMobileno: 08983376164</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Vijapur Road,jule Solapur(near SBI ATM,saiful),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/kumthekar hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:SHRADDHA HOSPITAL</h3>
 <h3>&nbspMobileno: 02184224466</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Ksarwadi Road,Barshi,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/shrdha hos.jpg" width="450" height="200" style=float:left></td>
</tr>
<tr>
<td><h3>&nbspName:Khairnar Hospital </h3>
 <h3>&nbspMobileno: 09822072127</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:165/D Railway lines(near Sangram college),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/khairnar hospital.jpg" width="450" height="200" style=float:left></td>
</tr>
<tr>
<td><h3>&nbspName:Siv Santoshi Hospital </h3>
 <h3>&nbspMobileno: 02172623937</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:pune Road,budhwar peth front of Bank of Maharastra near Ambesiter Hotel,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/cns-hospital-.jpg" width="450" height="200" style=float:left></td>
</tr>
<tr>

<td><h3>&nbspName:Akshay Hospital </h3>
 <h3>&nbspMobileno: 02172332828</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:321/52,Muslim Pacha peth near Kalika Devi Mandir,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/akshta child.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Varad Hospital </h3>
 <h3>&nbspMobileno: 02172727232</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Navi peth,near Shalima Theatre Datta chowk navi peth,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/varad hospital.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Wachche Hospital </h3>
 <h3>&nbspMobileno: 02172301314</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:plot no 13,vishal Nagar,0,jule solapur(near Daawat Hotel),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/wache hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Ambika Hospital </h3>
 <h3>&nbspMobileno: 02172624066</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Shivaji Chowk,Murarji peth,(opposite ST stand),solapur</h3>
<h3>Reviwes:</td></h3>
</tr>

<tr>
<td><h3>&nbspName: Akshara Hospital</h3>
 <h3>&nbspMobileno: 02172601666</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:United Arcade Basement,Hotgi Road Asra Chowk,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/aksara hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Patil Hospital </h3>
 <h3>&nbspMobileno: 02183234842</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:cidco main road,madha(near Aircel Tower At post Madha District),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/patil hospital.jpg" width="450" height="200" style=float:left></td>

</tr>
<tr>
<td><h3>&nbspName: Mangoli Hospital</h3>
 <h3>&nbspMobileno: 02172728218</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:608 B,main road,south Kasba(Datta Chowk,near kannada medical south,sadar Bazar),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/mangoli-hospital.jpg" width="450" height="200" style=float:left></td>
</tr>
<tr>
<td><h3>&nbspName:Dantakale Orthopaedic Hospital </h3>
 <h3>&nbspMobileno: 02172341623</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Vijay Housing Society,vijapur Road,jule solapu,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dantakale.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Nanajkar Piles care center</h3>
 <h3>&nbspMobileno: 02172383838</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:144,Laxmi peth,Damani Nagar,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/nanajkar.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Pathwardhan Hospital </h3>
 <h3>&nbspMobileno: 02172727989</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:581.south kasba,near Rajwade Chowk,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/pathwardhan.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Ameena Hospital</h3>
 <h3>&nbspMobileno: 02172623735</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:104,solapur city,Ganesh peth nagar,padmaTheter,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/amina hos.jpg" width="450" height="200" style=float:left></td>

</tr>
<tr>
<td><h3>&nbspName:Dr.kadam Surgical Hospital </h3>
 <h3>&nbspMobileno: 02183223308</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:pandharpur road,kurwadi,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dr-anand-mudkanna.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Utkarsha Hospital</h3>
 <h3>&nbspMobileno: 02172312345</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:1640 civil lines,late doctor V D kirpekar road,satrasta,,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/utkarsh.jpg" width="450" height="200" style=float:left></td>

</tr>



<tr>
<td><h3>&nbspName:Adhar Hospital</h3>
 <h3>&nbspMobileno: -</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:1750,sangola(A/P sangola Shivaji Nagar),solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/adhar hos.jpg" width="450" height="200" style=float:left></td>

</tr>
<tr>
<td><h3>&nbspName:Dr.Jaykars neramay clinic Maternity Surgical </h3>
 <h3>&nbspMobileno: 1952648684</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:C/o,Niramay clinic,sadar bazar,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/niramay hos.jpg" width="450" height="200" style=float:left></td>

</tr>

<tr>
<td><h3>&nbspName:Sanjivani Accident Hospital </h3>
 <h3>&nbspMobileno: 02185222594,09850249696</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Opp sai mandir,sangram nagar, Akluj,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/sanjiwani hos.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName:Aparna Hospital</h3>
 <h3>&nbspMobileno: 02172323155,9822285799</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:518 south,kasba,nawi peth ,solapur</h3>
<h3>Reviwes:</td></h3>

<td><img src="images/Aprana hospital.jpg" width="450" height="200" style=float:left></td>

</tr>
<tr>
<td><h3>&nbspName:Dr.Shirsikeyur Hospital </h3>
 <h3>&nbspMobileno: 9175570061</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Udgiri wada,bhawani peth,manglwar peth,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/Saphyala hos.jpg" width="450" height="200" style=float:left></td>

</tr>
<tr>
<td><h3>&nbspName:Mind Hospital</h3>
 <h3>&nbspMobileno: 02172625566,02172313344,9860075975</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:juna RTO office,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/mind hospital.jpg" width="450" height="200" style=float:left></td>

</tr>

<tr>
<td><h3>&nbspName: Mandarpan Neuro Psychiatry Clinic & Deaddiction center</h3>
<h3>&nbspMobileno: 9152223591</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Dhantari Complex,Sulakhe Highschool Road,Barshi ,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/dr-anand-mudkanna.jpg" width="450" height="200" style=float:left></td>

<tr>
<td><h3>Name: Dr Waghanna Immunity clinic</h3>
 <h3>Mobileno:02172725250</h3>
 <h3>Time: 11am-8:30pm</h3>
 <h3>Address:killa road,navi peth,solapur</h3>
<h3>Reviwes:</td></h3>
<td><img src="images/waghane immunity.jpg" width="450" height="200" style=float:left></td>

 </tr>

<tr>
<td><h3>Name:Kelkar Hospital</h3>
<h3>Mobileno:0217276627</h3>
<h3>Time:12pm-11:59pm</h3>
<h3>Address:Shubray Tower,nawi peth,solapur</h3>
<td><img src="images/kelkar.jpg" width="450" height="200" style=float:left></td>
</tr>

 <tr>


 <td> <h3>Name:Suyog netralaya</h3>
  <h3>Mobileno:0217269</h3>
  <h3>Time:8am-8pm</h3>
  <h3>Address:1640,shinde chowk,navi peth solapur</h3>
<td><img src="images/suyog.jpg" width="450" height="200" style=float:left></td>
</tr>
  <tr>

<td> <h3>Name:Vyankatesh Hospital</h3>
 <h3>Mobileno:02172625005</h3>
 <h3>Time:24hours</h3>
 <h3>Address:3,Navi peth,murarji peths,navi peth solapur

<td><img src="images/venkateshwara-.jpg" width="450" height="200" style=float:left></td>

 </tr>

<tr>
 <td> <h3>Name:Sarda Hospital</h3>
 <h3>Mobileno:9152764929</h3>
 <h3>Time:24hours</h3>
 <h3>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Address:Rupa bhavani Road,Market,solapur-413002</h3>

<td><img src="images/sarda.jpg" width="450" height="200" style=float:left></td>

</tr>




 

<tr>
<td><h3>Name:Yashodhara super speciliality hospital</h3>
 <h3>mobileno:02172323001</h3>
 <h3>Time:24hours</h3>
 <h3>Address:near markaz masjid,sidheshwar peth,solapur</h3>

<td><img src="images/yashodhara.jpg" width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>Name:Kothadia Nursing Home</h3>
 <h3>mobileno:02172723050</h3>
 <h3>Time:24hours</h3>
 <h3>Address:zilla parishad office 6185/E/1sidheshwar peth,solapur</h3>

<td><img src="images/kothadia.jpg" width="450" height="200" style=float:left></td>
</tr>






















</tr>

<tr>
<td><h3>&nbspName:S L Hospital </h3>
<h3>&nbspMobileno: 02172607601</h3>
<h3>&nbspTime: 24 hours</h3>
<h3>&nbspAddress:Hotgo road,near bus stop,solapur</h3>
<h3>Reviwes:</td></h3>


</tr>


<tr>
<td><h3>&nbspName:Bhawani Hospital </h3>
 <h3>&nbspMobileno: 02172323999</h3>
<h3>&nbspTime: 24 hours</h3>
 <h3>&nbspAddress:Ghongade nagar Bhawani peth,solapur</h3>
<h3>Reviwes:</td></h3>


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

<footer>
<h2><a href="contact.php">Contact Us</a></h2>

&nbsp
&nbsp
&nbsp
&nbsp
</footer>

</body>
</html>