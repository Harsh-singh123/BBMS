-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 07:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahmedabad_bb`
--

CREATE TABLE `ahmedabad_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ahmedabad_bb`
--

INSERT INTO `ahmedabad_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'Adarsh Pathology Laboratory & Blood Centre, Ahmedabad', 'Adarsh Pathology Laboratory & Blood Bank, 1st Floor, Samjuba Hospital, Bapunagar, Ahmedabad, Dist. A', 'adarsh_vbb@yahoo.com', 9825089741),
(2, 'Ahmedabad Raktdan Kendra (Voluntary), Ahmdedabad (Formerly Known As Mahagujarat Blood Bank)', 'MahaGujarat Blood Bank Near.Maninagar Fire Station, 21,22 PARTH EMPIRE, OPP. RAMBAUG POLICE STATION,', 'ahmedabadraktadankendra@gmail.com', 9825306725),
(3, 'Ami Pathology Laboratory & Blood Centre, Ahmedabad', 'Ami Pathology Laboratory & Blood Bank, 214-215, 2nd floor, Baronet Tower, Opp. Sabarmati Police Stat', 'amipathologylabandbloodbank@gmail.com	', 9825698298),
(4, 'Blood Centre Narayana Multispeciality Hospital', 'Ground floor, ex monogram mill compound, opp-rakhial police station , Rakhial, Ahmedabad, Dist. Ahme', 'bloodbank.ahd@narayanahealth.org', 8980017737),
(5, 'Cancer Institute, Ahmedabad', 'Blood Bank, The Gujarat Cancer Research Institute, M.P. Shah Cancer Hospital, Civil Hospital Campus,', 'rima.kusumgar@gcriindia.org', 7922688409),
(6, 'CHC, Sanand BSU', 'Indian Red Cross Society, Ahmedabad, Dist. Ahmedabad', '', 9879048687),
(7, 'Civil Hospital, Ahmedabad', 'Blood Bank, Department of IHBT, C/o.The Civil Hospital, Asarwa, Ahmedabad, Dist. Ahmedabad', 'ihbt_bjmc08@yahoo.com', 9825097675),
(8, 'Cross World Voluntary Blood Centre, Ahmedabad', 'Cross World Blood Bank (Voluntary) and Sankalp Diagnostics 1st Floor, Chandraprabhu Complex, Sardar ', 'sandipcwbb1999@yahoo.com', 9327015909),
(9, 'Divya Jivan Blood Centre, Sanand', 'Divya Jivan Blood Centre managed by Vedanta Foundation, 3rd Floor, Platinum Arcade, Ghoda Gadi Stand', 'divyajivanbloodcenter@gmail.com	', 7096974546),
(10, 'Dr. Jivraj Mehta Smarak Health Foundation, Ahmedabad', 'Blood Bank, Dr. Jivraj Mehta Smarak Health Foundation, Bakeri Medical Research Centre, Ratubhai Adan', 'info@jivrajhealthcare.org', 9428600668);

-- --------------------------------------------------------

--
-- Table structure for table `amreli_bb`
--

CREATE TABLE `amreli_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amreli_bb`
--

INSERT INTO `amreli_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'Indian Red Cross Soceity, Amreli', 'Mahatma Muldas Red Cross Bhavan, Civil Hospital Campus, Amreli, , Amreli, Dist. Amreli', 'redcrossbloodbankamreli@gmail.com', 9426914677),
(2, 'Shantabaa Medical College & General Hospital Blood Centre', 'Above Trauma Center, 1st floor, General Hospital Campus, Amreli, Dist. Amreli', 'shantabaabloodbank@gmail.com', 9978554009),
(3, 'Ved Voluntary Blood Centre, Amreli', 'Ved Voluntary Blood Centre managed by Manav Kalyan Charitable Trust, Man Plaza, 2nd Floor, Sardar Ch', 'vedbloodcenter232460@gmail.com', 9426232032);

-- --------------------------------------------------------

--
-- Table structure for table `bharuch_bb`
--

CREATE TABLE `bharuch_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bharuch_bb`
--

INSERT INTO `bharuch_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'General Hospital, Bharuch', 'Blood Bank, General Hospital, Nagar Seva Sadan, Bharuch, Bharuch, Dist. Bharuch', 'drjyoti79@gmail.com', 9924123715),
(2, 'Indian Red Cross Society Blood Centre, Bharuch', 'Redcross Blood Bank Sevashram Hospital Compound.Panchbatti, Bharuch, Dist. Bharuch', 'redcrossbloodbank_bch@yahoo.in', 9427879628),
(3, 'Kumarpal Gandhi Blood Centre', 'Kumarpal Gandhi Blood Centre, Omkar-1, Building-2, 1st floor, GIDC Ankleshwar, Bharuch., Ankleshwar,', 'kgbbankleshwar@gmail.com', 9925245745),
(4, 'Unity Blood Centre', '1ST FLOOR,EMERALD BUSINESS HUB,OPP BLUECHIP MALL,SEVASHRAM ROAD BHARUCH, Bharuch, Dist. Bharuch', 'unitybloodcentre22@gmail.com	', 9898799753);

-- --------------------------------------------------------

--
-- Table structure for table `gir_somnath_bb`
--

CREATE TABLE `gir_somnath_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gir_somnath_bb`
--

INSERT INTO `gir_somnath_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'Divyajyoti Charitable Voulantary Blood Centre, Una', 'Divyajyoti Charitable Voulantary Blood Bank. Varsing pur road, B/H Jalaramvadi, Una, Dist. Gir Somna', 'vivekraja.dvbb@gmail.com	', 9426713855),
(2, 'Navjeevan Blood Bank & Clinical Laboratory', 'Navjeevan Blood Bank & Clinical Laboratory, Nr.Bus Station, Veraval, Dist. Gir Somnath', 'jitesh_sir@yahoo.co.in', 9428575353);

-- --------------------------------------------------------

--
-- Table structure for table `jamnagar_bb`
--

CREATE TABLE `jamnagar_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jamnagar_bb`
--

INSERT INTO `jamnagar_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'CHC, Lalpur (BSU)', 'Lalpur, Lalpur, Dist. Jamnagar', '', 0),
(2, 'G.G.Hospital, Jamnagar', 'Blood Bank, The M.P.Shah Medical College & Guru Govindsinh Hospital, Jamnagar, Dist. Jamnagar', 'drjvachhani@rediffmail.com', 9824241055),
(3, 'Jamnagar Voluntary Blood Centre, Jamnagar', 'Jamnagar Voluntary Blood Bank, 1st Floor, Shakuntla Apart. Hawai Chowk, , Jamnagar, Dist. Jamnagar', 'jvbb.1249@gmail.com', 9825515701),
(4, 'Saraswati Voluntary Blood Centre, Jamnagar', 'Saraswati Voluntary Blood Bank. Near Shraddha Multi Speciality Hospital, Sumer club road, Jamnagar, ', 'pujanagencies@yahoo.in', 9427394858),
(5, 'CHC, Dhrol (BSU)', 'Dhrol, Dhrol, Dist. Jamnagar	', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `junagadh`
--

CREATE TABLE `junagadh` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `junagadh`
--

INSERT INTO `junagadh` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'Blood Centre, Gmers Medical College & Hospital, Junagadh', 'BLOOD BANK,GMERS MEDICAL COLLEGE & HOSPITAL, NEAR MAJEVADI GATE, JUNAGADH, JUNAGADH, Dist. Junagadh', 'aha.health.junagadh@gmail.com	', 9825847023),
(2, 'CHC, Keshod (BSU)', 'Keshod, Keshod, Dist. Junagadh', '', 0),
(3, 'Life Line Blood Center', 'Akshar Plaza, 4, Second Floor, Zanzarda Cross Road, Junagadh, Gujarat, Junagadh, Dist. Junagadh', 'lifelinejunagadh@gmail.com', 9408108108),
(4, 'Navdeep Blood Centre, Junagadh', 'Navdeep Blood Bank, Sankalp Complex, First Floor, S.T. Road,opp Dr. Chikkhalia Hospital, Junagadh, D', 'drnvpatel9@yahoo.in', 9825366141),
(5, 'Sardar Patel Voulantary Blood Centre, Keshod', 'Sardar patel voulantary Blood Bank, 1st Floor Sheetal Building, Ramnagar station road, station road,', 'nitinjoshi673@gmail.com', 9827577177),
(6, 'Shri Jivanprakash Foundation Voluntary Blood Centre, Junagadh', 'Shri Jivanprakash Foundation Voluntary Blood Bank, Vikram Commercial Complex, Sardar Baug Road, Juna', 'drgkgajera@gmail.com', 9825221122),
(7, 'Talala (BSU)', 'Talala, Talala, Dist. Junagadh', '', 0),
(8, 'Una (BSU)', 'Una, Una, Dist. Junagadh', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `porbandar_bb`
--

CREATE TABLE `porbandar_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `porbandar_bb`
--

INSERT INTO `porbandar_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'Asha Children Hospital, Porbandar', 'Shree Ashwin Bharaniya Charity Foundation, Near New Fountain, Opp. D.S.P. Office, Porbandar (Asha Ch', 'ashvinbharaniyacharitable@yahoo.com', 9924113693),
(2, 'CHC, Kutiyana (BSU)', 'Kutiyana, Kutiyana, Dist. Porbandar	', '', 0),
(3, 'General Hospital, Porbandar', 'Blood Bank, General Hospital, Porbandar, Dist. Porbandar', 'dr.l.a.dhamelia@gmail.com', 9979882775),
(4, 'Shree Ram Blood Centre, Porbandar', 'Shree Ram Blood Bank, Star Compound, M.G. Road, M.G.Road, Porbandar , Dist. Porbandar', 'jaypal.bloodbank@gmail.com	', 9427426099);

-- --------------------------------------------------------

--
-- Table structure for table `rajkot_bb`
--

CREATE TABLE `rajkot_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rajkot_bb`
--

INSERT INTO `rajkot_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'Astha Voluntary Blood Centre, Gondal', 'Astha Voluntary Blood Bank, Old Market Yard, Above ICICI Bank Gondal, Rajkot, Dist. Rajkot', 'asthablood@yahoo.com', 9879531616),
(2, 'Dev Life Blood Centre', 'Shivam Complex, 3rd Floor, Opp. Shreenathji Tower, Junagadh Road, Jetpur, Jetpur, Dist. Rajkot', 'devlifecenter@gmail.com', 8320441494),
(3, 'Gondal (BSU)', 'Gondal,Gondal,Dist. Rajkot', '-', 0),
(4, 'JEEVANDEEP BLOOD CENTER RAJKOT', '201, West Gate Plus, Opp Amruta Hospital, Raiya circle, 150 feet ring road, RAJKOT, Dist. Rajkot', 'Jbc.helpdesk@tscga.in	', 9537210108),
(5, 'Life Blood Centre (Formerly Known As Rajkot Voluntary Blood Centre)', 'Life Blood Centre (Formerly known as Rajkot Voluntary Blood Bank), 24- Vijay plot, Samir Dholakiya M', 'lbc@999life.org', 9979174322),
(6, 'Nathani Voluntary Blood Centre, Rajkot', 'Nathani Voluntary Blood Bank & Blood Tranfusion. 11, Tejash Building,20/22, New Janpath Plot, Rajkot', 'nathanikd@gmail.com', 9227600111),
(7, 'Nationality Development Foundation, Rajkot', 'Blood Bank, Nationality Development Foundation, Smt. S.C.Patel (Field Marshal Blood Banks), Medicare', 'bfieldmarshal@yahoo.in', 9825547459),
(8, 'Padmakunvarba General Hospital (BSU)', 'Padmakunvarba General Hospital, Palace Road, Rajkot, Dist. Rajkot', '', 0),
(9, 'Pdu Hospital, Rajkot', 'Blood Bank, P.D.U. Hospital & Medical College, New OPD Building, PDU Hospital, Jamnagar road, , Rajk', 'nabhbloodbank@gmail.com	', 9824941925),
(10, 'Red Cross Blood Centre, Rajkot', 'Red Cross Blood Bank 1st floor, Indian Red Cross Society building, Suchak road, , Rajkot, Dist. Rajk', 'rajkot_ircs@yahoo.co.in', 9879417776);

-- --------------------------------------------------------

--
-- Table structure for table `surat_bb`
--

CREATE TABLE `surat_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat_bb`
--

INSERT INTO `surat_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'Blood Centre, Shree Mahavir Health And Medical Relief Society, Surat', 'Blood Bank, Shree Mahavir Health And Medical Relief Society, Shri B.D.Mehta Mahavir Heart Institute,', 'mahavirbloodbankm@gmail.com', 9824158042),
(2, 'Indian Red Cross Society Choryasi Taluka Branch, Surat', 'Indian Red Cross Society Choryasi Taluka Branch, Red Cross Blood Bank, B-9, Gurukrupa Society, Star ', 'indianredcrosssurat@yahoo.com', 9825034591),
(3, 'Kiran Hospital Blood Centre', 'SAMAST PATIDAR AAROGYA TRUST KIRAN HOSPITAL Multi Super Speciality Hospital & Research Center, Nr.Su', 'Bloodbank@kiranhospital.com', 7878177665),
(4, 'Lok Samarpan Raktadan Kendra, Surat', 'Lok Samarpan Raktadan Kendra Blood Bank, 15, Miranagar, Opp.Saurastra Bhavan, Mini Bazar, Varachha R', 'lsbloodbank@gmail.com', 9825064647),
(5, 'New Civil Hospital, Surat', 'Blood Bank, The New Civil Hospital, Outside Majura Gate, , Surat, Dist. Surat', 'bloodbanknchs@gmail.com', 2612208312),
(6, 'Sardar Vallabhbhai Patel Blood Centre', '201,. Shrinathji Complex, Ramnagar Char Rasta, Rander Road, Surat, Dist. Surat', 'svpbbsurat@gmail.com', 8788482015),
(7, 'Savior Voluntary Blood Centre & Research Centre', 'Kathiyawad Medical and Education Cahritable Trust, M/s Savior Voluntary Blood Bank & Research Centre', 'svbbsurat@gmail.com', 9601605555),
(8, 'Shree Sardar Smarak Hospital Blood Centre, Bardoli', 'Blood Bank, Shree Sardar Smarak Hospital Blood Bank, Station Road, Sardar Baug, Bardoli, Surat, Dist', 'info@sshbardoli.com', 9427586310),
(9, 'Smimer Hospital, Surat', 'Blood Bank, Surat Municipal Institute for Medical Education and Research, (SMIMER), Umarwada, Surat,', 'bbsmimer@yahoo.com', 9376323273),
(10, 'Surat Healthcare Foundation', 'Blood Bank, Aminaben Gangat & Ayeshaben Patel Blood Bank, Surat Health Care Foundation, C/o. Lokhat ', 'bloodbankshf@yahoo.com', 9825193328);

-- --------------------------------------------------------

--
-- Table structure for table `surendranagar_bb`
--

CREATE TABLE `surendranagar_bb` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no.` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surendranagar_bb`
--

INSERT INTO `surendranagar_bb` (`id`, `Name`, `Address`, `Email`, `Mobile_no.`) VALUES
(1, 'CHC, Muli (BSU)', 'Muli, , Muli, Dist. Surendranagar', '', 0),
(2, 'C. U. Shah Medical College & Hospital, Surendranagar', 'Blood Bank, C. U. Shah Medical College & General Hospital, Dudhrej road, Surendranagar, Dist. Surend', 'bbcusmc@rediffmail.com', 2752287041),
(3, 'General Hospital, Surendranagar', 'Blood Bank, General Hospital, Surendranagar, Dist. Surendranagar', 'cdmo.health.surendranagar@gmail.com', 9727712214),
(4, 'Lifeline Blood Centre', 'plot no. 2&13, 1st and 2nd floor, , beside dr. kharod surgical hospital, opp. doctor house, bus stan', 'lifelinebloodbank.snr@gmail.com', 9227742777),
(5, 'Raj Rajsingh Government Hospital, Limbdi (BSU)', 'Limbdi, , Limbdi, Dist. Surendranagar', '', 0),
(6, 'Shraddha Blood Centre', 'CROSS ROAD COMPLAX, ZALA ROAD, , DHRANGADHRA, Dist. Surendranagar', 'spl9018@gmail.com	', 9426922330),
(7, 'Raj Rajsinhji II Govt. Hospital, Dhangadhra (BSU)', 'Dhangadhra, , Dhangadhra, Dist. Surendranagar', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahmedabad_bb`
--
ALTER TABLE `ahmedabad_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amreli_bb`
--
ALTER TABLE `amreli_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bharuch_bb`
--
ALTER TABLE `bharuch_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gir_somnath_bb`
--
ALTER TABLE `gir_somnath_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamnagar_bb`
--
ALTER TABLE `jamnagar_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junagadh`
--
ALTER TABLE `junagadh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porbandar_bb`
--
ALTER TABLE `porbandar_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rajkot_bb`
--
ALTER TABLE `rajkot_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_bb`
--
ALTER TABLE `surat_bb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surendranagar_bb`
--
ALTER TABLE `surendranagar_bb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahmedabad_bb`
--
ALTER TABLE `ahmedabad_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `amreli_bb`
--
ALTER TABLE `amreli_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bharuch_bb`
--
ALTER TABLE `bharuch_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gir_somnath_bb`
--
ALTER TABLE `gir_somnath_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jamnagar_bb`
--
ALTER TABLE `jamnagar_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `junagadh`
--
ALTER TABLE `junagadh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `porbandar_bb`
--
ALTER TABLE `porbandar_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rajkot_bb`
--
ALTER TABLE `rajkot_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surat_bb`
--
ALTER TABLE `surat_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surendranagar_bb`
--
ALTER TABLE `surendranagar_bb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
