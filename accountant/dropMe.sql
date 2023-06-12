CREATE TABLE monthlypayment(

driverID int NOT NULL,
driverName varchar(50) NOT NULL,
vehicleID int NOT NULL,
payment int NOT NULL

);
INSERT INTO monthlypayment (driverID,driverName,vehicleID,payment)

VALUES  (1,'John',1,1000),
        (2,'wick',5,13000),
        (3,'John',1,1000),
        (4,'John',1,1000),
        (5,'John',1,1000);


CREATE TABLE income(

driverID int NOT NULL,
driverName varchar(50) NOT NULL,
vehicleID int NOT NULL,
dailyIncome int NOT NULL,
monthlyIncome int NOT NULL

);
INSERT INTO income (driverID,driverName,vehicleID,dailyIncome,monthlyIncome)

VALUES  (1,'John',1,1000,1000000),
        (2,'wick',5,1300,122466),
        (3,'John',1,1000,56000),
        (4,'John',1,1000,67000),
        (5,'John',1,1000,3500000);



CREATE TABLE reservations(

userID int NOT NULL,
reservationID int NOT NULL,
driverID int NOT NULL,
reservationdate date NOT NULL,
reservationtime time NOT NULL,
location varchar(50) NOT NULL

);
INSERT INTO reservations (userID,reservationID,driverID,reservationdate,reservationtime,location)

VALUES  (1,1,1,'2023-1-1','10:56:10','negambo'),
        (2,2,5,'2023-2-5','11:00:14','colombo'),
        (3,5,1,'2023-3-10','12:00:18','matara'),
        (4,6,1,'2023-4-15','13:15:45','anuradhapura'),
        (5,8,1,'2023-5-25','14:10:59','kegalle'),
        (5,8,1,'2023-6-1','23:15:38','anuradhapura');


CREATE TABLE budget(

driverID int NOT NULL,
driverName varchar(50) NOT NULL,
month varchar(50) NOT NULL,
income int NOT NULL,
payment int NOT NULL

);
INSERT INTO budget (driverID,driverName,month,income,payment)

VALUES  (1,'John','january',1000,1000000),
        (2,'wick','februery',1300,122466),
        (3,'John','march',1000,56000),
        (4,'John','april',1000,67000),
        (5,'John','may',1000,3500000),
        (5,'John','june',1000,3900000);


CREATE TABLE workschedule(

userID int NOT NULL,
userName varchar(50) NOT NULL,
workdate date NOT NULL,
worktime time NOT NULL,
location varchar(50) NOT NULL

);
INSERT INTO workschedule (userID,userName,workdate,worktime,location)

VALUES  (1,'Johny','2023:7:1','10:45:30','negambo'),
        (2,'bruno','2023:8:1','15:56:32','negambo'),
        (3,'kamal','2023:4:13','16:56:40','negambo'),
        (4,'sachin','2023:2:1','17:14:56','negambo'),
        (5,'malik','2023:11:14','21:10:56','negambo');


CREATE TABLE accountant(

accountantID int auto_increment primary key NOT NULL,
name varchar(50) NOT NULL,
username varchar(50) NOT NULL,
email varchar(50) NOT NULL

);
INSERT INTO accountant (accountantID,name,username,email)

VALUES  ('','SKRLiyanage','Sanjuka','sanjuka@gmail.com');


CREATE TABLE driver(

driverID int auto_increment primary key NOT NULL,
name varchar(50) NOT NULL,
username varchar(50) NOT NULL,
email varchar(50) NOT NULL

);
INSERT INTO driver (driverID,name,username,email)

VALUES  ('','pramod','lakshan','lakshan@gmail.com');