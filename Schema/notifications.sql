create table notifications(
	notification_id int(11) auto_increment primary key,
	notification_type enum("like","comment") not null,
	post_id int(11) not null,
	user_id int(11) not null,
	friend_id int(11) not null,
	created_at timestamp default current_timestamp,
	foreign key (post_id) references posts(post_id),
	foreign key (user_id) references users(user_id),
	foreign key (friend_id) references users(user_id)
);