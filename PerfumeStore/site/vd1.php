<div class="lich">
      <div id="days"></div>
      <div id="dates"></div>
      <div id="times"></div>
</div>

<style>
.lich{
padding:20px;
background:white;
border-radius:10px;
font-size:30px;
/* border:2px solid #999; */
}
</style>

<script>
window.onload = setInterval(clock,1000);
function clock()
{
var d = new Date();

var hour =d.getHours();
var min = d.getMinutes();
var sec = d.getSeconds();

document.getElementById("times").innerHTML=hour+":"+min+":"+sec;
}
</script>