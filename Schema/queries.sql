#bidirectional friendship edge
friend insertion:

insert into friends values ('$friend1_id', '$friend2_id');
insert into friends values ('$friend2_id', '$friend1_id');

#or make only 1 friend insertioin and use union to get mutual friends.
get mutual friends:

select* from users as u join friends as f on u.user_id = f.user_id1;

get all posts for a user:

select* from posts as p join users as u on p.user_id = u.user_id 
group by p.updated_at DESC;

get private/public posts for a user:

select* from posts as p join users as u on p.user_id = u.user_id
where state = 'private' order by p.updated_at DESC;

get all users who likes a post:

select u.first_name, u.last_name from users as u 
join likes as l on u.user_id = l.post_id
where l.post_id = '$target_post_id';

get all comments for a post:

select* from comments as c join users as u on c.user_id = c.user_id
where c.post_id = '$target_post_id' group by c.updated_at DESC;

get all posts of my friends using my_user_id:

select* from posts as p join users as u
on p.user_id = u.user_id
join friends as f on u.user_id = f.user_id1
where u.user_id = '$my_user_id';