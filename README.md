<h3>Download Xampp for create local database</h3> 
https://www.apachefriends.org/ro/download.html

<h3>Install xampp.</h3>
After install, open xampp control panel , will press Start button from MySql , after finish to install composer and laravel.

<h3>Download and install MySql Workbench for database configuration, view, create query, etc.</h3>
https://dev.mysql.com/downloads/workbench/

<h3>Check your PHP version, this version must to be minin 7.</h3>
<p>Steps for check PHP version.</p>
<p>Open command prompt</p>
<p>Locate directory using cd C:/Xampp/php</p>
<p>Type command php -v </p>
<p>You will get your php version details</p>

<h3>Download/Install Composer</h3> 
https://getcomposer.org/download/

<h3>Install Laravel after finished to install composer</h3> 
link: https://laravel.com/docs/7.x#installation how install laravel using composer.
"composer global require laravel/installer" will see this command in tutorial.

<h3>Open Xampp and start Mysql</h3> 

<h3>Local DataBase configuration</h3>
Open MySql Workbench and setting.

<h3>Set name Testing.</h3>

![image](https://user-images.githubusercontent.com/66247913/130996082-b835bfac-1502-4b3b-b46e-35706c319374.png)

<h3>How? Right click and select Edit Connection</h3> 

![image](https://user-images.githubusercontent.com/66247913/130996403-85c8824a-d3cc-4d21-afea-acbf112eb57e.png)

<h3>After connection, create new database using this script</h3>
"create database hotel_administration"

<h3>Download project from git</h3>
<p>Open cmd and go to the project, ex C:\Users\Florin\Desktop\Vasile Demo\Hotel_Administration></p>
<p>Run this command : "php artisan migrate" for generate tables in database.</p>
<p>Run this command : "php artisan serve" for start server and app.</p>
<p>Open the link generate in cmd.</p>










