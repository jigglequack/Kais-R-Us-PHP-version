import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd=""
)

mycursor = mydb.cursor()

mycursor.execute("CREATE DATABASE proj2database")
mycursor.execute("SHOW DATABASES")

print("databases:\n")
for x in mycursor:
  print(x)


insertdb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="proj2database"
)

cur = insertdb.cursor()

cur.execute("CREATE TABLE items (id VARCHAR(6), picture VARCHAR(225), picture2 VARCHAR(225),\
            name VARCHAR(500), price INT(2), type VARCHAR(100), color VARCHAR(100), \
            descrip VARCHAR(1000), size VARCHAR(100))")

cur.execute("CREATE TABLE confirm (itemname VARCHAR(100), amount VARCHAR(10), first VARCHAR(100),\
            last VARCHAR(100), phone VARCHAR(12), street VARCHAR(1000), city VARCHAR(100), state VARCHAR(2),\
            zipcode VARCHAR(5), speed VARCHAR(100), credit VARCHAR(19), expire VARCHAR(5), ccv VARCHAR(3))")

cur.execute("SHOW TABLES")

print("\ntables:\n")
for x in cur:
  print(x) 
