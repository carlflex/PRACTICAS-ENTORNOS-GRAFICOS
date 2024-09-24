# Ejercicio 4

<b> Si el archivo datos.php contiene el código que sigue:

![Archivo datos.php](/PHP/Práctica%204/Variables,%20tipos,%20etc/Imagenes/Ejercicio%204%20-%20Imagen%201.png)

Indicar las salidas que produce el siguiente código. Justificar.</b>

![Código PHP ej 4](/PHP/Práctica%204/Variables,%20tipos,%20etc/Imagenes/Ejercicio%204%20-%20Imagen%202.png)

---

En primer lugar, el código produce 2 errores porque no reconoce las variables $flor y $color. Estas variables se definen en la tercer línea haciendo uso de "include" que, como su nombre lo indica, incluye otro archivo php donde están definidas las variables.

Si eliminaríamos la segunda línea, el resultado que se mostraría en pantalla sería:

<b>"El clavel blanco"</b>