CLASE 2
- Que es una API Aplication Programming Interfaces conjuto de reglas que se establecen con que las aplicaciones se cominucan entre similar_text
Es decir quien incia la comunicacion 
que respuestas esperar 
que mensajes se envian 

CLASE 3
HTTP: Protocolo de transferencia de hipertextos (Conjunto de reglas de comunicacion) 

CLASE 4 QUE ES REST Y APIRESTFUL
REST estilo de arquitectura enfocado en el intercambio de recusos. es un protocolo de intercambio de recusos 

APIRESTFUL Api diseñada con los conseptos de REST

conseptos REST
Recurso
URI
Accion

Peticion REST se basa en una URL y un verbo HTTP
EJEMPLO GET /books/1 DELETE /books/50

CLASE 5
Utilizacion de curl desde consola, consumo de un GET de ejemplo de una pag 

CLASE 6
Exponer Datos a traves de HTTP GET
Creamos un pequeño servicio REST 
server_platzi.php fue el servicio creado 

- Desde consola levantamos el servidor php -S localhost:8080 server_platzi.php
- Desde otra consola empezamos a utilizar CURL 
Realizar la consulta:
$ curl http://localhost:8000 -v
$ curl http://localhost:8000?resource_type=books

CLASE 6 Exponer un recurso en particular
Se definio como consumir un recurso en especifico
Atravez del GET traido de la peticion se establecio logica para que solo imprimiera el id del recusos solicitado
curl "http://localhost:8080?resource_type=books&resource_id=1"

Se dejo a un lado el metodo como se accedia a la URI con el fin de utilizar como lo define REST
en lugar de curl "http://localhost:8080?resource_type=books&resource_id=1"
Acceder a 
curl "http://localhost:8080/books/1"