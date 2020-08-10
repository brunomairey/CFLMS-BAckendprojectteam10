
Create Database backendproject_bemm;


Create Table if not exists users(
userID int(11) not null AUTO_INCREMENT PRIMARY Key,
    userName varchar (50) not null,
    userEmail varchar (50) not null,
    userPass varchar (255) not null,
    `status` enum('user', 'admin') default 'user',
    unique key userEmail(userEmail)
);

create Table events(
eventID int(11) AUTO_INCREMENT PRIMARY KEY,
    eventName varchar(50),
    eventDate Datetime,
    eventDescription varchar(1000)  
);

