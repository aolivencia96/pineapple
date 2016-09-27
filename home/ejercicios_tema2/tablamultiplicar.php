<HTML LANG="ES">

<HEAD>
   <TITLE>Tabla de multiplicar</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<H1>Tabla de multiplicar</H1>

<?PHP
   $n = 7;
   $r1;
   $r2;
   $g1;
   $g2;
   $b1;
   $b2;
   $color;
   $fondo;
   print ("<h2>La tabla de multiplicar del $n es:</h2>\n");
   echo"<table border=5>";
   $c1r1=random_int(0, 9);
   $c1r2=random_int(0, 9);
   $c1g1=random_int(0, 9);
   $c1g2=random_int(0, 9);
   $c1b1=random_int(0, 9);
   $c1b2=random_int(0, 9);
   $color1="style=background-color:#".$c1r1.$c1r2.$c1g1.$c1g2.$c1b1.$c1b2;
   $c2r1=random_int(0, 9);
   $c2r2=random_int(0, 9);
   $c2g1=random_int(0, 9);
   $c2g2=random_int(0, 9);
   $c2b1=random_int(0, 9);
   $c2b2=random_int(0, 9);
   $color2="style=background-color:#".$c2r1.$c2r2.$c2g1.$c2g2.$c2b1.$c2b2;
   for ($i=1; $i<=10; $i++){
	 if($i%2==0){
	 	echo"<tr ".$color1.">";
	 }
	 else{
	 	echo"<tr ".$color2.">";
	 }
	 echo"<td>".$n."</td>";
	 echo"<td>*</td>";
	 echo"<td>".$i."</td><td>=</td>";
	 echo"<td>".$n*$i."</td></tr>";
	}
	echo"</table>";
?>

</BODY>
</HTML>
