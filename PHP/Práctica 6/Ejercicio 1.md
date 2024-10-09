# Ejercicio 1

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función 

<b>mysqli_connect(parametros);</b> el retorno de esta funciónse lo asigna a una variable $link.


<br>Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:

<b>$hostname, $usuario y $contraseña </b>. Se puede agregar $nombreBaseDatos


<br>Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función

<b>mysqli_select_db(parametros)</b>

<br>Esta función debe pasar como parámetro 

<b>$nombreConexion y $nombreBaseDatos</b>


<br>La función mysqli_query () se utiliza para 

<b>realizar consultas</b>


<br>y requiere como parámetros

<b>$link y $consulta</b> donde $consulta es el código SQL que se utiliza para consultar a la base de datos.


<br>La cláusula or die() se utiliza para

<b>capturar el error</b>


<br>y la función mysqli_error () se puede usar para

<b>devolver el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.</b>

<br><br><br> Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo $vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):


![Foto código ejercicio 1](/PHP/Práctica%206/Imagenes/Codigo%20Ejercicio%201.png)