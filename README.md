# INF124

Team:
Kati Tran
-katit1
-33574122
-katit1@uci.edu

http://localhost/INF124/html/HomePage.php
(couldn't get deployment to work)

Project 2:
1. HomePage.php All information on the homepage was generated taking from a SQL database. The information was inserted to the database 
	using a python script sqlconnect.py. I used PHP to pull the information out and formatted it with CSS store.css for the table and effects.
	When an item is clicked, the information shown is also from the database, pulling it out for the desc.php page to generate as well based on an items
	unique ID.
	-Database is created by running the python script makedatabase.py then to insert the store information the script sqlconnect.py is used.
2. desc.php and confirm.php pushes the inserted user data into a SQL database using a form and php. Form is validated with basic HTML commands like before.
3. confirm.php and confirm.css returns the information that the user inputted.
4. (All Ajax is in the HomePage.php file) Ajax features are:
	- When clicking on an item in the HomePage.php store, instead of redirecting to a completely new page, Ajax is used to place the desc.php page over it
	with the appropriate information.
	- When inputting a City and then a State on the order page, Ajax is used to recommend zipcodes based on the City and State. (Works by changing either the city
	or state uses "onchange") Zipcodes are read and searched with the php file readzip.php



From Project 1 (Used the same Website):
index.css is for the navigation bar at the top.
1. about.php and about.css. Displays my personal information and what the store is about. Includes all of the
	links of css design that I took from to enhance fancier look.
2. HomePage.php and store.css. 12 items are shown because I liked even grids. Each panel is expandable on hover.	
3. HomePage.php and store.css. Each item has an image.
4. HomePage.php and store.css (Hover over items for bigger picture and more info. Clicking on it redirects to a detail page.)
5. desc.php and desc.css. Form is on the right.
6. desc.php and desc.css. Sends all of the information in a mailto using pattern match.
7. desc.php and desc.css (lots of "Required" and "pattern" to check the input)
8. desc.php and desc.css
9. All the css files.
10. HomePage.php and store.css. Hovering over the image on the store page increases image size.
11. about.php and about.css (The sources for designs and pictures taken are there too.)