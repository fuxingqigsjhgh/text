create table `goods` (
    `goodid` int unsigned auto_increment primary key,
    `goodname` varchar(64),
    `prices` char(10),
    `time` varchar(32)
);

insert into users (goodname,prices,time) value (goodname,prices,time) values ('kebike',11,'20');

