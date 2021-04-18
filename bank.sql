Database name- bank


/* Table for Transaction*/
CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) 

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);
  
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;
  
  
/*Table for Users*/

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
)

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

/*Insert Data into 'users'  */
INSERT INTO `users` (`id`, `name`, `email`, `balance`) 

 VALUES
(1, 'Amit', 'amityadav@gmail.com', 31000),
(2, 'Swapnil', 'swapnilgawad786@gmail.com', 22000),
(3, 'Shubham', 'shubhambhagat@gmail.com', 27000),
(4, 'Maulik', 'mdave98@gmail.com', 59000),
(5, 'Vrushali', 'vrushp@gmail.com', 21000),
(6, 'Ajinkya', 'apotdar@gmail.com', 26000),
(7, 'Sghadi', 'csarcasm@gmail.com', 51500),
(8, 'Apurva', 'aapuc@gmail.com',    38000),
(9, 'Sumer', 'sumerpatel@gmail.com', 33000),
(10, 'Saurabh', 'schavan@gmail.com', 57000);



 