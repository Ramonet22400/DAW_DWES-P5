### EX_01

En este ejercicio nos piden que hagamos un contador que cuente las visitas que hace el usuario, a
la página. 

Primero de todo crearemos la cookie, mediante la función *setcookie*, y en este especificamos que se
borre al pasar 3600 segundos, es decir una hora.

En otro documento al que llamaremos **index.php**, mediante un if declaremos que cada vez que se reinicie 
la página se ejecute la cookie y que esta sume +1 de esta forma creamos un contador.

Para poder ver el contador crearemos un link que nos redireccione a **texto.php**, y donde podremos ver
la cantidad de veces que se a visitado la página.


