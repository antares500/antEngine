# 🐜 Ant template engine


Hola a todos! soy **Ant**, un micro motor de plantillas extensible.
Pequeño (solo 4k!), rápido y extensible. Puedo generar codigo PHP que puedes exportar o renderizar las plantillas con las variables asociadas.

## Preparado y listo..

**Ant** tiene 4 comodines básicos. 

* ```{@ nombre de archivo @}```	:	Incluye un archivo con una plantilla externa.
* ```{!! Código PHP !!}```	:	Añade codigo php directamente en tu plantilla.
* ```{{ Variable }}```	:	Imprime una variable con los caracteres especiales codificados en HTML.
* ```{{{ Variable }}}	```:	Imprime una variable sin limpiar en HTML.

Añadelos a tus plantillas para generar el contenido que quieas.

## Interpretar plantillas, simple

Convierte plantillas en codigo PHP o codigo interpretado en poco tiempo.

Interpreta el contenido de una plantilla, desde un archivo o una variable.
```echo ant::render('ejemplo de {{variable}}', array('variable'=>'texto'));```
```echo ant::render_file('test.ant.tpl', array('variable'=>'texto'));```

o si quieres, obten la plantilla procesada en PHP para ejecutarla más tarde
```echo ant::compile('ejemplo de {{variable}}', array('variable'=>'texto'));```
```echo ant::compile_file('test.ant.tpl', array('variable'=>'texto'));```

## Extiende sin limites

Genera tus propios comodines para manipular los datos facilmente
ant::add_wildcard(**wildcard ini**, **wildcard end**, **function**);

Ej. 
```
ant::add_wildcard('{#','#}', function($content, $full){
	$content = str_replace('*/', '* /', $content);
	return "<?php /* $content */ ?>";	
});
```

Tambien puedes borrar los comodines que no necesites
ant::remove_wildcard(**wildcard ini**, **wildcard end**);

Ej. ```ant::add_wildcard('{#','#}');```



![ant with love](ant-with-love.png)


