create table likes(
	post_id int(11),
	user_id int(11),
	primary key(post_id, user_id) 
);