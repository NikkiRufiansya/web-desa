-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2021 at 07:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `foto`) VALUES
(4, 'room', 'room.jpg'),
(5, 'room', 'room.jpg'),
(6, 'room', 'room.jpg'),
(7, 'room', 'room.jpg'),
(8, 'room', 'room.jpg'),
(9, 'room', 'room.jpg'),
(10, 'room', 'room.jpg'),
(11, 'room', 'room.jpg'),
(12, 'room', 'room.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kabar_desa`
--

CREATE TABLE `kabar_desa` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi_singkat` text NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL DEFAULT 'dafault.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabar_desa`
--

INSERT INTO `kabar_desa` (`id`, `judul`, `deskripsi_singkat`, `isi`, `foto`) VALUES
(14, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(15, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(16, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(17, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(18, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(19, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(20, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(21, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(22, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(23, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg'),
(24, 'Lorem ipsum dolor sit amet, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim at turpis non gravida. Nunc venenatis mi non iaculis vulputate. Maecenas ac orci quis justo elementum interdum non in metus. In euismod justo a iaculis interdum. Donec ac venenatis dolor. Quisque nunc nisl, faucibus interdum lectus ac, porttitor placerat risus. Cras faucibus velit ac tortor faucibus tristique. Aliquam vel odio nulla. Sed sodales tincidunt magna, sit amet ultrices nisi vehicula a. Donec in tincidunt erat. Nulla a luctus orci, a vulputate diam. Ut egestas nulla ac dictum ultrices. Integer feugiat quis ipsum id porttitor. Maecenas tristique mauris et nibh mattis eleifend.</p><p>Cras hendrerit ultricies feugiat. Quisque id cursus lectus. Etiam placerat sed sapien sit amet auctor. Aenean auctor dolor malesuada nisl egestas, vel tincidunt erat rutrum. Integer quis odio vitae sapien maximus sagittis ut in enim. Integer eleifend accumsan lorem sed vulputate. Duis vestibulum massa eu aliquet placerat. Duis bibendum nisi enim, in bibendum lectus rutrum eu. Aliquam mattis dui id arcu hendrerit, vel tincidunt purus placerat. Morbi vel pellentesque lectus. Duis placerat volutpat faucibus. Nullam interdum, risus sed cursus varius, neque lacus volutpat elit, id tincidunt massa diam ac nisi. Proin vel nibh varius, luctus mauris vel, varius nulla. Maecenas consequat mi eget diam fringilla tempus.</p><p>Etiam congue neque eu suscipit condimentum. Donec semper lectus eget diam pretium, varius viverra urna hendrerit. Duis faucibus nulla ut lacus viverra scelerisque. Curabitur tincidunt, sapien in scelerisque elementum, ex tellus placerat sapien, sit amet congue nisl nisl quis ipsum. Nunc nibh lectus, vestibulum in mauris eu, laoreet finibus augue. Curabitur non luctus libero. Vivamus lectus tellus, aliquam vitae mattis nec, finibus eu est. Phasellus malesuada in ex eu fermentum. Praesent quis nulla lorem. Donec non viverra dolor, nec cursus nulla. Proin sem ante, pretium dignissim neque eu, malesuada pellentesque dolor. Integer rutrum sodales est, ac molestie tortor. Cras at porttitor ante. Etiam bibendum turpis volutpat nibh vulputate, efficitur scelerisque erat rutrum.</p><p>Aliquam id pellentesque lectus. Sed vitae hendrerit augue. Ut eleifend erat ex, ac malesuada eros lobortis at. Proin vestibulum arcu arcu, non eleifend magna hendrerit ut. Praesent sed augue a velit lobortis congue in a nibh. Maecenas eu diam mi. Integer id dui sed erat suscipit luctus. Donec elementum, ex ut eleifend bibendum, purus neque sollicitudin sapien, eget condimentum lacus orci quis risus. Nulla lacus tellus, dignissim nec mauris in, dignissim fermentum leo. Sed lorem eros, bibendum et tortor eget, bibendum feugiat nulla. Nullam dui turpis, laoreet in laoreet vitae, convallis eget ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae molestie eros, ac tincidunt dui.</p><p>Etiam diam enim, faucibus id arcu nec, pellentesque vehicula magna. Nunc mollis enim at magna volutpat, nec cursus augue gravida. Mauris bibendum placerat bibendum. Cras eu euismod orci. Nullam et varius elit. Proin congue, tellus a posuere mattis, erat mauris auctor risus, at volutpat magna erat quis purus. Ut eget vestibulum nisl, at accumsan urna. Curabitur euismod pulvinar vestibulum. Fusce dignissim, erat ac tincidunt vestibulum, lacus leo tempus odio, et placerat ipsum mi a ex. Nulla non libero tristique eros mattis vehicula.</p><p>&nbsp;</p>', 'room.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `usia` int(11) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `gender`, `usia`, `pendidikan`, `pekerjaan`) VALUES
(1, '7404100106690001', 'La Sarimajo', 'Pria', 50, 'SD', 'Nelayan/Perikanan'),
(2, '7404100107740078', 'La Jaeni', 'Pria', 45, 'SMA', 'Nelayan/Perikanan'),
(3, '7404100811070001', 'Alamsyah Rahmaeni', 'Pria', 12, 'SD', 'Pelajar/Mahasiswa'),
(4, '7404101204940001', 'Sarwan', 'Pria', 25, 'SMA', 'Nelayan/Perikanan'),
(5, '7404101207030001', 'La Karama', 'Pria', 16, 'Tidak Tamat SD', 'Belum/Tidak bekerja'),
(6, '7404101708020002', 'Amal Hidayat Masni', 'Pria', 17, 'SMP', 'Pelajar/Mahasiswa'),
(7, '7404101803010001', 'Mardin La Diy', 'Pria', 18, 'SMP', 'Pelajar/Mahasiswa'),
(8, '7404102402950002', 'La Aliwara', 'Pria', 24, 'Tidak Tamat SD', 'Nelayan/Perikanan'),
(9, '7404103010750001', 'La Diy', 'Pria', 44, 'Tidak Tamat SD', 'Nelayan/Perikanan'),
(10, '7404104106720001', 'Wa Ode Hajiani', 'Wanita', 47, 'S1', 'Mengurus Rumah Tangga'),
(11, '7404104107740094', 'Rahama', 'Wanita', 45, 'S1', 'Mengurus Rumah Tangga'),
(12, '7404105007010001', 'Wa Lisa', 'Wanita', 18, 'SMP', 'Pelajar/Mahasiswa'),
(13, '7404105405000005', 'Venti Nurmaeni', 'Wanita', 19, 'SMP', 'Pelajar/Mahasiswa'),
(14, '7404106502990002', 'Wa Rana', 'Wanita', 20, 'SMA', 'Pelajar/Mahasiswa'),
(15, '7404106502990003', 'Wa Rani', 'Wanita', 20, 'SMA', 'Pelajar/Mahasiswa'),
(16, '7404106611760001', 'Wa Siti Rukiah', 'Wanita', 43, 'S3', 'Dosen'),
(17, '7404106803950001', 'Sunarti La Diy', 'Wanita', 24, 'S2', 'Pelajar/Mahasiswa'),
(18, '7415026504130001', 'Sunarlia La Diy', 'Wanita', 6, 'Belum Sekolah', 'Belum/Tidak Bekerja'),
(19, '091278472983422', 'Joko', 'Pria', 72, 'Tidak Tamat SD', 'Tidak Bekerja'),
(20, '3943290423098423', 'Suminah', 'Wanita', 68, 'SD', 'Tidak Bekerja'),
(21, '7404106502990002', 'Wa Rana irma', 'Wanita', 20, 'SMA', 'Pelajar/Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Dion Anggara', 'Kepala Desa', 'download.jpeg'),
(3, 'Dani Andrianto', 'Wakil Kepala Desa', 'images.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_desa`
--

CREATE TABLE `tentang_desa` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang_desa`
--

INSERT INTO `tentang_desa` (`id`, `isi`) VALUES
(1, '<p><i><strong>Lorem Ipsum</strong></i></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur viverra porttitor magna, eu ultricies massa pretium ac. Nulla imperdiet metus sapien, sit amet tincidunt metus dictum quis. Donec metus mi, rhoncus vitae ante sed, faucibus suscipit leo. Aenean in velit ligula. Nulla facilisi. Maecenas elementum arcu velit, feugiat efficitur dui vehicula et. Vestibulum bibendum tempor massa, nec luctus erat consequat eu. Vestibulum a erat tempus, varius diam vitae, semper orci. Donec ullamcorper tempor nisl, sed condimentum lorem malesuada condimentum. Fusce lacinia odio sed arcu euismod, et accumsan justo dictum.</p><p>Morbi blandit mi at tortor bibendum placerat nec eget diam. Sed in laoreet elit. Ut est nisl, feugiat eu sagittis in, tempor sit amet neque. In et neque vitae mauris euismod pharetra. Curabitur fringilla posuere faucibus. In sollicitudin, leo in malesuada rutrum, lectus diam malesuada massa, et ultricies nisl tortor quis arcu. Nunc nec tincidunt nulla. Maecenas sit amet rutrum sapien. Sed vitae metus eu nibh porttitor porta quis non sem. Nulla ex elit, volutpat sit amet magna quis, tempus rutrum leo. Aenean eu orci ac enim convallis tincidunt.</p><p>Aenean vel tortor viverra, ultrices leo et, pharetra tortor. Aliquam bibendum iaculis diam id viverra. Morbi luctus nisi metus, a varius urna cursus et. Etiam diam dui, vehicula vel laoreet quis, blandit ut odio. Sed fringilla finibus ultricies. Etiam pharetra ante vel libero sagittis consectetur. Sed dignissim mi quis nulla accumsan tincidunt quis et turpis. Duis id augue et metus laoreet sollicitudin.</p><p>Nunc eget imperdiet purus, vel hendrerit diam. Nulla vitae ex at erat eleifend hendrerit. Phasellus a risus ultrices, vulputate justo ut, rutrum mi. Phasellus feugiat pharetra justo ut aliquet. In mollis arcu eu erat laoreet fringilla. Pellentesque rhoncus mi egestas mauris varius imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum scelerisque, sem vel varius blandit, urna nulla tincidunt arcu, quis aliquam sem diam ut mauris. Praesent varius augue sit amet sollicitudin pharetra. Morbi efficitur sit amet eros nec rutrum. Duis rhoncus tellus sit amet risus commodo, vitae porttitor dolor iaculis. Cras et quam luctus ante pellentesque ullamcorper.</p><p>Ut sed tortor vitae ipsum rutrum placerat. Fusce non ipsum pretium, luctus quam nec, tincidunt arcu. Duis tincidunt mauris et elit efficitur, sed viverra felis ornare. Sed vel quam in nibh aliquet vehicula. Nulla interdum lectus consectetur nunc vehicula lobortis. Proin posuere ante at porta blandit. Maecenas commodo lectus quis justo mollis dictum. Curabitur maximus vitae nunc vitae vulputate. Nullam commodo sagittis mauris sit amet pulvinar. Praesent dolor nisi, tempor ut mattis in, tempus id mauris. Sed mollis malesuada erat, non tincidunt felis commodo eu. Morbi elit magna, vulputate eget facilisis vel, congue et enim. Pellentesque vehicula erat vitae scelerisque mollis. Fusce sed cursus lectus, a tincidunt enim. Mauris dictum leo quis massa lacinia euismod. Suspendisse nibh nunc, rutrum et nibh vitae, imperdiet auctor arcu.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabar_desa`
--
ALTER TABLE `kabar_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_desa`
--
ALTER TABLE `tentang_desa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kabar_desa`
--
ALTER TABLE `kabar_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tentang_desa`
--
ALTER TABLE `tentang_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
