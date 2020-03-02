

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add Phone Number</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="p-3 mb-2 bg-info text-dark">
          <div class="card p-3 mb-2 bg-info text-white">
              <center> <h1><b>รายชื่อ/เบอร์โทรศัพท์</b></h1></center>
          </div>
        </div>
    <br>
<div style="margin: auto;width: 60%;">
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
<form  name="phonebook" action="save.php" method="POST" id="phonebook" class="form-horizontal">
<p>
<label for="name">Name</label>
<input type="text" name="name1" id="name1" class="form-control">
</p>
<p>
<label for="phone">Phone Number</label>
<input type="text" name="phone" id="phone" class="form-control">
</p>
<button type="submit" class="btn btn-info" id="btn" value="save">  เพิ่มรายชื่อและเบอร์โทรศัพท์ </button>
</form>
</div>
<br>
<br>

<nav class="navbar navbar-light bg-light bg-dark">
  <a class="navbar-brand text-white">บัญชีรายชื่อโทรศัพท์</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2 " input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
  </form>
</nav>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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
<?php
$servername = "localhost";
$username = "mook";
$password = "mook";
$dbname = "phonebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name1, phone FROM phonebook";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table id='myTable' class='table table-sm'>";
    echo "<tr class='bg-info' align='center'><th class='bg-info'>Name</th><th class='bg-warning'>Phone Number</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr class=''>";
        echo "<td class='table-info'>" . $row["name1"].  "</td> " ;
        echo "<td class='table-warning'>" . $row["phone"] .  "</td> "  ;
        echo "</tr>";
    }
    
} else {
    echo "0 results";
}
$conn->close();
?>



