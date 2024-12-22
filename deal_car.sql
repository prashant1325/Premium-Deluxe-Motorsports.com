-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 08:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deal_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `vechile` varchar(100) NOT NULL,
  `pay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`name`, `email`, `phone`, `vechile`, `pay`) VALUES
('prashant', 'a100ka@yahoo.com', 2147483647, 'Ducati Panigale V4 (75 Lakh)', 'Debit Card'),
('pk', 'a100ka@yahoo.com', 2147483647, 'Ducati Panigale V4 (75 Lakh)', 'Debit Card'),
('pk', 'a100ka@yahoo.com', 2147483647, 'Kawasaki Z1000 (10 Lakh)', 'Debit Card'),
('prashant', 'puishh9988@gmail.com', 998889282, 'Himalayan 450 (9.5 Lakh)', 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `variant` varchar(100) NOT NULL,
  `reg_year` varchar(110) NOT NULL,
  `manf_year` varchar(11) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`variant`, `reg_year`, `manf_year`, `reg_no`, `owner`, `price`, `image`) VALUES
('Variant = Ferrari 296 GTS', 'Reg Year = 2020', 'Mfg = 2020', 'Registration no  = HR 26', 'Ownership = Second', 'Asking Price: 2.5 crore', 0x75706c6f6164732f6665726172692e6a706567),
('Variant = Porsche 911', 'Reg Year = 2023', 'Mfg = 2022', 'Registration  no = HP 40', 'Ownership = Third', 'Asking Price: 1.5 crore', 0x75706c6f6164732f363638613232333638396432665f706f72636865207265642e6a706567),
('Variant = Lamborghini Huracan', 'Reg YEAR = 2018', 'Mfg = 2018', 'Registration no  = DL 01', 'Ownership = First', 'Asking Price: 5.5 crore', 0x75706c6f6164732f363638613232646165396664665f73706f727473332e6a706567),
('Variant = BMW M4 SPORTS', 'Reg Year = 2021', 'Mfg = 2020', 'Registration  no = JK 09', 'Ownership = First', 'Asking Price: 1.4 crore', 0x75706c6f6164732f363638613234346564396533305f626d77206d342e6a706567),
('Variant = Audi RS5', 'Reg  Year =  2023', 'Manf = 2022', 'Registration no  = UP 05', 'Ownership = Zero(Brand new Car)', 'Asking Price: 2.7 crore', 0x75706c6f6164732f363638613235313835613633305f73706f727473342e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `post_bike`
--

CREATE TABLE `post_bike` (
  `variant` varchar(100) NOT NULL,
  `reg_year` varchar(100) NOT NULL,
  `manf_year` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `owner` varchar(110) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_bike`
--

INSERT INTO `post_bike` (`variant`, `reg_year`, `manf_year`, `reg_no`, `owner`, `price`, `image`) VALUES
('MV Agusta', 'Reg - 2018', 'Manf - 2017', 'HR-20', 'Third', '9.5 Lakhs', 0x75706c6f6164732f363638373565353331366630635f61762e6a7067),
('Ducati Panigale V4', 'Reg - 2019', 'Manf - 2018', 'DL-20', 'Second', '75 Lakhs', 0x75706c6f6164732f363638373565626131303931655f6475636174692e6a7067),
('Yamaha YZF R1', 'Reg - 2018', 'Manf - 2017', 'HP-72', 'Single', '35 Lakhs', 0x75706c6f6164732f363638373766373132356530355f72312e6a7067),
('BMW S1000 RR', 'Reg- 2024', 'Manf - 2024', 'HP-13', 'Single', '29 Lakhs', 0x75706c6f6164732f363638373930333932363563395f626d7720733130302e6a706567),
('Kawasaki Z1000', 'Reg- 2025', 'Manf - 2024', 'PCL-01', 'First', '10 Lakhs', 0x75706c6f6164732f363638373930613462363834635f6b3130302e6a7067),
('Suzuki Hayabusa', 'Reg- 2020', 'Manf - 2019', 'KL-09', 'First', '21 Lakhs', 0x75706c6f6164732f363638373931333065613232335f686179612e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `post_city`
--

CREATE TABLE `post_city` (
  `variant` varchar(110) NOT NULL,
  `reg_year` varchar(110) NOT NULL,
  `manf_year` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_city`
--

INSERT INTO `post_city` (`variant`, `reg_year`, `manf_year`, `reg_no`, `owner`, `price`, `image`) VALUES
('Maruti Sizuki Swift ZXI', 'Reg -2023', 'Manf - 2022', 'HR-26', 'Second ', '9.8 Lakhs', 0x75706c6f6164732f363638373538333265366262345f6369747920312e6a7067),
('Mahindra Thar', 'Reg - 2023', 'Manf - 2022', 'HP-90', 'Single', '17 Lakhs', 0x75706c6f6164732f363638373538386163393964655f63697479322e6a7067),
('Mahindra XUV 700', 'Reg - 2024', 'Manf - 2024', 'DL-01', 'Second', '27 Lakhs', 0x75706c6f6164732f363638373538623661663863375f63697479332e6a7067),
('Tata Harrier ', 'Reg - 2022', 'Manf - 2022', 'PB-10', 'Single', '35 Lakhs', 0x75706c6f6164732f363638373538663832383765335f6369747920342e6a7067),
('Hyundai Creta', 'Reg - 2023', 'Manf - 2022', 'HP-01', 'First', '19.5 Lakhs', 0x75706c6f6164732f363638373539383733396665665f6369747920352e6a7067),
(' Fortuner Legender', 'Reg - 2022', 'Manf - 2022', 'CH-01', 'Brand new ', '55.5 Lakhs', 0x75706c6f6164732f363638373539666565613863335f6369747920362e676966);

-- --------------------------------------------------------

--
-- Table structure for table `post_elec`
--

CREATE TABLE `post_elec` (
  `variant` varchar(100) NOT NULL,
  `reg_year` varchar(100) NOT NULL,
  `manf_year` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_elec`
--

INSERT INTO `post_elec` (`variant`, `reg_year`, `manf_year`, `reg_no`, `owner`, `price`, `image`) VALUES
('Audi E-Tron', 'Reg - 2022', 'Manuf - 2021', 'HR-26', 'First', '1.5cr', 0x75706c6f6164732f363638373531346233343635645f656c65312e6a706567),
('Jaguar I-PACE', '2023', '2022', 'Reg - 2023', 'Manf -2022', '1.1cr', 0x75706c6f6164732f363638373532323030633939305f656c65322e6a706567),
('Mercedes-Benz EQC', 'Reg -2024', 'Manf - 2023', 'DL-01', 'Second', '2.5cr', 0x75706c6f6164732f363638373532393462336336625f656c6563332e6a706567),
('BMW IX', 'Reg - 2024', 'Manf - 2024', 'CH-01', 'Single', '1.4cr', 0x75706c6f6164732f363638373532646336656635355f656c6563342e6a706567),
('Porsche Taycan', 'Reg - 2024', ' Man - 2023', 'UP 05', 'Single', '1.7cr', 0x75706c6f6164732f363638373533336539383337325f656c6563352e6a706567),
(' Tesla Model 3', ' Reg - 2022', ' Man - 2021', 'HP-90', 'Second', '1.5cr', 0x75706c6f6164732f363638373534356232396336385f656c65362e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `post_sedan`
--

CREATE TABLE `post_sedan` (
  `variant` varchar(100) NOT NULL,
  `reg_year` varchar(100) NOT NULL,
  `manf_year` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_sedan`
--

INSERT INTO `post_sedan` (`variant`, `reg_year`, `manf_year`, `reg_no`, `owner`, `price`, `image`) VALUES
('Rolls-Royce Phantom', '2025', '2016', 'HR-11', 'Second', '5.5cr', 0x75706c6f6164732f363638373463626265633639365f736564616e312e6a706567),
(' Bentley Flying Spur', '2023', '2022', 'PCL', 'Single', '6.5cr', 0x75706c6f6164732f363638373464353531356332615f736564616e332e6a706567),
('Mercedes-Benz AMG S 63 E', '2020', '2019', 'AS 09', 'Third', '3.5cr', 0x75706c6f6164732f363638373464613937313863315f736564616e322e6a706567),
('Lexus ES ', '2021', '2020', 'KL 99', 'Second', '1.4 cr', 0x75706c6f6164732f363638613531306362353535325f736564616e342e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `post_suv`
--

CREATE TABLE `post_suv` (
  `variant` varchar(100) NOT NULL,
  `reg_year` varchar(100) NOT NULL,
  `manf_year` varchar(100) NOT NULL,
  `reg_no` varchar(110) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_suv`
--

INSERT INTO `post_suv` (`variant`, `reg_year`, `manf_year`, `reg_no`, `owner`, `price`, `image`) VALUES
('Rolls-Royce Cullinan', '2015', '2014', 'OD-01', 'Third', '4.5', 0x75706c6f6164732f363638366332313730366236375f737576312e6a706567),
('Mercedes-G-Class ', '2022', '2022', 'UK-01', 'Second', '2.5cr', 0x75706c6f6164732f363638366332623563323133345f737576322e6a706567),
('Lamborghini Urus', '2020', '2019', 'DL-01', 'Second', '4.7cr', 0x75706c6f6164732f363638366333353635613164355f737576332e6a706567),
('BMW X7 40i M Sports', '2024', '2023', 'CH-01', 'Single', '1.3cr', 0x75706c6f6164732f363638366333623063656237645f737576342e6a706567),
('Bentley Bentayga', '2024', '2024', '22 BH', 'Single', '3.7 cr', 0x75706c6f6164732f363638366333656335343135375f737576352e6a706567),
(' Audi Q7', '2022', '2021', 'KL-11', 'Second', '1.5cr', 0x75706c6f6164732f363638366334323166336133625f73757620362e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `post_tbike`
--

CREATE TABLE `post_tbike` (
  `variant` varchar(100) NOT NULL,
  `reg_year` varchar(100) NOT NULL,
  `manf_year` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_tbike`
--

INSERT INTO `post_tbike` (`variant`, `reg_year`, `manf_year`, `reg_no`, `owner`, `price`, `image`) VALUES
('BMW R 1250 GS', ' Reg-2020', 'Manf - 2020', 'JH-01', 'Single', '29 Lakhs', 0x75706c6f6164732f363638373836336561393130335f626d77313235302e6a7067),
('Himalayan 450', ' Reg- 2024', 'Manf - 2024', 'AS-01', 'Second ', '9.5 Lakhs', 0x75706c6f6164732f363638373836613765653930365f61642e6a7067),
('Multistrada 1260', 'Reg-2023', 'Manf - 2023', 'PB-01', 'First', '30 Lakhs', 0x75706c6f6164732f363638373836656134663266375f64632e6a7067),
('Harley-Davidson UK', 'Reg-2019', 'Manf - 2019', 'MH-90', 'Second', '39 Lakhs', 0x75706c6f6164732f363638373838303264386666625f68642e6a7067),
(' Hero Xpulse 200 4V', 'Reg-2019', 'Manf - 2019', 'MH-01', 'Third', '1.5 Lakhs', 0x75706c6f6164732f363638373865643236373133645f66696c652e6a7067),
('ktm 890 adventure', 'Reg-2018', 'Manf - 2018', 'PB-91', 'Second', '11 Lakhs', 0x75706c6f6164732f363638373866333835623337625f6b746d2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `Pass`) VALUES
('', '', ''),
('t.a.n.u._5.7.', 'puishh9988@gmail.com', '1234'),
('t.a.n.u._5.7.', 'puishh9988@gmail.com', '12345'),
('pkpkpk', 'a100ka@yahoo.com', '12345'),
('prashant kumar', 'a109ka@yahoo.com', '0099'),
('t.a.n.u', 'a108ka@yahoo.com', '123'),
('pk', 'puishh9998@gmail.com', '1234'),
('prashant', 'puishh9988@gmail.com', ''),
('prashant', 'puishh9988@gmail.com', ' 998889282\' '),
('prashant', 'a100ka@yahoo.com', ' 998889282\' '),
('pkpkpk', 'puishh9988@gmail.com', ' 998889282\' '),
('prashant', 'a100ka@yahoo.com', ' 998889282\' '),
('prashant', 'puishh9900@gmail.com', '123456'),
('ashok ', 'a1000ka@yahoo.com', '9988'),
('S', 'ghosh667@gmial.com', '1234'),
('prashant', 'puishh9909@gmail.com', '1234'),
('prashant kk', 'a1029ka@yahoo.com', '1234'),
('pyuish', 'pyuish9988@gmail.com', '12345'),
('rohit', 'rohit@gmail.com', '0099'),
('Pyuish', 'a990@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
