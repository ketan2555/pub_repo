<div>script loaded now</div>
<script type="text/javascript">
  var script = document.createElement("script");
  script.src = "https://raw.githubusercontent.com/ketan2555/pub_repo/main/myfile.js";
  document.documentElement.firstChild.appendChild(script);
  script.onload = function(){
      window.fun = fun;
  }
function xyz(){
  window.fun();
}
</script>
