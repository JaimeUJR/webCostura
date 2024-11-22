CREATE VIEW user_all_details AS
SELECT
    u.id_user, u.username, u.password, u.created_at AS user_created,
    e.id_employee, e.id_job, e.hiring_at, e.dismissed_at,
    	sJ.name AS status_job,
        j.name AS name_job, j.salary, j.working_hours,
    p.id_person, p.address, p.first_name, p.last_name_paternal, p.last_name_maternal, p.phone_number, p.date_born, p.email,	p.created_at AS created_people,
    	s.name AS state_name,
        m.name AS municipal_name, m.zip_code
FROM
    users AS u
INNER JOIN
    employees AS e ON u.id_employee = e.id_employee
	    INNER JOIN status_job AS sJ ON e.id_status_job = sJ.id_status_job
        INNER JOIN jobs AS j ON e.id_job = j.id_job
INNER JOIN
    people AS p ON p.id_person = e.id_person
	    INNER JOIN state AS s ON p.id_state = s.id_state
	    INNER JOIN municipal AS m ON p.id_municipal = m.id_municipal

-- DROP VIEW user_all_details; 