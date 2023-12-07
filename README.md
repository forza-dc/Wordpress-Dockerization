# User Manual
## 1. To Run Project follow these steps
- Copy Wordpress project inside Wordpress-Dockerization dirctory & name as wordpress
- Copy Bash script from entrypoint folder and place it inside wordpress directory
- Now to run project execute following command ***( docker-compose up -d )*** 
## 2. For first time setup in Database Host option set ip address of container insted of localhost to get ip follow first step for existing project follow both steps
- To check containerID run ***( docker ps )***
- To check ip of container
    ***( docker inspect --format='{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $containerID )***
- Copy DB service name ***( mysql_db )*** inside ***( /wordpress/wp-config.php )*** in database host option
## 3. To use phpmyadmin go on ***( localhost:8080 )***
- Use ip address of mysql container in server option
- In username use *root* as user name
- Get password from *docker-compose.yml*
## 4. To Destroy Containers follow these steps
- After complete your work before termination of containers take dump of db by running following command ***( docker exec -it $containerID mysqldump -u root -pwordpress@123 -d wordpress > wordpress.sql )***
- Now to destroy containers run ***( docker-compose down )***