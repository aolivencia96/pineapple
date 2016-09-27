<HTML LANG="es">

<HEAD>
   <TITLE>Tabla de multiplicar. Resultados del formulario</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>
<H1>Tabla de Multiplicar</H1>
<FORM CLASS="borde" ACTION="outputtabla.php" METHOD="POST">

<P><LABEL>Introduce un número:</LABEL>
<INPUT TYPE="TEXT" SIZE="40" NAME="numero"></P>
<P><INPUT TYPE="SUBMIT" NAME="Hecho" VALUE="Mutiplicar"></P>
<H1>Resultados:</H1>
<?PHP
   if($_REQUEST){
      $r1;
      $r2;
      $g1;
      $g2;
      $b1;
      $b2;
      $color;
      $fondo;
      $numero = $_REQUEST['numero'];
      print ("<label>La tabla de multiplicar del $numero es:</label><br><br>");
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
       echo"<td>".$numero."</td>";
       echo"<td>*</td>";
       echo"<td>".$i."</td><td>=</td>";
       echo"<td>".$numero*$i."</td></tr>";
      }
      echo"</table>";
   }
?>
<br>
[ <A HREF='inputtabla.php'>Nueva búsqueda</A> ]

</BODY>
</HTML>