-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2021 at 06:49 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HNCWEBMR7`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` int(4) NOT NULL,
  `prod_pet` varchar(20) NOT NULL,
  `prod_desc` varchar(800) NOT NULL,
  `prod_weight` varchar(20) NOT NULL,
  `prod_type` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `prod_price`, `prod_pet`, `prod_desc`, `prod_weight`, `prod_type`, `image`) VALUES
(1, 'James Wellbeloved Adult Dog Food Turkey/Rice', 40, 'Dog', 'James Wellbeloved put a lot of love into creating recipes dogs will love. Using only simple ingredients and inspired by nature, their dog food has all the goodness they need and nothing they don''t. And, to minimise the risk of adverse food reactions, it''s naturally hypoallergenic. Best of all, you can be sure your canine friend is enjoying a balanced diet. One that not only tastes good, but does them a world of good too.', '15', 'Dog Food', '1.jpg'),
(2, 'Wainwrights Complete Mature Dog Food Lamb/Brown Rice ', 15, 'Dog', 'Wainwrights isnt like any other dog food. The limited ingredient recipes contain a single source of highly digestible animal protein and no ingredients commonly believed to cause allergies or food intolerance in dogs.', '15', 'Dog Food', '2.jpg'),
(3, 'Royal Canin Veterinary Health Nutrition Urinary Adult Dry Cat Food', 30, 'Cat', 'Royal Canin Feline Urinary S/O Adult Dry Cat Food is suitable for cats from 12 months old with struvite uroliths: Dissolution and management of recurrence, calcium oxalate uroliths: Management of recurrence. This product is not suitable in cases of Chronic Kidney Disease (CKD), heart disease (when sodium restriction is sought), concurrent use of urine-acidifying medication, growth, gestation/lactation. This product should only be fed based upon the specific recommendation of your vet.', '3.5', 'Cat Food', '3.jpg'),
(4, 'Hills Science Plan Dry Adult Cat Food Chicken Flavour', 53, 'Cat', 'Hills Science Plan Adult dry cat food is specially formulated to fuel the energy needs of cats during the prime of their life. It is made with high quality, easy-to-digest ingredients and contains essential taurine for heart health and balanced minerals to support kidneys and bladder. Also contains high-quality protein for lean muscles and Vitamin E, Omega-3s and -6s for beautiful skin and fur.', '10', 'Cat Food', '4.jpg'),
(5, 'Whiskas 1+ Adult Complete Dry Cat Food with Chicken', 14, 'Cat', 'Whiskas 1+ Dry cat food is a nutritionally complete and balanced meal for your adult cat that contains tasty filled pocket kibbles she will love - crunchy on the outside with a soft and delicious centre.  Whiskas understand what your cat naturally needs and loves, that''s why they use delicious, nutritious ingredients she''ll instinctively love.', '7', 'Cat Food', '5.jpg'),
(6, 'Harringtons Complete Adult Dry Dog Food with Salmon and Potato', 29, 'Dog', 'Harringtons Adult Dry Dog Food with Salmon and Potato is a complete dry dog food, which has been carefully formulated to provide wholesome nutrition and contains no artificial colours or flavours, no dairy, no soya and no added wheat. The product should have a pleasant savoury smell.', '12', 'Dog Food', '6.jpg'),
(11, 'Wainwrights Luxurious Woven Herringbone Dog Collar', 8, 'Dog', 'The Wainwrights Luxurious Woven Herringbone Dog Collar has been beautifully crafted in the Wainwrights signature style to provide the best in comfort and quality: the luxurious fabric is super strong, finished with sturdy metalwork and tasteful leather trim.', '0.5', 'Collars', 'P70197L.jpg'),
(12, 'Zee Cat Phantom Cat Collar Multi Coloured', 7, 'Cat', 'Dont let your cat be plain in a world full of colour, allow them to stand out by wearing this colourful Zee Cat Phantom Cat Collar. All Zee Cat collars are made of super-soft polyester for your cats comfort. The buckle is a breakaway buckle that will automatically open if your cat gets stuck.\r\nTo keep the collar looking its best, hand wash with neutral soap and air dry.', '0.3', 'Collars', '7136842PL.jpg'),
(13, 'Earthbound Soft Country Leather Lead Brown Medium', 20, 'Dog', 'The Soft Country Leather lead is produced from strong cow leather that is amazingly soft. The lead is made from double glued and oiled leather that is hand stitched and riveted to produce a high quality finish.', '0.8', 'Leads', '7124618PL.jpg'),
(14, 'Flexi Extending Dog Lead Fun Cord 5m Blue Medium', 10, 'Dog', 'The Flexi Extending Dog Lead Fun Medium with a 5m Cord in Blue is perfect for walking dogs who like a little more flexibility whilst still maintaining a comfortable grip. The functional value range offers simplicity and ergonomic design, and without compromising quality, the fun creates a high level of safety and handling during walks.', '1', 'Leads', '7137929PL.jpg'),
(15, '3 Peaks Ascent Dog Lead Turquoise', 10, 'Dog', 'This 3 Peaks Ascent Dog Lead is strong and sturdy, with a soft handle for added comfort whilst on walks, the reflective trim and neon colour also aids visibility whilst walking in low light conditions helping to keep you both safe and secure.', '1', 'Leads', '7137220PL.jpg'),
(16, 'Halti Comfort Dog Collar Red', 8, 'Dog', 'The Halti Comfort Collar is a cosy padded yet practical collar that is easy to adjust, with a strong and secure 3 point button release clip. Soft neoprene padding offers a comfortable fit for your dog all day long. Featuring reflective 3M Scotchlite stitching for increased visibility and safety of your dog in low light.  The Hati Comfort Collar brings together style and functionality and is made from premium grade two-tone colour webbing.', '2', 'Collars', 'P70365L.jpg'),
(17, 'Ferplast Atlas Car Dog Carrier 100', 84, 'Dog', 'Traveling by car with your dog in complete safety has never been easier! Atlas Car is a sturdy, lightweight pet carrier, made of plastic with a plastic-coated steel door, designed to be placed inside the boot of most cars. The Atlas Car 100 Dog Carrier is car carrier for your pet dog, this carrier will easily fit in the boot of an average sized family hatchback and the carrying handles permit you to easily lift the carrier into the boot.\r\n', '5', 'Carriers and Travel', '7122158PL.jpg'),
(18, 'RAC Fabric Dog Carrier Large', 50, 'Dog', 'The RAC Fabric Pet Carrier is ideal for indoor, outdoor and travel use. The carrier is simple to set up and fold down, requiring no tools so you and your pet will be on your way in no time at all.', '4', 'Carriers and Travel', '7132948PL.jpg'),
(19, 'Ferplast Atlas Wire Door Carrier for Cats', 90, 'Cat', 'he Atlas Wire Door Dog Carrier by Ferplast is a tough durable carrier specifically designed for the transportation of your pet. Made from a tough plastic, with wire door and carry handle; the Atlas Wire Door Dog Carrier by Ferplast is ideal for taking your dog to the vets or on any short journey.', '10', 'Carriers and Travel', '7122158PL.jpg'),
(20, 'Ferplast Chester Dog Bed Grey', 36, 'Dog', 'The Ferplast Chester Dog Bed in Grey is ideal for dogs to snuggle into, especially during the winter season. The square sofa bed has a thick padding for maximum comfort and is equipped with a lowered front side to facilitate the entry and exit of your pet. It is also complete with a double-faced cushion with one side in resistant Tweed effect fabric and one side in velvet, perfectly matched to the bed', '2', 'Beds', 'P70489L.jpg'),
(21, 'Earthbound Traditional Tweed Dog Bed Steel Grey', 120, 'Dog', 'The Earthbound Traditional Tweed Dog Bed is the ultimate in dog luxury, featuring a tweed outer combined with a soft reversible inner cushion (featuring tweed on one side and soft cosy sherpa on the other). The Earthbound Traditional Tweed Dog Bed is finished with a polyester waterproof base, and is perfect for creating a cosy luxurious hideaway for your dog. ', '2', 'Beds', 'P70248L.jpg'),
(22, 'Wainwrights Adventurer Cat Igloo Bed', 28, 'Cat', 'Enabling your pet to get the best nights sleep, we''ve made sure our bedding has all the features and benefits of a comfy and cosy place to rest. Wainwright''s Cat Adventurer Igloo is an exceptionally warm and cosy bed that your pet is sure to love, warm and soft with removable snuggly inner pad.', '2', 'Beds', '7127626PL.jpg'),
(23, 'Groom Room Bath Time Silicone Dog Grooming Glove', 8, 'Dog', 'This glove is perfect for gently grooming or bathing your pet. The rubber tips softly massage the skin to stimulate natural oils which encourages a healthy coat. The adjustable Velcro strap keeps the glove securely fastened to your hand whilst grooming.', '1', 'Grooming', '7133428PL.jpg'),
(26, 'Puppy Fresh Deodorising Puppy Spray', 5, 'Dog', 'Puppy Fresh is a deodorising puppy spray enriched with vitamins and conditioners to help maintain the condition of your dogs coat.', '1', 'Grooming', '26470PL.jpg'),
(27, 'Animology Glamour Puss No Rinse Shampoo Spray Peach Fragrance', 5, 'Cat', 'Glamour Puss is a gentle no-rinse cat shampoo spray, which removes dirt and grease from your cats fur without the need to rinse. The deodorising spray also contains aloe vera to soothe and protect the skin while built in conditioners leave a cat in great condition.', '1', 'Grooming', '7118190PL.jpg'),
(28, 'VetIQ Healthy Bites Immunity Care For Small Animal Treats', 3, 'Rabbit', 'Built on research and development into the wellbeing of animals, the product offering encompasses a broad spectrum of naturally based over the counter healthcare solutions formulated in response to consumer demand and driven by a philosophy of prevention rather than cure.', '1', 'Grooming', '7121999PL.jpg'),
(29, 'Beaphar Hamster Vitamin Solution', 4, 'Hamster', 'Hamster Vitamin Solution 75ml by Beaphar is a convenient, easy to use vitamin supplement for your hamster. A concentrated vitamin solution which you simply add to the food or water bottle to give your hamster all the vitamins essential for a long and active life.', '1', 'Grooming', '14988PL.jpg'),
(30, 'Johnsons Small Animal Deodorising Shampoo', 4, 'Mouse', 'This Johnsons small animal Deodorising Shampoo is a special mild, non-irritant shampoo for small animal rabbits, guinea pigs and ferrets! This refreshing shampoo gently cleans and deodorises your furry friends coat, leaving them looking and smelling great!', '1', 'Grooming', '37401PL.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
