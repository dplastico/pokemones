
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

**Script SQL para poblar V 1.0**

**_ES 1.0 PORQUE AUN ESTA EN PRUEBAS Y LOS PASSWORD ESTAN SIN SER HASHEADOS ENTONCES SE PRUEBA CON TEXTO PLANO _**


1. Autenticarse como root en container de MySQL

Correr en terminal:

`docker exec -it pokemones_db bash`

_pokemones_db es el container de la base de datos._

2. Autotenticarse como root

- user: root
- password: toor

3. Correr el siguiente script:

`CREATE DATABASE bruteforce;`
`USE bruteforce;`
`CREATE TABLE users (nickname VARCHAR(15), passwd VARCHAR(15));`
`INSERT INTO users VALUES ("misty","psyduck");`
`INSERT INTO users VALUES ("misty","$2y$10$p.M9wuzqAyvMYAnKr7k39OE/ardVu8ilCn7Wn6RK1.UgNMYXR8ifG");` 
`CREATE DATABASE sqli;`
`USE sqli;`
`CREATE TABLE members (username VARCHAR(15), password VARCHAR(15));`
`INSERT INTO members VALUES ("pikachu","raychu");`

4. Probar SQL Injection

pikachu ' OR 1 = 1-- '

5. LFI

localhost:3000/lfi/pokemon.php?file=maps/pewter/city.php