
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

`$ GRANT ALL PRIVILEGES ON _._ TO root@'localhost' IDENTIFIED BY 'toor' with GRANT OPTION;`

`$ GRANT ALL PRIVILEGES ON _._ TO 'root'@'localhost' IDENTIFIED BY PASSWORD 'toor';`

Docker

Run 

    docker-compose up --build

Visit http://localhost:3000/index.html
