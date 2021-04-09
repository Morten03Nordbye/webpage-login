SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+02:00";

CREATE TABLE IF NOT EXISTS `UserAccounts` (
  `UserAccountid` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  PRIMARY KEY (`UserAccountid`),
  UNIQUE KEY `usernameuk` (`username`)
);

CREATE TABLE IF NOT EXISTS `Roles` (
  `RoleID` int(255) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255),
  PRIMARY KEY (`RoleID`)
);

CREATE TABLE IF NOT EXISTS `UserRoles` (
  `RoleID` int(255) NOT NULL AUTO_INCREMENT,
  `UserAccountid` int(255) NOT NULL,
  FOREIGN KEY (`UserAccountid`) REFERENCES `UserAccounts` (`UserAccountid`),
  FOREIGN KEY (`RoleID`) REFERENCES `Roles`(`RoleID`)
);

