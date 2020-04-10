<?php

SELECT MIN(age) FROM students;

SELECT MAX(age) FROM students;

/* Sub Query */

SELECT * FROM students
WHERE age = (SELECT MAX(age) FROM students);

SELECT COUNT(age) FROM students;

SELECT AVG(age) FROM students;

SELECT SUM(age) FROM students;

SELECT class_id, COUNT(id) 
FROM students 
GROUP BY class_id;

SELECT class_id, MAX(age) AS student_age 
FROM students 
GROUP BY class_id;


SELECT id, name
FROM students 
WHERE age=19
UNION
SELECT id, name
FROM students
WHERE age = 17;

/* Join */

SELECT * FROM students
Join classes ON classes.id = students.class_id;

/* Inner Join */

SELECT * FROM students
INNER Join classes ON classes.id = students.class_id;

/* Left Join */

SELECT * FROM students
LEFT Join classes ON classes.id = students.class_id;

/* Right Join */

SELECT * FROM students
RIGHT Join classes ON classes.id = students.class_id;

/* Outer Join */
SELECT * FROM students
LEFT Join classes ON classes.id = students.class_id
UNION
SELECT * FROM students
RIGHT Join classes ON classes.id = students.class_id;

?>