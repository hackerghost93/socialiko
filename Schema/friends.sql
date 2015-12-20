create table friends(
	user_id int(11),
	friend_id int(11),
	primary key (user_id,friend_id),
	foreign key (user_id) references users(user_id),
	foreign key (friend_id) references users(user_id)
);