-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 03:29 PM
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
-- Database: `high_loan_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `collateral`
--

CREATE TABLE `collateral` (
  `CollateralID` int(255) NOT NULL,
  `LoanID` int(255) NOT NULL,
  `Value` int(255) NOT NULL,
  `collateral_taken_type` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(255) NOT NULL,
  `LoanID` int(255) NOT NULL,
  `Loan_OfficerID` int(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lender`
--

CREATE TABLE `lender` (
  `Loan_officerID` int(255) NOT NULL,
  `LoanID` int(255) NOT NULL,
  `Loan_OfficerName` varchar(255) NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date_assign_loan` date NOT NULL,
  `Description_loan` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loanee`
--

CREATE TABLE `loanee` (
  `LoanID` int(255) NOT NULL,
  `ApplicantID` int(255) NOT NULL,
  `LoanAmount` decimal(20,2) NOT NULL,
  `InterestAmount_rate` decimal(20,2) NOT NULL,
  `LoanDate` datetime NOT NULL DEFAULT current_timestamp(),
  `Loan_status` enum('ACTIVE','NOT ACTIVE') NOT NULL DEFAULT 'ACTIVE',
  `Description` text DEFAULT NULL,
  `term` text NOT NULL,
  `disbursement_date` date NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_applicant`
--

CREATE TABLE `loan_applicant` (
  `ApplicantID` int(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `Physical_address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house_number` int(255) NOT NULL,
  `ownership` varchar(255) NOT NULL,
  `Profile` text NOT NULL,
  `National_Identification` int(200) NOT NULL,
  `credit_score` decimal(20,2) NOT NULL,
  `sponsor_name` varchar(255) NOT NULL,
  `contact_sponsor` int(10) NOT NULL,
  `profile_sponsor` text NOT NULL,
  `document_sponsor` text NOT NULL,
  `Amount_of_loan` int(255) NOT NULL,
  `Loan_Purpose` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `Date_registered` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_applicant`
--

INSERT INTO `loan_applicant` (`ApplicantID`, `Firstname`, `Lastname`, `Phone_number`, `Physical_address`, `Email`, `date_of_birth`, `country`, `city`, `street`, `house_number`, `ownership`, `Profile`, `National_Identification`, `credit_score`, `sponsor_name`, `contact_sponsor`, `profile_sponsor`, `document_sponsor`, `Amount_of_loan`, `Loan_Purpose`, `password`, `confirm_password`, `Date_registered`) VALUES
(7, 'BRIAN', 'PETER', 1045466666, '232 ARUSHA', 'z@gmail.com', '2006-01-01', 'TANZANIA', 'ARUSHA', 'KIJENGE ', 33, 'FURNITURE', 'coverp.docx', 2147483647, 888888888888.00, 'JOHN', 756834212, 'FB_IMG_16234452880419597.jpg', 'Cyber - group work21...docx', 1000000000, 'education', 'c8837b23ff8aaa8a2dde915473ce0991', 'c8837b23ff8aaa8a2dde915473ce0991', '2024-09-20');

--
-- Triggers `loan_applicant`
--
DELIMITER $$
CREATE TRIGGER `insertBorrowerData` BEFORE INSERT ON `loan_applicant` FOR EACH ROW BEGIN INSERT INTO loan_applicant(Firstname,Phone_number,Email,password,confirm_password)
VALUES(FirstName , PhoneNumber, Email , password , confirmPassword);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` int(255) NOT NULL,
  `LoanID` int(255) NOT NULL,
  `message` text NOT NULL,
  `sent_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(255) NOT NULL,
  `LoanID` int(255) NOT NULL,
  `Amount_borrow` decimal(30,2) NOT NULL,
  `Amount_payed` decimal(30,2) NOT NULL,
  `PaymentDate` date NOT NULL,
  `Payment_method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_loans_borrow`
--

CREATE TABLE `type_loans_borrow` (
  `LoanTypeID` int(255) NOT NULL,
  `LoanID` int(255) NOT NULL,
  `TypeName_loan` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collateral`
--
ALTER TABLE `collateral`
  ADD PRIMARY KEY (`CollateralID`),
  ADD KEY `LoanID` (`LoanID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `LoanID` (`LoanID`),
  ADD KEY `Loan_OfficerID` (`Loan_OfficerID`);

--
-- Indexes for table `lender`
--
ALTER TABLE `lender`
  ADD PRIMARY KEY (`Loan_officerID`),
  ADD KEY `LoanID` (`LoanID`);

--
-- Indexes for table `loanee`
--
ALTER TABLE `loanee`
  ADD PRIMARY KEY (`LoanID`),
  ADD KEY `CustomerID` (`ApplicantID`);

--
-- Indexes for table `loan_applicant`
--
ALTER TABLE `loan_applicant`
  ADD PRIMARY KEY (`ApplicantID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationID`),
  ADD KEY `LoanID` (`LoanID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `LoanID` (`LoanID`);

--
-- Indexes for table `type_loans_borrow`
--
ALTER TABLE `type_loans_borrow`
  ADD PRIMARY KEY (`LoanTypeID`),
  ADD KEY `LoanID` (`LoanID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collateral`
--
ALTER TABLE `collateral`
  MODIFY `CollateralID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lender`
--
ALTER TABLE `lender`
  MODIFY `Loan_officerID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loanee`
--
ALTER TABLE `loanee`
  MODIFY `LoanID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_applicant`
--
ALTER TABLE `loan_applicant`
  MODIFY `ApplicantID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_loans_borrow`
--
ALTER TABLE `type_loans_borrow`
  MODIFY `LoanTypeID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collateral`
--
ALTER TABLE `collateral`
  ADD CONSTRAINT `collateral_ibfk_1` FOREIGN KEY (`LoanID`) REFERENCES `loanee` (`LoanID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`LoanID`) REFERENCES `loanee` (`LoanID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`Loan_OfficerID`) REFERENCES `lender` (`Loan_officerID`);

--
-- Constraints for table `lender`
--
ALTER TABLE `lender`
  ADD CONSTRAINT `lender_ibfk_1` FOREIGN KEY (`LoanID`) REFERENCES `loanee` (`LoanID`);

--
-- Constraints for table `loanee`
--
ALTER TABLE `loanee`
  ADD CONSTRAINT `loanee_ibfk_1` FOREIGN KEY (`ApplicantID`) REFERENCES `loan_applicant` (`ApplicantID`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`LoanID`) REFERENCES `loanee` (`LoanID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`LoanID`) REFERENCES `loanee` (`LoanID`);

--
-- Constraints for table `type_loans_borrow`
--
ALTER TABLE `type_loans_borrow`
  ADD CONSTRAINT `type_loans_borrow_ibfk_1` FOREIGN KEY (`LoanID`) REFERENCES `loanee` (`LoanID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
