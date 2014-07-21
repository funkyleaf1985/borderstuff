-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2014 at 04:54 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `borderstuff`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcustomer`
--

CREATE TABLE IF NOT EXISTS `tbcustomer` (
  `CustomerID` int(100) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telephone` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbcustomer`
--

INSERT INTO `tbcustomer` (`CustomerID`, `FirstName`, `LastName`, `Address`, `Email`, `Telephone`, `UserName`, `Password`) VALUES
(1, 'Gary', 'Wang', '23 Virginia Street, Henderson,Auckland', 'naizuier1984@hotmail.com', '0210400310', 'garywang', '123456'),
(2, 'Tina', 'Zhu', '23 Virginia Street, Henderson,Auckland', 'zhuxiaoxuan111111@gmail.com', '0212617843', 'tinazhu', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tborder`
--

CREATE TABLE IF NOT EXISTS `tborder` (
  `OrderID` int(100) NOT NULL AUTO_INCREMENT,
  `OrderDate` date NOT NULL,
  `DeliveryDate` date NOT NULL,
  `OrderStatus` varchar(1000) NOT NULL,
  `CustomerID` int(100) NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `CustomerID` (`CustomerID`),
  KEY `CustomerID_2` (`CustomerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tborder`
--

INSERT INTO `tborder` (`OrderID`, `OrderDate`, `DeliveryDate`, `OrderStatus`, `CustomerID`) VALUES
(1, '2014-07-04', '2014-07-05', 'delivery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tborderline`
--

CREATE TABLE IF NOT EXISTS `tborderline` (
  `OrderlineID` int(100) NOT NULL AUTO_INCREMENT,
  `OrderID` int(100) NOT NULL,
  `ProductID` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  PRIMARY KEY (`OrderlineID`),
  KEY `OrderID` (`OrderID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tborderline`
--

INSERT INTO `tborderline` (`OrderlineID`, `OrderID`, `ProductID`, `Quantity`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbproduct`
--

CREATE TABLE IF NOT EXISTS `tbproduct` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) NOT NULL,
  `Information` varchar(1000) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Price` varchar(10000) NOT NULL,
  `TypeID` int(100) NOT NULL,
  `PhotoPath` varchar(1000) NOT NULL,
  `Sales` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ProductID`),
  KEY `TypeID` (`TypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbproduct`
--

INSERT INTO `tbproduct` (`ProductID`, `ProductName`, `Information`, `Description`, `Price`, `TypeID`, `PhotoPath`, `Sales`) VALUES
(1, 'DGK JT & CO INFINITY TEE', 'CUSTOM FIT TAGLESS T-SHIRT (100% COTTON) // SIDE SEAMS WITH FLAG LABEL // SCREEN PRINTED GRAPHIC ', 'Jovontae Turner is a legend in the skate game. He’s an innovator of style with both his trick selection and fashion sense. Given that DGK has collaborated with Jovontae in the past on a deck that re-appropriated one of his classic graphics and the close ties that Tae has with the crew; it was only right to do this DGK X JT&CO capsule collection.', '69.99', 1, 'infinity_tee', 1),
(3, 'DGK JT & CO TIMELESS TEE', 'Jovontae Turner is a legend in the skate game. He’s an innovator of style with both his trick selection and fashion sense. Given that DGK has collaborated with Jovontae in the past on a deck that re-appropriated one of his classic graphics and the close ties that Tae has with the crew; it was only right to do this DGK X JT&CO capsule collection.', 'Jovontae Turner is a legend in the skate game. He’s an innovator of style with both his trick selection and fashion sense. Given that DGK has collaborated with Jovontae in the past on a deck that re-appropriated one of his classic graphics and the close ties that Tae has with the crew; it was only right to do this DGK X JT&CO capsule collection.', '59.99', 1, 'timeless_tee', 0),
(4, 'HUF DIRTBAG SEAL POCKET TEE', 'CUSTOM FIT TAGLESS POCKET T-SHIRT (100% COTTON) // SIDE SEAMS WITH FLAG LABEL // SCREEN PRINTED FRONT AND BACK GRAPHIC', 'CUSTOM FIT TAGLESS POCKET T-SHIRT (100% COTTON) // SIDE SEAMS WITH FLAG LABEL // SCREEN PRINTED FRONT AND BACK GRAPHIC', '59.99', 1, 'pocket_tee', 0),
(5, 'BOARDERTOWN BUSINESS TEE', 'The Boardertown Business Tee features a chest and back print.  Constructed from 180GSM 100% cotton.  Pre-shrunk.', 'The Boardertown Business Tee features a chest and back print.  Constructed from 180GSM 100% cotton.  Pre-shrunk.', '59.99', 1, 'business_tee', 1),
(6, 'BOARDERTOWN BARBER TEE', 'The Boardertown Barber Tee features a chest and back print.  Constructed from 180GSM 100% cotton.  Pre-shrunk.', 'The Boardertown Barber Tee features a chest and back print.  Constructed from 180GSM 100% cotton.  Pre-shrunk.', '49.99', 1, 'barber_tee', 2),
(7, 'HUF TRIPLE TRIANGLE TEE', 'CUSTOM FIT TAGLESS T-SHIRT (100% COTTON) // SIDE SEAMS WITH FLAG LABEL // SCREEN PRINTED GRAPHIC FRONT AND BACK GRAPHIC', 'CUSTOM FIT TAGLESS T-SHIRT (100% COTTON) // SIDE SEAMS WITH FLAG LABEL // SCREEN PRINTED GRAPHIC FRONT AND BACK GRAPHIC', '59.99', 1, 'triangle_tee', 2),
(8, 'THING THING FAKE JEAN', 'THING THING FAKE JEAN', 'THING THING FAKE JEAN', '199.99', 2, 'fake_jean', 0),
(9, 'FEDERATION FLIGHT PANT', 'Drop crotch light weight pants''s with drawstring waist band and elastic hems. can be worn full length or 3/4. featuring two side slit pockets with plus dot pip and silver metal domes on drawstring.', 'Drop crotch light weight pants''s with drawstring waist band and elastic hems. can be worn full length or 3/4. featuring two side slit pockets with plus dot pip and silver metal domes on drawstring.', '299.99', 2, 'flight_pant', 2),
(10, 'FEDERATION ROCCO JEAN - D PLUS', 'Federation Rocco jeans feature a long slim leg with zip fly, in stretch denim. federation branded embroidery on back waistband, +. tack button and rivets, and +. pip on front fob pocket. custom federation double plus printing on back pockets.  99% cotton 1% elastane', 'Federation Rocco jeans feature a long slim leg with zip fly, in stretch denim. federation branded embroidery on back waistband, +. tack button and rivets, and +. pip on front fob pocket. custom federation double plus printing on back pockets.  99% cotton 1% elastane', '99.99', 2, 'rocco_jean', 2),
(11, 'WRANGLER STOMPER', 'The Stomper Jean in Twist Blue is a slim, skinny fit jean that?s relaxed through the seat and leg. They feature bright, vibrant blue wash with some whiskering for a vintage look. They are made in a stretch denim for best fit and comfort. Our classic 5 pocket detailing is also featured with the Wrangler decorative stitch on back pockets and leather back patch.', 'The Stomper Jean in Twist Blue is a slim, skinny fit jean that?s relaxed through the seat and leg. They feature bright, vibrant blue wash with some whiskering for a vintage look. They are made in a stretch denim for best fit and comfort. Our classic 5 pocket detailing is also featured with the Wrangler decorative stitch on back pockets and leather back patch.', '269.99', 2, 'stomper', 2),
(12, 'THING THING RECON PANT', 'THING THING RECON PANT', 'THING THING RECON PANT', '169.99', 2, 'recon_pant', 0),
(13, 'LOWER LAND PANT', 'LOWER LAND PANT', 'LOWER LAND PANT', '59.99', 2, 'land_pant', 1),
(14, 'BURTON DISTORTION PACK', 'The Burton Distortion Pack carries your skateboard. What’s that? We’re a snowboard company? And you don’t skate? Huh? Come on…everybody loves skateboarding, right? Either way, this pack is loaded with secure stashes for everything from laptop to sunglasses, even your sneakers, and offers enough space to lug approximately 60 juice boxes', 'Discounted items and freight are excluded from the loyalty points program. - 29L [18.5in x 11.5in x 8in] [47cm x 29cm x 20.5cm] - 1.7 lbs. 0.8kg - Padded Laptop Sleeve [15in x 10.5in x 1in] [38cm x 27cm x 2.5cm] - Vertical Skate Carry  - Cush Ergonomic Shoulder Harness with Adjustable Sternum Strap - Fleece-Lined Sunglass / Sound Pocket - Separate Shoe Storage Pocket', '99.99', 3, 'distortion', 0),
(15, 'BURTON TREBLE YELL PACK', 'Make every mission count with the Burton Treble Yell Pack. It’s got room for your laptop, shred mags, water, and supplies, plus nifty straps for your skateboard. Hot dang! Look at all those colorways! Nice price, too! It’s hard to choose, so why not grab a few…one for school, one for work, one for road trips, another for skating, and one for your best friend’s cousin.', 'Discounted items and freight are excluded from the loyalty points program. - 21L [18.5in x 12in x 7in] [47cm x 31cm x 17cm] - 1.5 lbs. 0.7kg - Vertical Skate Carry - Magazine / Laptop Sleeve - Cush Ergonomic Shoulder Harness - Mesh Water Bottle Pockets', '99.99', 3, 'yellback_two', 1),
(16, 'BURTON HARDWICK DUFFEL', 'Stow-it-all simplicity meets vintage-inspired stylings with the Burton Hardwick Duffel Bag. The spacious main compartment carries all your gear to the mountain, the gym or beyond. Accessory pockets inside and out organize smaller items, while the padded adjustable shoulder strap hauls weight without holding you back.', 'Discounted items and freight are excluded from the loyalty points program. - 28L [12in x 23in x 12in] [30cm x 58cm x 30cm] - 1.5 lbs. 0.7kg - Fabrication: 600D Polyester Herringbone / 600D Polyester [Canvas Camo] - Fabrication: 60/40 Nylon Cotton Blend with Genuine Leather Trim and Bottom Panel [Cove] - Fabrication: 450D Polyester Diamond Ripstop / 500D N6 Nylon [Rustbucket Rip] - Fabrication: 600D Polyester [True Black] - Padded, Adjustable Shoulder Strap - Main Compartment with Zipper Closure - External and Internal Accessory Pockets', '129.99', 3, 'hardwick', 0),
(17, 'BURTON TREBLE YELL PACK', 'Make every mission count with the Burton Treble Yell Pack. It’s got room for your laptop, shred mags, water, and supplies, plus nifty straps for your skateboard. Hot dang! Look at all those colorways! Nice price, too! It’s hard to choose, so why not grab a few…one for school, one for work, one for road trips, another for skating, and one for your best friend’s cousin.', 'Discounted items and freight are excluded from the loyalty points program. - 21L [18.5in x 12in x 7in] [47cm x 31cm x 17cm] - 1.5 lbs. 0.7kg - Magazine / Laptop Sleeve - Cush Ergonomic Shoulder Harness - Mesh Water Bottle Pockets', '79.99', 3, 'yellback_one', 2),
(18, 'BURTON BIONIC MOUNTAIN BAG', 'Special BIONIC® fabrics, yarn-dyed saturation and a modern urban vibe all converge to create the distinct feel of this versatile bag. PU-coated recycled fabric sheds the elements without looking aggressively tech, while also expressing its style with custom webbing and a signature BIONIC® Bolivian pattern that’s exclusive to Burton. Essential elements such as a padded laptop compartment, external shovel pocket and oversized beverage stash enable it to transition seamlessly from weekend pursuits to daily grind.', 'Discounted items and freight are excluded from the loyalty points program. - 26L [20in x 12.5in x 7in] [51cm x 32cm x 18cm] - 3.8 lbs. 1.7kg - Collaborative Burton x BIONIC® Signature Design - Fabrication: PU Coated BIONIC® Recycled Two-Tone Bolivian Jacquard Fabric  - Cush Ergonomic Shoulder Harness and Ergonomic Back Panel - Padded Laptop Compartment [11in x 16in x 2in] [27cmcm x 41cm x 5cm] - External Shovel Blade Shove-It Pocket - Oversized Beverage Stash - Multiple External Accessory Pockets - Padded Waist Strap', '179.99', 3, 'bionic', 1),
(19, 'BURTON HCSC PACK', 'For those of you lucky enough to go to High Cascade Snowboard Camp in the summer, or dedicated enough to camp near some perpetual snow patch, there is the Burton HCSC Shred Scout Pack. It’s got everything you’ll need to haul your glacier-riding gear, including a skate/snowboard carry, sound and goggle pocket, hydration compatibility, and a removable rucksack style closure that converts to a lunch cooler…how sweet…er, cool is that? It even delivers off-snow with skate carry straps, buckles for carrying your boots, and a new stowaway hood to keep your cranium covered. Dang, just look at that features list…there isn’t a backpack in the Burton line that’s as well-equipped as this.', 'Discounted items and freight are excluded from the loyalty points program. - 26L [20in x 10in x 6in] [51cm x 26cm x 14cm] - 2.4 lbs. 1.1kg - Fabrication: 420D High-Density Nylon / 600D Polyester - Cush Ergonomic Shoulder Harness with Removable Lunch Cooler Attachment - Ergonomic Back Panel - Vertical Skate and Snowboard Carry - Rucksack Style Closure Main Entry [Converts to Removable Lunch Cooler] - Easy Access Internal Shovel Storage Pocket - Padded Laptop Sleeve [13in x 6in x 1.5in] [32cm x 14cm x 3cm] - Side-Access Beverage Cooler - Goggle / Sound Pocket - Front Accessory Pocket with Internal Organization - Hydration Compatible - Removable Waist Strap with Stance Measurement Markings - Stowaway Hood - Top Lid Lunch Pocket', '149.99', 3, 'hcsc', 0),
(20, 'HUF BOX LOGO SNAP', 'ACRYLIC / WOOL SERGE // WOVEN BOX LABEL // PLASTIC SNAP CLOSURE', 'ACRYLIC / WOOL SERGE // WOVEN BOX LABEL // PLASTIC SNAP CLOSURE', '69.99', 4, 'huf_box_logo_snap', 1),
(21, 'FRENDS - THE LIGHT', 'Premium Sound, Premium Materials, and Premium Style enable the Light to pack a heavy punch. If you need a headphone that can make all your dreams come true look no further. The Light delivers a custom tuned driver with inter changeable caps, complete modular construction, and minimal design to ensure you experience all your music has to offer.', 'Premium Sound, Premium Materials, and Premium Style enable the Light to pack a heavy punch. If you need a headphone that can make all your dreams come true look no further. The Light delivers a custom tuned driver with inter changeable caps, complete modular construction, and minimal design to ensure you experience all your music has to offer.', '75.99', 4, 'friend_the_light', 0),
(22, 'NIXON 48-20 CHRONO', 'Discounted items and freight are excluded from the loyalty points program. MOVEMENT: Miyota Japanese quartz 6 hand wide eye 1/20th second chronograph with date and 9 hour crown and pusher placement.  DIAL: The dial is surrounded by a concave dial ring and includes bold printed indices, a printed seconds track, CD textured subdials and custom molded hands.  CASE: 48 mm, 200 meter/20 ATM custom solid stainless steel case, solid stainless steel unidirectional rotating bezel with countdown timer, hardened mineral crystal, triple gasket screw down crown and pushers, anodized aluminum pusher sleeve on chronograph start pusher, stainless steel screw down caseback and screw pin lugs.  BAND: 23 mm custom solid stainless steel 3 link bracelet with a solid stainless steel double locking clasp with micro adjust.', 'Discounted items and freight are excluded from the loyalty points program. MOVEMENT: Miyota Japanese quartz 6 hand wide eye 1/20th second chronograph with date and 9 hour crown and pusher placement.  DIAL: The dial is surrounded by a concave dial ring and includes bold printed indices, a printed seconds track, CD textured subdials and custom molded hands.  CASE: 48 mm, 200 meter/20 ATM custom solid stainless steel case, solid stainless steel unidirectional rotating bezel with countdown timer, hardened mineral crystal, triple gasket screw down crown and pushers, anodized aluminum pusher sleeve on chronograph start pusher, stainless steel screw down caseback and screw pin lugs.  BAND: 23 mm custom solid stainless steel 3 link bracelet with a solid stainless steel double locking clasp with micro adjust.', '875.99', 4, 'nixon', 1),
(23, 'DIAMOND UNPOLO SNAPBACK', 'Diamond snapback cap featuring a raised embroidered Un-Polo logo on front. Plastic snap back with custom Diamond shaped snaps.', 'Diamond snapback cap featuring a raised embroidered Un-Polo logo on front. Plastic snap back with custom Diamond shaped snaps.', '79.99', 4, 'diamond_unpolo_snapback', 2),
(24, 'DGK X DIAMOND HATERS SNAPBACK', 'DGK teamed up with Diamond Supply Co. on these new Diamond Haters snapbacks. These things are fresh to death and are gonna go quick, so if you want one don''t sleep.', 'DGK teamed up with Diamond Supply Co. on these new Diamond Haters snapbacks. These things are fresh to death and are gonna go quick, so if you want one don''t sleep.', '49.99', 4, 'dgk_x_diamond_haters_snapback', 0),
(25, 'BURTON TRUCKSTOP BEANIE', 'BURTON TRUCKSTOP BEANIE', 'BURTON TRUCKSTOP BEANIE', '39.99', 4, 'burton_truckstop_beanie', 2),
(26, 'HUF PEPPER PRO', 'Most Vans styles are designed to be a unisex fit.  Unless otherwise stated, all Vans styles are sized as US Mens.  For women''s sizing, refer to the Mens Footwear size chart to find the appropriate size.', 'HUF PEPPER PRO JOEY PEPPER PRO MODEL  // VULCANIZED RUBBER SOLE WITH DOUBLE TAPING REINFORCEMENT AROUND TOE // ORTHOLITE MEMORY FOAM MIDSOLE CONSTRUCTION FOR A COMFORTABLE AND IMPACT RESISTANT SHOE // EXTRA-DURABLE SUEDE TOECAP AND OLLIE & HEEL PANELS // CANVAS SIDEWALLS // WOVEN NYLON SIDEWALL DETAIL // PERFORATED TOECAP AND MESH INTERIOR LINING FOR BREATHABILITY // PADDED COLLAR FOR ANKLE SUPPORT // FOIL SIGNATURE DETAILING // CUSTOM PEPPER "DEER" LOGO ON LEATHER DEBOSSED TONGUE LABEL // CUSTOM INSOLE ARTWORK', '169.99', 6, 'pepper', 0),
(27, 'NIKE SB DUNK HIGH TIE DYE', 'Unless otherwise stated, all Vans styles are sized as US Mens.  For womens sizing, refer to the Mens Footwear size chart to find the appropriate size.', 'Not since HUFs design back in 2004 has the Nike SB Dunk High made use of tie-dye uppers. Luckily for us, the skate wing brings back the classic American print in a color-less black-and-white scheme, a gum outsole, and a multi-colored tongue label. Definitely an eye-catcher if you’re a Dunk fan, or if you never got to own a pair of the HUFs from a decade ago! - sneakernews.com', '129.99', 6, 'hightie', 0),
(28, 'NIKE SB KOSTON 2 MAX', 'Most Vans styles are designed to be a unisex fit.  Unless otherwise stated, all Vans styles are sized as US Mens.  For women''s sizing, refer to the Mens Footwear size chart to find the appropriate size.  UPPER: NUBUCK & REFLECTIVE LEATHER UPPER  MIDSOLE: FULL-LENGTH LUNARLON MIDSOLE  OUTSOLE: LUNAR BRAATA OUTSOLE  PROFILE: P-ROD 6 UPPER COMBINED W/ OUR NEW TRAIL RUNNING INSPIRED OUTSOLE.', 'The Nike SB Koston 2 Max features a lighweight, reinforced mesh upper on a Lunar Braata Outsole.', '169.99', 6, 'koston', 1),
(29, 'DC COLE LITE 2 S', 'Most Vans styles are designed to be a unisex fit.  Unless otherwise stated, all Vans styles are sized as US Mens.  For women''s sizing, refer to the Mens Footwear size chart to find the appropriate size.  Chris Cole Signature Shoe Internal mesh sleeve hugs the foot for a superior fit Ortholite sockliner provides extra high-impact protection Sandwich mesh tongue and vent holes increase breathability preventing feet from overheating DC''s Super Suede on the upper with a TPU backing helps shoe last longer Foam padded tongue and collar for more cushion and protection TPU reinforced eyerow and heel counter provides durability and foot support Clean toe No sew upper Custom footbed graphics and tongue logo Dual-lite density EVA midsole that provides more cushioning and protection', 'As one of DC''s most technologically advanced skate shoes so far, Chris Cole''s new signature model, the DC Cole Lite 2 is packed with progressive features and clean styling. It''s a lightweight cupsole with a clean toe and no-sew upper to help prevent blowouts, creating a longer-lasting shoe. It also features custom footbed graphics and tongue logo, along with the all-new Dual-lite density EVA midsole that provides more cushioning and protection.', '199.99', 6, 'dccole', 0),
(30, 'ETNIES MARANA', 'Most Vans styles are designed to be a unisex fit.  Unless otherwise stated, all Vans styles are sized as US Mens.  For women''s sizing, refer to the Mens Footwear size chart to find the appropriate size.  STI Evolution™ Foam Reinforced molded rubber toe cap Pro 1 polyurethane footbed STI Non-Slip Grip outsole Padded tongue and collar', 'Charging the best skate spots all over the world, Ryan Sheckler deserves a long-lasting shoe that can keep up with him wherever he goes. The new etnies Marana was designed to blend strength and style, making it the perfect shoe for a Ryan Sheckler signature style. It was carefully crafted, piece by piece, to endure skateboarding. Its fused-on injected rubber toe cap makes it super hard to wear through, the lightweight and impact-resistant STI Evolution™ Foam midsole doesn’t pack out, enhancing the cushioning of the polyurethane footbed and the non-slip grip outsole’s thick herringbone tread with deep grooves just doesn’t wear down. Durability is an understatement. The Marana was born to skate and hold its own. Just like Ryan.', '199.99', 6, 'marana', 1),
(31, 'SUPRA VAIDER', 'Most Vans styles are designed to be a unisex fit.  Unless otherwise stated, all Vans styles are sized as US Mens.  For women''s sizing, refer to the Mens Footwear size chart to find the appropriate size.  Grey suede with scorched black print Black canvas tongue and piping Padded black and burgundy mesh lining Burgundy vulcanized sole White foxing with black pinstripe', 'The Vaider is a stylishly designed high top upper on a vulcanized sole that supplies excellent traction and board feel. Extra collar padding, mesh lining, and a SUPRAFOAM footbed with mesh sock liner all provide superior comfort.', '209.99', 6, 'supra', 2),
(32, 'Bellroy - Note Sleeve Wallet - Tan', '3 Quick access card slots  Pull tab for stored cards  Full size note sections Size: 8.5 X 10.3cm', 'A full featured wallet with quick access for your frequent cards, longer term storage with pull-tab access, and a full size note section. All Bellroy wallets are constructed using responsibly sourced, non-toxic vegetable tanned leathers.  Note: Wallet is tan as per images', '159.99', 5, 'notesleeve', 0),
(33, 'Bellroy - Hide and Seek Wallet - Black', '4 quick access card slots Protected section for cards & business cards Hidden note section for discreet note storage Premium vegetable tanned cow leather Size: 11.5cm x 9.5cm (holds 12+ cards) Fits all NZ & Australian notes', 'Conventional only on first impression, the Hide & Seek separates cards & notes according to how often you use them. The unique hidden notes & card section sets this wallet apart from the rest. Made from premium materials and crafted with exceptional precision, a Bellroy leather wallet will not disappoint.', '139.99', 5, 'hideandseek', 0),
(34, 'Bellroy - Card Sleeve - Cocoa', 'Quick access slots front & back Pull tab for your main card storage Premium vegetable tanned cow leather  Size:10.3cm x 7.1cm', 'The Card Sleeve is the slimmest style in the Bellroy range and perfect for use as a business card holder or those who don''t muck around in the wallet contents department. The main section features a pull tab for easy storage of cards and money, while the outside pockets can be used for quick-access items. True to the saying, good things do indeed come in small packages.', '149.99', 5, 'card', 0),
(35, 'Bellroy - Very Small Wallet - Tan', 'Zip closure Internal pocket for folded bills Premium vegetable tanned cow leather  Size:10.5cm x 6.3cm', 'This is one tiny wallet that doesn''t make you compromise what you can carry. The Very Small wallet holds your cards securely with the zip closure, without breaking your silhouette, meaning it''s great for suit or skinny jean wearing guys. If it''s only necessities that you want with you day-to-day, then this is your pick.', '149.99', 5, 'verysmall', 0),
(36, 'Bellroy - Passport Sleeve Wallet - Tan', 'Sections for passport & folded ticket 2 quick access card slots Micro travel pen with refill Size: 10cm x 14cm', 'The Passport Sleeve has a specialist style that offers protection for your passport, while adding some extra features like a handy pen for custom forms and slots for the cards you need when on the move. The signature Bellroy pull-tab also provides quick access to your documents as well. This is the perfect travel wallet for the minimalist traveller.', '129.99', 5, 'passportsleeve', 0),
(37, 'Herschel - Hank Wallet - Black Pebbled', 'Full grain leather with embossed logo Fully lined with our signature coated cotton-poly fabric Mesh ID window Currency sleeve Multiple card slots', 'This id style Wallet is Herschel Supply’s take on a true classic. Made from premium full grain leather with embossed logo with an ID window, currency sleeve and three credit card slots. Hank will not let you down', '129.99', 5, 'hankleather', 0),
(38, 'BATMAN CAP', 'NEW ERA LIMITED BATMAN CAP', 'Made of 60% Polyester, Woven, 40% Wool, Woven  This BATMAN Classics Black  9FIFTY® Snapback cap features an embroidered batman logo at front, a stitched New Era® flag at wearer''s left side and Hardwood Classics® logo above a snapback closure for an adjustable fit.', '99.99', 4, 'cap2', 3),
(39, 'BEATS SOLO TM2', 'Designed For Sound. Tuned For Emotion', 'The Solo2 has arrived. Beats’ most popular headphone has been redesigned from the inside out. With updated and improved acoustics, the Solo2 lets you feel your music with a wider range of sound and enhanced clarity. ', '289.99', 4, 'headphone', 3),
(40, 'rage comic meme skull faces', 'rage comic meme skull faces. me gusta.', 'Comfortable, casual and loose-fitting, our heavyweight t-shirt will quickly become one of your favourites. Made from 6.0 oz, pre-shrunk 100% cotton, it wears well on anyone. We''ve double-needle stitched the bottom and sleeve hems for extra durability. Imported.', '79.99', 1, 'tshirt', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbproducttype`
--

CREATE TABLE IF NOT EXISTS `tbproducttype` (
  `TypeID` int(100) NOT NULL AUTO_INCREMENT,
  `TypeName` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `DisplayOrder` int(100) NOT NULL,
  PRIMARY KEY (`TypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbproducttype`
--

INSERT INTO `tbproducttype` (`TypeID`, `TypeName`, `Description`, `DisplayOrder`) VALUES
(1, 'TOPS', 'This are tops.', 1),
(2, 'PANTS', 'These are pants.', 1),
(3, 'PACKBAGS', 'These are packbags.', 1),
(4, 'ACCESSORIES', 'These are accessories.', 1),
(5, 'WALLETS', 'These are wallets.', 1),
(6, 'SHOES', 'These are shoes.', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tborder`
--
ALTER TABLE `tborder`
  ADD CONSTRAINT `tborder_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `tbcustomer` (`CustomerID`);

--
-- Constraints for table `tborderline`
--
ALTER TABLE `tborderline`
  ADD CONSTRAINT `tborderline_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `tborder` (`OrderID`),
  ADD CONSTRAINT `tborderline_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `tbproduct` (`ProductID`);

--
-- Constraints for table `tbproduct`
--
ALTER TABLE `tbproduct`
  ADD CONSTRAINT `tbproduct_ibfk_1` FOREIGN KEY (`TypeID`) REFERENCES `tbproducttype` (`TypeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
