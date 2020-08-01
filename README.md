# What is iCodeigniter for iSeries iBM OS (Operating system)?
iCodeigniter is a version of the well-known framework. Codeigniter, this version has a product tool are the program that using PHP in the systems iSeries of IBM.

# Version 1.1
This version is more than a framework, it is a framework with a defined architecture, ready to start a development, so it can also be said that it is a starter in which you can find various technologies grouped such as: JWT, HMVC in the BackEnd and Jquery MVC in the FrotEnd among others.

# Developer contact details
Ing. Hector Curbelo Barrios
hcurbelo@gmail.com

# Server requirements
PHP version 5.6 or later is recommended.
It should work in 5.3.7 as well, but we recommend that you DO NOT run
older versions of PHP, due to security and performance, may have potential
problems as well as missing features.

# Installation

1. Copy the framework files to the www directory of your application server within OS AS-400.
2. Go to the application / config / database.php directory and edit this file.
3. Configure the connections for example:

'hostname' => 'localhost',
'username' => 'yourusername',
'password' => 'yourpassword',
'database' => 'databasename',
'dbdriver' => 'db2',
'dbprefix' => '',
'libdata' => 'myschema',


4. With this you can use from the models the sentences for the database queries that we
Codeigniter provides:

$ this-> db-> get ('tablename');

$ data = array (
'col1' => 'HECTOR T',
'col2 =>' HECTOR A ',
);

$ this-> db-> insert ('tablename', $ data);
5. In the assets directory you can find the project structure for the FrontEnd which has an example.

# License

 The same from Codeigniter:
 <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

