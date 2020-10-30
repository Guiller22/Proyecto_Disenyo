<!DOCTYPE html>
<html>

<head>

    <link href="miestilo.css" rel="stylesheet" type="text/css">

</head>

<body>

    <form action="#" target="" method="get" name="formDatosPersonales">
        <input type="text" name="nombre" value=''><br>
        <input type="text"  name="apellidos" value='' readonly><br>
        <input type="text" name="pregunta" value='Cuales de estos platos te gustan'><br>
        <label class="container">lentejas
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
        </label>

        <label class="container">macarrones
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <br>
        <label class="container">alubias
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <label class="container">Sopa
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <br>
        <input type="text" name="pregunta" value='Tienes animales en casa?'><br>
        <form action="">
            <input type="radio" name="1" value="res1"> 1<br>
            <input type="radio" name="1" value="res2"> 2<br>
            <input type="radio" name="1" value="res3"> 3+<br>
            <input type="radio" name="1" value="res4"> 0<br>

            <br>
            <input type="submit" value="enviar">
            <input type="reset" value="borrar">
        </form>


</body>

</html>