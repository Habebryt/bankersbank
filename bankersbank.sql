-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 16, 2024 at 04:40 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankersbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `AccountID` int(11) NOT NULL,
  `ClientID` int(11) DEFAULT NULL,
  `AccountType` varchar(50) NOT NULL,
  `Balance` decimal(15,2) NOT NULL,
  `Currency` varchar(3) NOT NULL,
  `IBAN` varchar(34) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `AccountManager`
--

CREATE TABLE `AccountManager` (
  `AccountManagerID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreatedByAdminID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `AdminID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `ClientID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AccountManagerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Country`
--

CREATE TABLE `Country` (
  `CountryID` int(11) NOT NULL,
  `CountryName` varchar(100) NOT NULL,
  `CountryCode` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `CreditCard`
--

CREATE TABLE `CreditCard` (
  `CardID` int(11) NOT NULL,
  `ClientID` int(11) DEFAULT NULL,
  `CardNumber` varchar(16) NOT NULL,
  `ExpirationDate` date NOT NULL,
  `CVV` varchar(3) NOT NULL,
  `CreditLimit` decimal(15,2) NOT NULL,
  `Balance` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `CreditCardTransaction`
--

CREATE TABLE `CreditCardTransaction` (
  `CreditCardTransactionID` int(11) NOT NULL,
  `CardID` int(11) DEFAULT NULL,
  `Amount` decimal(15,2) NOT NULL,
  `MerchantName` varchar(100) NOT NULL,
  `TransactionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Loan`
--

CREATE TABLE `Loan` (
  `LoanID` int(11) NOT NULL,
  `ClientID` int(11) DEFAULT NULL,
  `LoanType` varchar(50) NOT NULL,
  `Amount` decimal(15,2) NOT NULL,
  `InterestRate` decimal(5,2) NOT NULL,
  `Term` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PSD2Consent`
--

CREATE TABLE `PSD2Consent` (
  `ConsentID` int(11) NOT NULL,
  `ClientID` int(11) DEFAULT NULL,
  `ThirdPartyProviderID` int(11) DEFAULT NULL,
  `ConsentType` varchar(50) NOT NULL,
  `Scope` varchar(255) NOT NULL,
  `ExpirationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` varchar(20) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `State`
--

CREATE TABLE `State` (
  `StateID` int(11) NOT NULL,
  `StateName` varchar(100) NOT NULL,
  `StateCode` varchar(10) NOT NULL,
  `CountryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ThirdPartyProvider`
--

CREATE TABLE `ThirdPartyProvider` (
  `ThirdPartyProviderID` int(11) NOT NULL,
  `ProviderName` varchar(100) NOT NULL,
  `APIKey` varchar(255) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Transaction`
--

CREATE TABLE `Transaction` (
  `TransactionID` int(11) NOT NULL,
  `FromAccountID` int(11) DEFAULT NULL,
  `ToAccountID` int(11) DEFAULT NULL,
  `Amount` decimal(15,2) NOT NULL,
  `Currency` varchar(3) NOT NULL,
  `TransactionType` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `UserType` enum('Admin','AccountManager','Client') NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CreatedByUserID` int(11) DEFAULT NULL,
  `AccountManagerID` int(11) DEFAULT NULL,
  `ProfileImagePath` varchar(255) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  `StateID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`AccountID`),
  ADD UNIQUE KEY `IBAN` (`IBAN`),
  ADD KEY `ClientID` (`ClientID`);

--
-- Indexes for table `AccountManager`
--
ALTER TABLE `AccountManager`
  ADD PRIMARY KEY (`AccountManagerID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `CreatedByAdminID` (`CreatedByAdminID`);

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`ClientID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `AccountManagerID` (`AccountManagerID`);

--
-- Indexes for table `Country`
--
ALTER TABLE `Country`
  ADD PRIMARY KEY (`CountryID`),
  ADD UNIQUE KEY `CountryCode` (`CountryCode`);

--
-- Indexes for table `CreditCard`
--
ALTER TABLE `CreditCard`
  ADD PRIMARY KEY (`CardID`),
  ADD UNIQUE KEY `CardNumber` (`CardNumber`),
  ADD KEY `creditcard_ibfk_1` (`ClientID`);

--
-- Indexes for table `CreditCardTransaction`
--
ALTER TABLE `CreditCardTransaction`
  ADD PRIMARY KEY (`CreditCardTransactionID`),
  ADD KEY `CardID` (`CardID`);

--
-- Indexes for table `Loan`
--
ALTER TABLE `Loan`
  ADD PRIMARY KEY (`LoanID`),
  ADD KEY `loan_ibfk_1` (`ClientID`);

--
-- Indexes for table `PSD2Consent`
--
ALTER TABLE `PSD2Consent`
  ADD PRIMARY KEY (`ConsentID`),
  ADD KEY `psd2consent_ibfk_1` (`ClientID`);

--
-- Indexes for table `State`
--
ALTER TABLE `State`
  ADD PRIMARY KEY (`StateID`),
  ADD KEY `CountryID` (`CountryID`);

--
-- Indexes for table `ThirdPartyProvider`
--
ALTER TABLE `ThirdPartyProvider`
  ADD PRIMARY KEY (`ThirdPartyProviderID`),
  ADD UNIQUE KEY `APIKey` (`APIKey`);

--
-- Indexes for table `Transaction`
--
ALTER TABLE `Transaction`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `FromAccountID` (`FromAccountID`),
  ADD KEY `ToAccountID` (`ToAccountID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `CreatedByUserID` (`CreatedByUserID`),
  ADD KEY `AccountManagerID` (`AccountManagerID`),
  ADD KEY `CountryID` (`CountryID`),
  ADD KEY `StateID` (`StateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Account`
--
ALTER TABLE `Account`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `AccountManager`
--
ALTER TABLE `AccountManager`
  MODIFY `AccountManagerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `ClientID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CreditCard`
--
ALTER TABLE `CreditCard`
  MODIFY `CardID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CreditCardTransaction`
--
ALTER TABLE `CreditCardTransaction`
  MODIFY `CreditCardTransactionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Loan`
--
ALTER TABLE `Loan`
  MODIFY `LoanID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Transaction`
--
ALTER TABLE `Transaction`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Account`
--
ALTER TABLE `Account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `Client` (`ClientID`);

--
-- Constraints for table `AccountManager`
--
ALTER TABLE `AccountManager`
  ADD CONSTRAINT `accountmanager_ibfk_1` FOREIGN KEY (`CreatedByAdminID`) REFERENCES `Admin` (`AdminID`);

--
-- Constraints for table `Client`
--
ALTER TABLE `Client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`AccountManagerID`) REFERENCES `AccountManager` (`AccountManagerID`);

--
-- Constraints for table `CreditCard`
--
ALTER TABLE `CreditCard`
  ADD CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `User` (`UserID`);

--
-- Constraints for table `CreditCardTransaction`
--
ALTER TABLE `CreditCardTransaction`
  ADD CONSTRAINT `creditcardtransaction_ibfk_1` FOREIGN KEY (`CardID`) REFERENCES `CreditCard` (`CardID`);

--
-- Constraints for table `Loan`
--
ALTER TABLE `Loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `User` (`UserID`);

--
-- Constraints for table `PSD2Consent`
--
ALTER TABLE `PSD2Consent`
  ADD CONSTRAINT `psd2consent_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `User` (`UserID`);

--
-- Constraints for table `State`
--
ALTER TABLE `State`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`CountryID`) REFERENCES `Country` (`CountryID`);

--
-- Constraints for table `Transaction`
--
ALTER TABLE `Transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`FromAccountID`) REFERENCES `Account` (`AccountID`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`ToAccountID`) REFERENCES `Account` (`AccountID`);

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`CreatedByUserID`) REFERENCES `User` (`UserID`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`AccountManagerID`) REFERENCES `User` (`UserID`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`CountryID`) REFERENCES `Country` (`CountryID`),
  ADD CONSTRAINT `user_ibfk_4` FOREIGN KEY (`StateID`) REFERENCES `State` (`StateID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
