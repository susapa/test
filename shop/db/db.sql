
CREATE TABLE `cart` (
  `OrderID` int(4) NOT NULL,
  `ProductID` int(4) NOT NULL,
  `Qty` int(2) NOT NULL,
  `SID` varchar(32) NOT NULL
) ENGINE=MyISAM;


CREATE TABLE `cusorder` (
  `OrderID` int(4) NOT NULL auto_increment,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `OrderDate` datetime NOT NULL,
  PRIMARY KEY  (`OrderID`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;


CREATE TABLE `product` (
  `ProductID` int(4) NOT NULL auto_increment,
  `ProductName` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Picture` varchar(100) NOT NULL,
  PRIMARY KEY  (`ProductID`)
) ENGINE=MyISAM  AUTO_INCREMENT=5 ;



INSERT INTO `product` VALUES (1, 'Product 1', 100, 'toy1.gif');
INSERT INTO `product` VALUES (2, 'Product 2', 200, 'toy2.gif');
INSERT INTO `product` VALUES (3, 'Product 3', 300, 'toy3.gif');
INSERT INTO `product` VALUES (4, 'Product 4', 400, 'toy4.gif');
