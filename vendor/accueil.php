<h1 id="homeHeading">Bienvenue.</h1>
                <hr>
                <p></p>
<?php
		$date = date("d-m-Y");
		Print("Nous sommes le $date.	");
	?>
	
	<SCRIPT language=javascript>
		var ladate=new Date()
		document.write("Il est actuellement 	");
		document.write(ladate.getHours()+":"+ladate.getMinutes()+".")
		document.write("<BR>");
		var h=ladate.getHours();
		if (h<10) {h = "0" + h}
		var m=ladate.getMinutes();
		if (m<10) {m = "0" + m}
	</SCRIPT>
                    <image src="img/imgaccueil.gif" alt=""/>