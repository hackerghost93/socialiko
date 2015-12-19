alter table posts add foreign key user_id references users(user_id);

alter table comments add foreign key user_id references users(user_id);
alter table comments add foreign key post_id references posts(post_id);

alter table friends add foreign key user_id1 references users(user_id);
alter table friends add foreign key user_id2 references users(user_id);

alter table likes add foreign key post_id references posts(post_id);
alter table likes add foreign key user_id references users(user_id);
