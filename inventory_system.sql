-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 06:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `varient` varchar(255) DEFAULT NULL,
  `unit_value` varchar(255) DEFAULT NULL,
  `units_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `net_price` varchar(255) DEFAULT NULL,
  `production_cost` varchar(255) DEFAULT NULL,
  `markup_percent` varchar(255) DEFAULT NULL,
  `markup_price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `sales_price` varchar(255) DEFAULT NULL,
  `reorder_level` varchar(255) DEFAULT NULL,
  `stock_quantity` varchar(255) DEFAULT NULL,
  `expired_date` varchar(255) DEFAULT NULL,
  `encoded_by` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_product` (`product_id`, `item_code`, `full_name`, `varient`, `unit_value`, `units_id`, `category_id`, `net_price`, `production_cost`, `markup_percent`, `markup_price`, `discount`, `discount_price`, `sales_price`, `reorder_level`, `stock_quantity`, `expired_date`, `encoded_by`, `date_created`) VALUES
(2, '000421', 'john doe', 'var', 'unit', 2, 1, '399', '27', '2%', '600', '15', '30', '700', '4', '70', '2022-10-27', 'nel toledo', '2022-10-27'),
(3, '000645', 'nario luis', 'var 2', 'uv 2', 2, 2, '8000', '290', '1%', '700', '3', '35', '50', '45', '6', '2022-10-31', 'nel toledo', '2022-10-28'),
(4, '000456', 'john doe', 'vr 3', 'uv 3', 1, 1, '499', '80', '5%', '80', '4', '47', '100', '45', '8', '2022-10-26', 'nel toledo', '2022-10-28');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
