create table likes(
	post_id int(11),
	user_id int(11),
	primary key(post_id, user_id),
	foreign key (post_id) references posts(post_id),
	foreign key (user_id) references users(user_id)
);