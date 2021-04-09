select * from (SELECT * FROM `timetable` WHERE  lec_id in (3,5,21)) as tt;

select * from (SELECT * FROM `timetable` WHERE  lec_id in (3,5,21)) as t1, (SELECT * FROM `timetable` WHERE  lec_id in (3,5,21)) as t2


select *, (t1.start_hour*60+t1.start_min) as ts1, (t1.end_hour*60+t1.end_min) as te1, 
		(t2.start_hour*60+t2.start_min) as ts2, (t2.end_hour*60+t2.end_min) as te2
	from 
		(SELECT * FROM `timetable` WHERE  lec_id in (3,5,21)) as t1, (SELECT * FROM `timetable` WHERE  lec_id in (3,5,21)) as t2

-- 1st--- overlap time
select t1.day, t1.lec_id, t1.course_id, t1.start_hour, t1.start_min, t1.end_hour, t1.end_min, 
	   t2.day, t2.lec_id, t2.course_id, t2.start_hour, t2.start_min, t2.end_hour, t2.end_min
	from 
		(SELECT *,(start_hour*60+start_min) as ts1, (end_hour*60+end_min) as te1 FROM `timetable` WHERE  (lec_id in (3,5,21)) AND (semester = 2) AND year = 2562) as t1, 
		(SELECT *,(start_hour*60+start_min) as ts2, (end_hour*60+end_min) as te2 FROM `timetable` WHERE  (lec_id in (3,5,21)) AND (semester = 2) AND year = 2562) as t2
	where
		t1.lec_id <> t2.lec_id
		AND t1.day = t2.day
		AND ((ts1 <= ts2 and ts2<te1) OR (ts1 < te2 and te2<=te1) OR (ts2<=ts1 and te1<=te2))
	ORDER BY t1.course_id

-- 2nd--- Group by t1.course_id


select t1.day, t1.lec_id, t1.course_id, t1.start_hour, t1.start_min, t1.end_hour, t1.end_min, 
	   t2.day, t2.lec_id, t2.course_id, t2.start_hour, t2.start_min, t2.end_hour, t2.end_min

select t1.course_id, count(t2.course_id) as Ncourse
	from 
		(SELECT *,(start_hour*60+start_min) as ts1, (end_hour*60+end_min) as te1 FROM `timetable` WHERE  (lec_id in (3,5,21)) AND (semester = 2) AND year = 2562) as t1, 
		(SELECT *,(start_hour*60+start_min) as ts2, (end_hour*60+end_min) as te2 FROM `timetable` WHERE  (lec_id in (3,5,21)) AND (semester = 2) AND year = 2562) as t2
	where
		t1.lec_id <> t2.lec_id
		AND t1.day = t2.day
		AND ((ts1 <= ts2 and ts2<te1) OR (ts1 < te2 and te2<=te1) OR (ts2<=ts1 and te1<=te2))
	GROUP BY t1.course_id