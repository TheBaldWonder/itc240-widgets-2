# customers-02052018.sql


drop table if exists test_customers;

create table test_Customers
( CustomerID int unsigned not null auto_increment primary key,
LastName varchar(50),
FirstName varchar(50),
Email varchar(80)
);

