create table posts(
	post_id int(11) Auto_Increment primary key,
	user_id int(11) not null,
	created_at timestamp default current_timestamp,
	updated_at timestamp,
	state enum('public', 'private') not null,
	caption text(1023)
);