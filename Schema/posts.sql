create table posts(
	post_id int(11) Auto_Increment primary key,
	user_id int(11) not null,
	state enum('public', 'private') not null,
	caption text(1023),
	updated_at timestamp NOT NULL default current_timestamp on update current_timestamp,
	created_at timestamp NOT NULL default '0000-00-00 00:00:00',
	foreign key (user_id) references users(user_id)
);

#Alter table posts Add foreign key user_id references users(user_id);