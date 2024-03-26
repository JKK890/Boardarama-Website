drop table if exists my_customers;

create table my_customers
(
    customer_id           int auto_increment,
    prefix                varchar(4)   null,
    first_name            varchar(50)  null,
    initial               varchar(10)  null,
    last_name             varchar(50)  null,
    gender                char         null,
    email                 varchar(50)  null,
    phone                 varchar(15)  null,
    address               varchar(50)  null,
    city                  varchar(50)  null,
    region                varchar(50)  null,
    postal_code           varchar(10)  null,
    registration_datetime datetime     null,
    username              varchar(50)  null,
    password              varchar(255) null,
    primary key (customer_id),
    constraint unique (email, username)
);
