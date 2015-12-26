create table friend_requests(
	user_id int(11) ,
	friend_id int(11),
	requested_at timestamp default current_timestamp,
	primary key(user_id,friend_id),
	foreign key (user_id) references users(user_id),
	foreign key (friend_id) references users(user_id),
	CHECK (user_id != friend_id)
);