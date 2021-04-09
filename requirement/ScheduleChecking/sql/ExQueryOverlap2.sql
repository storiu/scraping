	
SELECT *, ROUND(4*hour(S1.`StartTime`)-32 + (minute(S1.`StartTime`)/15)) as t1, ROUND(4*hour(timediff(S1.`EndTime`,S1.`StartTime`)) + (minute(timediff(S1.`EndTime`,S1.`StartTime`))/15)) as t2 
	FROM `section` S1, `section` S2
	WHERE S1.`Teacher` <> S2.`Teacher` AND S1.`Day`=S2.`Day`
	ORDER BY S1.Day;


--Test overlab start1,end1 with start2,end2
--	case1:  start1 <= start2 < end1
--	case2:  start1 < end2 <= end1
--	case3:  start2 <= start1 <= end1 <= end2

-- Try1
SELECT S1.SecID, S1.SubjCode, S2.SecID, S2.SubjCode, S1.Teacher, S1.StartTime, S1.EndTime, S2.Teacher, S2.StartTime, S2.EndTime, S1.Day
	FROM `section` S1, `section` S2
	WHERE S1.`Teacher` <> S2.`Teacher` 
		AND S1.`Day` = S2.`Day` 
		AND S1.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND S2.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND 
		(       (S1.StartTime<=S2.StartTime AND S2.StartTime<S1.EndTime) 
			OR  (S1.StartTime<S2.EndTime AND S2.EndTime<=S1.EndTime)
			OR  (S2.StartTime<=S1.StartTime AND S1.EndTime<=S2.EndTime)
		)
	ORDER BY S1.Day, S1.StartTime
-- Try1.1
SELECT COUNT(S2.SecID) AS Noverlap, S1.SecID, S1.SubjCode, S1.Day
	FROM `section` S1, `section` S2
	WHERE S1.`Teacher` <> S2.`Teacher` 
		AND S1.`Day` = S2.`Day` 
		AND S1.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND S2.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND 
		(       (S1.StartTime<=S2.StartTime AND S2.StartTime<S1.EndTime) 
			OR  (S1.StartTime<S2.EndTime AND S2.EndTime<=S1.EndTime)
			OR  (S2.StartTime<=S1.StartTime AND S1.EndTime<=S2.EndTime)
		)
	GROUP BY S1.SecID


-- Try2
SELECT * FROM
(SELECT COUNT(S2.SecID) AS N, S1.SecID, S1.SubjCode, S1.Day
	FROM `section` S1, `section` S2
	WHERE S1.`Teacher` <> S2.`Teacher` 
		AND S1.`Day` = S2.`Day` 
		AND S1.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND S2.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND 
		(
			((S1.StartTime<=S2.StartTime AND S2.StartTime<S1.EndTime) OR (S1.StartTime<S2.EndTime AND S2.EndTime<=S1.EndTime))
			OR
			(S1.StartTime<=S2.StartTime AND S2.EndTime<=S1.EndTime)
			OR
			(S2.StartTime<=S1.StartTime AND S1.EndTime<=S2.EndTime)
		)
	GROUP BY S1.SecID
	ORDER BY S1.Day, S1.SecID
) as temp_table;

-- Try3
SELECT MAX(N)+1 AS NOverLap, Day FROM
(SELECT COUNT(S2.SecID) AS N, S1.SecID, S1.Day
	FROM `section` S1, `section` S2
	WHERE S1.`Teacher` <> S2.`Teacher` 
		AND S1.`Day` = S2.`Day` 
		AND S1.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND S2.Teacher in ('Jiradej', 'Witcha', 'Panupong')
		AND 
		(
			((S1.StartTime<=S2.StartTime AND S2.StartTime<S1.EndTime) OR (S1.StartTime<S2.EndTime AND S2.EndTime<=S1.EndTime))
			OR
			(S1.StartTime<=S2.StartTime AND S2.EndTime<=S1.EndTime)
			OR
			(S2.StartTime<=S1.StartTime AND S1.EndTime<=S2.EndTime)
		)
	GROUP BY S1.SecID
	ORDER BY S1.Day
) as temp_table GROUP BY Day;