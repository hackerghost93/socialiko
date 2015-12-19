drop database socialiko;
create database socialiko;

use socialiko;

create table users(
	user_id int(11) Auto_Increment primary key,
	first_name varchar(15) not null,
	last_name varchar(15) not null,
	email varchar(127) unique not null,
	password varchar(255) not null,
	phone varchar(31) not null,
	gender enum('male','female') not null ,
	birthdate date not null,
	hometown varchar(63),
	martial_status enum('single','engaged','married'),
	about_me text(2047),
	image_path varchar(255),
	created_at timestamp default current_timestamp,
	updated_at timestamp
);

create table posts(
	post_id int(11) Auto_Increment primary key,
	user_id int(11) not null,
	created_at timestamp default current_timestamp,
	updated_at timestamp,
	state enum('public', 'private') not null,
	caption text(1023)
);

create table likes(
	post_id int(11),
	user_id int(11),
	primary key(post_id, user_id) 
);

create table comments(
	post_id int(11),
	user_id int(11),
	comment_text varchar(1023) not null,
	created_at timestamp default current_timestamp,
	updated_at timestamp,
	primary key(post_id, user_id)
);

describe users;
describe posts;
describe likes;
describe comments;