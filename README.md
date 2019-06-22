
**C4 CTF**

**System requirements**

 - php 7  
 - apache2  
 - mysql server

**Steps**
- Clone repository
 - Check Apache installation
 - Run MariaDB and sign in with credentials
 - Create database "bruteforce"
 - Flush privileges
 - Grant privileges to root 

`$ GRANT ALL PRIVILEGES ON *.* TO root@'localhost' IDENTIFIED BY 'toor' with GRANT OPTION;`

`$ GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' IDENTIFIED BY PASSWORD 'toor';`

**Docker**

Run 

`docker-compose up --build`

Entrar a MySQL desde Docker

`docker exec -it pokemones_db bash`

- Entrar como root a MySQL
- Una vez siendo root, correr

`insert into users (nickname, passwd) values ("misty", "psyduck");`


Visit http://localhost:3000/index.html

Iniciar sesión con 
- usuario: misty
- pass: psyduck