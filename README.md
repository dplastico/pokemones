# pokemones
C4 CTF repo

 
 requerimientos
 php 7
 apache 2
 mariadb
 mysql server

 pasos 
 clonar el repositorio
 modificar desde donde se sirven los archivos para el servidor apache
 ingresar a la db con la configuracion default
crear db bruteforce

 fijarse que las credenciales en uso sean las de config.php
 
hacer flush privileges 
 
 entregar privilegios de todo a root y a 'root' sobre la db bruteforce
 
 GRANT ALL PRIVILEGES ON *.* TO root@'localhost' IDENTIFIED BY 'toor' with GRANT OPTION;

GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' IDENTIFIED BY PASSWORD 'toor';


 
 
 
