drop database if exists miniproject;
create database miniproject;
use miniproject;


/*CREATE AND INSERT TABLES*/    
drop table if exists package;
CREATE TABLE package (
  image varchar(20) NOT NULL,
  package_id varchar(20) default 0 PRIMARY KEY ,
  package_price decimal(20,2) NOT NULL,
  package_name varchar(200) NOT NULL,
  mode_of_transport varchar(100) NOT NULL
  );
  
 INSERT INTO package ( package_name, package_id, package_price, mode_of_transport) VALUES
( 'Summer Holiday Package', '11', 10000.0, 'Air' ),
( 'Winter vacation Package ','12', 70000.0, 'Rail'),
( 'Monsoon Package ', '13',90000.0,'Air'),
( 'Weekend Getaway', '14', 25000.0, 'Road'),
( 'South India Tour','15',125000.0, 'Air'),
( 'School Trip', '16', 5000.0, 'Road');

drop table if exists Admin;
CREATE TABLE Admin (
	admin_name varchar(50) PRIMARY KEY,
	admin_pass varchar(50)
    );
    
 drop table if exists Account;
 CREATE TABLE Account(
cust_email varchar(50)PRIMARY KEY,
cust_name varchar(20),
cust_pass varchar(10),
cust_address varchar(50),
mobile_no varchar(20)
);

drop table if exists customer;
CREATE TABLE Customer(
cust_name varchar(20)PRIMARY KEY,
cust_pass varchar(10)
);

drop table if exists delete_rec;
  CREATE TABLE delete_rec (
  d_package_id VARCHAR(20) NOT NULL ,
  d_package_name VARCHAR(50) NOT NULL ,
  d_package_price DECIMAL(20,2) NOT NULL ,
  d_mode_of_transport VARCHAR(50) NOT NULL 
  );

show tables;








/*TRIGGERS*/
drop trigger V_customer;
set foreign_key_checks=0;
 delimiter $$
CREATE trigger V_customer after insert on Account
For each row
begin
insert into customer(cust_pass,cust_name)values(new.cust_pass,new.cust_name);
 end$$
 delimiter ;
 

 drop trigger On_Delete;
 delimiter $$
CREATE Trigger On_Delete before delete on package
for each row
begin
Insert into delete_rec(d_package_id,d_package_name,d_package_price,d_mode_of_transport) values(old.package_id,old.package_name,old.package_price,old.mode_of_transport);
 end$$
delimiter ;
 
 
 
 
 
 
 

/*PROCEDURES*/
 delimiter $$
 CREATE procedure check_credentials_admin(IN user_name varchar(20) ,IN user_pass varchar(20))
 begin
 Declare done int default 0;
 Declare v_admin_name varchar(20);
 Declare flag int default 1;
 Declare v_admin_pass varchar(20);
 Declare c1 cursor for select admin_name,admin_pass from Admin ;
 Declare continue handler for not found set done=1;                        
 open c1;
 REPEAT
 fetch c1 into v_admin_name,v_admin_pass;
   if done=0 then
        if (v_admin_name<=>user_name and v_admin_pass<=>user_pass)then
            set flag = 1;
             select ("valid credentials"); 
         else
              set flag= 0;
	   end if ;
  end if;   
until done end repeat; 
if( flag<=>0 )then
         select ("Invalid credentials"); 
end  if ;
close c1; 
    
end $$
delimiter ; 
 
 
 
 delimiter $$   
 CREATE procedure check_credentials_user(IN user_name varchar(20) ,IN user_pass varchar(20))
 begin
 Declare done int default 0;
 Declare flag int default 1;
 Declare v_cust_name varchar(20);
 Declare v_cust_pass varchar(20);
 Declare c2 cursor for select cust_name,cust_pass from customer ;
 Declare continue handler for not found set done=1;                        
 open c2;
 REPEAT
 fetch c2 into v_cust_name,v_cust_pass;
   if done=0 then
         if (v_cust_name<=>user_name and v_cust_pass<=>user_pass)then
             set flag = 1;
             select("valid credentials"); 
        else
              set flag= 0;
	   end if ;
       
  end if;   
until done end repeat; 
if( flag<=>0 )then
         select ("Invalid credentials"); 
end  if ;
close c2;    
end $$
delimiter ;    
 
 
 
 delimiter $$
 CREATE procedure search_package(IN pack_name varchar(20))
 begin
 Declare done int default 0;
 Declare v_package_name varchar(20);
 Declare v_package_id varchar(20);
 Declare v_package_price varchar(20);
 Declare v_mode_of_transport varchar(20);
 Declare flag int default 1;
 Declare c1 cursor for select package_name,package_id, package_price, mode_of_transport from package  ;
 Declare continue handler for not found set done=1;                        
 open c1;
 REPEAT
 fetch c1 into v_package_name,v_package_id, v_package_price, v_mode_of_transport;
   if done=0 then
        if (v_package_name<=>pack_name)then
            set flag = 1;
             insert into temp_package values (v_package_name,v_package_id, v_package_price, v_mode_of_transport);
        
         else
              set flag= 0;
	   end if ;
       
  end if;   
until done end repeat; 
if( flag<=>0 )then
         select ("NO RELATED PACKAGES"); 
end  if ;
close c1; 
    
end $$
delimiter ;

