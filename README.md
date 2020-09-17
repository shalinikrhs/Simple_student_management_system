# Simple_student_management_system

### Create Database
```mysql
 CREATE DATABASE mydb;
```
### Create Tables
```mysql
  CREATE TABLE `curd1` (
   `id` int(250) NOT NULL,
   `uname` varchar(250) NOT NULL,
   `marks` varchar(100) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
```mysql
CREATE TABLE `curd2` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `language` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
```mysql
  CREATE TABLE `student_performance` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `usertype` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
### Password Encryption
```php
 $password=md5($_POST['password']);
```
