<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
  <button class="tablinks" onclick="openCity(event, 'Learn')">Learn</button>
</div>

<div id="Home" class="tabcontent">
  <h3>Courses</h3>
  <a href='python.php'><button>Python</button></a>
  <p></p>
  <a href='CPlus.php'><button>C++</button></a>
  <p></p>
  <a href='HTML.php'><button>HTML</button></a>
  <p></p>
  <a href='scratch.php'><button>Scratch</button></a>
</div>

<div id="Learn" class="tabcontent">
  <h3>Learn</h3>
  <?php
    require "connection.php";
    $conn=connection::getConn();
    session_start();
    $id=$_SESSION["userid"];
    $sql="SELECT * FROM `userdetail` WHERE id='$id'";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
      while($row = $result->fetch_assoc()) {
        $fname=$row["firstname"];
      }
    }
    echo "Hello: ".$fname;
    echo "<br>";
    $sql="SELECT * FROM `progressdetail` WHERE id='$id'";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
      while($row = $result->fetch_assoc()) {
        $language=$row["language"];
      }
    }
    $noth=0;
    echo "You have signed up for: ";
    echo "<br>";
    if(strpos($language,"p") !== false){
      echo "<a href='python.php'><button>Python</button></a>";
      echo "<br>";
      $noth=1;
    }if(strpos($language,"c") !== false){
      echo "<a href='CPlus.php'><button>C++</button></a>";
      echo "<br>";
      $noth=1;
    }if(strpos($language,"h") !== false){
      echo "<a href='HTML.php'><button>HTML</button></a>";
      echo "<br>";
      $noth=1;
    }if(strpos($language,"s") !== false){
      echo "<a href='scratch.php'><button>Scratch</button></a>";
      echo "<br>";
      $noth=1;
    }elseif ($noth==0){
      echo "Ooops, You have not yet registered for any courses!";
    }
  ?>

</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 