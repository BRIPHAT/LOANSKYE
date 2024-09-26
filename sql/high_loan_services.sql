-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 03:14 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_addApplicantDetails1` (IN `_Lastname` VARCHAR(255), `_Physcal_address` VARCHAR(255), `_date_of_birth` DATE, `_country` VARCHAR(255), `_city` VARCHAR(255), `_street` VARCHAR(255), `_house_number` INT(255), `_ownership` VARCHAR(255), `_ProfileImage` TEXT, `_National_Identification` INT(200), `_credit_score` DECIMAL(20,2), `_sponsor_name` VARCHAR(255), `_contact_sponsor` INT(10), `_profile_sponsorImage` TEXT, `_document_sponsor` TEXT, `_Amount_of_loan` INT(255), `_Loan_Purpose` VARCHAR(255))   BEGIN
		Declare _error_text text;
    DECLARE _cont_status int default 0;
    declare _applicantId int default  0;
	/*check if data already exists */
    if(select count(ApplicantID) from loan_applicant where Phone_number = _phone_number)
    then
		set _error_text = 'data not inserted';
        set _cont_status = 1;
    end if;
    /* if he/she is not in applicant then insert*/
    if _cont_status = 0
    then
		insert into loan_applicant (Lastname,Physical_address,date_of_birth,country,city,street,house_number,ownership,Profile,National_Identification,
            credit_score,sponsor_name,contact_sponsor,profile_sponsor,document_sponsor,Amount_of_loan,Loan_Purpose)
        values(_Lastname, _Physical_address,_date_of_birth,_country,_city,_street,_house_number,_ownership,_ProfileImage,_National_Identification,
            _credit_score,_sponsor_name,_contact_sponsor,_profile_sponsorImage,_document_sponsor,_Amount_of_loan,
            _Loan_Purpose);
    end if;
    if _cont_status = 1
    then
		SELECT ApplicantID into _applicantId FROM loan_applicant WHERE Phone_number = _phone_number;
		UPDATE loan_applicant 
SET 
   Lastname = _Lastname,
    Physical_address = _Physical_address,
    date_of_birth = _date_of_birth,
    country = _country,
    city = _city,
    street = _street,
    house_number = _house_number,
    ownership = _ownership,
    Profile = _ProfileImage,
    National_Identification = _National_Identification,
    credit_score = _credit_score,
    sponsor_name = _sponsor_name,
    contact_sponsor = _contact_sponsor,
    profile_sponsor = _profile_sponsorImage,
    document_sponsor = _document_sponsor,
    Amount_of_loan = _Amount_of_loan,
    Loan_Purpose = _Loan_Purpose
WHERE
    ApplicantID = _applicantId;
    end if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_addLoanApplicant` (IN `_Firstname` VARCHAR(255), IN `_Phone_number` VARCHAR(50), IN `_Email` VARCHAR(255), IN `_password` VARCHAR(100), IN `_confirm_password` VARCHAR(100))   BEGIN
	Declare _error_text text;
    DECLARE _cont_status int default 0;
    declare _applicantId int default  0;
	/*check if data already exists */
    if(select count(ApplicantID) from loan_applicant where Phone_number = _phone_number)
    then
		set _error_text = 'Phone number or Email already exists';
        set _cont_status = 1;
    end if;
    /* if he/she is not in applicant then insert*/
    if _cont_status = 0
    then
		insert into loan_applicant (Firstname, 
        /*Lastname,*/ Phone_number,/*Physical_address,*/ Email,/*date_of_birth,country,city,street,house_number,ownership,Profile,National_Identification,
            credit_score,sponsor_name,contact_sponsor,profile_sponsor,document_sponsor,Amount_of_loan,
            Loan_Purpose,*/ password,confirm_password)
        values(_Firstname, /*_Lastname,*/ _Phone_number,/* _Physical_address,*/_Email,/*_date_of_birth,_country,_city,_street,_house_number,_ownership,_ProfileImage,_National_Identification,
            _credit_score,_sponsor_name,_contact_sponsor,_profile_sponsorImage,_document_sponsor,_Amount_of_loan,
            _Loan_Purpose,*/_password,_confirm_password);
    end if;
    if _cont_status = 1
    then
		SELECT ApplicantID into _applicantId FROM loan_applicant WHERE Phone_number = _phone_number;
		UPDATE loan_applicant 
SET 
    Firstname = _Firstname,
   /* Lastname = _Lastname,*/
    Phone_number = _Phone_number,
   /* Physical_address = _Physical_address,*/
    Email = _Email,
    /*date_of_birth = _date_of_birth,
    country = _country,
    city = _city,
    street = _street,
    house_number = _house_number,
    ownership = _ownership,
    Profile = _ProfileImage,
    National_Identification = _National_Identification,
    credit_score = _credit_score,
    sponsor_name = _sponsor_name,
    contact_sponsor = contact_sponsor,
    profile_sponsor = _profile_sponsorImage,
    document_sponsor = _document_sponsor,
    Amount_of_loan = _Amount_of_loan,
    Loan_Purpose = _Loan_Purpose,*/
    password = _password,
    confirm_password = _confirm_password
WHERE
    ApplicantID = _applicantId;
    end if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Sp_getloanApplicant` ()   BEGIN
	select * from loan_applicant;
END$$

DELIMITER ;

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
  `Phone_number` varchar(50) NOT NULL,
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
  `contact_sponsor` varchar(50) NOT NULL,
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
(29, 'BRIAN', '', '0766534212', '', 'brian@gmail.com', '0000-00-00', '', '', '', 0, '', '', 0, 0.00, '', '', '', '', 0, '', '1234', '1234', '2024-09-26'),
(30, 'ceki', '', '0634521413', '', 'ceki@gmail.com', '0000-00-00', '', '', '', 0, '', '', 0, 0.00, '', '', '', '', 0, '', 'd93591bdf7860e1e4ee2fca799911215', 'd93591bdf7860e1e4ee2fca799911215', '2024-09-26');

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
  MODIFY `ApplicantID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
