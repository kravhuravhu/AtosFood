-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 12:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `itemID` varchar(20) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDescription` varchar(255) DEFAULT NULL,
  `itemStock` int(11) DEFAULT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  `itemImage` varchar(255) DEFAULT NULL,
  `itemSpecs` varchar(255) DEFAULT NULL,
  `itemCategory` varchar(25) DEFAULT NULL,
  `itemTime` time DEFAULT current_timestamp(),
  `itemDate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`itemID`, `itemName`, `itemDescription`, `itemStock`, `itemPrice`, `itemImage`, `itemSpecs`, `itemCategory`, `itemTime`, `itemDate`) VALUES
('#BEV001', 'Vanilla Cappuccino', 'Creamy espresso-based beverage infused with a touch of sweet vanilla flavor, topped with frothy milk foam.', 20, 20.00, 'uploads/66756fd4b9728Vannilla cappucino.jpg', '•1-1/2 cups instant hot cocoa mix•One jar (8ounces) powdered French Vanilla non-dairy creamer.•One cup non-fat dry milk powder•One cup sugar•1/2 cup sugar•1/2 cup instant coffee granules', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV002', 'Chocolate Cappuccino', 'Delicious combination of rich espresso steamed milk, and chocolate syrup, topped with frothy foam for a creamy and indulgent drink.', -88, 25.00, 'uploads/666aeb8fd0bccChocolate cappucino.png', '•One cup chocolate liqueur•Two tablespoons maple syrup•Two cups hot brewed espresso•One ½ cups scalded whole milk.•¼ teaspoon ground cinnamon•Chocolate shavings (optional)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV003', 'Caramel Cappuccino', 'A delightful blend of espresso steamed milk, and caramel syrup, topped with a frothy foam for a sweet and creamy indulgence.', 20, 25.00, 'Uploads/6661b3e784206Caramel.jpg', '•1 tbsp (1/2 oz) Torani Caramel Syrup•1/2 cup (4oz) milk•Two shots espresso*', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV004', 'Peppermint Cappuccino', 'A refreshing twist on the classic, featuring espresso, steamed milk, and a hint of peppermint syrup, topped with frothy foam for a cool and invigorating treat.', 20, 25.00, 'uploads/666aeba8e374cPeppermint cappucino.jpg', '•2 Ninja Big Scoops, or four tablespoons ground coffee•1/2 cup milk, your choice, any type will work.•1/4 teaspoon unsweetened cocoa powder•1/8 teaspoon peppermint extract•sweetener of choice, I use a couple packets of Stevia.•crushed candy, chocolate sha', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV005', 'Cinnamon Cappuccino', 'A comforting blend of espresso steamed milk, and a dash of cinnamon syrup, topped with frothy foam for a warm and aromatic indulgence reminiscent of freshly baked treats.', 20, 30.00, 'uploads/666aebde79db5Cinnamon cappucino.jpg', '•Frothed milk•Cinnamon•Brown sugar•Espresso•Water •Vanilla extract •Whipped cream', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV006', 'Hazelnut Latte', 'A smooth and nutty beverage made with espresso, steamed milk, and hazelnut syrup, offering a delightful blend of rich coffee flavor and sweet nuttiness.', 20, 25.00, 'uploads/666af6781f3eeHazel nut cappuccino.jpg', '•Espresso•Steamed milk•Hazelnut syrup', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV007', 'Vanilla Latte', 'A creamy espresso-based drink infused with vanilla syrup and topped with steamed milk, offering a sweet and aromatic flavor profile with a smooth texture.', 20, 25.00, 'Uploads/6661b4d33d54bVanilla Latte.jpg', '•Espresso•Steamed milk•Vanilla syrup (or vanilla extract)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV008', 'Coconut Latte', 'A creamy and tropical drink made with espresso, steamed milk, and coconut syrup, providing a delightful blend of rich coffee flavor with a hint of sweet coconut essence.', 20, 30.00, 'uploads/666aec145704eCoconut latte.jpg', '•Espresso•Steamed coconut milk (or regular milk with coconut flavoring)•Coconut syrup or coconut milk (for extra coconut flavor)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV009', 'Strawberry Latte', 'A creamy coffee beverage infused with strawberry syrup, combining the rich flavor of espresso with a hint of sweet and fruity strawberry essence for a refreshing twist.', 20, 30.00, 'uploads/666af6ce95148Strawberry latte.jpg', '•Espresso•Steamed milk•Strawberry syrup or strawberry puree (for a more natural flavor)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV010', 'Pumpkin Spice Latte', 'A seasonal favorite featuring espresso, steamed milk, and pumpkin spice syrup, offering a comforting blend of warm spices like cinnamon, nutmeg, and clove, reminiscent of autumn Flavors.', 20, 35.00, 'Uploads/6661b5a95feb6Pumpkin Spice Latte.jpg', '•Espresso•Steamed milk•Pumpkin spice syrup (typically a blend of cinnamon, nutmeg, clove, and sometimes ginger)•Optional whipped cream and pumpkin spice topping', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV011', 'Coke original', 'Carbonated soft drink known for its iconic sweet and fizzy taste, created from a blend of carbonated water, sugar or high-fructose corn syrup, caramel color, caffeine, phosphoric acid, and natural flavorings, delivering a refreshing and energizing beverag', 20, 18.00, 'uploads/666aec39bd577Coca_cola_original_taste_330ml.jpg', '• Carbonated water• Sugar (or high-fructose corn syrup in some regions)• Caramel color•Phosphoric acid• Natural flavors (including caffeine)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV012', 'Coke Zero', 'Offering the same great taste but without the added sugar, making it suitable for those looking to reduce their sugar intake while still enjoying the familiar flavor and fizz of Coca-Cola.', 20, 18.00, 'uploads/666aec482b9faCoca cola zero.png', '• Carbonated water• Caramel color• Phosphoric acid• Aspartame(artificial sweetener)•Acesulfame potassium (artificial sweetener)•Natural flavors (including caffeine)\r\n', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV013', 'Fanta Orange', 'Vibrant and fruity carbonated soft drink known for its refreshing orange flavor, offering a sweet and tangy taste with a fizzy sensation, perfect for quenching thirst and satisfying cravings for a citrusy refreshment.', 20, 18.00, 'uploads/666aecc07828aFanta orange.jpg', '• Carbonated water• High fructose corn syrup (or sugar)• Citric acid• Natural flavors• Sodium benzoate (preservative)• Modified food starch• Sodium polyphosphates (emulsifier)• Glycerol ester of wood rosin (stabilizer)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV014', 'Fanta Pineapple', 'A delightful beverage evoking the feeling of being in a tropical paradise with its sweet, tangy flavor and fizzy sensation.', 20, 18.00, 'uploads/666aecd32e42eFanta Pineapple.jpg', '• Carbonated water• High fructose corn syrup (or sugar)• Citric acid• Natural flavors• Sodium benzoate (preservative)• Modified food starch• Sodium polyphosphates (emulsifier)• Glycerol ester of wood rosin (stabilizer)\r\n', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV015', 'Fanta Grape', 'Refreshing carbonated soft drink known for its bold grape flavor, offering a sweet and tangy taste with a fizzy sensation, perfect for grape lovers craving a refreshing beverage.', 20, 18.00, 'uploads/6675744883b4aFanta.jpg', 'Carbonated water; High fructose corn syrup (or sugar); Citrica acid; Natural flavors; Sodium benzoate(preservative); Modified food starch; Sodium polyphosphates; Blue(coloring)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV016', 'Crème Soda', 'A sweet and creamy carbonated soft drink with vanilla flavoring, offering a smooth and indulgent taste reminiscent of a creamy dessert, perfect for satisfying sweet cravings.', 20, 18.00, 'uploads/666aecfc27e81Sparletta Creme Soda.jpg', '• Carbonated water• Sugar• Citric acid• Sodium benzoate (preservative)• Natural flavors (often vanilla or cream soda flavor)• Tartrazine (coloring, can vary based on region)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV017', 'Sparberry', 'A unique and fruity carbonated soft drink originating from South Africa, known for its distinctively sweet and slightly spicy flavor, offering a refreshing and nostalgic taste experience.', 20, 18.00, 'Uploads/6661b8e722616Sparberry.jpg', '• Carbonated water• Sugar• Citric acid• Sodium benzoate (preservative)• Natural and artificial flavors (berry blend)• Brilliant Blue FCF (coloring)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV018', 'Spar-letta Pine nut', 'A distinctive carbonated soft drink featuring the rich and nutty flavor of pine nuts, offering a unique and flavorful beverage experience with a hint of sweetness and earthiness.', 20, 18.00, 'uploads/666aed167082aSparletta pine nut 330ml.jpg', '• Carbonated water• Sugar• Citric acid• Sodium benzoate (preservative)• Natural and artificial flavors (pineapple flavor)• Sunset Yellow FCF (coloring)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV019', 'Cappy Apple', 'A refreshing and naturally sweet beverage made from freshly pressed apples, offering a crisp and fruity taste with a hint of tartness, perfect for enjoying any time of day.', 20, 15.00, 'uploads/666aed2bd64faCappy apple.jpg', '• Freshly pressed apple juice• Water (sometimes added to adjust sweetness)• Ascorbic acid (vitamin C, to maintain color and freshness)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV020', 'Cappy Orange', 'A delicious and tangy beverage made from freshly squeezed oranges, offering a refreshing burst of citrus flavor with a balance of sweetness and acidity, perfect for starting your day or quenching your thirst.', 20, 15.00, 'uploads/6675750bce4cborange.jpg', 'Freshly squeezed orange juice; Water; Ascorbic acid (vitamin C, to maintain color and freshness)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV021', 'Cappy Tropical ', 'A flavorful blend of various exotic fruits, offering a refreshing and vibrant taste with a delightful combination of sweet and tangy flavors, reminiscent of tropical paradise.', 20, 15.00, 'uploads/666aed6ce252cCappy-Tropical.jpg', '• Blend of tropical fruit juices (such as pineapple, mango, passion fruit, etc.)• Water (to adjust sweetness and consistency)• Ascorbic acid (vitamin C, to maintain color and freshness)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV022', 'Cappy Breakfast blend', 'A delicious combination of different fruit juices, carefully blended to create a refreshing and flavorful beverage perfect for starting your day with a burst of energy and vitality.', 20, 15.00, 'uploads/666aed51d3197Cappy breakfast punch.jpg', '• Blend of various fruit juices (could include apple, orange, grapefruit, pineapple, etc.)• Water (to adjust sweetness and consistency)• Ascorbic acid (vitamin C, to maintain color and freshness)\r\n', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV023', 'Steamed milk Expresso', 'A smooth and creamy coffee drink made by combining a shot of espresso with steamed milk, resulting in a rich and velvety texture with a bold coffee flavor.', 20, 40.00, 'uploads/666aed8c13305Steamed milk expresso.jpg', '•Finely ground coffee beans•Hot water (near-boiling)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV024', 'Whipped Cream Expresso', 'A decadent coffee treat where a shot of espresso is topped with a dollop of whipped cream, creating a rich and indulgent beverage with a delightful contrast of bold coffee and creamy sweetness.', 20, 45.00, 'uploads/666aeda480c13Whipped cream expresso.png', '•Milk•Steamed to a silky texture', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV025', 'Breve with Cream Expresso', 'A luxurious coffee beverage made by combining a shot of espresso with steamed half-and-half, topped with a dollop of whipped cream, resulting in a rich and creamy drink with a bold coffee flavour.', 20, 40.00, 'uploads/666aedb8228fabreve with cream expresso.jpg', '•Espresso•Half-and-half (which is a mix of equal parts whole milk and heavy cream)•Optional whipped cream on top', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV026', 'Green Tea', 'A refreshing and antioxidant-rich beverage made from the leaves of the Camellia sinensis plant, known for its light, grassy flavor and pale green color.', 20, 20.00, 'uploads/666aee97bfe14Green tea.jpg', '• Green tea leaves• Hot water', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV027', 'Ginger Tea', 'A soothing and aromatic infusion made by steeping fresh or dried ginger root in hot water, known for its spicy, warming flavor and potential health benefits such as aiding digestion and reducing nausea.', 20, 25.00, 'uploads/666aeeb51e95cGinger tea.png', '• Fresh ginger root• Hot water', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV031', 'Original Rooibos Tea', 'Derived from the leaves of the South African rooibos plant, offers a naturally sweet and earthy flavor with hints of nuttiness, providing a caffeine-free alternative known for its smooth taste and potential health benefits.', 20, 25.00, 'uploads/666aeef15a569Rooibos-tea.jpg', '• Rooibos tea leaves (red bush tea leaves)• Hot water', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV035', 'Five Roses Chai', 'A fragrant and spiced beverage originating from India, made by brewing black tea with a blend of aromatic spices such as cinnamon, cardamom, cloves, and ginger, resulting in a warming and flavorful drink with a hint of sweetness.', 20, 20.00, 'uploads/666aef83689a5Fiveroses.jpg', '• Black tea (Assam or Ceylon)• Assorted spices (such as cinnamon, cardamom, cloves, ginger, and black pepper)• Hot water• Milk (optional, for a chai latte)', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV037', 'Aquelle water (assorted) ', 'The Aquelle range has something for everyone. Whether you like natural spring water, some sparkling flavoured bubbles or something to brighten your day; you will definitely find a drink to quench your thirst. Enjoy the exceptional taste of our natural spr', 20, 10.00, 'Uploads/6675765a3012eAquelle.jpg', 'Natural spring water; Fructose; Citric acid; Flavoring; Preservative: Sodium Benzoate; Non-nutritive sweeteners (Aspartame [contains Phenylalanine], Acesulfame K); Vitamins B3, B5, B6, B7, B9 and B12.', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV038', 'Switch', 'Caffeine; Taurine; B-Vitamins (such as B3, B6, B12); Sugar or Artificial Sweeteners (like sucralose or aspartame); Flavorings (natural and artificial); Preservatives; Colorants ', 20, 17.00, 'uploads/6682664c80111Switch.png', 'Caffeine; Taurine; Sugar; B Vitamins; Alpine Water; Artificial Flavors and Colors', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV039', 'Monster', 'Monster Energy Drink is formulated to energize and sustain, offering a potent mix of refreshment and focus for active lifestyles and busy schedules. With a variety of flavors, Monster boosts energy levels and enhances cognitive sharpness, keeping you aler', 20, 22.00, 'Uploads/667978351704cMonster Energy Drink.jpg', 'Caffeine; Taurine; Sugar; B Vitamins; Alpine Water; Artificial Flavors and Colors', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV040', 'Redbull', 'Red Bull Energy Drink provides a revitalizing boost, blending refreshment and focus for active lifestyles and busy schedules. Available in a variety of flavors, Red Bull enhances energy levels and mental clarity, ensuring you stay sharp and alert througho', 20, 24.00, 'Uploads/66797893f25ebRedbull.png', 'Caffeine; Taurine; Sugar; B Vitamins; Alpine Water; Artificial Flavors and Colors', 'Beverages', '13:32:01', '2024-07-09'),
('#BEV041', 'Powerade', 'Powerade is a hydrating sports drink designed to replenish electrolytes and enhance performance during physical activities. With various flavors available, Powerade supports hydration and provides essential nutrients, making it ideal for athletes and anyo', 20, 20.00, 'Uploads/667978d2dff39Powerade.jpg', 'Electrolytes (Sodium, Potassium, Calcium, Magnesium); Water; High Fructose Corn Syrup; Citric Acid; Natural Flavors; Salt; Potassium Citrate; Modified Food Starch; Sucralose; Acesulfame Potassium; Vitamins B3, B6, and B12', 'Beverages', '13:32:01', '2024-07-09');

--
-- Triggers `beverages`
--
DELIMITER $$
CREATE TRIGGER `BeforeBeverages` BEFORE INSERT ON `beverages` FOR EACH ROW BEGIN
    UPDATE CategoryCounts SET Count = Count + 1 WHERE Category = 'Beverages';
    SET NEW.ItemID = CONCAT('#BEV', LPAD((SELECT Count FROM CategoryCounts WHERE Category = 'Beverages'), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `itemID` varchar(20) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDescription` varchar(255) DEFAULT NULL,
  `itemStock` int(11) DEFAULT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  `itemImage` varchar(255) DEFAULT NULL,
  `itemSpecs` varchar(255) DEFAULT NULL,
  `itemCategory` varchar(25) DEFAULT NULL,
  `itemTime` time DEFAULT current_timestamp(),
  `itemDate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`itemID`, `itemName`, `itemDescription`, `itemStock`, `itemPrice`, `itemImage`, `itemSpecs`, `itemCategory`, `itemTime`, `itemDate`) VALUES
('#BRE001', 'Crispy Bacon Sandwich', 'Freshly toasted bread served with crispy bacon ', 20, 30.00, 'uploads/666ad633a60bbCrispy bacon sandwich.jpg', 'Bread (such as toasted white or whole wheat, bread sandwich rolls or ciabatta); Crispy Bacon slices; Lettuce leaves; Sliced tomatoes; Mayonnaise or aioli; Optional additions: avocado slices; cheese (like cheddar or Swiss); pickles; onions ', 'Breakfast', '13:32:01', '2024-07-09'),
('#BRE002', 'Ham and Cheese Sandwich', 'Simple toasted bread served with fresh ham and cheese', 20, 35.00, 'uploads/666ad63ea5fdbHam and cheese sandwich.jpg', 'sliced ham and cheese between two slices of bread.; Additional ingredients may include; lettuce; tomatoes; and condiments like mustard or mayonnaise, depending on personal preference', 'Breakfast', '13:32:01', '2024-07-09'),
('#BRE003', 'Cheese and Tomato Sandwich', 'Healthy toasted bread served with freshly cut tomato and cheese', 20, 35.00, 'uploads/666ad64af074cCheese_and_Tomato_sandwich.jpg', 'Bread (sliced bread, sandwich rolls, or baguette); Cheese (sliced cheese such as cheddar, Swiss, provolone, or mozzarella); Tomato (fresh tomato slices); Optional: Lettuce leaves; mayonnaise; mustard; salt, and pepper ', 'Breakfast', '13:32:01', '2024-07-09'),
('#BRE004', 'Egg and Mayo Sandwich', 'Creamy Mayo sandwich with boiled egg ', 20, 30.00, 'uploads/666ad65f6b131Egg and mayo sandwich.jpg', 'Bread (sliced bread, sandwich rolls, or baguette); Hard-boiled eggs (sliced or mashed) Mayonnaise (to taste); Optional: Salt and pepper; lettuce leaves; sliced tomatoes', 'Breakfast', '13:32:01', '2024-07-09'),
('#BRE005', 'Chicken and Mayo Sandwich', 'Tender shredded chicken served with creamy mayo', 20, 35.00, 'uploads/666ad6720dc04Chicken Mayo sandwich.jpg', 'Bread (sliced bread, sandwich rolls, or baguette); Cooked chicken (shredded or sliced); Mayonnaise; Optional: Lettuce leaves; sliced tomatoes; salt and pepper ', 'Breakfast', '13:32:01', '2024-07-09'),
('#BRE008', 'Muesli', 'Made from rolled oats, grains, nuts, seeds, and dried fruits, offering a wholesome and filling meal packed with fiber, vitamins, and minerals.', 20, 30.00, 'uploads/666ad67f97d6bMeusli 2.jpg', 'Rolled oats; Nuts (such as almonds, walnuts, or hazelnuts); Seeds (such as sunflower seeds, pumpkin seeds); Dried fruits (such as raisins, cranberries, apricots); Honey or maple syrup (for sweetness); Optional: cinnamon; vanilla extract', 'Breakfast', '13:32:01', '2024-07-09');

--
-- Triggers `breakfast`
--
DELIMITER $$
CREATE TRIGGER `BeforeBreakfast` BEFORE INSERT ON `breakfast` FOR EACH ROW BEGIN
    UPDATE CategoryCounts SET Count = Count + 1 WHERE Category = 'Breakfast';
    SET NEW.ItemID = CONCAT('#BRE', LPAD((SELECT Count FROM CategoryCounts WHERE Category = 'Breakfast'), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categorycounts`
--

CREATE TABLE `categorycounts` (
  `Category` varchar(50) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorycounts`
--

INSERT INTO `categorycounts` (`Category`, `Count`) VALUES
('Beverages', 41),
('Breakfast', 12),
('Desserts', 23),
('Lunch', 6),
('Snacks', 17);

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE `desserts` (
  `itemID` varchar(20) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDescription` varchar(255) DEFAULT NULL,
  `itemStock` int(11) DEFAULT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  `itemImage` varchar(255) DEFAULT NULL,
  `itemSpecs` varchar(255) DEFAULT NULL,
  `itemCategory` varchar(25) DEFAULT NULL,
  `itemTime` time DEFAULT current_timestamp(),
  `itemDate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`itemID`, `itemName`, `itemDescription`, `itemStock`, `itemPrice`, `itemImage`, `itemSpecs`, `itemCategory`, `itemTime`, `itemDate`) VALUES
('#DES001', 'Plain scones (Pack of 4)', 'Light and fluffy with a slightly crumbly texture, offering a buttery flavor that pairs perfectly with jam and clotted cream for a traditional afternoon tea delight.', 20, 20.00, 'uploads/666ae59eb41dfPlain scones.jpg', '• All-purpose flour• Baking powder• Salt• Unsalted butter (cold, cut into cubes)• Sugar• Milk or buttermilk\r\n', 'Desserts', '13:32:01', '2024-07-09'),
('#DES003', 'Pumpkin Spice Scone', 'A classic treat, featuring warm spices like cinnamon, nutmeg, and cloves, along with pumpkin puree, resulting in a moist and flavorful scone with a hint of autumnal sweetness.', 20, 15.00, 'uploads/666ae73e6d25bPumpkin Spice.jpg', '• All-purpose flour• Baking powder• Salt• Unsalted butter (cold, cut into cubes)• Sugar• Pumpkin puree• Pumpkin pie spice (usually a blend of cinnamon, nutmeg, ginger, and cloves)• Milk or buttermilk', 'Desserts', '13:32:01', '2024-07-09'),
('#DES004', 'Raspberry Scone', 'A delightful variation of the classic treat, filled with juicy raspberries that burst with flavor in every bite, offering a perfect balance of sweetness and tartness in a buttery and crumbly pastry.', 20, 20.00, 'uploads/666ae6cbc489aRaspberry scones.jpg', '• All-purpose flour• Baking powder• Salt• Sugar• Unsalted butter• Eggs• Milk or buttermilk• Fresh or frozen raspberries', 'Desserts', '13:32:01', '2024-07-09'),
('#DES005', 'Chocolate Chip Scone', 'Twist on the traditional treat, studded with rich and indulgent chocolate chips that melt in your mouth with every bite, offering a perfect balance of sweetness and buttery richness in every crumbly bite.', 20, 20.00, 'uploads/666ae6e450aa2pumpkin-oatmeal-chocolate-chip-cookies_8fa15cdc7ab1f214de548c670d8921f2-768x768.jpeg', '• All-purpose flour• Baking powder• Baking soda• Salt• Sugar• Unsalted butter• Eggs• Milk or buttermilk• Chocolate chips (semi-sweet or dark chocolate)\r\n', 'Desserts', '13:32:01', '2024-07-09'),
('#DES006', 'Strawberry Cupcake', 'A fluffy cupcake infused with fresh strawberry flavor, topped with creamy frosting and often garnished with a slice of strawberry, offering a burst of fruity sweetness in every bite.', 20, 15.00, 'uploads/666ae7654df62Strawberry cupcake.jpg', '• All-purpose flour• Baking powder• Salt• Unsalted butter• Sugar• Eggs• Milk or buttermilk• Fresh strawberries (pureed or finely chopped)• Optional: strawberry extract or flavoring', 'Desserts', '13:32:01', '2024-07-09'),
('#DES007', 'Chocolate Cupcake', 'A rich and indulgent dessert, featuring a moist and decadent chocolate cake topped with creamy chocolate frosting, offering a delightful explosion of cocoa flavor in every bite.', 20, 18.00, 'uploads/666ae7754701dChocolate cupcake.jpg', '• All-purpose flour• Cocoa powder• Baking powder• Baking soda• Salt• Unsalted butter• Sugar• Eggs• Milk or buttermilk• Vanilla extract', 'Desserts', '13:32:01', '2024-07-09'),
('#DES008', 'Lemon Cupcake', 'A tangy and refreshing dessert, featuring a moist and fluffy cake infused with zesty lemon flavor, topped with a light and creamy lemon frosting, offering a burst of citrusy brightness in every bite.', 20, 18.00, 'uploads/666ae78b79b84Lemon cupcake 2.jpg', '• All-purpose flour• Baking powder• Salt• Unsalted butter• Sugar• Eggs• Milk or buttermilk• Fresh lemon juice and zest• Lemon extract or flavoring\r\n', 'Desserts', '13:32:01', '2024-07-09'),
('#DES009', 'Red Velvet Cupcake', 'A moist and velvety cake with a hint of cocoa flavor, topped with a creamy and tangy cream cheese frosting, offering a rich and decadent experience with a striking red hue.', 20, 18.00, 'uploads/666ae7a119f8dRed velvet cupcake.jpg', '• All-purpose flour• Cocoa powder• Baking soda• Salt• Unsalted butter• Sugar• Eggs• Buttermilk• Red food coloring (or beetroot powder for natural coloring)• Vanilla extract• Distilled white vinegar.• Baking soda (to react with vinegar)', 'Desserts', '13:32:01', '2024-07-09'),
('#DES010', 'Poppy Seed Cupcake', 'A delightful treat featuring a moist and fluffy cake infused with tiny poppyseeds, offering a subtle nutty flavor and a unique texture, perfect for a light and flavorful dessert option.', 20, 18.00, 'uploads/666ae7bab18a9Lemon poppy seed cupcake.jpg', '• All-purpose flour• Baking powder• Salt• Unsalted butter• Sugar• Eggs• Milk or buttermilk• Poppy seeds• Almond extract (for flavor)', 'Desserts', '13:32:01', '2024-07-09'),
('#DES011', 'Banana Muffin', 'A moist and flavorful baked treat made with ripe bananas, offering a sweet and slightly tangy flavor with hints of caramelized goodness, perfect for breakfast or a snack on the go.', 20, 18.00, 'uploads/666ae7d3e156dBanana muffin.jpg', '• All-purpose flour• Baking powder• Baking soda• Salt• Unsalted butter or vegetable oil• Granulated sugar• Eggs• Ripe bananas, mashed.• Milk or yogurt• Vanilla extract', 'Desserts', '13:32:01', '2024-07-09'),
('#DES012', 'Chocolate Muffin', 'A rich and indulgent baked treat filled with cocoa goodness, offering a moist and fluffy texture with bursts of chocolate chips or chunks in every bite, perfect for satisfying your sweet tooth any time of day.', 20, 18.00, 'uploads/666ae7e92f70eChocolate Muffin.jpg', '• All-purpose flour• Cocoa powder• Baking powder• Baking soda• Salt• Unsalted butter or vegetable oil• Granulated sugar• Eggs• Milk or buttermilk• Chocolate chips or chunks', 'Desserts', '13:32:01', '2024-07-09'),
('#DES013', 'Blueberry Muffin', 'A classic baked treat featuring plump and juicy blueberries nestled within a moist and tender muffin batter, offering a burst of sweet and tangy flavor in every bite, perfect for a delicious breakfast or snack.', 20, 18.00, 'uploads/666ae7fba77e5Blueberry muffin 2.jpg', '• All-purpose flour• Baking powder• Baking soda• Salt• Unsalted butter or vegetable oil• Granulated sugar• Eggs• Milk or yogurt• Fresh or frozen blueberries', 'Desserts', '13:32:01', '2024-07-09'),
('#DES014', 'Raspberry Muffin', 'A delightful baked treat featuring tangy and juicy raspberries folded into a moist and fluffy muffin batter, offering a burst of fruity flavor with a hint of tartness in every bite, perfect for a delicious breakfast or snack.', 20, 18.00, 'uploads/66756fc5e6c2fRaspberyy muffin.jpg', '• All-purpose flour• Baking powder• Baking soda• Salt• Unsalted butter or vegetable oil• Granulated sugar• Eggs• Milk or yogurt• Fresh or frozen raspberries', 'Desserts', '13:32:01', '2024-07-09'),
('#DES015', 'Cappuccino Muffin', 'A delicious baked treat infused with the flavors of rich espresso and creamy milk, offering a delightful combination of coffee flavor and moist muffin texture, perfect for a morning pick-me-up or an indulgent', 20, 18.00, 'uploads/66756fb75bf46Cappuccino-Muffins.jpg', '• All-purpose flour• Baking powder• Baking soda• Salt• Unsalted butter• Granulated sugar• Eggs• Milk or buttermilk• Instant espresso powder or finely ground coffee• Cocoa powder (optional, for chocolate flavor)', 'Desserts', '13:32:01', '2024-07-09'),
('#DES016', 'Custard+ Jelly', 'A classic dessert consisting of wobbly, fruity jelly topped with creamy, vanilla-flavored custard. It offers a delightful combination of sweet and creamy textures with a burst of fruity flavor, perfect for satisfying dessert cravings.', 20, 23.00, 'uploads/666ae8420d52aCustard and jelly.jpg', '• Milk• Sugar• Egg yolks• Cornstarch or custard powder• Vanilla extract or flavoring', 'Desserts', '13:32:01', '2024-07-09'),
('#DES017', 'Jelly', 'A wobbly and colorful dessert made from fruit juice, gelatin, and sugar, offering a sweet and refreshing treat with a smooth and jiggly texture.', 20, 18.00, 'uploads/666ae84f44718Jelly.jpg', '• Flavored gelatin powder (such as strawberry, raspberry, etc.)• Hot water• Cold water', 'Desserts', '13:32:01', '2024-07-09'),
('#DES018', 'Baked biscuits', 'Buttery and crumbly treats made with simple ingredients like butter, flour, and sugar. They offer a rich and indulgent flavor with a delicate texture, perfect for enjoying with a cup of tea or as a delightful snack on their own.', 20, 15.00, 'uploads/666ae85cf3ca3Baked biscuits.jpg', '• All-purpose flour• Unsalted butter• Sugar• Baking powder• Salt• Milk or water (for dough consistency)• Optional: vanilla extract or other flavorings', 'Desserts', '13:32:01', '2024-07-09'),
('#DES020', 'Lemon cremes Biscuits', 'Delightful treats featuring a delicate biscuit filled with smooth and tangy lemon creme, offering a refreshing burst of citrus flavor with a hint of sweetness, perfect for indulging in a light and zesty snack.', 20, 20.00, 'uploads/666ae881d530eLemon cream biscuits.png', '• All-purpose flour• Unsalted butter• Sugar• Lemon zest• Lemon juice• Baking powder• Salt• Milk or water (for dough consistency)• Optional: lemon extract or lemon curd for extra flavor\r\n', 'Desserts', '13:32:01', '2024-07-09'),
('#DES021', 'Short Bread Biscuits ', 'They typically contain simple ingredients like butter, flour, and sugar, offering a delicate and indulgent flavor, perfect for enjoying with a cup of tea or as a delightful snack on their own.', 20, 12.00, 'uploads/666ae8d5a9822Short bread biscuits.jpg', '• All-purpose flour• Unsalted butter• Sugar• Cornstarch (or rice flour, for a crumbly texture)• Optional: vanilla extract or lemon zest (for flavor)', 'Desserts', '13:32:01', '2024-07-09'),
('#DES022', 'Chocolate Chip Biscuits', 'Classic treats filled with chunks or chips of rich, creamy chocolate, offering a perfect balance of sweetness and decadence in every bite. They`re a beloved favorite for chocolate lovers everywhere, perfect for satisfying sweet cravings.', 20, 15.00, 'Uploads/666ae91ebb52eChocolate chip cookies.jpg', '• All-purpose flour• Unsalted butter• Sugar• Chocolate chips (semi-sweet or dark chocolate)• Baking powder• Salt• Milk or water (for dough consistency)• Optional: vanilla extract', 'Desserts', '13:32:01', '2024-07-09');

--
-- Triggers `desserts`
--
DELIMITER $$
CREATE TRIGGER `BeforeDesserts` BEFORE INSERT ON `desserts` FOR EACH ROW BEGIN
    UPDATE CategoryCounts SET Count = Count + 1 WHERE Category = 'Desserts';
    SET NEW.ItemID = CONCAT('#DES', LPAD((SELECT Count FROM CategoryCounts WHERE Category = 'Desserts'), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `itemID` varchar(20) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDescription` varchar(255) DEFAULT NULL,
  `itemStock` int(11) DEFAULT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  `itemImage` varchar(255) DEFAULT NULL,
  `itemSpecs` varchar(255) DEFAULT NULL,
  `itemCategory` varchar(25) DEFAULT NULL,
  `itemTime` time DEFAULT current_timestamp(),
  `itemDate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`itemID`, `itemName`, `itemDescription`, `itemStock`, `itemPrice`, `itemImage`, `itemSpecs`, `itemCategory`, `itemTime`, `itemDate`) VALUES
('#LUN001', 'Pap + Wors ', 'Traditional South African dish featuring maize meal with a flavorful sausage.', 20, 40.00, 'uploads/666adc6a65558Pap and Wors meal.jpg', '600-gram boerewors (South African sausage); Two cups water; 1 1/2 cups maize meal (pap); Salt and pepper; ¾ cup (200 ml) grated; Cheddar or Tasty cheese; Optional: ¼ cup (60 ml) frozen corn to add to porridge\r\n', 'Lunch', '13:32:01', '2024-07-09'),
('#LUN002', 'Rice + Veggies + Quarter Chicken', 'Wholesome meal comprising rice, vegetables and tender quarter chicken.', 20, 45.00, 'uploads/666adc7a81394Rice veggies and chicken.jpg', 'Perfectly cooked rice; a colourful mix of fresh vegetables; flavourful chicken to satisfy your cravings.', 'Lunch', '13:32:01', '2024-07-09'),
('#LUN003', 'Burger (Chicken or Beef)', 'Juicy Burger of your choice, served with a side of fries', 20, 50.00, 'uploads/666adc8667661Burger.jpg', '• Ground chicken (or chicken breast, minced)• Breadcrumbs or crushed crackers (optional, for binding)• Egg (optional, for binding)• Onion finely chopped.• Garlic, minced.• Salt and pepper, to taste• Olive oil (for cooking)• Burger buns• Lettuce and tomato', 'Lunch', '13:32:01', '2024-07-09'),
('#LUN004', 'Rice + Stew + Veggies ', 'Homely stew with boiled rice served with the best cut of veggies', 20, 55.00, 'uploads/666adc912b9darice stew.jpeg', 'Tender, aromatic rice pairs perfectly with hearty stew; a colourful assortment of fresh vegetables', 'Lunch', '13:32:01', '2024-07-09'),
('#LUN005', 'Chicken Fillet', 'Tender Chicken Fillet cooked to your preference ', 20, 45.00, 'uploads/666adca005596Chicken fillet.png', 'A delectable dish featuring tender, juicy chicken fillet cooked to perfection', 'Lunch', '13:32:01', '2024-07-09'),
('#LUN006', 'Braai Pack (Chicken, Steak, Wors and Lamb)', 'Amazing 4-piece meat charred to your desired perfection', 20, 40.00, 'uploads/66756ff1a9a7fBraai pack.jpg', 'Chicken; steak; wors (sausage); lamb', 'Lunch', '13:32:01', '2024-07-09');

--
-- Triggers `lunch`
--
DELIMITER $$
CREATE TRIGGER `BeforeLunch` BEFORE INSERT ON `lunch` FOR EACH ROW BEGIN
    UPDATE CategoryCounts SET Count = Count + 1 WHERE Category = 'Lunch';
    SET NEW.ItemID = CONCAT('#LUN', LPAD((SELECT Count FROM CategoryCounts WHERE Category = 'Lunch'), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `userID` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `datePosted` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`userID`, `name`, `surname`, `comment`, `rating`, `datePosted`) VALUES
(1, 'John', 'Doe', 'Great food and service!', 5, '2024-07-04'),
(2, 'Alonzo', 'Diale', 'The most amazing and flavourfull meals', 5, '2024-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `itemID` varchar(20) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDescription` varchar(255) DEFAULT NULL,
  `itemStock` int(11) DEFAULT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  `itemImage` varchar(255) DEFAULT NULL,
  `itemSpecs` varchar(255) DEFAULT NULL,
  `itemCategory` varchar(25) DEFAULT NULL,
  `itemTime` time DEFAULT current_timestamp(),
  `itemDate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`itemID`, `itemName`, `itemDescription`, `itemStock`, `itemPrice`, `itemImage`, `itemSpecs`, `itemCategory`, `itemTime`, `itemDate`) VALUES
('#SNA001', 'Lays Sour cream chives', 'Made with tangy sour cream and fragrant chives, offering a flavorful and creamy combination perfect for satisfying snack cravings with a hint of zesty freshness.', 20, 18.00, 'uploads/666adee37c9bbLays sour cream & onion.png', 'Potatoes• Vegetable oil• sour cream powder; onion powder; garlic powder; chive flakes; salt; sugar; natural flavors; additional spices and herbs', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA002', 'Lays Salted', 'Seasoned with salt, offering a satisfying and crispy texture with a hint of saltiness, perfect for satisfying cravings for a quick and simple snack.', 20, 18.00, 'Uploads/6661c2ef35380Lays Salted.jpg', 'Potatoes; Vegetable oil; Salt', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA003', 'Lays Cheese and Onion ', 'Flavored with the pungent and aromatic taste of onions, offering a crispy and flavorful experience with a hint of sweetness and tanginess, perfect for satisfying snack cravings with a punch of flavor.', 20, 18.00, 'uploads/666aded40678eOnion Chesse Lays.jpg', '•Potatoes•Vegetable oil•Onion and cheese seasoning', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA004', 'Lays Thai Chilli', 'Spicy treats infused with the fiery heat of Thai chili peppers, offering a bold and intense flavor with a hint of sweetness and tanginess, perfect for those who enjoy a fiery kick in their snacks.', 20, 18.00, 'uploads/666ae35602dbdLay-s-Thai-Sweet-Chilli.jpg', '• Potatoes• Vegetable oil• Thai chili seasoning', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA005', 'Simba Salt Vinegar', 'Tangy treats seasoned with a combination of salt and vinegar, offering a satisfying crunch with a burst of sourness and savory flavor, perfect for those who enjoy a bold and tangy snack option.', 20, 18.00, 'uploads/6682688e8a0cdSimba salt and vinegar.jpg', '• Potatoes• Vegetable oil (such as sunflower or palm oil)• Salt & vinegar seasoning', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA006', 'Simba Fruit Chutney', 'flavorful treats featuring a combination of sweet, juicy fruits and tangy chutney, offering a delightful balance of sweetness and tartness with a hint of spice, perfect for those craving a unique and satisfying snack experience.', 20, 18.00, 'uploads/666adef1b692eSimba Fruit Chutney.jpg', '• Potatoes• Vegetable oil• Fruit chutney seasoning', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA007', 'Simba Barbeque', 'Tangy taste of barbecue seasoning, offering a satisfying crunch with a rich and bold flavor reminiscent of outdoor grilling, perfect for those who enjoy a savory and indulgent snack option.', 20, 18.00, 'uploads/666adeff28fceSimba Smoked beef.jpg', '• Potatoes• Vegetable oil• Barbecue seasoning', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA008', 'Simba Cheese', 'A deliciously cheesy flavor and a satisfying crunch, perfect for cheese lovers craving a convenient and tasty snack option.', 20, 18.00, 'uploads/666adf12ae5a0Simba-Creamy-Cheddar-Flavoured-Potato-Chips-125g.png', '• Potatoes• Vegetable oil• Cheese seasoning', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA009', 'Astros', 'Colorful candies featuring a crunchy shell filled with a smooth and creamy center, offering a burst of sweetness and a satisfying texture in every bite, perfect for indulging in a fun and flavorful treat.', 20, 18.00, 'uploads/666adf30da740Astro sweets.png', '• Sugar• Glucose syrup• Hydrogenated vegetable fat (palm kernel oil)• Whey powder (from milk)• Cocoa powder', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA010', 'Wine Gums', 'Chewy candies with a fruity flavor, inspired by various wine flavors but containing no alcohol. They come in assorted colors and shapes, offering a deliciously sweet and tangy treat reminiscent of classic confectionery delights.', 20, 18.00, 'uploads/666adf446e7b0Maynards wine gums.png', '• Glucose syrup (from wheat or corn)• Sugar• Modified potato starch• Gelatin (from beef)•Water• Citric acid (E330)• Fruit and vegetable concentrates', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA011', 'Jelly Babies', 'Soft and chewy candies shaped like small babies, featuring a fruity flavor and a dusting of powdered sugar. They offer a delightful combination of sweetness and chewiness, perfect for satisfying your sweet tooth.', 20, 18.00, 'uploads/666adf5d19c60Maynards jelly babies.png', '• Sugar• Glucose syrup• Water• Gelatin (from beef)• Corn flour• Citric acid (E330)• Flavorings• Colors (anthocyanins, vegetable carbon, paprika extract, curcumin)• Plant concentrates (spinach, nettle)', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA012', 'Jelly Tots', 'Small, soft, and chewy candies with a fruity flavor, offering a burst of sweetness in every bite. Their colorful appearance and irresistible taste make them a popular choice among candy enthusiasts of all ages.', 20, 18.00, 'uploads/668268a2407b8Jelly tots.webp', '• Glucose syrup• Sugar• Modified maize starch.• Water• Gelatin (from beef)• Acids (citric acid, tartaric acid)• Flavorings• Fruit and vegetable concentrates (blackcurrant, carrot)• Vegetable oils (coconut, palm kernel)• Glazing agents', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA013', 'KitKat', 'Crispy wafer fingers coated in smooth milk chocolate. Its distinctive snap and rich, creamy flavor make it a beloved favorite worldwide, perfect for indulging in a satisfyingly sweet break.', 20, 16.00, 'uploads/666ae5460da40Kit kat 2.png', '• Sugar• Wheat flour• Cocoa butter• Nonfat milk• Chocolate• Palm kernel oil• Lactose (milk)• Milk fat', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA014', 'Lunch bar', 'A delicious confectionery treat consisting of a chewy caramel and crunchy peanut filling, covered in smooth milk chocolate. Its combination of sweet, salty, and nutty flavors makes it a satisfying snack for any time of day.', 20, 17.00, 'uploads/666adf9ca0864Lunch-bar-23g.jpg', '• Caramel (glucose syrup, skimmed sweetened condensed milk (milk, sugar), sugar, water, hydrogenated coconut oil, butter (milk), emulsifiers (mono and diglycerides of fatty acids, sunflower lecithin), salt, natural flavoring)• Peanuts• Crisp Rice', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA015', 'Crunchie', 'A delectable treat featuring a honeycomb toffee center covered in smooth milk chocolate. Its unique combination of crispy texture and sweet, buttery flavor makes it a beloved favorite for satisfying sweet cravings.', 20, 16.00, 'uploads/666adfa676c5acrunchie chocolate bar.jpg', '• Sugar• Glucose syrup• Cocoa butter• Cocoa mass• Skimmed milk powder• Whey permeates powder (from milk)• Palm oil• Milk fat', 'Snacks', '13:32:01', '2024-07-09'),
('#SNA017', 'Dairy milk chocolate 300g', 'Smooth and creamy bars made from high-quality milk chocolate, offering a rich and indulgent flavor with a melt-in-your-mouth texture. They`re a beloved classic enjoyed by chocolate enthusiasts worldwide.', 20, 28.00, 'Uploads/666ae1deaf228Dairy milk bar 2.jpg', '• Milk• Sugar• Cocoa butter• Cocoa mass• Vegetable fats (palm, shea)• Emulsifiers (E442, E476)• Flavorings', 'Snacks', '13:32:01', '2024-07-09');

--
-- Triggers `snacks`
--
DELIMITER $$
CREATE TRIGGER `BeforeSnacks` BEFORE INSERT ON `snacks` FOR EACH ROW BEGIN
    UPDATE CategoryCounts SET Count = Count + 1 WHERE Category = 'Snacks';
    SET NEW.ItemID = CONCAT('#SNA', LPAD((SELECT Count FROM CategoryCounts WHERE Category = 'Snacks'), 3, '0'));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `categorycounts`
--
ALTER TABLE `categorycounts`
  ADD PRIMARY KEY (`Category`);

--
-- Indexes for table `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`itemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
