-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 01:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2020_aptitude_madan`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `q_title` varchar(255) NOT NULL,
  `op_a` varchar(255) NOT NULL,
  `op_b` varchar(255) NOT NULL,
  `op_c` varchar(255) NOT NULL,
  `op_d` varchar(255) NOT NULL,
  `ans_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `c_id`, `q_title`, `op_a`, `op_b`, `op_c`, `op_d`, `ans_id`) VALUES
(1, 1, 'In Iterator, hasMoreElements() method of Enumeration has been changed to', 'hasNextElement()', 'isNext()', 'hasNext()', 'name remains same\r\n', 'hasNext()'),
(2, 1, 'TreeSet internally uses that one to store elements', 'HashMap', 'LinkedHashMap', 'TreeMap', 'None of the above', 'LinkedHashMap'),
(3, 1, 'An attempt to add the null key to a TreeSet will result in', 'Will compile', 'Compile time Exception', 'Error', 'Runtime - NullPointerException\r\n', 'Runtime - NullPointerException\r\n'),
(4, 1, ' Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling\r\n', 'Dynamic binding between objects', 'Bytecode is executed by JVM'),
(5, 1, 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Use of pointers'),
(6, 1, 'The \\u0021 article referred to as a', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed', 'Unicode escape sequence'),
(7, 1, ' _____ is used to find and fix bugs in the Java programs.', 'JVM', 'JDK', 'JRE', 'JDB', 'JDB'),
(8, 1, 'Which of the following is a valid declaration of a char?', 'char ch = \'\\utea\';', 'char ca = \'tea\';', 'char cr = \\u0223;', 'char cc = \'\\itea\';\r\n', 'char ch = \'\\utea\';'),
(9, 1, 'What is the return type of the hashCode() method in the Object class', 'Object', 'int', 'long', 'void', 'int'),
(10, 1, 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', '0xnf029L'),
(11, 1, 'What does the expression float a = 35 / 0 return?', '0', 'Not a Number', 'Infinity', 'Real Time Exception', 'Infinity'),
(12, 1, 'Evaluate the following Java expression, if x=3, y=5, and z=10:\r\n\r\n++z + y - y + z + x++', '24', '23', '20', '25', '24'),
(13, 1, 'Which of the following creates a List of 3 visible items and multiple selections abled?', 'new List(false, 3)', 'new List(3, true)', 'new List(true, 3)', 'new List(3, false)', 'new List(3, true)'),
(14, 1, 'An attempt to add the null key to a TreeSet will result in', 'Will compile', 'Compile time Exception', 'Error', 'Runtime - NullPointerException\r\n', 'Runtime - NullPointerException\r\n'),
(15, 1, ' Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling\r\n', 'Dynamic binding between objects', 'Bytecode is executed by JVM'),
(16, 1, 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'Use of pointers'),
(17, 1, 'The \\u0021 article referred to as a', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed', 'Unicode escape sequence'),
(18, 1, ' _____ is used to find and fix bugs in the Java programs.', 'JVM', 'JDK', 'JRE', 'JDB', 'JDB'),
(19, 1, 'Which of the following is a valid declaration of a char?', 'char ch = \'\\utea\';', 'char ca = \'tea\';', 'char cr = \\u0223;', 'char cc = \'\\itea\';\r\n', 'char ch = \'\\utea\';'),
(20, 1, 'What is the return type of the hashCode() method in the Object class', 'Object', 'int', 'long', 'void', 'int'),
(21, 1, 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', '0xnf029L'),
(22, 1, 'What does the expression float a = 35 / 0 return?', '0', 'Not a Number', 'Infinity', 'Real Time Exception', 'Infinity'),
(23, 1, 'Evaluate the following Java expression, if x=3, y=5, and z=10:\r\n\r\n++z + y - y + z + x++', '24', '23', '20', '25', '24'),
(24, 1, 'Which of the following creates a List of 3 visible items and multiple selections abled?', 'new List(false, 3)', 'new List(3, true)', 'new List(true, 3)', 'new List(3, false)', 'new List(false, 3)'),
(25, 2, 'What does PHP stand for?', 'Hypertext Processor', 'Private Home Page', 'Personal Hypertext Processor', 'None of the above', 'Hypertext Processor'),
(26, 2, 'Which of the following is true about php.ini file?', 'The PHP configuration file, php.ini, is the final and most immediate way to affect PHP\'s functionality.\r\n\r\n', 'The php.ini file is read each time PHP is initialized.', 'Both of the above.', 'None of the above', 'Both of the above.'),
(27, 2, 'Which of the following type of variables are instances of programmer-defined classes?', 'Strings', 'Arrays', 'Objects', 'Resources', 'Objects'),
(28, 2, 'Which of the following magic constant of PHP returns function name?\r\n\r\n', '_LINE_', '_FILE_', '_FUNCTION_', '_CLASS_', '_FUNCTION_'),
(29, 2, 'Which of the following magic constant of PHP returns class method name?', '_METHOD_', '_FILE_', '_FUNCTION_', ' _CLASS_\r\n\r\n', '_METHOD_'),
(30, 2, 'Which of the following function creates an array?', 'array()', 'array_change_key_case()', 'array_chunk()\r\n\r\n', 'array_count_values()\r\n\r\n', 'array()'),
(31, 2, 'Which of the following is used to check if session variable is already set or not in PHP?', ' session_start() function', '|$_SESSION[]', 'isset() function', 'session_destroy() function', 'isset() function'),
(32, 2, 'Which of the following method of Exception class returns source filename?', 'getMessage()', 'getCode()', 'getFile()', ' getLine()', 'getFile()'),
(33, 2, 'Which of the following method returns current date and time?', 'time()', 'getdate()', 'date()', 'None of the above', 'time()'),
(34, 2, 'Who invented PHP?', 'One', 'Two ', 'Three', 'Four', 'One'),
(35, 2, 'Which of the looping statements is/are supported by PHP?\r\ni) for loop\r\nii) while loop\r\niii) do-while loop\r\niv) foreach loop', ' (i) and (ii)', '(i), (ii) and (iii)', 'All of the mentioned', 'None of the mentioned', 'All of the mentioned'),
(36, 2, 'What will be the output of the following PHP code?\r\n< ? php \r\n    $num = 10;\r\n    echo \'What is her age? \\n She is $num years old\';\r\n? >', 'What is her age? \\n She is $num years old', 'What is her age?\r\nShe is $num years old', 'What is her age? She is 10 years old', 'What is her age?\r\nShe is 10 years old', 'What is her age? \\n She is $num years old'),
(37, 2, 'Which of the below statements is equivalent to $add += $add ?', '$add = $add', '$add = $add +$add', '$add = $add + 1', '$add = $add + $add + 1', '$add = $add +$add'),
(38, 2, 'Which of the looping statements is/are supported by PHP?\r\ni) for loop\r\nii) while loop\r\niii) do-while loop\r\niv) foreach loop', ' (i) and (ii)', '(i), (ii) and (iii)', 'All of the mentioned', 'None of the mentioned', 'All of the mentioned'),
(39, 2, 'What will be the output of the following PHP code?\r\n< ?php \r\n    $num = 10;\r\n    echo \'What is her age? \\n She is $num years old\';\r\n?>', 'What is her age? \\n She is $num years old', 'What is her age?\r\nShe is $num years old', 'What is her age? She is 10 years old', 'What is her age?\r\nShe is 10 years old', 'What is her age? \\n She is $num years old'),
(40, 2, 'Which of the below statements is equivalent to $add += $add ?', '$add = $add', '$add = $add +$add', '$add = $add + 1', '$add = $add + $add + 1', '$add = $add +$add'),
(41, 2, ' If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?', '12', '1', 'Error', '5', '5'),
(42, 2, 'Which of the following PHP statements will output Hello World on the screen?\r\n(i) echo Hello World;\r\n(ii) print Hello World;\r\n(iii) printf Hello World;\r\n(iv) sprintf Hello World;', '(i) and (ii)', '(i) and (ii)', '(i), (ii) and (iii)', 'All of the mentioned', '(i) and (ii)'),
(43, 2, ' What will be the output of the following php code\r\n< ?php \r\n$num  = 1;\r\n$num1 = 2;\r\nprint $num . \"+\". $num1 ;\r\n?>', '3', '1+2', '1.+.2', 'Error', '1+2'),
(44, 2, ' Which of following variables can be assigned a value to it?\r\n(i) $3hello\r\n(ii) $_hello\r\n(iii) $this\r\n(iv) $This', 'All of the mentioned', 'Only (ii)', '(ii), (iii) and (iv)', '(ii) and (iv)', '(ii) and (iv)'),
(45, 2, ' If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?', '12', '1', 'Error', '5', '5'),
(46, 2, 'Which of the following PHP statements will output Hello World on the screen?\r\n(i) echo Hello World;\r\n(ii) print Hello World;\r\n(iii) printf Hello World;\r\n(iv) sprintf Hello World;', '(i) and (ii)', '(i) and (ii)', '(i), (ii) and (iii)', 'All of the mentioned', 'All of the mentioned'),
(47, 2, ' What will be the output of the following php code\r\n< ?php \r\n$num  = 1;\r\n$num1 = 2;\r\nprint $num . \"+\". $num1 ;\r\n?>', '3', '1+2', '1.+.2', 'Error', '1+2'),
(48, 2, ' Which of following variables can be assigned a value to it?\r\n(i) $3hello\r\n(ii) $_hello\r\n(iii) $this\r\n(iv) $This', 'All of the mentioned', 'Only (ii)', '(ii), (iii) and (iv)', '(ii) and (iv)', '(ii) and (iv)'),
(49, 2, 'Who is making the Web standards?', 'Microsoft', 'Mozilla', 'Google', 'The World Web Consortium', 'The World Web Consortium'),
(50, 3, 'What will be the output of the following code :\r\nprint type(type(int))', 'type \'int\'\r\n', 'type \'type\'\r\n', 'Error', '0', 'type \'type\'\r\n'),
(51, 3, 'What is the output of the following code :\r\nL = [\'a\',\'b\',\'c\',\'d\']\r\nprint \"\".join(L)', 'Error', 'None', 'abcd', '[\'a\',\'b\',\'c\',\'d\']', 'abcd'),
(52, 3, 'What is the output of the following segment :\r\nchr(ord(\'A\'))', 'A', 'B', 'a', 'Error', 'A'),
(53, 3, 'What is the output of the following program :\r\ny = 8\r\nz = lambda x : x * y\r\nprint z(6)', '48', '14', '64', 'None of the above', '48'),
(54, 3, 'What is called when a function is defined inside a class?', 'Module', 'Class', 'Anothe Function', 'Method', 'Method'),
(55, 3, 'Which of the following is the use of id() function in python?', 'Id returns the identity of the object', 'Every object doesnt have a unique id', 'All of the mentioned', 'None of the mentioned', 'Id returns the identity of the object'),
(56, 3, 'time.time() returns ________', 'the current time in milliseconds since midnight, January 1, 1970 GMT (the Unix time)\r\n', 'the current time in milliseconds\r\n', 'the current time in milliseconds since midnight\r\n', 'the current time in milliseconds since midnight, January 1, 1970\r\n', 'the current time in milliseconds since midnight, January 1, 1970 GMT (the Unix time)\r\n'),
(57, 3, 'Consider the results of a medical experiment that aims to predict whether someone is going to develop myopia based on some physical measurements and heredity. In this case, the input dataset consists of the persons medical characteristics and the target ', 'Regression', 'Decision Tree', 'Clustering', 'Association Rules', 'Decision Tree'),
(58, 3, 'Which of these is not a core data type?', 'Lists', 'Dictionary', 'Tuples', 'Class', 'Class'),
(59, 3, 'What data type is the object below ? L = [1, 23, hello, 1]', 'List', 'Dictionary', 'Tuple', 'Array', 'List'),
(60, 3, 'Which of the following function convert a string to a float in python?', 'int(x [,base])\r\n', 'long(x [,base] )\r\n', 'float(x)\r\n', 'str(x)\r\n', 'float(x)\r\n'),
(61, 3, 'What is the output of the following code :\r\nprint 9//2', '4.5', '4.0', '4', 'Error', '4'),
(62, 3, 'Which function overloads the >> operator?', 'more()', 'gt()', 'ge()', 'None of the above', 'None of the above'),
(63, 3, 'Which operator is overloaded by the or() function?', '||', '|', '//', '/', '|'),
(64, 3, 'What is the output of the following program :\r\ni = 0\r\nwhile i < 3:\r\n       print i\r\n       i++\r\n       print i+1', '0 2 1 3 2 4\r\n', '0 1 2 3 4 5\r\n', 'Error\r\n', '1 0 2 4 3 5\r\n', 'Error\r\n'),
(65, 3, ' What is output of −\r\n\r\n33 == 33.0', 'False ', 'True', '33', 'None of the above', 'True'),
(66, 3, ' What is output of following code −\r\n\r\na = (1, 2)\r\na[0] +=1', '(1,1,2)', '2', 'Type Error', 'Syntax Error', 'Type Error'),
(67, 3, 'Pylab is a package that combine _______,________&______ into a single namespace.', 'Numpy, scipy & matplotlib', 'Numpy, matplotlib & pandas', ' Numpy, pandas & matplotlib', 'Numpy, scipy & pandas', 'Numpy, scipy & matplotlib'),
(68, 3, 'Polymorphism is when a subclass can modify the behavior of its superclass.', 'False', 'True', 'Depends on content of the class', 'This is invalid question', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email_address` varchar(255) NOT NULL,
  `user_contact_no` varchar(20) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `user_name`, `user_email_address`, `user_contact_no`, `user_password`) VALUES
(1, 'Niket', 'niketkharat13@gmail.com', '2147483647', '$2y$10$d6P3o/zlGI5TrqZxQ4LrduPBq4GE2n7haoPLUVc/uiSuBDjjeT6HC'),
(2, 'NIket', 'niketkharat14@gmail.com', '1234560789', '$2y$10$WLxwThG98/ZLoNT4i2J.b.vCvcjEPoBm2kwuur8Wluvmz7wTE0JCW'),
(3, 'Vrutika', 'vrutikahande25@gmail.com', '1236547890', '$2y$10$0tvRegTdaLtWUMmUtgTII.sdd1Mk9eDq9D6QzJx4fVbK9YB0Ghg4.'),
(4, 'Niket', 'nikettemp13@gmail.com', '1236547890', '$2y$10$Nt4blZt1ZczjgIi52evkVupeyIb5nZWEFB1uzw6waLOoevjlFn56O'),
(6, 'Nikhil MindScript', 'nikhil.mindscript@gmail.com', '2147483647', '$2y$10$b5KlPEjJbfu1gnidHvYcWu2OftTRMunHHBP4WE74bya2C9qL.4722'),
(7, 'Nikhil Pawar', 'nikhilpawar151@gmail.com', '9078563412', '$2y$10$uSvshgaqvV7K7QEvX9PMmOmkkN3okIwSmxYtmb60dUUwTEXvIRZGW');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exam_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `user_id`, `exam_date`, `user_result`) VALUES
(1, 2, '2020-03-29 14:39:41', 13),
(4, 2, '2020-03-29 14:39:41', 13),
(5, 2, '2020-03-29 14:39:41', 13),
(6, 2, '2020-03-29 14:39:41', 13),
(7, 2, '2020-03-29 14:39:41', 13),
(8, 2, '2020-03-29 14:39:41', 13),
(9, 2, '2020-03-29 14:39:41', 13),
(10, 2, '2020-03-29 14:39:41', 7),
(11, 2, '2020-03-29 14:39:41', 30),
(12, 2, '2020-03-29 14:39:41', 0),
(13, 2, '2020-03-29 14:39:41', 0),
(14, 2, '2020-03-29 14:39:41', 1),
(15, 2, '0000-00-00 00:00:00', 14),
(16, 2, '0000-00-00 00:00:00', 14),
(17, 2, '2020-03-29 11:24:51', 14),
(18, 5, '2020-03-31 22:29:39', 0),
(19, 6, '2020-04-01 15:52:05', 0),
(20, 7, '2020-04-05 08:13:04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `set_time`
--

CREATE TABLE `set_time` (
  `time_id` int(11) NOT NULL,
  `time_in_sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_time`
--

INSERT INTO `set_time` (`time_id`, `time_in_sec`) VALUES
(1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `set_time`
--
ALTER TABLE `set_time`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `set_time`
--
ALTER TABLE `set_time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
