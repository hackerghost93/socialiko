Create table users(
	user_id int(11) Auto_Increment primary key,
	first_name varchar(15) not null ,
	last_name varchar(15) not null ,
	email varchar(127) not null,
	password varchar(255) not null ,
	phone varchar(31) NOT NULL ,
	gender enum('male','female') NOT NULL ,
	birthdate date not null,
	hometown varchar(63),
	martial_status enum('single','engaged','married'),
	about_me text(2047),
	image_path varchar(255),
	created_at timestamp NOT NULL default '0000-00-00 00:00:00',
	updated_at timestamp NOT NULL default current_timestamp on update current_timestamp
);
