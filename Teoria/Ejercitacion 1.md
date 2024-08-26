# Ejercicio 1
---
1. ¿Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?
<br>
HTML es un lenguaje de marcado para la elaboración de páginas web. Sus siglas significan HyperText Markup Language.
Este lenguaje fue creado en el año 1990 por Tim Berners-Lee y fue popularizado por el navegador Mosaic.
<br>
La primera versión fue HTML 1.0 (1990), era bastante básica, incluía un conjunto limitado de etiquetas. A esta versión le siguió HTML 2.0 (1995) que amplió las capacidades de HTML 1.0 y añadió nuevas etiquetas. A continuación surgió HTML 3.2 (1997), que introdujo nuevas etiquetas para tablas, scripts, y otros elementos de diseño. Luego se desarrolló la versión 4.01 de HTML, que sigue las normas de XML, imponiendo reglas más rigurosas en la sintaxis del código. La siguiente versión fue XHTML 1.0 la cuál era una reformulación de HTML 4.01 en XML, que staba diseñado para ser más estricto y reducir los errores. La última versión es HTML5 (2014), que introdujo una serie de nuevas características, como soporte nativo para video y audio, nuevas etiquetas semánticas, gráficos en 2D y 3D, capacidades para aplicaciones web, y APIs.


2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?
<br>
Los principios que recomienda seguir el W3C para la creación de documentos con HTML son:
<br>
<dl>
    <dt>Separar estructura y presencatción</dt>
    <dd>Al separar la estructura de un documento de sus aspectos presentacionales se ve reducido el coste de servir a un amplio espectro de plataformas, a su vez que se</dd>
    <dt>Considerar la accesibilidad universal a la Web</dt>
    <dd>Con el fin de hacer la Web más accesible a los usuarios, los autores deberían considerar cómo representar su documentos en diferentes plataformas asi como navegadores basados en voz, lectores braille, etc. HTML ofrece mecanismos con este fin como el atributo <i>alt</i></dd>
    <dt>Ayudar a los agentes de usuario con la representación incremental</dt>
    <dd>El diseño cuidadoso de tablas y haciendo uso de las características de HTML 4, los autores pueden ayudar a los agentes de usuario a representar los documentos más rápidamente.</dd>
</dl>
<br>
3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?
<br>
Un elemento <b>desaprobado</b> es aquel que ha quedado anticuado por la presencia de estructuras nuevas. Estos se definen en el manual de referencia en los lugares apropiados, pero claramente marcados como desaprobados. Los elementos desaprobados pueden declararse obsoletos en versiones futuras de HTML. Se debería seguir dando soporte a los elementos desaprobados por razones de compatibilidad con versiones anteriores.
<br>
Por otro lado, un atributo <b>obsoleto</b> es aquél para el cual no hay garantía de soporte por parte de un agente de usuario. Los elementos obsoletos han dejado de estar definidos en la especificación, pero se enumeran por motivos históricos en la sección de cambios del manual de referencia.

4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?
<br>
DTD (Document Type Definition) es una declaración que define la estructura y las reglas que debe seguir un documento HTML para ser considerado válido. Especifica las etiquetas que se pueden usar, cómo deben organizarse, y qué atributos son permitidos. En el contexto de HTML, el DTD se utiliza para especificar qué versión del HTML se está utilizando y qué reglas de sintaxis deben aplicarse.
<br>
HTML 4.01 contempla tres tipos de DTDs, que determinan la flexibilidad y las restricciones en el uso de elementos y atributos en el documento:

- HTML 4.01 Strict
- HTML 4.01 Transitional
- HTML 4.01 Frameset

Información obtenida de <a href="http://html.conclase.net/w3c/html401-es/intro/intro.html#h-2.4"> y de los apuntes de clase.
