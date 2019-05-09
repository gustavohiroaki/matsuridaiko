select * from messages where log between subdate(now(),interval 7 day) and now();
select * from next_training where log  between subdate(now(),interval 7 day) and now();
select * from members_rkmd where log between subdate(now(),interval 7 day) and now();