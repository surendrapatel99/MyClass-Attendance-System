<?php
echo "<html><head><link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"><style>
@media print {
  .noPrint{
    display:none;
  }
}button{float:right;margin-right:20px;background-color:#34AF6D;color:black;font-size:20px;cursor: pointer;}a{float:right;font-size:18px;color:white;background-color:#b30000;text-align: center;padding:2px;border-radius:5px;border:3px solid #aaa;text-decoration: none;}body{
background: rgb(226, 226, 226);}input[type=date]{height:35px;border:2px solid #aaa;border-radius:6px;}input[type=submit]{height:30px;border:2px solid #aaa;border-radius:6px;background-color:#34AF6D;color:white;font-size:20px;cursor: pointer;}</style></head><body bgcolor=''><a href=\"logout.php\"  class=\"noPrint\">Log Out</a>&nbsp&nbsp<button onclick=\"window.print();\" class=\"noPrint\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i></button>";
echo "<center><form action='' method='POST' class=\"noPrint\">";
echo "<table><tr><td>Enter Date From:</td><td><input type='date' name='startdate' value=''</td><td>To:</td><td><input type='date' name='enddate' value=''</td></tr>";
echo "<tr><td></td><td><input type='submit' name='submit' value='Submit'</td></tr></table></form></center>";
echo "</body></html>";
if(isset($_POST['submit'])){
    $startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	$conn=mysqli_connect("localhost","root","","project");
	$query = "select * from MYATTENDANCE where Date between '$startdate' and '$enddate'";
    $query_run = mysqli_query($conn,$query);
	 echo "<html><head><style>body{
  background: rgb(226, 226, 226);
}.table{
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 15px;
  min-width:80%;
  overflow: hidden;
  border-radius: 5px 5px 0 0;
}table th{
  color: #fff;
  background: #004d4d;
  text-align: center;
  font-weight: bold;
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
.table tr:nth-child(even) {
  background-color: #D6EEEE;
}
.table tr:last-of-type{
  border-bottom: 2px solid #004d4d;}</style></head><body bgcolor=''>";
    echo "<center><table class=\"table\"><tr><th>DATE</th><th>START TIME</th><th>END TIME</th><th>CLASS NAME</th><th>ROLL NUMBER</th><th>STUDENT NAME</th><th>ATTENDANCE</th></tr>";
    while($row=mysqli_fetch_assoc($query_run)){
        echo "<tr align=\"center\"><td>".$row['Date'];
        echo "</td><td>".$row['Start_at'];
        echo "</td><td>".$row['End_at'];
        echo "</td><td>".$row['Class_name'];
		echo "</td><td>".$row['Roll_no'];
		echo "</td><td>".$row['Student_name'];
		echo "</td><td>".$row['Attendance'];
        echo "</td></tr>";
    }
    echo "</table></center></body></html>"; 
   }
?>