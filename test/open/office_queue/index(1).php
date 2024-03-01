<html>
<body>
<style>
	.style1 { /* width:64px; height:64px; */ background:orange; }
</style>

<div style="width:800px; margin: 0 auto">

	<div id="demo1" style="margin:25px 0"></div>
	<div id="demo2" style="margin:25px 0"></div>
</div>

<script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    document.getElementById("demo1").innerHTML = JSON.stringify(myObj);
	document.getElementById("demo2").innerHTML = JSON.stringify(myObj.data[1]);
	document.getElementById("demo2").classList.add("style1");
  }
};
xmlhttp.open("GET", "queues.php", true);
xmlhttp.send(); 


</script>

</body>
</html>

