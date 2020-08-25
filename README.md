# Kais-R-Us (PHP built version)

A simple shopping website using PHP, Ajax, and MySQL. Includes the use of HTML, Javascript, CSS.


1. HomePage.php All information on the homepage was generated taking from a SQL database. The information was inserted to the database 
	using a python script sqlconnect.py. I used PHP to pull the information out and formatted it with CSS store.css for the table and effects.
	When an item is clicked, the information shown is also from the database, pulling it out for the desc.php page to generate as well based on an items
	unique ID.
	-Database is created by running the python script makedatabase.py then to insert the store information the script sqlconnect.py is used.
2. desc.php and confirm.php pushes the inserted user data into a SQL database using a form and php. Form is validated with basic HTML commands.
3. confirm.php and confirm.css returns the information that the user inputted.
4. (All Ajax is in the HomePage.php file) Ajax features are:
	- When clicking on an item in the HomePage.php store, instead of redirecting to a completely new page, Ajax is used to place the desc.php page over it
	with the appropriate information.
	- When inputting a City and then a State on the order page, Ajax is used to recommend zipcodes based on the City and State. Zipcodes are read and searched with the php 	file readzip.php
