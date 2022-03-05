<!DOCTYPE html>
<?php
session_start(); 
include 'login.php';
?>
<html>
<title>HNI1details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="HNI1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
 
<div class="w3-bar w3-red">
  <a href="" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Calculations</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Plans</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Logout</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>
 
<div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>
 
 
<div class="wrapper">
    <div class="main">
        <?php printf("<p> HI %s</p>", $_SESSION['name']);
        echo "These are your clients for today";
        ?>
        <p> Make an appointment </p>
        <button id="appt-making" style="font-size:15pxpx;"><i class="fa fa-plus"></i></button>
        <script type="text/javascript">
    document. getElementById("appt-making"). onclick = function () {
    location. href = "appointment.html";
    };
    </script>
        <div class="HNIinfo">
            <h4>Client Info</h4>
            <div style="margin: 5px;">
              <table>
                  <tr>
                      <td>ID :</td>
                      <td>900197382</td>
                  </tr>
                  <tr>
                      <td>Name : </td>
                      <td>Aswani Kumar Gurivelli</td>
                  </tr>
                  <tr>
                      <td>Age : </td>
                      <td>36</td>
                  </tr><tr>
                      <td>DOB :</td>
                      <td>04/06/1985</td>
                  </tr>
              </tr>
              <tr>
                  <td>Company :</td>
                  <td>Servo-Infotech</td>
              </tr>
              <tr>
                  <td>Investment :</td>
                  <td>75 Crores</td>
              </tr>
              </table>              
            </div>
      </div>
      <div>
          <h4>Appointment Details</h4>
          <div>
              <table>
                  <tr>
                      <th>SNo. </th>
                      <th>Name </th>
                      <th>Date</th>
                      <th>time</th>
                      <th>Denial</th>
                      <th>Resheduled Date</th>
                      <th>Agreed Date</th>
                      <th>Status</th>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>Swar</td>
                      <td>05/03/22</td>
                      <td>5PM</td>
                      <td style="color: rgb(122, 233, 31);">No</td>
                      <td style="color: rgb(122, 233, 31);">No</td>
                      <td>05/03/22</td>
                      <td>Confirmed</td>
 
                  </tr>
              </table>
          </div>
      </div>
    </div>
    <div class="sidebar">
        <h4>Content</h4>
        <div>
            <ul>
                <li><a href="" >Notification</a></li>
                <li><a href="" >Conversations</a></li>
                <li><a href="" >FAQ</a></li>
                <li><a href="" >Contact Us</a></li>
            </ul>
        </div>
    </div>
  </div>
 
<script>
function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
 
</body>
</html>