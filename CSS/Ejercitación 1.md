1. <b>¿Qué es CSS y para qué se usa?</b>
<br>
CSS (Cascading Style Sheets) es una tecnología que permite controlar la apariencia y presentación de las páginas web. Se utiliza para definir cómo se presentarán los elementos al usuario. Esto incluye aspectos como el color, tamaño de las fuentes, espaciado entre elementos, y la disposición de los textos e imágenes en la página​.

___

2. <b>CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?</b>
<br>
En CSS, las declaraciones de estilo se organizan en reglas. Cada regla tiene dos partes principales: un selector y una declaración. El selector identifica el elemento HTML al que se aplicará el estilo, y la declaración especifica cómo se debe estilizar ese elemento. La declaración se compone de una propiedad y de un valor.

___

3. <b>¿Cuáles son las tres formas de dar estilo a un documento?</b>
<br>
<ul>
<li>Aplicar estilos directamente en las etiquetas HTML utilizando el atributo style.</li>
<li>Incluir estilos en la sección head del documento HTML usando el elemento style.</li>
<li>Crear una hoja de estilo externa (archivo .css) y vincularla al documento HTML utilizando el elemento link.</li>
</ul>

___

4. <b>¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.</b>
<br>

<dl>
<dt>Selector de etiqueta</dt>
<dd>Selecciona todos los elementos de un tipo específico. Ejemplo: p { color: red; } afecta a todos los párrafos.</dd>
<dt>Selector de clase</dt>
<dd>Selecciona elementos con una clase específica. Se utiliza un punto (.) antes del nombre de la clase. Ejemplo: .clase { color: blue; }.</dd>
<dt>Selector de ID</dt>
<dd>Selecciona un elemento con un ID específico. Se utiliza el símbolo de almohadilla (#) antes del nombre del ID. Ejemplo: #Activo { color: green; }.</dd>
<dt>Selector universal</dt>
<dd>Selecciona todos los elementos en la página. Ejemplo: * { margin: 0; }.</dd>
<dt>Selector de atributo</dt>
<dd>Selecciona elementos en función de un atributo y su valor. Ejemplo: input[type="text"] { color: black; }.</dd>
</dl>

___

5. <b>¿Qué es una pseudo-clase? ¿Cuáles son las más utilizadas aplicadas a vínculos?</b>
<br>
Una pseudo-clase es una palabra clave que se añade a los selectores para especificar un estado especial del elemento seleccionado. Las pseudo-clases más utilizadas en vínculos son:
<ul>
<li>link</li>
<li>visited</li>
<li>hover</li>
<li>active</li>
</ul>

___

6.<b>¿Qué es la herencia?</b>
<br>
La herencia se refiere a la forma en que algunos estilos aplicados a un elemento padre son transmitidos a sus elementos hijos. Además puede especificarse que no se transmitan esos elementos, esto puede servir para cuando algún elemnto hijo debe ser distinto a los demás.

___

7.<b>¿En qué consiste el proceso denominado cascada?</b>
<br>
Es la forma en que se combinan las reglas de estilo para determinar los estilos finales de un elemento. Esto incluye la combinación de estilos en línea, internos y externos, además de la herencia. En la cascada, se aplican las reglas según la especificidad del selector, la importancia (con la regla !important), y el orden en que aparecen en la hoja de estilo, donde las reglas posteriores pueden sobrescribir las anteriores.