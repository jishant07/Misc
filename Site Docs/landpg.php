<?php include 'header.php' ?>
<div id="main">	
<div id="map">
<div class="layer">
	<br>
	<br>
		<div class="container" style="text-align:center;color:white;">
			<div class="row">
				<div class="col-lg-6">
					<h4 id="gujarat">Gujarat</h4><br>
					<h4 id="mp">Madhya Pradesh</h4><br>
				</div>
				<div class="col-lg-6">
					<h4 id="maharashtra">Maharastra</h4><br>
					<h4 id="punjab">Punjab</h4>
				</div>
			</div>
		</div>
		<br>
		<div class="container" style="width: 100%;text-align:center;margin:auto;"><iframe id="india" width="100%" height="500" src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;q=india&amp;ie=UTF8&amp;t=&amp;z=5&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a></iframe></div><br>
</div>
</div>
</div>
<div><h1 style="text-align:center;">THINGS BELOW THIS DIV</h1></div>
<script type="text/javascript">
		$("#maharashtra").on("click",function()
		{
			$("#india").attr("src", "https://www.google.com/maps/d/embed?mid=1kdBaCe5lF3EXzW8NZ6d24xOyWIueyXeL" );
		});
		$("#gujarat").on("click",function()
		{
			$("#india").attr("src", "https://maps.google.com/maps?width=100%&height=500&hl=en&q=gujarat+(My%20Business%20Name)&ie=UTF8&ampt=&z=7&iwloc=B&output=embed");
		});
		$("#mp").on("click",function()
		{
			$("#india").attr("src", "https://maps.google.com/maps?width=100%&height=500&hl=en&q=madhya%20pradesh+(My%20Business%20Name)&ie=UTF8&t=&z=7&iwloc=B&output=embed");
		});
		$("#punjab").on("click",function()
		{
			$("#india").attr("src", "https://maps.google.com/maps?width=100%&height=500&hl=en&q=punjab+(My%20Business%20Name)&ie=UTF8&t=&z=7&iwloc=B&output=embed");
		});
		$("#tamilnadu").on("click",function()
		{
			$("#india").attr("src", "https://maps.google.com/maps?width=100%&height=500&hl=en&q=tamilnadu+(My%20Business%20Name)&ie=UTF8&t=&z=7&iwloc=B&output=embed");
		});
</script>
<?php include 'footer.php'?>