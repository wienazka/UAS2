-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:16 AM
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
-- Database: `db_moleapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `difficults`
--

CREATE TABLE `difficults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` enum('easy','medium','hard') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `difficults`
--

INSERT INTO `difficults` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'easy', '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(2, 'medium', '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(3, 'hard', '2023-06-30 23:18:05', '2023-06-30 23:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorits`
--

CREATE TABLE `favorits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hero_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `notes` text NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorits`
--

INSERT INTO `favorits` (`id`, `user_id`, `hero_id`, `date`, `notes`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2023-10-20', 'I like when used skill 1 and it looks slippery when i wear it.', 9.00, '2023-06-30 23:18:05', '2023-07-01 01:03:14'),
(2, 3, 1, '2023-12-12', 'This hero so annoying for enemy.', 9.10, '2023-06-30 23:18:05', '2023-07-01 01:02:18'),
(6, 5, 3, '2023-07-02', 'This can bring me to glory.', 8.80, '2023-07-01 17:15:57', '2023-07-01 17:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `weapon` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `special_id` bigint(20) UNSIGNED NOT NULL,
  `difficult_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `poster`, `weapon`, `role_id`, `special_id`, `difficult_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Vexana', '1688257218.webp', 'Duke Atticus\' Scepter', 2, 2, 2, 'Vexana was the majestic ruler of Necrokeep, the gentle mother of the undead, but also the only glimmer of light that penetrated the Mist, bringing hope to this cursed land shunned by both life and death.  Undying Hope Princess Vexana Gaius had never set foot out of Lumina City, nor did she have any desire to do so. The Moniyan capital was warm, opulent, and bursting with life. A ghastly fortress in the southern hinterlands was the last place she intended to spend the rest of her life in.  On the other hand, she knew she was bound to her father\'s will. Duke Atticus of Ridgeburg had offered the House of Gaius a union through marriage, and Lord Gaius deemed Vexana the most suitable match. And now, she had found herself alone in her carriage on a long ride south.', '2023-06-30 23:18:05', '2023-07-01 17:20:18'),
(2, 'Lancelot', '1688194090.webp', 'Sword', 1, 5, 2, 'As the eldest son of Duke Baroque, Lancelot was born rebellious. Dead set on resisting the political marriage arranged for him by his father, he traveled the country and led a licentious life instead. After being wounded at a drunken brawl in a tavern, Lancelot was rescued by Odette and finally came to realize what his heart truly yearned for. The prodigal son made a repentant return and thus began his adventure across the Land of Dawn.In the [southwest] of the Moniyan Empire [lays] Castle Gorge that had fallen into decline due to the depletion of its famed gold mines.  As the oldest noble in the Empire, House Baroque ruled over Castle Gorge. The eldest son of Duke Baroque—Lancelot was a handsome young man with [unmatched] sword skills. He\'d received an all-round good education but also inherited his father\'s snobbery and haughtiness.  House Baroque had been in decline for years, and the duke was relying on loans to keep up a [façade]. To revive his family, the duke came up with a brilliant plan—to choose a d', '2023-06-30 23:18:05', '2023-06-30 23:48:10'),
(3, 'Lesley', '1688198282.webp', 'Black Vulture', 3, 16, 2, 'Lesley grew up in the Vance household, where her father presided over the noble family\'s security. During an unexpected attack by a rival family, Lesley\'s father was killed. As the assailants approached the Vance household, Lesley took up her father\'s black long rifle and fulfilled her late father\'s mission. Tears rolled down Lesley\'s cheeks as she fired shot after shot, surprisingly, each one taking down an assassin. The final tear came as the final shot took down the last of the rival family\'s men.  Lesley was adopted by the Vance family, with the patriarch of the noble house even putting their sole heir, Harley under her tutelage. Harley, was a natural troublemaker, who used his talents in magic to unintentionally cause trouble for the Vance household. Only Lesley could keep Harley under control. Harley\'s troublemaking streak was the last part of warmth within Lesley\'s conscience.After hearing about how Harley had travelled to the dangerous Land of Dawn after defeating the Boss of Dark Magic, Lesley follow', '2023-06-30 23:18:05', '2023-07-01 00:58:02'),
(4, 'Hayabusa', '1688256658.jpg', 'Udumbara', 1, 23, 2, 'Hayabusa is the head of the Shadow Sect\'s second son. Since childhood, he grew up under his father\'s iron-handed rule, and while his ninjutsu could never rival that of his brother, he was a kind friend and family member to him. When Hayabusa learned that his brother had been harmed by Hanzo, he resolved to spend the rest of his days mastering ninjutsu, in order to hunt down and exact revenge upon him.In the north of the Cadia Riverlands there lies a thick forest within a canyon. All around is aesthetic beauty, yet with a harsh and dangerous air. Myriad waterfalls flow like lengths of white silk, the water resounding throughout the area as it\'s splashed high into the heavens. When the wind picks up, fog and cherry blossoms float in the air—this is the home of the ninja, the Scarlet Shadow', '2023-07-01 17:09:34', '2023-07-01 17:10:58'),
(6, 'Tigreal', '1688988685.webp', 'Hammer', 5, 15, 1, 'Tigreal is a fearless tank who excels at crowd control and initiating team fights.', '2023-07-10 04:30:12', '2023-07-10 04:31:25'),
(7, 'Hylos', '1688989003.webp', 'Staff', 5, 15, 2, 'He lives in the Misty Mountains and belongs to the Centaur race. He has the ability to convert natural magic into life force, and at the same time he can continuously punish any enemy who invades the Misty Mountains by consuming his own life force.', '2023-07-10 04:36:43', '2023-07-10 04:36:43'),
(8, 'Johnson', '1688989218.webp', 'Fist', 5, 7, 2, 'Johnson, with a hardy constitution as solid as a rock, ran through the dome stadium like a heavy truck, the cheers of girls bursting from everyhere. He led his team to lift the champion\'s trophy and achieved the highpoint of his life as a superstar quarterback with millions of fans. However, fortune is always fickle. A little girl suddenly rushed into the road while Johnson was driving his sports car. To avoid hitting the little girl he swerved and severely crashed his car. A massive hemorrhage was going to take his life quickly.', '2023-07-10 04:40:18', '2023-07-10 04:40:18'),
(9, 'Grock', '1688989441.webp', 'Hammer', 5, 12, 2, 'The stone man who signed a contract with the Ancient Ones has a kind-hearted nature and infinite power. He sleeps most of his life. After Grock woke up, he found that the Ancient Ones he was guarding had disappeared, so he carried the Castle of the Ancient Ones on his shoulders and walked out of the mountains to find the whereabouts of the Ancient Ones.', '2023-07-10 04:44:01', '2023-07-10 04:44:01'),
(10, 'Angela', '1688999586.webp', 'Wand', 8, 14, 1, 'Dr. Baker was one of the co-founders of Laboratory 1718, an institution created with the aim of bringing peace to the world. But as his colleagues, that is, the other scientists fell deeper and deeper into their depraved human weaponization experiments, Dr. Baker felt he had no choice but to leave all this behind and pursue a new project. Renouncing the questionable ethics of human experimentation, he endeavored to create a new kind of lifeform, solely from a mechanical skeleton, puppet strings, and synthetic skin. Finally, a new generation of artificial life was born. Dr. Baker firmly believed that, love and hope were the greatest inventions of mankind. So[,] he programmed the world\'s most moving stories into the heart of his new creation, transforming her into an android[-]based robot, meant for helping others.', '2023-07-10 07:32:30', '2023-07-10 07:33:06'),
(11, 'Kaja', '1688999805.webp', 'Gloves', 8, 15, 2, 'Living in the Celestial Palace where the gods inhabit, he is the leader of the Nazar who is responsible for guarding the Celestial Palace. Being the incarnation of the Eagle Angel, he resists the Empire\'s invasion of the Celestial Palace holding a divine whip.', '2023-07-10 07:36:45', '2023-07-10 07:36:45'),
(12, 'Rafaela', '1688999939.webp', 'Staff', 8, 14, 1, 'Rafaela and her elder brother Argus are both angels, but Argus was treated differently because of his status as a male target. All praise was given to Rafaela, and all criticism was left to Argus. After a series of events that were left to ferment, rifts appeared in the relationship between the two siblings. Argus finally fell into the Abyss, but was helpless to do anything about. She is an angel whom people admire, but her elder brother continues to perish in pain.', '2023-07-10 07:38:59', '2023-07-10 07:38:59'),
(13, 'Estes', '1689000208.webp', 'Staff', 8, 14, 1, 'The Elf King, who ruled the Moon Elves, fell into a deep sleep after contracting a serious injury of the Second Plane War. When the moon elves were once again in imminent danger because of the awakening of the abyss, he woke up early on a night of lightning and Thunder.', '2023-07-10 07:43:28', '2023-07-10 07:43:28'),
(14, 'Kagura', '1689000823.webp', 'Umbrella', 2, 23, 3, 'There was once an Onmyouji Master named Seimei, so powerful that he could control spirits and even bring the dead back to life. Many legends were told about him: some said he followed the Great Dragon to the Dragon Altar and learned the greatest yin yang arts, some said he once assisted the first Akakage in sealing the demonic Hanekage, and some even said he\'d lived to this day with secret yin yang arts...  For years, the Seimei Umbrella lay quietly inside the shrine. Every year at the memorial for Seimei, people would sincerely pray to it on their knees, wishing for better mastery of the yin yang arts. But centuries passed, and the Seimei Umbrella never once showed any miracle.  Everything was changed when Kagura the descendant of Seimei, stepped into the shrine to pray for the first time.', '2023-07-10 07:53:43', '2023-07-10 07:53:43'),
(15, 'Cyclops', '1689001052.webp', 'Orb', 2, 8, 2, 'One day, during one of Cyclops\'s space travels, he arrived at the Land of Dawn and found, much to his surprise, that there were many strong opponents, waiting for him to defeat. Cyclops believed that where he went and what he saw, he would conquer. With the powerful magical powers of planetary motion, by his side, Cyclops ventured into the Land of Dawn, deciding that he\'d bring down his name as one of the greatest heroes, that there ever was.', '2023-07-10 07:57:32', '2023-07-10 07:57:32'),
(16, 'Harley', '1689001255.webp', 'Cards', 2, 23, 2, 'There lived a famous young mage, Harley, in the Lion Academy of Magical City. He is blessed by the Magical Goddess and as the star of the Academy, he is able to learn quickly and master any magical spell.', '2023-07-10 08:00:55', '2023-07-10 08:00:55'),
(17, 'Odette', '1689001401.webp', 'Staff', 2, 23, 1, 'Innocent princess that grew up in the Swan Castle and genius mage that excels in sword and scepter. As the daughter of Prince Alvin, Princess Odette was a romantic that seemed a well-behaved, obedient lady but actually yearned for adventures instead. After she became acquainted with Lancelot and rescued him in a duel ruckus, Odette slowly became aware of her own feelings towards Lancelot. Finally, she made the decision to leave the Swan Castle and set out on an adventure in search of her loved one.', '2023-07-10 08:03:21', '2023-07-10 08:03:21'),
(18, 'Claude', '1689001565.webp', 'Pistols', 3, 5, 3, 'Claude grew up living in Los Pecados. The circumstances in his life forced him into becoming an incredible thief. But he was used by Kane and went to prison and chains. In prison, he met Merlin, the god of thieves, and inherited his mantle, successfully escaping from prison. After completing an agreement with Merlin, Claude returned to Los Pecados with his new partner Dexter, ready to take revenge on Kane.', '2023-07-10 08:06:05', '2023-07-10 08:06:05'),
(19, 'Granger', '1689001668.webp', 'Guns', 3, 23, 2, 'He is a bard who wanders all over the world and demon hunter at the same time. He became an orphan in the war between the Empire and the Abyss, so he [develops] a massive hit run for the Abyss and the Demons. There are often legends about him among the Demons―as soon as you hear the miserable and sad music in the open country, run away quickly, because it may be a death song written just for you.', '2023-07-10 08:07:48', '2023-07-10 08:07:48'),
(20, 'Beatrix', '1689001784.webp', 'Guns', 3, 5, 3, 'Yet becoming the best scientist was not something Beatrix placed any great importance in. She was born in Castle Gorge in the Moniyan Empire, to a family of merchants. For generations, her family had already been well established as a wealthy merchant family business in the empire. In order to maintain their huge trade network, Beatrix\'s parents often had little choice but to travel all around the Land of Dawn on business, leaving the young Beatrix in the care of their loyal butler, Morgan.', '2023-07-10 08:09:44', '2023-07-10 08:09:44'),
(21, 'Karrie', '1689002152.webp', 'Boomerang', 3, 5, 3, 'Alaghat is a mysterious high-tech empire, which is home to the strange race of Yasson. With human looks but deformed feet, they are agile and born to fight. They excel at the art of technology too, and had built themselves a great civilization with enough power to defend against or invade any other nation. Since Karrie was young, she was truly gifted and went through cruel training to become an excellent, but arrogant warrior leader. However at the same time, she had also become void of all emotions and had almost turned into a machine. One time, she was too overconfident in battle and this resulted in her becoming, seriously injured. A prophet from another race saved her and injected his consciousness into her brain. Since then, a voice had been echoing within her head, revealing to her that the end of the Yasson empire was imminent and the race would soon become extinct. Still dazed from this near-death experience, Karrie couldn’t believe it. But she started to suspect the prophecy after returning to her empire.. Finally, Karrie decided to change the future and went into the Land of Dawn, wondering what kind of destiny was waiting for her?', '2023-07-10 08:11:51', '2023-07-10 08:15:52'),
(22, 'Fanny', '1689002102.webp', 'Blade', 1, 23, 3, 'Fanny is the younger sister of Tigreal, who grew up under the protection of her family and her elder brother since she was a child. But Tigreal took the blame for a mistake in battle and left home. Disregarding obstructions from her family, Fanny joined the army, and through her own designed weapons, she successfully completed one task after another, becoming an outstanding fighter who can take care of herself.', '2023-07-10 08:15:02', '2023-07-10 08:15:02'),
(23, 'Gussion', '1689002304.webp', 'Dagger', 1, 23, 3, 'House Paxley ruled over Castle Aberleen in the south of Moniyan. Generations of the house had guarded these areas for the Moniyan Empire, defending against the invasion of the abyss.  Around a thousand years ago, House Paxley was granted the dukedom during the rule of the legendary mage Valentina.  Many horrifying stories were told across the Moniyan Empire about House Paxley\'s use of forbidden magic, and so people would shy away from any Paxley they met.  But Gusion Paxley was an exception.', '2023-07-10 08:18:24', '2023-07-10 08:18:24'),
(24, 'Martis', '1689002483.webp', 'Sword', 4, 16, 3, 'The Shura clan have thrived in isolation for countless generations, in the Arcapada universe. Their men, renowned for being the world\'s bravest fighters, and their women famed for being the world\'s greatest beauties. At the heart of the Shura clan\'s beliefs lies the legend of the Three Thousand Worlds. The legends speaks of three thousand secret worlds, which upon entering, one must face various levels of psychic and physical trials and advance to world after world upon victory. The people of the Shura clan had discovered a way to enter these worlds, and only those who have conquered over three hundred worlds could be granted the title of Ashura, raising them to the level of a demigod in the eyes of their people. However, in the innumerable eons of Shura history, none managed to conquer the fabled three thousand world, until Martis appeared.', '2023-07-10 08:21:23', '2023-07-10 08:21:23'),
(25, 'Minsitthar', '1689002610.webp', 'Spear', 4, 12, 2, 'A prince of the Cadia Riverlands\' Mahar Pura, good at fighting and winning. He was expelled by his father because of a heretical love affair he had. When his brother raised the flag of rebellion, Minsitthar, who was in exile, returned to his motherland, put down the rebellion and became the new king.', '2023-07-10 08:23:30', '2023-07-10 08:23:30'),
(26, 'Yu Zhong', '1689002735.webp', 'Spiked Cloak', 4, 7, 3, 'A reincarnation of the Black Dragon, but Yu Zhong had no memory of the Black Dragon at first. After the Great Dragon accepted him as an apprentice, Yu Zhong went to the Land of Dawn in search of adventure where he met Luo Yi and was awakened by her. After that Yu Zhong rushed into the Forbidden Area to get back the reverse scale [belonging] to the Black Dragon and became the complete Black Dragon.', '2023-07-10 08:25:35', '2023-07-10 08:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_27_064310_create_roles_table', 1),
(6, '2023_06_28_121725_create_heroes_table', 1),
(7, '2023_06_29_053155_create_favorits_table', 1),
(8, '2023_07_01_050126_create_specials_table', 1),
(9, '2023_07_01_052140_create_difficults_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Assasin', 'An assassin is an agile hero that specializes in killing or disabling roaming targets picking them of as they try to replenish HP. Focused on infiltration, deception, and mobility, assassins are opportunistic hunters who find favorable moments within a fight before jumping into the fray. Regardless of the size of the enemy team, assassins specializes in positioning and artful killing. They strike when the time is right – no sooner, no later. Assassins are more suitable to be played by experienced players as they have low HP and high burst damage. They are ideal for taking out opponents easily, but are easier to be killed due to bad positioning and wrong timing.', '2023-06-30 23:18:05', '2023-06-30 23:49:07'),
(2, 'Mage', 'A magician (abbreviated as mage) is a hero with a longer range, ability-based area of effect damage, and crowd control that they may utilize to strike from a distance. Mages primarily focus on magic skills that deals magic damage, usually burst damage, and as a consequence, they spend a lot of gold on equipment that allows them to do more damage and have shorter skill cooldowns.  Though mages typically focus on killing prime targets in combat, they can also use their innate crowd control and utility to manipulate opponents, protecting their team from them or setting them up for a takedown, and in the right circumstances, can damage and control multiple enemies at the same time. Regardless of their might, mages are fundamentally frail and succumb fast to direct attacks.', '2023-06-30 23:18:05', '2023-06-30 23:49:32'),
(3, 'Marksman', 'Marksman are ranged heroes whose power is almost entirely based on their basic attacks: by using their reach to land massive continuous damage from a distance, marksmens are capable of taking down even the most difficult opponents when positioned behind the safety of their team, and perform better at securing objectives such as the Lord and turrets', '2023-06-30 23:18:05', '2023-06-30 23:49:58'),
(4, 'Fighter', 'Fighters are close range combatants that possess a mix of offensive and defensive capabilities. A fighter\'s damage will add up over time to make it a major threat. Each fighter has a unique blend of mobility, damage, disruption and durability. Fighter is an intermediate melee heroes, between durability or damage, hence make fighter serve as multi purpose combatant, such as Semi Tank, Crowd Controller, or Burst Damage Dealer.', '2023-06-30 23:18:05', '2023-06-30 23:50:30'),
(5, 'Tank', 'Tanks heroes are the most durable among all in mobile legends. These front-line giants help in attacking enemies. They\'re usually found leading the charge, choosing the right times and situations to initiate aggression. Many tanks can also protect their more fragile teammates by stunning or pushing around dangerous foes and limiting their damage potential. In mobile legends, most classes of heroes are really versatile in terms of abilities and with the item crafting variations a \"tank\" can be played as a DPS if you choose the right equipment. Usually, tanks are laning on the bottom tower. Tank has high defense and hit point, but low damage. When used properly, a tank could be the strongest hero in the game.', '2023-06-30 23:18:05', '2023-06-30 23:50:49'),
(8, 'Support', 'The role of a support in Mobile Legends is to prioritize the well-being of their teammates, provide crowd control and healing, protect fragile allies, and enhance the overall effectiveness of the team. They are vital in team compositions, and their presence significantly impacts the success of the team in battles and objectives.', '2023-07-10 05:02:21', '2023-07-10 05:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Poke', 'Has a low cooldown ability that deals damage or inflicts disables from a long distance.', '2023-06-30 23:18:05', '2023-06-30 23:55:50'),
(4, 'Push', 'Can quickly destroy towers at all points of the game.', '2023-06-30 23:35:10', '2023-06-30 23:35:10'),
(5, 'Damage', 'Can consistently deal high damage at any points of the game.', '2023-06-30 23:35:34', '2023-06-30 23:47:37'),
(6, 'Charge', 'Has a guaranteed ability to dash fast into teamfights.', '2023-06-30 23:36:11', '2023-07-02 04:50:47'),
(7, 'Initiator', 'Good at starting teamfights and can start important comebacks.', '2023-06-30 23:36:33', '2023-06-30 23:36:33'),
(8, 'Magic damage', 'Deals high magic damage at any points of the game.', '2023-06-30 23:36:58', '2023-06-30 23:36:58'),
(9, 'Mixed damage', 'Capable of inflicting both physical and magical damage towards the enemy.', '2023-06-30 23:37:18', '2023-06-30 23:37:18'),
(10, 'Guard', 'Has the ability to save allies from certain death.', '2023-06-30 23:37:43', '2023-06-30 23:37:43'),
(11, 'Chase', 'Has the ability to chase enemies quite fast.', '2023-06-30 23:38:03', '2023-06-30 23:38:03'),
(12, 'Control', 'Has a guaranteed disable on one or multiple abilities.', '2023-06-30 23:38:22', '2023-06-30 23:38:22'),
(13, 'Support', 'Can focus less on accumulating gold and more on securing an advantage for the team.', '2023-06-30 23:38:40', '2023-06-30 23:38:40'),
(14, 'Regen', 'Has the ability to regenerate lost HP during laning phases or clashes.', '2023-06-30 23:39:10', '2023-06-30 23:39:10'),
(15, 'Crowd control', 'Capable of controlling multiple enemies at once.', '2023-06-30 23:39:38', '2023-06-30 23:39:38'),
(16, 'Finisher', 'Capable of chasing enemies and shutting them down.', '2023-06-30 23:39:55', '2023-06-30 23:39:55'),
(23, 'Burst', 'Quickly deals high damage with low cooldowns.', '2023-07-01 06:28:39', '2023-07-01 06:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$wtF2X0bUV0v.cZRwLb8ETuQADaF3CAwv59RuSF2HBghtLsWQbD6hq', 'admin', NULL, '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(2, 'Muh Zaidan Ramdhan', 'muhammadzaidanramdhan509@gmail.com', NULL, '$2y$10$yNWvCjdmg3MudQ23edzhpuSf2PwceGkUN5BXZWWVKFNNfS.muAOg6', 'user', NULL, '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(3, 'Dinda Maulidia', 'dindamaulidia@gmail.com', NULL, '$2y$10$mYWzmz4RNr9x2X9hxN9u1.lft7acNExGfWEhd.9N5i6sDCdMrtoTu', 'user', NULL, '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(5, 'Ragil', 'agilalmunawir@gmail.com', NULL, '$2y$10$dfGljNegUO/MTEV8DumYMOm.RXE.7AEl2L0u2STAGa5enwz1xj2Kq', 'user', NULL, '2023-07-01 04:53:01', '2023-07-01 04:53:01'),
(6, 'Nur Laili Zakiyah', 'leliezakiyah@gmail.com', NULL, '$2y$10$O.nDdOpgrieWB9a7JV6IROgnrlMfx0G03jnILrVOWknmm.RjreUDG', 'user', NULL, '2023-07-02 04:23:29', '2023-07-02 04:23:29'),
(7, 'Azka', 'azka122@gmail.com', NULL, '$2y$10$xONMVIa7tcHaGZYeAAOr5.1VU2ju086MnWVzhx6hJjzNC8u2iEPq6', 'admin', NULL, '2023-07-07 08:30:11', '2023-07-07 08:30:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `difficults`
--
ALTER TABLE `difficults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `difficults`
--
ALTER TABLE `difficults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorits`
--
ALTER TABLE `favorits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
