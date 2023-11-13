<!DOCTYPE html>
<?php
   include('session.php');
?>
<html lang="en">
<head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin:;
  padding:;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: rgb(226, 226, 226);
}
.table{
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 15px;
  min-width:80%;
  overflow: hidden;
  border-radius: 5px 5px 0 0;
}
table th{
  color: #fff;
  background: #004d4d;
  text-align: center;
  font-weight: bold;
}
table tr{
	 text-align: center;
}
.table th,
.table td{
  padding: 12px 15px;
}
.table tr{
  border-bottom: 1px solid #ddd;
}
.table tr:nth-of-type(odd){
  background: #f3f3f3;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
.table tr:last-of-type{
  border-bottom: 2px solid #004d4d;
}

input[type=date]{
display:inline;
width:15%;
height:36px;
border:2px solid #aaa;
border-radius:6px;
}
input[type=time]{
display:inline;
width:15%;
height:36px;
border:2px solid #aaa;
border-radius:6px;
}
input[type=text]{
display:inline;
width:15%;
height:36px;
border:2px solid #aaa;
border-radius:6px;
}
input[type=submit]{
display:inline;
width:10%;
height:40px;
border:3px solid #aaa;
border-radius:6px;
background-color:#004d4d;
color:white;
font-size:20px;
cursor: pointer;
}
input[type=date]:focus{
border-color:#004d4d;
}
input[type=time]:focus{
border-color:#004d4d;
}
input[type=text]:focus{
border-color:#004d4d;
}
.submitbtn:hover {
background-color:#34AF6D;
color:white;
}
a {
  float:right;
  font-size:15px;
  color:white;
  background-color:#b30000;
  border:4px solid #aaa;
  text-align: center;
  padding:2px;
  border-radius:5px;
  text-decoration: none;
}
</style>
</head>
<body>
<center><h2>Welcome  <?php echo $login_session; ?></h2></center>
<form action="Myrecord.php" method="post">
Date:<input type="date" name="date">			Start Time:<input type="time" name="start">			End Time:<input type="time" name="end">			Class Name:<input type="text" name="class" placeholder="Class Name">	<a href="logout.php">Log Out</a>		<a href="Record.php" style="margin-right:30px;background-color:#004d4d;color:white;border:4px solid #aaa;">Record</a>
<center>
<table class="table">
<tr>
<th>S No.</th>
<th>ROLL NUMBER</th>
<th>STUDENT NAME</th>
<th>ACTION</th>
</tr>
<tr>
<td>01</td>
<td>PG20-MCA01</td>
<td>Dharma Pradhan</td>
<td><input type="radio" name="button1" value="Present">Present &nbsp &nbsp <input type="radio" name="button1" value="Absent">Absent</td>
</tr>
<tr>
<td>02</td>
<td>PG20-MCA02</td>
<td>Nikhil Narayan Behera</td>
<td><input type="radio" name="button2" value="Present">Present &nbsp &nbsp <input type="radio" name="button2" value="Absent">Absent</td>
</tr>
<tr>
<td>03</td>
<td>PG20-MCA03</td>
<td>Binod Kumar Satapathy</td>
<td><input type="radio" name="button3" value="Present">Present &nbsp &nbsp <input type="radio" name="button3" value="Absent">Absent</td>
</tr>
<tr>
<td>04</td>
<td>PG20-MCA04</td>
<td>Jyotiprakash Panigrahi</td>
<td><input type="radio" name="button4" value="Present">Present &nbsp &nbsp <input type="radio" name="button4" value="Absent">Absent</td>
</tr>
<tr>
<td>05</td>
<td>PG20-MCA05</td>
<td>Kanha Sahu</td>
<td><input type="radio" name="button5" value="Present">Present &nbsp &nbsp <input type="radio" name="button5" value="Absent">Absent</td>
</tr>
<tr>
<td>06</td>
<td>PG20-MCA06</td>
<td>Surendra Patel</td>
<td><input type="radio" name="button6" value="Present">Present &nbsp &nbsp <input type="radio" name="button6" value="Absent">Absent</td>
</tr>
<tr>
<td>07</td>
<td>PG20-MCA07</td>
<td>Saudamini Mohanty</td>
<td><input type="radio" name="button7" value="Present">Present &nbsp &nbsp <input type="radio" name="button7" value="Absent">Absent</td>
</tr>
<tr>
<td>08</td>
<td>PG20-MCA08</td>
<td>Jyoti Achary</td>
<td><input type="radio" name="button8" value="Present">Present &nbsp &nbsp <input type="radio" name="button8" value="Absent">Absent</td>
</tr>
<tr>
<td>09</td>
<td>PG20-MCA09</td>
<td>Aditya Kumar Pattnaik</td>
<td><input type="radio" name="button9" value="Present">Present &nbsp &nbsp <input type="radio" name="button9" value="Absent">Absent</td>
</tr>
<tr>
<td>10</td>
<td>PG20-MCA10</td>
<td>Debasis Mohanty</td>
<td><input type="radio" name="button10" value="Present">Present &nbsp &nbsp <input type="radio" name="button10" value="Absent">Absent</td>
</tr>
<tr>
<td>11</td>
<td>PG20-MCA11</td>
<td>Manisharani Sahu</td>
<td><input type="radio" name="button11" value="Present">Present &nbsp &nbsp <input type="radio" name="button11" value="Absent">Absent</td>
</tr>
<tr>
<td>12</td>
<td>PG20-MCA12</td>
<td>Ratnakar Nayak</td>
<td><input type="radio" name="button12" value="Present">Present &nbsp &nbsp <input type="radio" name="button12" value="Absent">Absent</td>
</tr>
<tr>
<td>13</td>
<td>PG20-MCA13</td>
<td>Pradeep Kumar Rout</td>
<td><input type="radio" name="button13" value="Present">Present &nbsp &nbsp <input type="radio" name="button13" value="Absent">Absent</td>
</tr>
<tr>
<td>14</td>
<td>PG20-MCA14</td>
<td>Subhashree Sibani Sahu</td>
<td><input type="radio" name="button14" value="Present">Present &nbsp &nbsp <input type="radio" name="button14" value="Absent">Absent</td>
</tr>
<tr>
<td>15</td>
<td>PG20-MCA15</td>
<td>Chittaranjan Mahapatra</td>
<td><input type="radio" name="button15" value="Present">Present &nbsp &nbsp <input type="radio" name="button15" value="Absent">Absent</td>
</tr>
<tr>
<td>16</td>
<td>PG20-MCA16</td>
<td>Bhabanisankar Parida</td>
<td><input type="radio" name="button16" value="Present">Present &nbsp &nbsp <input type="radio" name="button16" value="Absent">Absent</td>
</tr>
<tr>
<td>17</td>
<td>PG20-MCA17</td>
<td>Digdarsani Sahu</td>
<td><input type="radio" name="button17" value="Present">Present &nbsp &nbsp <input type="radio" name="button17" value="Absent">Absent</td>
</tr>
<tr>
<td>18</td>
<td>PG20-MCA18</td>
<td></td>
<td></td>
</tr>
<tr>
<td>19</td>
<td>PG20-MCA19</td>
<td>Reshma Maharana</td>
<td><input type="radio" name="button19" value="Present">Present &nbsp &nbsp <input type="radio" name="button19" value="Absent">Absent</td>
</tr>
<tr>
<td>20</td>
<td>PG20-MCA20</td>
<td>Simran Bisoyi</td>
<td><input type="radio" name="button20" value="Present">Present &nbsp &nbsp <input type="radio" name="button20" value="Absent">Absent</td>
</tr>
<tr>
<td>21</td>
<td>PG20-MCA21</td>
<td>Pritishree Hota</td>
<td><input type="radio" name="button21" value="Present">Present &nbsp &nbsp <input type="radio" name="button21" value="Absent">Absent</td>
</tr>
<tr>
<td>22</td>
<td>PG20-MCA22</td>
<td>T Tapaswini Patro</td>
<td><input type="radio" name="button22" value="Present">Present &nbsp &nbsp <input type="radio" name="button22" value="Absent">Absent</td>
</tr>
<tr>
<td>23</td>
<td>PG20-MCA23</td>
<td>Shradhanjali Behera</td>
<td><input type="radio" name="button23" value="Present">Present &nbsp &nbsp <input type="radio" name="button23" value="Absent">Absent</td>
</tr>
<tr>
<td>24</td>
<td>PG20-MCA24</td>
<td>Tapaswani Behera</td>
<td><input type="radio" name="button24" value="Present">Present &nbsp &nbsp <input type="radio" name="button24" value="Absent">Absent</td>
</tr>
<tr>
<td>25</td>
<td>PG20-MCA25</td>
<td>Sagar Panigrahi</td>
<td><input type="radio" name="button25" value="Present">Present &nbsp &nbsp <input type="radio" name="button25" value="Absent">Absent</td>
</tr>
<tr>
<td>26</td>
<td>PG20-MCA26</td>
<td>Rabi Narayan Sethi</td>
<td><input type="radio" name="button26" value="Present">Present &nbsp &nbsp <input type="radio" name="button26" value="Absent">Absent</td>
</tr>
<tr>
<td>27</td>
<td>PG20-MCA27</td>
<td>Biswajit Pradhan</td>
<td><input type="radio" name="button27" value="Present">Present &nbsp &nbsp <input type="radio" name="button27" value="Absent">Absent</td>
</tr>
<tr>
<td>28</td>
<td>PG20-MCA28</td>
<td>Sonali Rani Panda</td>
<td><input type="radio" name="button28" value="Present">Present &nbsp &nbsp <input type="radio" name="button28" value="Absent">Absent</td>
</tr>
<tr>
<td>29</td>
<td>PG20-MCA29</td>
<td>Dayamaya Pradhan</td>
<td><input type="radio" name="button29" value="Present">Present &nbsp &nbsp <input type="radio" name="button29" value="Absent">Absent</td>
</tr>
<tr>
<td>30</td>
<td>PG20-MCA30</td>
<td>Shanti Sabara</td>
<td><input type="radio" name="button30" value="Present">Present &nbsp &nbsp <input type="radio" name="button30" value="Absent">Absent</td>
</tr>
</table></center>
<center><input type="submit" name="submit" value="Submit" class="submitbtn"></center>
</form>
</html>




































