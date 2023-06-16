SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'nimith', 'nimith@gmail.com', 80000),
(2, 'mohammad', 'mohammad@gmail.com', 40000),
(3, 'alex', 'alex@gmail.com', 80000),
(4, 'asmee', 'asmee@gmail.com', 50000),
(5, 'ishana', 'ishana@gmail.com', 60000),
(6, 'khan', 'khan@gmail.com', 70000),
(7, 'taarae', 'taarae@gmail.com', 60000),
(8, 'rebecca', 'rebecca@gmail.com', 40000),
(9, 'krisha', 'krisha@gmail.com', 80000),
(10, 'mira', 'mirai@gmail.com', 80000);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;