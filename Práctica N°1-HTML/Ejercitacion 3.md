# Ejercicio 3
---
<b>En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones:</b>

3.a)

![alt text](./Imagenes/image-3a.png)

- 1º Segmento: Enlace estándar que redirige a la página de Google. Al hacer click, se abre el sitio de Google en la misma ventana.

- 2º Segmento: En pantalla se visualiza exactamente igual que el segmento anterior, con la diferencia que al hacer click se abre en una pestaña/ventana diferente gracias al atributo 'target="_blank"'.

- 3º Segmento: Si bien este enlace cuenta con información extra gracias a los atributos adicionales, no se visualiza nada en pantalla ya que no está cerrada la etiqueta.

- 4º Segmento: Se visualiza el texto "Click aquí para ir a Google" pero no redirige a ninguna página. El "#" en el href puede recargar la página o desplazarse hacia la parte superior.

- 5º Segmento: Este tipo de enlaces apunta a un ancla interna dentro de la página web. Al hacer click, la página se desplaza hacia el elemento con el ID 'arriba'.

- 6º Segmento: No se visualiza nada. Este es un ancla dentro de la página que define la ubicación hacia la cual pueden apuntar otros enlaces con 'href="#arriba"'.

3.b)

![alt text](./Imagenes/image-3b.jpeg)

- 1° Segmento: Lista <b>no</b>> ordenada que contiene xxx, yyy, zzz cada una en un ítem.

- 2° Segmento: Lista ordenada que contiene xxx, yyy, zzz cada una en un ítem numerado.

- 3° Segmento: Tres listas distintas ordenadas que contienen un único elemento, pero a la segunda lista se le asigna el valor 2, para que empiece desde el mismo. Sucede lo mismo con la tercera, se le asigna el valor 3, para que empiece desde el mismo.

- 4° Segmento: Bloque en el cuál hay un parrafo que contiene saltos de linea y simula ser una lista ordenada.

3.c)

![alt text](./Imagenes/image-3c.png)

- 1º Segmento: Se puede visualizar una Lista No Ordenada. Los items se muestran con un punto al inicio.

- 2º Segmento: Se puede visualizar una Lista Ordenada. Los items se mostraran con números consecutivos.

- 3º Segmento: Se muestra una Lista Ordenada pero con numeración personalizada. Como el primer elemento de la lista no tiene atributo 'value' se visualiza normalmente. Los siguiente elementos especifican su valor inicial con 'value'.

- 4º Segmento: El contenido se encuentra dentro de un Bloque de Cita, que generalmente se utiliza para resaltar citas o fragmentos de texto destacados. Los elementos están enumerados manualmente como texto dentro de un párrafo, con saltos de línea.


3.d)

![alt text](./Imagenes/image-3d.jpeg)

- 1° Segmento: Tabla, con un borde de 1 pixel y un ancho de 300 pixeles, que tiene dos columnas y 3 filas, en las do columnas de la primera fila se ve el texto de columna 1 y columna 2.

- 2° Segmento: Tabla, con un borde de 1 pixel y un ancho de 300 pixeles, que tiene dos columnas y 3 filas, en las do columnas de la primera fila se ve el texto de colum na1 y columna 2, ambos en negrita. El texto colum na1 aparece separado debido a que a la hora de escribir el texto de esa celda el texto está separado en dos lineas distintas.

3.e)

![alt text](./Imagenes/image-3e.jpeg)

- 1° Segmento: Esta tabla utiliza la etiqueta caption para mostrar un título. La etiqueta caption se colaca dentro de la tabla, pero antes de las filas. Los datos tienen un fondo gris claro.

- 2° Segmento: En esta tabla, el título se incluye dentro de la primera fila usando una celda que abarca las 3 columnas. Luego se centra ese título. Al igual que en la tabla anterior, los datos se muestran con un fondo gris.

3.f)

- 1º Segmento:

Define una tabla con un ancho fijo y especifica el color de fondo para las celdas.

- 2º Segmento:

Establece el ancho de la tabla en 200 píxeles usando width="200".
Se usan bordes y espaciados definidos por defecto en el navegador.


3.g)

- 1º Segmento:

Define una tabla con ciertas configuraciones de ancho, borde y celdas.

- 2º Segmento:

En este codigo se elimina cualquier espacio interno y entre celdas. Esto significa que no habrá separación visible entre las celdas ni alrededor del contenido dentro de cada celda.

No hay botones ni contenido adicional; solo espacios (&nbsp;) en las celdas.


3.h)

- 1º Segmento:

Este código HTML crea un formulario sencillo para un login, donde el usuario puede ingresar su nombre de usuario y su clave.

- 2º Segmento:

En este segmento se cambia el metodo de envio method="get": Indica que los datos del formulario se enviarán usando el método GET. Con GET, los datos se adjuntan a la URL, lo que no es ideal para información sensible como contraseñas. y no tiene una URL de acción definida, lo que significa que, si se envía el formulario, se enviará a la misma URL que el formulario actual.

- 3º Segmento:

ndica que el formulario debería enviarse por correo electrónico a xx@xx.comEn este formulari se indica que el formulario debería enviarse por correo electrónico a xx@xx.com. y la respuesta del formulario se abrirá en una nueva pestaña o ventana del navegador.


3.i)

- 1° Segmento:

En la interfaz de usuario, este código generará un botón que contiene una imagen encima del texto "CLICK AQUÍ" en negrita. 

-2° Segmento:

En la interfaz de usuario, este código generará un botón con el texto "CLICK AQUÍ" y un texto adicional "Botón 2" justo antes del botón. 

3.j)

- 1° Segmento:

En la interfaz de usuario, este código se verá como dos botones de opción uno debajo del otro, con las etiquetas "X" y "Y" al lado de ellos. 
Solo se podrá seleccionar uno de estos botones a la vez. Al hacer clic en "X", el botón de "Y" se deseleccionará automáticamente y viceversa.

-2° Segmento:

Dado que los botones tienen nombres diferentes, se pueden seleccionar ambos al mismo tiempo.

3.k)

- 1° Segmento: 

Es un input de seleccion de opciones, concretamente las opciones estan agrupadas por categorias.

- 2° Segmento:

 Crea un menú desplegable que permite la selección de múltiples opciones. El uso de name="lista[]" sugiere que los valores seleccionados se enviarán como un array al servidor (cuando se usa en un formulario).

 El menú desplegable ahora permite seleccionar más de una opción a la vez. El comportamiento exacto depende del navegador y del dispositivo: