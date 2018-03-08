#nmAdmin.sql
#Be sure prefix (retro_ below) matches your config.php file!

drop table if exists widgets_wn18_Admin;

create table widgets_wn18_Admin(
AdminID int unsigned not null auto_increment primary key,
LastName varchar(50) DEFAULT '',
FirstName varchar(50) DEFAULT '',
Email varchar(120) DEFAULT '',
Privilege ENUM('admin','superadmin','developer') DEFAULT 'admin',
AdminPW varChar(255),
NumLogins int DEFAULT 0,
DateAdded DATETIME,
LastLogin DATETIME
);

insert into widgets_wn18_Admin values (NULL,'Sprockets','Spacely','developer@example.com','developer','92429d82a41e930486c6de5ebda9602d55c39986',0,now(),now());