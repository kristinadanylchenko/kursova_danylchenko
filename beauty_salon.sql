CREATE DATABASE salon;
USE salon;

ALTER TABLE Review
ADD name VARCHAR(100);

CREATE TABLE website_reviews (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100),

    rating INT,

    comment TEXT

);

CREATE TABLE Client (
  client_id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  phone_number VARCHAR(20),
  email VARCHAR(100) UNIQUE
);

ALTER TABLE Client DROP INDEX email;

CREATE TABLE Service (
  service_id INT AUTO_INCREMENT PRIMARY KEY,
  service_name VARCHAR(100),
  price DECIMAL(10,2) CHECK (price > 0)
);

INSERT INTO Service (service_name, price) VALUES
('Догляд за Обличчям', 1200),
('Масаж', 1500),
('Манікюр', 700),
('Педикюр', 900),
('Манікюр та Педикюр', 1400),
('Догляд за Тілом', 2000);

CREATE TABLE Master (
  master_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  specialization VARCHAR(100),
  experience INT
);

CREATE TABLE Appointment (
  appointment_id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  master_id INT,
  service_id INT,
  appointment_date DATE,
  appointment_time TIME,
  status VARCHAR(50) CHECK (status IN ('new','confirmed','cancelled')),

  FOREIGN KEY (customer_id) REFERENCES Client(client_id),
  FOREIGN KEY (master_id) REFERENCES Master(master_id),
  FOREIGN KEY (service_id) REFERENCES Service(service_id)
);

CREATE TABLE Review (
  review_id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  appointment_id INT,
  rating INT CHECK (rating >= 1 AND rating <= 5),
  comment TEXT,

  FOREIGN KEY (customer_id) REFERENCES Client(client_id),
  FOREIGN KEY (appointment_id) REFERENCES Appointment(appointment_id)
);

INSERT INTO Client (first_name, last_name, phone_number, email) VALUES
('Anna','Ivanova','111111111','anna1@gmail.com'),
('Oleh','Petrenko','222222222','oleh2@gmail.com'),
('Ivan','Shevchenko','333333333','ivan3@gmail.com'),
('Olena','Koval','444444444','olena4@gmail.com'),
('Taras','Bondar','555555555','taras5@gmail.com'),
('Maria','Tkachenko','666666666','maria6@gmail.com'),
('Andriy','Melnyk','777777777','andriy7@gmail.com'),
('Sofiia','Kravets','888888888','sofiia8@gmail.com'),
('Dmytro','Lysenko','999999999','dmytro9@gmail.com'),
('Natalia','Hnatiuk','101010101','natalia10@gmail.com');

INSERT INTO Master (name, specialization, experience) VALUES
('Марія','Косметолог',5),
('Ольга','Масажист',4),
('Ірина','Майстер манікюру та педикурю',6),
('Софія','Спеціаліст з догляду за тілом',7);

INSERT INTO Appointment 
(customer_id, master_id, service_id, appointment_date, appointment_time, status) 
VALUES

(1,1,1,'2025-06-01','10:00:00','confirmed'),

(2,2,2,'2025-06-02','11:00:00','new'),

(3,3,3,'2025-06-03','12:00:00','confirmed'),

(4,4,4,'2025-06-04','13:00:00','cancelled'),

(5,5,5,'2025-06-05','14:00:00','confirmed'),

(6,1,6,'2025-06-06','15:00:00','new');

INSERT INTO Review (customer_id, appointment_id, rating, comment) VALUES
(1,1,5,'Excellent'),
(2,2,4,'Good'),
(3,3,5,'Perfect'),
(4,4,3,'Ok'),
(5,5,5,'Amazing'),
(6,6,4,'Nice'),
(7,7,2,'Bad'),
(8,8,5,'Super'),
(9,9,4,'Cool'),
(10,10,5,'Top');

SELECT * FROM Client;
SELECT * FROM Service;
SELECT * FROM Master;
SELECT * FROM Appointment;
SELECT * FROM Review;

-- 1
SELECT first_name, email FROM Client;

-- 2
SELECT service_name, price FROM Service;

-- 3
SELECT name, experience FROM Master;

-- 4
SELECT appointment_date, status FROM Appointment;

-- 5
SELECT rating FROM Review;

-- 6
SELECT * FROM Client WHERE first_name = 'Anna';

-- 7
SELECT * FROM Service WHERE price > 500;

-- 8
SELECT * FROM Master WHERE experience >= 5;

-- 9
SELECT * FROM Appointment WHERE status = 'confirmed';

-- 10
SELECT * FROM Review WHERE rating >= 4;

-- 11
SELECT * FROM Client ORDER BY first_name;

-- 12
SELECT * FROM Service ORDER BY price DESC;

-- 13
SELECT * FROM Master ORDER BY experience DESC;

-- 14
SELECT * FROM Appointment ORDER BY appointment_date;

-- 15
SELECT * FROM Review ORDER BY rating DESC;

-- 16
SELECT c.first_name, c.last_name, a.appointment_date, a.status
FROM Client c
JOIN Appointment a ON c.client_id = a.customer_id;

-- 17
SELECT m.name, s.service_name
FROM Master m
JOIN Appointment a ON m.master_id = a.master_id
JOIN Service s ON a.service_id = s.service_id;

-- 18
SELECT c.first_name, r.rating
FROM Client c
JOIN Review r ON c.client_id = r.customer_id;

-- 19
SELECT s.service_name, COUNT(*) AS total
FROM Service s
JOIN Appointment a ON s.service_id = a.service_id
GROUP BY s.service_name;

-- 20
SELECT c.first_name, a.status
FROM Client c
JOIN Appointment a ON c.client_id = a.customer_id
WHERE a.status = 'confirmed';

-- 21
SELECT m.name, COUNT(a.appointment_id) AS total_appointments
FROM Master m
LEFT JOIN Appointment a ON m.master_id = a.master_id
GROUP BY m.name;

-- 22
SELECT s.service_name, COUNT(*) AS popularity
FROM Service s
JOIN Appointment a ON s.service_id = a.service_id
GROUP BY s.service_name;

-- 23
SELECT AVG(rating) AS avg_rating FROM Review;

SELECT DISTINCT
c.first_name,
c.last_name,
c.phone_number,
c.email,
a.appointment_date,
a.appointment_time,
a.status,
m.name AS master_name,
s.service_name,
s.price,
r.rating,
r.comment
FROM Client c
JOIN Appointment a ON c.client_id = a.customer_id
JOIN Master m ON a.master_id = m.master_id
JOIN Service s ON a.service_id = s.service_id
LEFT JOIN Review r ON a.appointment_id = r.appointment_id;

SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE Service;

CREATE TABLE Service (

    service_id INT AUTO_INCREMENT PRIMARY KEY,

    service_name VARCHAR(100),

    price DECIMAL(10,2)

);

INSERT INTO Service (service_name, price) VALUES

('Догляд за Обличчям', 1200),

('Масаж', 1500),

('Манікюр', 700),

('Педикюр', 900),

('Манікюр та Педикюр', 1400),

('Догляд за Тілом', 2000);

SET FOREIGN_KEY_CHECKS = 1;

SELECT * FROM Service;

DELETE FROM Review
WHERE review_id < 11;

SET SQL_SAFE_UPDATES = 0;

DELETE FROM Review
WHERE appointment_id IN (
    SELECT appointment_id
    FROM Appointment
    WHERE master_id < 11
);

DELETE FROM Appointment
WHERE master_id < 11;

DELETE FROM Master
WHERE master_id < 11;

SET SQL_SAFE_UPDATES = 1;

SELECT
m.name AS master_name,
m.specialization,
COUNT(a.appointment_id) AS total_appointments,
AVG(s.price) AS average_price
FROM Master m
JOIN Appointment a 
ON m.master_id = a.master_id
JOIN Service s 
ON a.service_id = s.service_id
GROUP BY m.master_id
HAVING COUNT(a.appointment_id) >= 1
ORDER BY average_price DESC;

SELECT
m.name AS master_name,
m.specialization,
s.service_name,
a.appointment_date,
a.appointment_time,
a.status
FROM Master m
JOIN Appointment a 
ON m.master_id = a.master_id
JOIN Service s 
ON a.service_id = s.service_id
WHERE a.status = 'confirmed'
ORDER BY a.appointment_date, a.appointment_time;

SELECT
s.service_name,
s.price,
COUNT(a.appointment_id) AS total_bookings
FROM Service s
JOIN Appointment a 
ON s.service_id = a.service_id
GROUP BY s.service_id
HAVING COUNT(a.appointment_id) > 0
ORDER BY total_bookings DESC, s.price DESC;

SELECT
c.first_name,
c.last_name,
COUNT(a.appointment_id) AS total_visits,
SUM(s.price) AS total_spent
FROM Client c
JOIN Appointment a 
ON c.client_id = a.customer_id
JOIN Service s 
ON a.service_id = s.service_id
WHERE a.status = 'confirmed'
GROUP BY c.client_id
HAVING SUM(s.price) > 1000
ORDER BY total_spent DESC;