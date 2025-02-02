<!DOCTYPE html>
<html>
<title>CLAS12 Monte-Carlo Job Submission Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
  <style>
body,h1,h2,h3,h4 {font-family: "Raleway", Helvetica, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}
</style>


<!-- Side Navigation -->
<nav class="w3-bar w3-border w3-sidebar w3-bar-block w3-card w3-center" style="display:none" id="mySidebar">
  <h2 class="w3-xxlarge w3-text-theme">Menus </h2>
  <button class="w3-button w3-display-topright w3-btn" onclick="w3_close()"> <i class="fa fa-remove"></i></button>
  <h4>
  <a href="submit.html" class="w3-bar-item w3-button">Job Submission</a>
  <a href="p2.php" class="w3-bar-item w3-button">Farm Statistics</a>
  <a href="https://github.com/mit-mc-clas12/documentation" class="w3-bar-item w3-button">Useful Links</a>
  <a href="#" class="w3-bar-item w3-button">Contacts</a>
</h4>
</nav>

<!-- Header -->
<header class="w3-panel w3-opacity w3-container" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button"></i> 
  <div class="w3-center">
  <!-- <h4></h4> -->
  <h1 class="w3-xlarge">CLAS12 Monte-Carlo Job Submission Portal</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-large w3-border" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">Farm Status</button>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright w3-btn">x</span>
        <h4>Computing Farm Summary</h4>
      </header>
      <div class="w3-padding w3-center">
        <?php
        if ($fh = fopen('Sample_script_result', 'r')) {
                $line1 = fgets($fh);
                $line2 = fgets($fh);
                $t2_total = substr($line2, 12);
                $line3 = fgets($fh);
                $t2_busy = substr($line3, 11);
                $line4 = fgets($fh);
                $t2_idle = substr($line4, 11);
            fclose($fh);
        }
        if ($fh = fopen('Sample_script_result_osg', 'r')) {
                $line1 = fgets($fh);
                $line2 = fgets($fh);
                $osg_total= substr($line2, 12);
                $line3 = fgets($fh);
                $osg_busy = substr($line3, 11);
                $line4 = fgets($fh);
                $osg_idle = substr($line4, 11);
            fclose($fh);
        }
        if ($fh = fopen('Sample_script_result_jlab', 'r')) {
                $line1 = fgets($fh);
                $line2 = fgets($fh);
                $jlab_total= substr($line2, 12);
                $line3 = fgets($fh);
                $jlab_busy = substr($line3, 11);
                $line4 = fgets($fh);
                $jlab_idle = substr($line4, 11);
            fclose($fh);
        }
      ?>
        <table style="width:100%;text-align:center">
          <tr>
            <th> Farm Name </th>
            <th> Total Available Cores </th>
            <th> Busy Cores </th>
            <th> Idle Cores </th>
          </tr>
          <tr>
            <td> MIT </td>
            <td> <?php echo nl2br($t2_total); ?> </td>
            <td> <?php echo nl2br($t2_busy); ?> </td>
            <td> <?php echo nl2br($t2_idle); ?> </td>
          </tr>
          <tr>
            <td> OSG </td>
            <td> <?php echo nl2br($osg_total); ?> </td>
            <td> <?php echo nl2br($osg_busy); ?> </td>
            <td> <?php echo nl2br($osg_idle); ?> </td>
          </tr>
          <tr>
            <td> JLab </td>
            <td> <?php echo nl2br($jlab_total); ?> </td>
            <td> <?php echo nl2br($jlab_busy); ?> </td>
            <td> <?php echo nl2br($jlab_idle); ?> </td>
          </tr>

        </table>
      </div>
   <!--    <footer class="w3-container">
        <p>Modal footer</p>
      </footer> -->
    </div>
</div>

<div class="w3-row-padding w3-center w3-margin-top">
<a href="submit.html" >
<div class="w3-quarter">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Type 1</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Type 1</p>
  </div>
</div>
</a>

<a href="submit.html" >
<div class="w3-quarter">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Type 2</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Type 2 </p>
  </div>
</div>
</a>

<a href="submit.html" >
<div class="w3-quarter">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Type 3</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Type 3</p>
  </div>
</div>
</a>

<a href="submit.html" >
<div class="w3-quarter">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Type 4</h3><br>
  <i class="w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Type 4</p>
  </div>
</div>
</a>


</div>

<hr>
<div class="w3-center">
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">«</a>
      <a href="#" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
      <a href="submit.html" class="w3-bar-item w3-button w3-hover-theme">2</a>
      <a href="p2.php" class="w3-bar-item w3-button w3-hover-theme">3</a>
      <a href="https://github.com/mit-mc-clas12/documentation" class="w3-bar-item w3-button w3-hover-theme">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">5</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">»</a>
    </div>
  </div>
</div>
<br>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "30%";
  x.style.height = "50%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "0%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

</script>

</body>
</html>
