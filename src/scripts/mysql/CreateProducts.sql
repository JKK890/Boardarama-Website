drop table if exists my_products;

create table my_products
(
    product_id int           not null auto_increment,
    name       varchar(40)   not null,
    category   varchar(3)    not null,
    price      decimal(6, 2) not null,
    quantity   int           not null,
    image_file varchar(30)   not null,
    primary key (product_id),
    foreign key (category) references my_categories (code)
);