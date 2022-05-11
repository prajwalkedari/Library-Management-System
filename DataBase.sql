--Auther:Prajwal Kedari
--Source:Github
-----Repo:Library-Management-System
CREATE TABLE `book` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Auther` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `book` (`Id`, `Name`, `Auther`, `about`) VALUES
(1, 'A Better India: A Better World', 'Narayana Murthy', '1. “The purpose of our lives is to be happy.” — Dalai Lama'),
(2, 'A Passage to India', 'E.M. Foster', '2. “Life is what happens when you’re busy making other plans.” — John Lennon'),
(3, 'A Revenue Stamp', 'Amrita Pritam', '3. “Get busy living or get busy dying.” — Stephen King'),
(4, 'Death of a City', 'Amrita Pritam', '4. “You only live once, but if you do it right, once is enough.” — Mae West'),
(5, 'Pinjar', 'Amrita Pritam', '5. “Many of life’s failures are people who did not realize how close they were to success when they gave up.”– Thomas A. Edison'),
(6, 'A Suitable Boy', 'Vikram Seth', '6. “If you want to live a happy life, tie it to a goal, not to people or things.”– Albert Einstein'),
(7, 'A Tale of Two Cities', 'Charles Darwin', '7. “Never let the fear of striking out keep you from playing the game.”– Babe Ruth'),
(8, 'David Copperfield', 'Charles Darwin', '8. “Money and success don’t change people; they merely amplify what is already there.” — Will Smith'),
(9, 'Oliver Twist', 'Charles Darwin', '9. “Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma – which is living with the results of other people’s thinking.” – Steve Jobs'),
(10, 'Origin of Species', 'Charles Darwin', '10. “Not how long, but how well you have lived is the main thing.” — Seneca'),
(11, 'A Week with Gandhi', 'Louis Fisher', '11. “If life were predictable it would cease to be life, and be without flavor.” – Eleanor Roosevelt'),
(12, 'A Woman\'s Life', 'Guy de Maupassant', '12. “The whole secret of a successful life is to find out what is one’s destiny to do, and then do it.”– Henry Ford'),
(13, 'Aadhe Adhure', 'Mohan Rakesh', '13. “In order to write about life first you must live it.”– Ernest Hemingway'),
(14, 'Adventures of Sherlock Holmes', 'Arthur Conan Doyle', '14. “The big lesson in life, baby, is never be scared of anyone or anything.”– Frank Sinatra'),
(15, 'Adventures of Tom Sawyer', 'Mark Twain', '15. “Sing like no one’s listening, love like you’ve never been hurt, dance like nobody’s watching, and live like it’s heaven on earth.” – (Attributed to various sources)'),
(16, 'Ain - i - Akbari', 'Abul Fazl', '16. “Curiosity about life in all of its aspects, I think, is still the secret of great creative people.” – Leo Burnett'),
(17, 'Akbarnama', 'Abul Fazl', '17. “Life is not a problem to be solved, but a reality to be experienced.”– Soren Kierkegaard'),
(18, 'Alice in Wonderland', 'Lewis Carrol', '18. “The unexamined life is not worth living.” — Socrates'),
(19, 'An Introduction to Dreamland', 'Bhagat Singh', '19. “Turn your wounds into wisdom.” — Oprah Winfrey'),
(20, 'Anand Math', 'Bankim Chandra Chatterjee', '20. “The way I see it, if you want the rainbow, you gotta put up with the rain.” —Dolly Parton'),
(21, 'Anna Karenina', 'Leo Tolstoy', '21. “Do all the good you can, for all the people you can, in all the ways you can, as long as you can.” — Hillary Clinton (inspired by John Wesley quote)'),
(22, 'War and Peace', 'Leo Tolstoy', '22. “Don’t settle for what life gives you; make life better and build something.” — Ashton Kutcher'),
(23, 'Apple Cart', 'George Bernard Shaw', '23. “Everybody wants to be famous, but nobody wants to do the work. I live by that. You grind hard so you can play h'),
(24, 'Arms and the Man', 'George Bernard Shaw', '24. “Everything negative – pressure, challenges – is all an opportunity for me to rise.” — Kobe Bryant'),
(25, 'Man and Superman', 'George Bernard Shaw', '25. “I like criticism. It makes you strong.” — LeBron James'),
(26, 'Around the World in Eighty Days', 'Jules Verne', '26. “You never really learn much from hearing yourself speak.” ― George Clooney'),
(27, 'Arthshastra', 'Kautilya', '27. “Life imposes things on you that you can’t control, but you still have the choice of how you’re going to live through this.” — Celine Dion'),
(28, 'Asian Drama', 'Gunnar Myrdal', '28. “Life is never easy. There is work to be done and obligations to be met – obligations to truth, to justice, and to liberty.” — John F. Kennedy (JFK Quotes)'),
(29, 'Autobiography of a Yogi', 'Yogananda Paramhans', '29. “Live for each second without hesitation.” — Elton John'),
(30, 'Baburnama', 'Babur', '30. “Life is like riding a bicycle. To keep your balance, you must keep moving.” — Albert Einstein');

----------------------------------------------------------------------------------------------------------------------------

CREATE TABLE `orderbook` (
  `orderid` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bookname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auther` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-------------------------------------------------------------------------------------------------------------------------------


CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhoneNum` int(11) DEFAULT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-------------------------------------------------------------------------------------------------------------------------------------

ALTER TABLE `book`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orderbook`
--
ALTER TABLE `orderbook`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
COMMIT;



