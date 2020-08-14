
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
    eventLocation varchar (300),
    eventDescription varchar(1000)  
);


'Erweiterung image base64'
Alter table events 
add COLUMN imageName varchar(200) NOT NULL,
add Column image longtext NOT NULL


'Some Data'
insert into events (eventName, eventDate, eventLocation, eventDescription) values ('Friday against Climate Change', '2020-10-10 14:00:00', 'Vienna','Strike: we meet at Westbahnhof and start through Mariahilferstraße until Rathausplatz')

