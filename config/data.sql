INSERT INTO people (id_state, id_municipal, first_name, last_name_paternal, last_name_maternal, address, phone_number, date_born, email, created_at) VALUES
(1, 3, 'Michael', 'Smith', 'Johnson', '123 Main St, Springfield, IL, 62704', '1234567890', '1990-05-12', 'michael.smith@gmail.com', '2024-09-01'),
(2, 9, 'Emily', 'Brown', 'Davis', '456 Elm St, Chicago, IL, 60607', '9876543210', '1985-11-22', 'emily.brown@hotmail.com', '2024-09-10'),
(3, 8, 'James', 'Miller', 'Wilson', '789 Oak St, Houston, TX, 77002', '4567891230', '1998-06-15', 'james.miller@gmail.com', '2024-10-05'),
(4, 18, 'Sarah', 'Garcia', 'Martinez', '135 Pine St, Austin, TX, 78701', '3216549870', '1983-12-08', 'sarah.garcia@hotmail.com', '2024-10-15'),
-- (1, 2, 'Daniel', 'Hernandez', 'Lopez', '246 Maple St, Denver, CO, 80202', '6543217890', '1992-04-30', 'daniel.hernandez@gmail.com', '2024-09-20'),
(2, 11, 'Sophia', 'Clark', 'Walker', '357 Cedar St, Miami, FL, 33101', '7894561230', '1997-07-19', 'sophia.clark@hotmail.com', '2024-11-01'),
(3, 16, 'Alexander', 'Young', 'King', '468 Birch St, Orlando, FL, 32801', '1237894560', '1986-02-14', 'alexander.young@gmail.com', '2024-11-10'),
(4, 21, 'Olivia', 'Hall', 'Scott', '579 Ash St, San Diego, CA, 92101', '9871236540', '1995-09-06', 'olivia.hall@hotmail.com', '2024-09-25'),
(1, 6, 'William', 'Adams', 'Moore', '680 Cypress St, Boston, MA, 02101', '4561237890', '1993-11-03', 'william.adams@gmail.com', '2024-11-15'),
(2, 8, 'Mia', 'Carter', 'Taylor', '791 Walnut St, Phoenix, AZ, 85001', '3219876540', '1999-03-18', 'mia.carter@hotmail.com', '2024-10-20'),
(3, 10, 'Benjamin', 'Lewis', 'Harris', '902 Chestnut St, Seattle, WA, 98101', '6549873210', '1990-07-08', 'benjamin.lewis@gmail.com', '2024-11-05'),
(4, 20, 'Amelia', 'Evans', 'Martin', '113 Maple St, Portland, OR, 97201', '7893216540', '1988-01-25', 'amelia.evans@hotmail.com', '2024-09-30'),
(1, 4, 'Logan', 'Wright', 'Allen', '124 Spruce St, Atlanta, GA, 30301', '4567893210', '1996-06-11', 'logan.wright@gmail.com', '2024-10-12'),
(2, 7, 'Charlotte', 'Hill', 'Green', '235 Birch St, Dallas, TX, 75201', '9876541230', '1994-09-21', 'charlotte.hill@hotmail.com', '2024-09-18'),
(3, 15, 'Henry', 'Baker', 'Adams', '346 Cedar St, Las Vegas, NV, 89101', '3214567890', '1987-05-30', 'henry.baker@gmail.com', '2024-10-22'),
(4, 17, 'Ella', 'Campbell', 'Mitchell', '457 Pine St, Detroit, MI, 48201', '1236547890', '1992-10-19', 'ella.campbell@hotmail.com', '2024-11-02'),
(1, 1, 'Jack', 'Parker', 'Perez', '568 Oak St, San Francisco, CA, 94101', '9873214560', '1984-07-04', 'jack.parker@gmail.com', '2024-09-14'),
(2, 10, 'Ava', 'Roberts', 'Murphy', '679 Elm St, Charlotte, NC, 28201', '6541237890', '1998-08-29', 'ava.roberts@hotmail.com', '2024-10-07'),
(3, 12, 'Liam', 'Phillips', 'Reed', '790 Ash St, Tampa, FL, 33601', '3217896540', '1993-12-13', 'liam.phillips@gmail.com', '2024-11-09'),
(4, 19, 'Harper', 'Anderson', 'Turner', '891 Spruce St, New Orleans, LA, 70101', '4569871230', '1997-02-22', 'harper.anderson@hotmail.com', '2024-10-29'),
(1, 5, 'Jacob', 'Stewart', 'Howard', '902 Maple St, Minneapolis, MN, 55401', '7891234560', '1989-11-30', 'jacob.stewart@gmail.com', '2024-09-28'),
(2, 8, 'Aria', 'Ross', 'Bennett', '103 Walnut St, Pittsburgh, PA, 15201', '1239876540', '1985-06-18', 'aria.ross@hotmail.com', '2024-11-03'),
(3, 9, 'Noah', 'Collins', 'Foster', '214 Chestnut St, Milwaukee, WI, 53201', '4563219870', '1986-08-12', 'noah.collins@gmail.com', '2024-10-16'),
(4, 17, 'Zoey', 'Ward', 'Powell', '325 Cypress St, Nashville, TN, 37201', '9876547890', '1991-03-25', 'zoey.ward@hotmail.com', '2024-10-25'),
(1, 6, 'Lucas', 'Bailey', 'Peterson', '436 Birch St, Baltimore, MD, 21201', '6547891230', '1994-12-17', 'lucas.bailey@gmail.com', '2024-09-12'),
(2, 9, 'Chloe', 'Cooper', 'Rogers', '547 Pine St, Sacramento, CA, 95801', '3219871230', '1999-07-02', 'chloe.cooper@hotmail.com', '2024-10-14'),
(3, 11, 'Mason', 'Hughes', 'Ramirez', '658 Oak St, Kansas City, MO, 64101', '7894561230', '1988-11-08', 'mason.hughes@gmail.com', '2024-11-13'),
(4, 18, 'Avery', 'Murphy', 'Brooks', '769 Elm St, Cleveland, OH, 44101', '4561239870', '1990-01-16', 'avery.murphy@hotmail.com', '2024-10-01'),
(1, 3, 'Ella', 'Reed', 'Morgan', '870 Spruce St, Anchorage, AK, 99501', '9873216540', '1987-09-10', 'ella.reed@gmail.com', '2024-11-07');





INSERT INTO customers (id_person, chest_circumference, waist_circumference, hip_circumference, inner_leg_length, outer_leg_length, sleeve_length, shoulder_width, neck_circumference, front_torso_length, back_torso_length, created_at) VALUES
(34, 89.34, 78.22, 102.56, 91.12, 105.67, 62.34, 45.23, 34.45, 50.12, 48.34, '2024-09-01'),
(93, 95.67, 82.34, 110.45, 87.34, 102.56, 60.89, 40.23, 32.67, 55.89, 47.89, '2024-09-10'),
(109, 78.45, 65.34, 95.67, 83.45, 97.23, 58.34, 38.45, 30.12, 54.67, 46.78, '2024-09-20'),
(113, 82.34, 70.12, 100.89, 80.67, 98.45, 57.89, 39.23, 31.45, 53.34, 48.56, '2024-09-25'),
(117, 91.45, 75.23, 105.78, 89.34, 104.23, 65.12, 42.34, 33.89, 52.89, 50.12, '2024-09-30'),
(121, 88.34, 73.45, 101.34, 86.45, 103.78, 59.45, 41.23, 32.12, 51.67, 47.45, '2024-10-01'),
(125, 84.12, 68.34, 97.45, 79.34, 96.45, 56.12, 37.34, 30.45, 50.34, 45.23, '2024-10-10'),
(129, 87.23, 72.45, 99.67, 82.12, 100.23, 58.67, 38.78, 31.89, 51.23, 46.89, '2024-10-15'),
(94, 90.45, 76.12, 104.23, 88.34, 105.45, 63.45, 44.12, 34.23, 56.45, 49.78, '2024-10-20'),
(106, 86.34, 71.45, 98.89, 81.23, 99.34, 60.12, 40.78, 32.45, 54.34, 48.56, '2024-10-25'),
(110, 93.12, 80.23, 108.56, 90.45, 106.23, 66.78, 46.45, 35.12, 57.45, 51.34, '2024-11-01'),
(114, 85.45, 69.12, 96.78, 78.34, 94.45, 55.45, 36.12, 29.67, 49.89, 44.78, '2024-11-05'),
(118, 92.23, 77.34, 107.45, 89.12, 105.34, 64.34, 43.45, 33.78, 56.23, 50.67, '2024-11-10'),
(122, 88.45, 74.12, 102.89, 85.45, 101.56, 61.12, 41.89, 32.23, 53.45, 47.89, '2024-11-15'),
(126, 80.34, 66.45, 94.23, 77.12, 92.78, 54.45, 35.23, 29.12, 48.34, 43.56, '2024-11-20'),
(95, 84.23, 68.12, 97.34, 79.78, 96.12, 55.89, 36.78, 29.78, 50.45, 45.67, '2024-11-25'),
(107, 89.12, 72.34, 103.12, 83.89, 101.45, 60.45, 39.23, 31.45, 53.34, 47.12, '2024-09-02'),
(111, 86.45, 70.45, 99.45, 81.45, 98.67, 59.78, 38.34, 31.12, 52.45, 46.34, '2024-09-08'),
(115, 90.78, 76.34, 105.67, 88.12, 104.89, 63.89, 43.78, 34.67, 55.23, 49.67, '2024-09-15'),
(119, 87.45, 73.34, 101.45, 85.23, 100.67, 62.12, 42.45, 33.12, 54.34, 48.23, '2024-09-18'),
(123, 83.78, 67.45, 96.78, 78.45, 94.89, 55.67, 37.12, 30.45, 49.23, 45.12, '2024-09-25'),
(127, 94.12, 80.45, 109.12, 90.23, 107.34, 66.45, 45.89, 35.78, 57.89, 51.12, '2024-10-01'),
(105, 85.34, 68.67, 97.23, 79.67, 95.12, 56.78, 37.89, 30.78, 50.12, 45.78, '2024-10-10'),
(108, 91.67, 77.23, 106.45, 89.45, 104.12, 64.45, 42.89, 33.34, 55.78, 49.45, '2024-10-18'),
(112, 89.23, 75.12, 104.56, 87.12, 103.23, 63.12, 41.23, 32.12, 54.45, 48.45, '2024-10-25'),
(34, 92.78, 78.89, 108.34, 90.45, 106.45, 65.45, 44.67, 34.89, 57.34, 51.67, '2024-10-30'),
(93, 81.34, 66.78, 95.89, 76.78, 93.45, 54.34, 36.45, 29.67, 48.45, 43.34, '2024-11-03'),
(109, 88.45, 73.12, 101.67, 85.89, 100.78, 61.45, 40.34, 32.78, 52.67, 47.45, '2024-11-08'),
(113, 87.34, 72.23, 100.34, 84.45, 99.34, 60.23, 39.89, 31.67, 51.89, 46.23, '2024-11-12');





INSERT INTO services (id_customer, cost, extra_cost, received_at, received_by, delivery_at, delivery_by, observations) VALUES
(7, 382.45, 42.34, '2024-09-01', 2, '2024-09-15', 4, 'Se realizó un ajuste en la cintura de un pantalón. Entregado a tiempo y en buenas condiciones.'),
(15, 250.23, 50.12, '2024-09-05', 3, '2024-09-20', 7, 'Se confeccionó una camisa formal a medida. El cliente quedó satisfecho con el servicio.'),
(3, 123.78, 30.45, '2024-09-10', 5, '2024-09-25', 6, 'Se arregló el ruedo de un vestido. Retraso menor debido a problemas de tráfico.'),
(12, 450.00, 60.00, '2024-09-15', 1, '2024-09-30', 8, 'Se diseñó y confeccionó un traje completo. Se agregó embalaje adicional según la solicitud.'),
(20, 300.45, 20.67, '2024-09-20', 4, '2024-10-05', 2, 'Se reparó un cierre en una chaqueta. Manejado con cuidado y sin problemas reportados.'),
(10, 100.00, 15.00, '2024-09-25', 6, '2024-10-10', 3, 'Se realizó un dobladillo en un par de jeans. Entregado en tiempo récord.'),
(5, 350.67, 40.78, '2024-09-30', 2, '2024-10-15', 4, 'Se ajustó el largo de una falda. El cliente comentó sobre el excelente acabado.'),
(18, 275.89, 35.45, '2024-10-01', 7, '2024-10-20', 9, 'Se confeccionó un vestido de gala. El paquete llegó en perfectas condiciones.'),
(8, 420.34, 45.12, '2024-10-05', 5, '2024-10-25', 1, 'Se ajustaron las mangas de una chaqueta formal. Hubo un pequeño error en la dirección, pero se corrigió.'),
(13, 150.45, 25.67, '2024-10-10', 4, '2024-10-30', 6, 'Se arregló el cuello de una camisa casual. Entregado sin contratiempos.'),
(23, 310.78, 30.12, '2024-10-15', 8, '2024-11-01', 5, 'Se realizó la confección de un pantalón formal. Cliente satisfecho con el servicio.'),
(2, 200.00, 20.00, '2024-10-20', 9, '2024-11-05', 7, 'Se bordaron iniciales en un suéter. Entregado antes de la fecha programada.'),
(14, 450.56, 50.34, '2024-10-25', 1, '2024-11-10', 8, 'Se diseñó y confeccionó un vestido de novia. Paquete asegurado y bien manejado.'),
(6, 120.34, 10.78, '2024-10-30', 3, '2024-11-15', 9, 'Se reparó un botón en un saco. Cliente mencionó la rapidez del servicio.'),
(11, 330.23, 30.56, '2024-11-01', 5, '2024-11-20', 2, 'Se ajustaron los hombros de una chaqueta. Entregado según lo planeado.'),
(4, 275.45, 35.23, '2024-11-05', 6, '2024-11-25', 4, 'Se ajustaron las mangas de un vestido. Cliente agradeció la buena atención al detalle.'),
(19, 380.78, 40.45, '2024-11-10', 7, '2024-11-30', 5, 'Se reparó un cierre en un pantalón. Entrega sin inconvenientes.'),
(22, 300.34, 30.12, '2024-11-15', 8, '2024-12-05', 6, 'Se confeccionó una chaqueta de invierno. Cliente comentó que volverá a usar el servicio.'),
(1, 215.67, 25.34, '2024-11-20', 9, '2024-12-10', 3, 'Se repararon costuras en un abrigo. Entregado en excelentes condiciones.'),
(17, 405.45, 50.67, '2024-11-25', 2, '2024-12-15', 7, 'Se diseñó y ajustó un vestido formal. Cliente satisfecho con la atención brindada.'),
(9, 125.34, 15.45, '2024-11-30', 4, '2024-12-20', 8, 'Se ajustaron las medidas de una blusa. Sin observaciones adicionales.'),
(24, 390.23, 40.34, '2024-12-01', 5, '2024-12-25', 9, 'Se confeccionó un chaleco. Servicio recomendado por el cliente.'),
(21, 150.45, 20.12, '2024-12-05', 3, '2024-12-30', 1, 'Se repararon costuras en un pantalón deportivo. Buena atención al detalle.'),
(16, 260.78, 30.89, '2024-12-10', 6, '2024-12-31', 2, 'Se realizó un dobladillo en un vestido. Entrega en tiempo récord.'),
(25, 320.45, 35.23, '2024-12-15', 7, '2025-01-05', 3, 'Se ajustó el largo de un vestido de fiesta. Cliente muy satisfecho con el servicio.'),
(3, 480.00, 60.00, '2024-12-20', 8, '2025-01-10', 4, 'Se diseñó un uniforme escolar. Hubo una leve confusión con el destinatario.'),
(12, 350.45, 45.34, '2024-12-25', 9, '2025-01-15', 5, 'Se ajustaron medidas en una camisa formal. Sin observaciones adicionales.'),
(10, 275.34, 30.23, '2024-12-30', 1, '2025-01-20', 6, 'Se realizó un ajuste en la cintura de un pantalón. Entregado con precisión.'),
(5, 305.23, 40.12, '2025-01-01', 2, '2025-01-25', 7, 'Se repararon costuras en una chaqueta. Cliente agradecido por el seguimiento personalizado.');


INSERT INTO services (id_customer, cost, extra_cost, received_at, received_by, delivery_at, delivery_by, observations) VALUES
(12, 256.45, 34.56, '2024-12-15', 3, '2024-12-15', 6, 'Se ajustó la cintura de un pantalón formal.'),
(18, 150.89, 20.67, '2024-12-15', 4, '2024-12-15', 7, 'Se reparó el cierre de una chaqueta.'),
(7, 320.78, 45.12, '2024-12-20', 2, '2024-12-20', 5, 'Se confeccionó un vestido de noche.'),
(9, 210.34, 30.78, '2024-12-20', 8, '2024-12-20', 1, 'Se arregló el dobladillo de un vestido formal.'),
(21, 415.56, 50.23, '2024-12-20', 9, '2024-12-20', 3, 'Se bordaron iniciales en una camisa personalizada.'),
(15, 275.45, 35.34, '2024-12-20', 5, '2024-12-20', 4, 'Se ajustaron las mangas de un saco formal.'),
(13, 340.78, 40.12, '2024-12-25', 6, '2024-12-25', 7, 'Se diseñó un vestido de gala a medida.'),
(24, 185.45, 25.67, '2024-12-25', 7, '2024-12-25', 2, 'Se ajustó la longitud de una falda.'),
(19, 280.23, 30.89, '2024-12-25', 1, '2024-12-25', 9, 'Se repararon costuras en un abrigo.'),
(10, 123.34, 15.45, '2024-12-30', 4, '2024-12-30', 8, 'Se realizó un ajuste en los hombros de una camisa.'),
(22, 355.67, 45.89, '2024-12-30', 6, '2024-12-30', 3, 'Se confeccionó un chaleco formal.'),
(14, 410.12, 50.23, '2024-12-30', 8, '2024-12-30', 5, 'Se diseñó un traje de dos piezas para una gala.'),
(8, 275.89, 30.78, '2024-12-30', 2, '2024-12-30', 1, 'Se ajustaron las mangas de un vestido formal.'),
(3, 300.45, 40.12, '2025-01-01', 5, '2025-01-01', 6, 'Se realizó un ajuste en la cintura de un pantalón deportivo.'),
(20, 185.67, 20.78, '2025-01-01', 7, '2025-01-01', 4, 'Se reparó un botón en una chaqueta casual.');
