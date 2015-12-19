create table comments(
	post_id int(11),
	user_id int(11),
	comment_text varchar(1023) not null,
	created_at timestamp default current_timestamp,
	updated_at timestamp,
	primary key(post_id, user_id)
);