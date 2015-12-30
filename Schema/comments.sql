create table comments(
	comment_id int(11) auto_increment,
	post_id int(11),
	user_id int(11),
	comment_text varchar(1023) not null,
	created_at timestamp default current_timestamp,
	primary key(comment_id),
	foreign key(post_id) references posts(post_id),
	foreign key(user_id) references users(user_id)
);