This project simplifies the Dockerization of a WordPress environment, providing a straightforward setup and management process. 

Running the Project

1.	To Run the Project, Follow These Steps:
   •	Copy and replace the WordPress project inside the Wordpress-Dockerization directory, naming it as wordpress.
   •	Copy the Bash script from the entrypoint folder and place it inside the wordpress directory.
   •	To execute the project, use the following command: docker-compose up -d.

2.	For First-Time Setup:
   •	In the Database Host option, set the IP address of the container instead of localhost. To obtain the IP, follow the first step. For an existing project, follow both steps.
   •	To check the container ID, run: docker ps.
   •	To check the IP of the container: docker inspect --format='{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $containerID.
   •	Copy the DB service name (mysql_db) inside (/wordpress/wp-config.php) in the database host option.

3.	Using PhpMyAdmin:
   •	Access PhpMyAdmin at localhost:8080.
   •	Use the IP address of the MySQL container in the server option.
   •	Use 'root' as the username.
   •	Retrieve the password from docker-compose.yml.

4.	Destroying Containers:
   •	After completing your work, before terminating the containers, take a dump of the database by running the command: docker exec -it $containerID mysqldump -u root -pwordpress@123 -d wordpress >           wordpress.sql.
   •	To destroy containers, run: docker-compose down.






