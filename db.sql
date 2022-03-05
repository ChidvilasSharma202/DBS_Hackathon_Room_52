CREATE DATABASE IF NOT EXISTS dbs_wms;
use dbs_wms;
create table login(
	`name` varchar(30) not null,
	`role` varchar(30) not null,
	`username` varchar(30) not null,
    `password` varchar(30) not null
);
create table WM(
	`wm_id` int(6) not null,		
    `name` varchar(30) not null
);
create table appointment(
	`date` date,
    `time` time,
    `wm_id` int(6) references WM,
    `hni_id` int(6) references HNI,
    `wm_name` varchar(30),
    `hni_name` varchar(30),
    `topic` longtext,
    `status` text
);
create table HNI(
	`hni_id` int(6),
    `name` varchar(30) not null,
    `wm_id` int(6) references WM(wm_id)
);





