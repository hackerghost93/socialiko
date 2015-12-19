Create table users(
	user_id int(11) Auto_Increment primary key,
	first_name varchar(15) not null ,
	last_name varchar(15) not null ,
	email varchar(127) not null,
	password varchar(255) not null ,
	phone varchar(31) not null ,
	gender enum('male','female') not null ,
	birthdate date not null,
	hometown varchar(63),
	martial_status enum('single','engaged','married'),
	about_me text(2047),
	image_path varchar(255),
	created_at timestamp default current_timestamp,
	updated_at timestamp
);
