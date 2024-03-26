drop table if exists my_categories;

create table my_categories
(
    code varchar(3)  not null,
    name varchar(12) not null,
    primary key (code)
);
