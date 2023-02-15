create table students (
    id int not null auto_increment, 
    first_name varchar(20),
    last_name varchar(20),
    email varchar(100),
    primary key (id)
);

create table courses (
    id int not null auto_increment, 
    name varchar(20),
    description text,
    primary key (id)
);

create table instructors (
    id int not null auto_increment, 
    first_name varchar(20),
    last_name varchar(20),
    primary key (id)
);
