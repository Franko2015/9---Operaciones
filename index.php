<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
    <table>
      <tr>
        <td><input type="number" name="txtUno" id="txtUno" value="0" step="1"></td>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="resta()">-</button></td>
      </tr>
      <tr>
        <td><input type="number" name="txtDos" id="txtDos" value="0" step="1"></td>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="suma()">+</button></td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="multiplicacion()">x</button></td>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="division()">/</button></td>
      </tr>
    </table>
    </div>
<br>
<div class="cont-resultado">
    <h4 class="op">&nbsp &nbsp Operacion: </h4><h4 id="operacion">&nbsp Sin operación</h4>
    <br>
    <h4 class="re">&nbsp &nbsp Resultado: </h4><h4 id="resultado">&nbsp Sin resultado</h4>
    <br>
    <a href="index.php"><input type="button" class="btn btn-dark align" value="Volver"></a>
  </div>

<script>
//Adición
  function suma() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)+parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp Adición";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}

//Sustracción
  function resta() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)-parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp Sustracción";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}

//Multiplicacion
  function multiplicacion() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)*parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp Multiplicación";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}

//Division
  function division() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)/parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp Division";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}
</script>
  </body>
</html>
