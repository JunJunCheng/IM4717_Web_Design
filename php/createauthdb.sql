
use f33im;
create table users ( name varchar(20), 
                                password varchar(40),
                                        primary key     (name)
                              );
insert into users values ( 'username', 
                                      'password' );

insert into users values ( 'testuser', 
                                      sha1('password') );
grant select on f33im.* 
             to 'f33im' 
             identified by 'f33im';
flush privileges;
