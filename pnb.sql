
# Creating dummy data in database

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Sagar', 'Aakash', 300, '2021-08-03 18:44:23'),
(2, 'Sagar', 'Aakash', 400, '2021-08=03 18:45:41'),
(3, 'Aakash', 'Micky', 2000, '2021-08-03 18:45:32'),
(4, 'Sagar', 'Micky', 500, '2021-08-03 18:46:12'),
(5, 'Aditya', 'Aakash', 800, '2021-08-03 18:47:44'),
(6, 'Aditya', 'Aakash', 400, '2021-08-03 18:48:21'),
(7, 'Aditya', 'Aakash', 600, '2021-08-03 18:48:32'),
(8, 'Shreya', 'Avi', 550, '2021-08-03 18:50:50'),
(9, 'Shweta', 'Sagar', 100, '2021-08-03 18:52:08'),
(10, 'Sagar', 'Avi', 300, '2021-08-03 18:53:28');

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1023, 'Aakash', 'aakash@gmail.com', 50000),
(2341, 'Avi', 'avi@gmail.com', 40000),
(3633, 'Shraddha', 'shraddha@gmail.com', 20000),
(4532, 'Aditya', 'aditya@gmail.com', 30000),
(5123, 'Sagar', 'sagar@gmail.com', 35000),
(5967, 'Shweta', 'shweta@gmail.com', 40000),
(6167, 'Micky', 'micky@gmail.com', 80000),
(7922, 'Shreya', 'shreya@gmail.com', 70000),
(8654, 'Ritesh', 'ritesh@gmail.com', 23000),
(9199, 'Om', 'omkiran@gmail.com', 30000);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54655;
COMMIT;

