import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="proj2database"
)

mycursor = mydb.cursor()

sql = "INSERT INTO items (id, picture, picture2, name, price, type, color, descrip, size) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)"
val = [
 ('item1', 'images/croc1.png', 'images/croc2.png', 'See ya later, Alligator', 10, 'Plush', 'Green', \
  'This is actually a crocodile. A plushy friend for your friend that contains even a squeaky ball inside! So if the toy \
    were to be destroyed, there\'s still time to play. Plush.', '3.75\'W x 7.5\'D x 4\'H'),
 
 ('item2', 'images/sandwich1.jpg', 'images/sandwich2.jpg', 'Thanksgiving Leftovers', 10, 'Plush', 'Brown',\
  'For when those big sad eyes keep lookin at you for a little bite. Now distract them with THIS! (fool-proof. very trustable. 10/10 dogs recommend) Very crunchy and smells like home. Plush.',\
  '5\'W x 7.5\'D x 5\'H'),
 
 ('item3', 'images/football1.png', 'images/football2.png', 'Game Night', 10, 'Plush', 'Brown',\
  'A ball for the ball. (And a ball inside that ball! Ball-ception?) Toss this football around and pretend you and your 11 dogs are an official team. Very plush and very soft so no one will get hurt! Plush.',\
  '6\' x 4\' x 4\''),

 ('item4', 'images/fish1.webp', 'images/fish2.webp', 'Omega-3', 15, 'Tough-Chew', 'Gray',\
  'Seems a little... fishy. -Your dog probably after trying to destroy this toy. This is the most durable material there is so they never will! Comes with separate pieces for maximum fun. Tough-chew.',\
  '7\' x 5\' x 6\''),

 ('item5', 'images/hedge1.png', 'images/hedge2.png', 'Over the Hedge', 15, 'Tough-Chew', 'Purple',\
  'Ouch! Just kidding. This is the most durable material there is. Your dog can try to destroy, but they never will! Can store treats inside to improve play. Tough-chew',\
  '5\' x 4\' x 4\''),

 ('item6', 'images/bird1.png', 'images/bird2.png', 'Which Came First? The Chicken?', 15, 'Tough-Chew', 'Blue',\
  'Or the egg...? Isn\'t this the cutest? Like a chicken and an egg that will withstand any force by sheer willpower. Tough-chew.',\
  '6\' x 4\' x 4\''),

 ('item7', 'images/blue1.webp', 'images/blue2.webp', 'Blue Rope', 5, 'Rope/Tug-toy', 'Blue',\
  'It\'s a tug toy! And blue! It\'s really just a rope but hey, who\'s complaining? Definitely not your dog when they have this beauty. Rope/Tug-toy.',\
  '2 feet long'),

 ('item8', 'images/red1.webp', 'images/red2.webp', 'Red Rope', 5, 'Rope/Tug-toy', 'Red',\
  'It\'s a tug toy! And red! It\'s really just a rope but hey, who\'s complaining? Definitely not your dog when they have this beauty. Look at those circles ooo. Rope/Tug-toy.',\
  '3 feet long'),

 ('item9', 'images/shark1.webp', 'images/shark2.webp', 'Shark Bait HooHaHa', 8, 'Rope/Tug-toy', 'Gray/Multi',\
  'Shark Bait hoohaha. Re-live your Nemo dreams with this dog toy as you guys play a (cool) game of tug of war. Comes in two colors! Rope/Tug-toy.',\
  '2 feet long'),

 ('item10', 'images/ball1.webp', 'images/ball2.webp', 'Basic Ball', 4, 'Ball', 'Red',\
  'It\'s a ball. Made more for soft chewers. The light weight of this ball lets it be thrown by even your grandma. Ball.',\
  'Round'),

 ('item11', 'images/tire1.webp', 'images/tire2.webp', 'I\'m Tired', 20, 'Ball', 'Black',\
  'This ball is for the TOUGH! Like your dog decided to join a biker gang and comes home proving how tough they are. Please just buy it the name is a cry for hel-',\
  'Tore apart some tires. Didn\'t get an exact measurement.'),

 ('item12', 'images/nerf1.webp', 'images/nerf2.webp', 'It\'s Nerf. Or Nuthin.', 10, 'Ball', 'Red/Blue',\
  'Also a durable ball. This one is for the athletes. Is your dog a runner and never stops playing? This ball is the choice! Durable material for even the strongest of teeth. Ball.',\
  'Round')
]

mycursor.executemany(sql, val)

mydb.commit()

print(mycursor.rowcount, "record was inserted.")
