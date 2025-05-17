-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 11:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionator`
--

-- --------------------------------------------------------

--
-- Table structure for table `41_iipu_c1`
--

CREATE TABLE `41_iipu_c1` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_iipu_c1`
--

INSERT INTO `41_iipu_c1` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'What is a motherboard?', 1, 1),
(2, 'What is a microprocessor?', 1, 1),
(3, 'Define a north bridge.', 1, 0),
(4, 'Define a south bridge.', 1, 0),
(5, 'Expand BIOS', 1, 0),
(6, 'Name any two types of motherboard.', 2, 1),
(7, 'Briefly explain USB port.', 2, 0),
(8, 'Name the two types of UPS.', 2, 0),
(9, 'Explain SMPS.', 2, 0),
(10, 'Explain parallel port', 2, 0),
(11, 'Explain the characteristics of a motherboard.', 3, 1),
(12, 'Explain different types of motherboard.', 3, 0),
(13, 'Give the functions of BIOS.', 3, 0),
(14, 'What is a slot? Explain any two slots.', 3, 0),
(15, 'Explain the different types of I/O ports.', 3, 0),
(16, 'Explain any five components of a motherboard.', 5, 0),
(17, 'Explain the different slots in a motherboard.', 5, 0),
(18, 'Explain the different I/O ports and interfaces.', 5, 0),
(19, 'Explain Cache memory.', 5, 0),
(20, 'Explain different types of RAM', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_iipu_c2`
--

CREATE TABLE `41_iipu_c2` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_iipu_c2`
--

INSERT INTO `41_iipu_c2` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'Prove that 1 + Y is tautology.', 1, 1),
(2, 'What is a truth table?', 1, 0),
(3, 'Draw the venn diagram of AND operator', 1, 0),
(4, 'What are postulates of boolean algebra?', 1, 0),
(5, 'Prove that 1+X=1.', 1, 0),
(6, 'Write the truth table of AND operator', 2, 1),
(7, 'Write the truth table of OR operator', 2, 1),
(8, 'Write the truth table to the Boolean expression  (A.B)+C', 2, 0),
(9, 'Prove complementarity law using truth table.', 2, 0),
(10, 'Prove algebraically X + XY = X', 2, 0),
(11, 'Write any three basic postulates of Boolean algebra.', 3, 1),
(12, 'State and prove any three theorems of Boolean algebra.', 3, 0),
(13, 'Write the principles of duality theorems.', 3, 0),
(14, 'Write the truth table for X + YZ = (X + Y)(X + Z)', 3, 0),
(15, 'State and prove distributive law.', 3, 0),
(16, 'Given the Boolean function F(X, Y, Z) = m (0, 2, 4, 5, 6) reduce it using K-map.', 5, 1),
(17, 'Given Boolean function F(A, B, C, D) = Σ(5, 6, 7, 8, 9, 10, 14) reduce the function F using K-map.Write a logic gate diagram for the reduced SOP expression.', 5, 0),
(18, 'Given Boolean function F(A, B, C, D) = m0 + m1 + m2 + m6 + m8 + m9 + m10 reduce the function F using K-map.', 5, 0),
(19, 'Given the Boolean function F(W, X, Y, Z) = Σ(0, 1, 2, 3, 5, 7, 8, 9, 10, 11, 13, 15). Reduce it by using Karnaugh map.', 5, 0),
(20, 'Given the Boolean function F(W, X, Y, Z) = Σ(0, 1, 2, 3, 4, 6, 8, 10, 12, 14). Reduce it by using K-map.', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_iipu_c3`
--

CREATE TABLE `41_iipu_c3` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_iipu_c3`
--

INSERT INTO `41_iipu_c3` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'What is a logic gate?', 1, 0),
(2, 'What is truth table?', 1, 0),
(3, 'Write the standard symbol for NOT gate.', 1, 0),
(4, 'Write the truth table for NOT gate.', 1, 0),
(5, 'Which gate is called as inverter?', 1, 0),
(6, 'Mention the types of logic gates.', 2, 0),
(7, 'Which gates are called universal gates and why?', 2, 0),
(8, 'Mention the derived gates.', 2, 0),
(9, 'Mention different universal gates.', 2, 0),
(10, 'Write the standard symbol and truth table for AND gate.', 2, 0),
(11, 'Explain working with AND gate.', 3, 1),
(12, 'Write the truth table of three inputs AND gate.', 3, 0),
(13, 'Write the truth table three input variable using OR gate.', 3, 0),
(14, 'Explain NOR gate', 3, 0),
(15, 'Explain the working of NAND gate', 3, 0),
(16, 'Explain any two basic gates with example and truth table.', 5, 0),
(17, 'Explain universal gates with truth table.', 5, 0),
(18, 'Realize the basic gates by using only NAND gate.', 5, 0),
(19, 'Realize logical NOT gate and logical AND gate using NAND gate.', 5, 0),
(20, 'Design to implement logical OR gate and logical AND gate using NOR logical gate.', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_iipu_c4`
--

CREATE TABLE `41_iipu_c4` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_iipu_c4`
--

INSERT INTO `41_iipu_c4` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'What is data structure?', 1, 0),
(2, 'What is primitive data structure?', 1, 0),
(3, 'Give an example for primitive data structure.', 1, 0),
(4, 'What is non-primitive data structure?', 1, 0),
(5, 'Give an example for non-primitive data structure.', 1, 0),
(6, 'What are the two types of data structures?', 2, 0),
(7, 'What is linear and non-linear data structure?', 2, 0),
(8, 'What is an array? Mention the different types of arrays.', 2, 0),
(9, 'Mention two types of searching techniques', 2, 0),
(10, 'Write any two applications and arrays.', 2, 0),
(11, 'Give the memory representation of one-dimensional array.', 3, 0),
(12, 'Write an algorithm for traversing an array.', 3, 0),
(13, 'Write the memory representation arrays in row-major order.', 3, 0),
(14, 'Write the memory representation arrays in column-major order.', 3, 0),
(15, 'Consider the array A of order 25 x 4 with base value 2000 and one word per memory location. Find the memory address of A[12][3] in row-major order.', 3, 0),
(16, 'Write an algorithm for searching an element using linear search method.', 5, 1),
(17, 'Write an algorithm for searching an element using binary search method.', 5, 0),
(18, 'Explain the different operations performed on stacks.', 5, 0),
(19, 'Write an algorithm to insert an item into the queue.', 5, 0),
(20, 'Write an algorithm to insert an item into the stack.', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_iipu_c5`
--

CREATE TABLE `41_iipu_c5` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_iipu_c5`
--

INSERT INTO `41_iipu_c5` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'What is an object?', 1, 0),
(2, 'What is a class?', 1, 0),
(3, 'What is data abstraction?', 1, 0),
(4, 'What is inheritance?', 1, 0),
(5, 'What is data encapsulation?', 1, 0),
(6, 'What is the significance of Class in OOP?', 2, 0),
(7, 'Explain the term polymorphism.', 2, 0),
(8, 'Give any two advantages of OOP.', 2, 0),
(9, 'Give any two applications of OOP.', 2, 0),
(10, 'Give any two limitations of OOP.', 2, 0),
(11, 'Differentiate between class and objects.', 3, 0),
(12, 'Explain any three features of OOP.', 3, 0),
(13, 'Mention any three High level languages that follow the OOP.', 3, 0),
(14, 'Define overloading. Mention its types.', 3, 0),
(15, 'Define inheritance. Mention its types.', 3, 0),
(16, 'Explain any five characteristics /features/ basic concepts of OOP.', 5, 0),
(17, 'Define: a. Object b. Class c. Data abstraction d. data encapsulation e. Polymorphism', 5, 0),
(18, 'WHat are the advantages OOP over earlier programming methods?', 5, 0),
(19, 'Mention the different applications of OOP.', 5, 0),
(20, 'What are the advantages of OOP over procedural programming?', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_ipu_c1`
--

CREATE TABLE `41_ipu_c1` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_ipu_c1`
--

INSERT INTO `41_ipu_c1` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'What does IC stand for?', 1, 0),
(2, 'What is a computer?', 1, 0),
(3, 'What are the advantages of learning computers?', 1, 0),
(4, 'Who invented the Pascaline?', 1, 0),
(5, 'What is Charles baggage known as?', 1, 0),
(6, 'Expand the term ENIAC?', 1, 0),
(7, 'What are the fields where computers are used today?', 2, 0),
(8, 'Write a note on Abacus?', 2, 0),
(9, 'Mention any two features of ENIAC?', 2, 0),
(10, 'Explain the role of computers in education?', 2, 0),
(11, 'Explain Analog Computers.', 2, 0),
(12, 'Explain the history of computers.', 3, 0),
(13, 'Give the features of first generation computers', 3, 0),
(14, 'Write the features of Second generation computers.', 3, 0),
(15, 'Draw a neat block diagram of the functional units of a computer and label it.', 3, 0),
(16, 'Give the features of fourth generation computers.', 3, 0),
(17, 'Briefly explain the history of computers.', 5, 0),
(18, 'Explain the functional units of a computer with a neat block diagram?', 5, 0),
(19, 'What are the latest developments in the field of computers, list the areas and explain.', 5, 0),
(20, 'Explain the application of Computers.', 5, 0),
(21, 'Compare the features of micro and mini computers?', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_ipu_c2`
--

CREATE TABLE `41_ipu_c2` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_ipu_c2`
--

INSERT INTO `41_ipu_c2` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'What is PC?', 1, 0),
(2, 'What is the use of input unit?', 1, 0),
(3, 'What happens to the data in the input unit?', 1, 0),
(4, 'What is the use of memory?', 1, 0),
(5, 'What is ROM and RAM?', 1, 0),
(6, 'Compare input and output units.', 2, 0),
(7, 'What is difference between volatile and non-volatile memory.', 2, 0),
(8, 'Compare static and dynamic RAM.', 2, 0),
(9, 'Give different types of ROM.', 2, 0),
(10, 'Explain the different types of keyboard.', 2, 0),
(11, 'Give the applications of OCR, OMR, and MICR.', 3, 0),
(12, 'Explain impact and non-impact printers in detail.', 3, 0),
(13, 'Explain the storage medium.', 3, 0),
(14, 'Explain output unit in detail.', 3, 0),
(15, 'Illustrate the latest configuration of computers for today.', 3, 0),
(16, 'What are input devices? Explain in detail.', 5, 0),
(17, 'What are output devices? Explain in detail.', 5, 0),
(18, 'Write a note on storage devices.', 5, 0),
(19, 'Explain hard disk.', 5, 0),
(20, 'Write a note on printers.', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_ipu_c3`
--

CREATE TABLE `41_ipu_c3` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_ipu_c3`
--

INSERT INTO `41_ipu_c3` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'Define the base of the number system.', 1, 0),
(2, 'What is the expansion of BIT?', 1, 0),
(3, 'Define MSB.', 1, 0),
(4, 'Define LSB.', 1, 0),
(5, 'What is the expansion of ASCII?', 1, 0),
(6, 'Specify the general rule for representing number using positional notation in any number system.', 2, 0),
(7, 'Mention different types of positional number system.', 2, 0),
(8, 'Explain the need of binary number system in computers.', 2, 0),
(9, 'What is the importance of hexadecimal system? (', 2, 0),
(10, 'What is 1’s complement? Give an example.', 2, 0),
(11, 'Write 1’s complement of 11010011(2) and 2’s complement of 1111011(2)', 3, 0),
(12, 'Convert 193.102 (10) to binary.', 3, 0),
(13, 'Add 1101101 and 1011101', 3, 0),
(14, 'Convert 1100101011(2) to hexadecimal.', 3, 0),
(15, 'Convert 36B.DEF (16) to binary.', 3, 0),
(16, 'Subtract 36 from 83 using 2’s complement.', 5, 0),
(17, 'Using 1’s complement method, solve 54(10) – 87(10)', 5, 0),
(18, 'Explain different types of computer codes.', 5, 0),
(19, 'Add: 89(10) + 66(10) using binary addition.', 5, 0),
(20, 'Find 1101110(2) + 1010111(2) – 11110 (2) + 110011(2) (', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_ipu_c4`
--

CREATE TABLE `41_ipu_c4` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_ipu_c4`
--

INSERT INTO `41_ipu_c4` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'What is a program?', 1, 0),
(2, 'What is a hardware?', 1, 0),
(3, 'What is a software?', 1, 0),
(4, 'What is a machine language?', 1, 0),
(5, 'What is a assembly language?', 1, 0),
(6, 'What are the types of software?', 2, 0),
(7, 'Compare hardware and software.', 2, 0),
(8, 'What is application software? Give example.', 2, 0),
(9, 'What is system software? Give example', 2, 0),
(10, 'State the difference between object code and source code.', 2, 0),
(11, 'Write a note on Computer languages.', 3, 0),
(12, 'Explain different types of operating systems.', 3, 0),
(13, 'List any three functions of operating system.', 3, 0),
(14, 'Explain multi-user operating system.', 3, 0),
(15, 'Explain the terms multiprogramming and multitasking', 3, 0),
(16, 'Define the terms:a. Interpreter b. Compiler c. Assembler d. Linker e. Loader', 5, 0),
(17, 'Define the following: a. Object code b. Source code. c. Application software d. System software. e. Utilities.', 5, 0),
(18, 'What is an operating system? Explain any four operating systems.', 5, 0),
(19, 'What are language translators? Explain briefly.', 5, 0),
(20, 'What are the features of Windows operating system?', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `41_ipu_c5`
--

CREATE TABLE `41_ipu_c5` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `mark` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `41_ipu_c5`
--

INSERT INTO `41_ipu_c5` (`qid`, `question`, `mark`, `flag`) VALUES
(1, 'Define Problem Solving.', 1, 0),
(2, 'What is problem definition?', 1, 0),
(3, 'What is sequential construct?', 1, 0),
(4, 'What is sequential algorithm?', 1, 0),
(5, 'Define coding.', 1, 0),
(6, 'State the characteristics of algorithm?', 2, 0),
(7, 'What is the difference between program and system flowcharts?', 2, 0),
(8, 'Explain the difference between source program and object program?', 1, 0),
(9, 'Explain the importance of documentation.', 2, 0),
(10, 'What are the types of selection construct?', 2, 0),
(11, 'Give advantages of algorithm.', 3, 0),
(12, 'What are the different programming constructs?', 3, 0),
(13, 'Write an algorithm to swap the values of two variables.', 3, 0),
(14, 'Write an algorithm to find sum and average of three numbers.', 3, 0),
(15, 'Draw a flowchart to calculate simple interest.', 3, 0),
(16, 'Briefly explain the various stages of problem solving.', 5, 0),
(17, 'What are the symbols used in flowchart?', 5, 0),
(18, 'Briefly explain documentation and maintenance.', 5, 0),
(19, 'Explain divide and conquer method.', 5, 0),
(20, 'Explain while construct with flowchart.', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `generateqp`
--

CREATE TABLE `generateqp` (
  `qno` int(11) NOT NULL,
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(4) NOT NULL,
  `password` varchar(10) NOT NULL,
  `subcode` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `password`, `subcode`) VALUES
(0, 'user000', 0),
(2, 'user2', 3),
(294, 'user294', 41);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `41_iipu_c1`
--
ALTER TABLE `41_iipu_c1`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_iipu_c2`
--
ALTER TABLE `41_iipu_c2`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_iipu_c3`
--
ALTER TABLE `41_iipu_c3`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_iipu_c4`
--
ALTER TABLE `41_iipu_c4`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_iipu_c5`
--
ALTER TABLE `41_iipu_c5`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_ipu_c1`
--
ALTER TABLE `41_ipu_c1`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_ipu_c2`
--
ALTER TABLE `41_ipu_c2`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_ipu_c3`
--
ALTER TABLE `41_ipu_c3`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_ipu_c4`
--
ALTER TABLE `41_ipu_c4`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `41_ipu_c5`
--
ALTER TABLE `41_ipu_c5`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `generateqp`
--
ALTER TABLE `generateqp`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `41_iipu_c1`
--
ALTER TABLE `41_iipu_c1`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `41_iipu_c2`
--
ALTER TABLE `41_iipu_c2`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `41_iipu_c3`
--
ALTER TABLE `41_iipu_c3`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `41_iipu_c4`
--
ALTER TABLE `41_iipu_c4`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `41_iipu_c5`
--
ALTER TABLE `41_iipu_c5`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `41_ipu_c1`
--
ALTER TABLE `41_ipu_c1`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `41_ipu_c2`
--
ALTER TABLE `41_ipu_c2`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `41_ipu_c3`
--
ALTER TABLE `41_ipu_c3`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `41_ipu_c4`
--
ALTER TABLE `41_ipu_c4`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `41_ipu_c5`
--
ALTER TABLE `41_ipu_c5`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `generateqp`
--
ALTER TABLE `generateqp`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
