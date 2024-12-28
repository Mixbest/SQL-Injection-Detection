# SQL-Injection-Detection
SQL Injection Detection is an innovative way that aims to revolutionize the security breach of website, identify the unauthorized access in website. The website offers a user-friendly interface that allows users and buyers to connect directly, identify the unauthorized user and check the SQL injection. 
1.	INTRODUCTION

SQL Injection Detection is an innovative way that aims to revolutionize the security breach of website, identify the unauthorized access in website.
The website offers a user-friendly interface that allows users and buyers to connect directly, identify the unauthorized user and check the SQL injection.
SQL Injection (SQLi) is one of the most common and severe vulnerabilities that attackers exploit to manipulate or gain unauthorized access to these databases.
The SQL Injection Detection project focuses on identifying and mitigating SQLi vulnerabilities in web applications. By implementing automated detection mechanisms, this project aims to safeguard applications from potential attacks, ensuring a secure environment for users and data.
1.1.	OBJECTIVE

To develop a mechanism to recognize common patterns and behaviours associated with SQL Injection attacks, such as unexpected query structures, special character usage, or abnormal input formats. 
To protect the underlying database by identifying and rejecting malicious queries                                              could lead to data breaches, unauthorized data modification, or deletion.
To implement Implement a system that can detect SQLi attempts in real-time and alert administrators to take immediate action, minimizing potential damage.
To Integrate the SQL Injection Detection mechanism into web applications to provide an additional layer of security, ensuring data confidentiality and user trust.
To highlight the risks associated with SQL Injection attacks and demonstrate the importance of adopting secure coding practices and defensive mechanisms in software development.

1.2.	NEED OF THE PROJECT

Web applications play a critical role in managing sensitive information such as personal data, financial records, and business operations. With the increasing reliance on these systems, the security of underlying databases has become paramount.
This project addresses these needs by developing a reliable and scalable SQL Injection Detection mechanism that enhances the security posture of web applications, protects sensitive data, and ensures a safer digital environment.
Many developers and organizations still underestimate the risk of SQL Injection attacks or fail to implement robust security measures. This project highlights the importance of proactive detection and prevention mechanisms.
To Prevalence of SQL Injection Attacks, resulting in data breaches, unauthorized                     Accesses.
2.	FEASABILITY STUDY
A feasibility study for the Fleurissant ecommerce website evaluates the platform’s potential for success by analyzing its technical, operational, and financial viability.
Fleurissant aims to revolutionize the way people to buy flowers by providing a user friendly online platform. Our main purpose to detect the SQL injection in website.

Technical Feasibility
 Evaluate platforms scalability and performance under high traffic. Assess integration with scanning gateways, shipping services and inventory management systems. Design a platform to scale with increasing traffic and sales.

Operational Feasibility
Establish relationships with local farmers and suppliers. Plan the logistics of order fulfilment, shipping, scanning SQL injection presence and customer services.
Examine the system ability to handle order processing, customer support and marketing tools. Check the whole users security.
Economic Feasibility
Determine the point at which the project  will become profitable. Estimate the costs involved in developing and maintaining the website, including development, hosting, marketing, and operational costs.

2.1 PURPOSE
The main purpose of the project is to create a website that and check the presence of SQL Injection in the website. And check the accessibility of the user, that user is authentic user or not a attacker. This is used to check the web application durability and security.

2.2SCOPE
This product has great future scope.  Provides a platform for flower buyers to buy the product according to their choice.
It also provides security with the use of Login-id and Password, so that any unauthorized users can not use your account. The only authorized person can get the access to your account on this site.

3.	Requirements(Hardware/ Software/ Functional / Non-Functional)
A Fleurissant is a e-commerce platform based on HTML, CSS, Java Script and Bootstrap aims to build a scalable efficient and dynamic online store. We scan to check that the SQL injection is not injected in database. Blow is a comprehensive breakdown of the hardware, software, functional and non-functional requirements for both the front end and backend.
3.1.	Hardware Requirements
  Processor: AMD Ryzen 5 5500U with Radeon Graphics 2.10 GHz
  RAM: - 8 GB
  Hard Disk: - 512 GB
  OS: - Windows
  Browser: - Chrome.

3.2.	Software Requirements

3.2.1.	Frontend
  HTML: Page layout has been designed in HTML 
  CSS: CSS has been used for all the designing part 
  JavaScript: All the validation task and animations has been developed by JavaScript.
  Bootstrap: Bootstrap has been used to make responsive web design.

3.2.2.	Backend
  PHP: All the business and frontend logic has been implemented in PHP. 
  MySQL: MySQL database has been used as database for the project.
  Database: User inputs, Detected malicious queries on database, timestamp, Source IP addresses (optional ,tracking).

3.3.	Functional Requirement

Product catalogue management:
	Enabling Farmers to list their products with detailed information, images, and  	pricing. 
Admin dashboard to manage products: add, update, delete and categorized product.
Order management:
	Processing orders efficiently :tracking order status, and providing real-time updates to both  user and consumers.
Scanning processing:
Integrating with user and check the previous registered details and check the user who is login in website. He is not unauthorized user or attacker.

3.4.	Non-Functional Requirements

Scalability:
The platform should be able to handle a large volume of users, products and orders without compromising performance.
Security:
Ensuring the protection of user data and financial information through robust security measures.
All information which is entered by the user and admin both are secured 
Reliability:
	The platform should be consistently available and operational, with minimal downtime. It is very easy to access all the modules of website easily.
Usability:
Intuitive, user friendly interface, with seamless navigation across products, categories, and checkout. User data is secure and not accessible to others. Only admin can access data.

4.	Design

4.1.	ER-Diagram
 
                                                    Figure 1: ER DIAGRAM 

4.2.	Data Flow Diagram
 
4.2.2	1 level DFD
 
                                             Figure 3: 1 LEVEL DFD


4.3Use Case Diagram
 
                                                   Figure 4: USE CASE DIAGRAM

4.4	SEQUENCE DIAGRAM
 
                                                  Figure 5: SEQUENCE DIAGRAM

4.5	ACTIVITY DIAGRAM
 
                                                   Figure 6: ACTIVITY DIAGRAM
 

4. 6 Scanning Process of SQL Injection
 
5.	GUI

5.1.	Database Table Structure

Admin Table:
Fields	Data type	Description
    Id	I   int(100)	    Admin id primary key of table
    name	    varchar(20)	    Admin name
    password	    varchar(50)	    Admin password

User Table:
F Fields	   Data type	Description
    Id	    Int(100)	    User id primary key of table
    name	    varchar(20) 	    User name 
    email	    varchar(50) 	    User email
    password	    Varchar(50)	    User password

Cart Table:
    Fields 	    Data type 	    Description 
    Id	    int(100)	    Order id primary key of table
    user_id	    int(100)	    User id 
P  id	    int(100)	    Product id
    name	    varchar(100)	    Product name
    price	    int(10)	    Product price
    quantity	    int(10)	    Product quantity
    image	    varchar(100)	    Product image

Product Table:
    Fields 	    Data type 	    Description 
    Id	    int(100)	    Product id primary key of a              
 table
    name	    varchar(100)	    Product name
    details	    varchar(500)	    Product details
    price	    int(10)	    Product price
    image_01	    varchar(100)	    Product image 1
    image_02	    varchar(100)	    Product image 2
    image_03	    varchar(100)	P  Product image 3

Order Table:
    Fields 	    Data type 	    Description 
    Id	    int(100)	     Order id primary key of a      
    Table
    user_id	    int(100)	    User id
    name	    varchar(20)	    User name
    number	    varchar(10)	    User phone number
    email	    varchar(50)	    User email
    method	    Varchar(50)	    Payment method
    address	    varchar(500)	    User address
    total_products	    varchar(1000)	    Total products 
    total_price	int(100)	    Total price  
P  Placed_on	    Date	    Order  date
    payment_status	    varchar(20)	    Payment                                     st  Status(complete/pending)

Tracking  Table:
    Fields 	    Data type 	    Description 
    Tracking_id	I   int(80)	    Tracking id
    Id	    int(50)	    Order id 
    tracking_status	    varchar(80)	    Tracking status
    rec_date	    date(80) 	    Receive date

Wish list Table:
    Fields 	    Data type 	    Description 
     Id	I   int(100)	    Order id primary key of          bl  table
    user_id	    int(100)	    User id 
P  id	    int(100)	    Product id
    Name	V  varchar(100)	    Product name
    Price	I   int(100)	    Product price
    Image	    varchar(100)	    Product image 

Message Table:
    Fields 	    Data type 	    Description 
    Id	    int(100)	    Order id primary key of              t   table
    user_id	    int(100)	    User id 
    Name	    varchar(100)	    User name
    Email	varchar(100)	    User email
    Number	    varchar(12)	    User number
    Message	varchar(500)	    User message

5.2.	Modules Screenshot

Admin Panel:    Register page:
 

Admin Panel:    Login page:
 


Admin Panel:   Dashboard 
 



Product Added
 



 

Review
 

Contact Us
 

Footer 
 

About
 

SQL Injection Scanner
 
Category
 
User Login page:
 
Shop products
 
Responsiveness 
 
Services
 


6.	Coding

7.	Future Scope

The following things can be done in future.
The current system can be extended to allow the users to sell their products. 
The users could subscribe for price alerts which would enable them to receive messages when price for products fall below a particular level. 
Users can have multiple shipping and billing information saved. During checkout they can use the drag and drop feature to select shipping and billing information.
The accessibility and security is accessed by the admin and also keep the data of user secured.
Escape the website from attackers and SQL injections into the database.

8.	Conclusion

The ‘Fleurissant’ is designed to provide a web based application that would make Searching, viewing and selection of a farming related product easier. It will help farmers from the Indian villages to buy the products from various city markets directly to customers without the help of intermediaries or agents. Thus, it will helpful to bring an ease in the life of a farmer while buying products for farming. Here we scan all details of the users. That details are authentic or not .We defend our website from SQL injection.

9.	References
Coderbaba.com
W3schools.com 
Geeksforgeeks.com

