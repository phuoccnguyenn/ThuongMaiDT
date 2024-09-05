<div class="lich">
      <div id="days"></div>
      <div id="dates"></div>
      <div id="times"></div>
</div>

<style>
.lich{
padding:20px;
background: #faf87a;
color: blue;
font-weight: bold;
border-radius:10px;
float: right;
font-size:30px;
margin-top: 50px;
border:2px solid #999;
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