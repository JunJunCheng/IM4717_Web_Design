CREATE TABLE IF NOT EXISTS `movie` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('Now Showing','Next Change','Coming Soon') NOT NULL,
  `info` varchar(1000) NOT NULL,
  `length` int(10) NOT NULL,  
  `type` varchar(100) NOT NULL, 
  `release_date` varchar(100) NOT NULL,
  `trailer` varchar(500) NOT NULL, 
  KEY `movie_id` (`movie_id`)
) ;


CREATE TABLE IF NOT EXISTS `seats` (
  `seat_row` varchar(1) NOT NULL,
  `seat_colum` int(2) NOT NULL,
  `status` enum('booked','not booked') NOT NULL,
  `slotID` int(3) NOT NULL,
   CONSTRAINT pk_seatID PRIMARY KEY (`seat_row`,`seat_colum`,`slotID`)
);


CREATE TABLE IF NOT EXISTS `booked` (
  `username` varchar(50) NOT NULL,
  `seat_row` varchar(1) NOT NULL,
  `seat_colum` int(2) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  KEY `username` (`username`),
  FOREIGN KEY (`seat_row`, `seat_colum`)
      REFERENCES seats(seat_row, seat_colum)
      ON UPDATE CASCADE ON DELETE RESTRICT
) ;

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  KEY `username` (`username`)
) ;

CREATE TABLE IF NOT EXISTS `movie_slot` (
  `slotID` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
   KEY `slotID` (`slotID`)
);