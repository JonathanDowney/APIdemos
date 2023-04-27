<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h2> Check out the NASA photo of the day! (<span id="date"></span>)</h2>
<h3 id="title"></h3>

<div class="row">
  <div class="column" id="colA">
    <div id="photo"></div>
  </div>
  <div class="column">
    <div id="explanation"></div>
    <p style="text-align:center"> Photo updated daily via NASA API. More info at <i>https://api.nasa.gov/</i></p>
  </div>
</div>

<!-- <script>
const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  document.getElementById("date").innerHTML = myObj.date;
  document.getElementById("title").innerHTML = '"' + myObj.title + '"';
  document.getElementById("photo").innerHTML = '<img src = "' + myObj.url + '" />';
  document.getElementById("explanation").innerHTML = myObj.explanation;
}
xmlhttp.open("GET", "demo_file.php");
xmlhttp.send();
</script> -->

<script>
fetch('demo_file.php')
  .then(response => response.json())
  .then(data => console.log(data));
</script>

</body>
</html>

