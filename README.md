# Hotel Booking Website

This is a hotel booking website developed using HTML, Bootstrap, and PHP. The platform allows users to register, log in, view rooms with various filters, and book rooms. The admin panel provides extensive management features for users, staff, and website settings. All data is managed using PHP and MySQL.

## Features

### User Features
- User registration and login
- View rooms with filters for price, facilities, features, check-in, and check-out dates
- Book rooms and make payments (only after login)
- User can see images of hotel as well as various rooms and suites.
- User can directly contact to the hotel management team on the contact us page.

### Admin Features
- Manage users: view, activate/deactivate user accounts
- Add or delete management staff
- See and respond to user queries
- Manage the website status (active or shutdown)
- Dynamically change website content, including name, about information, and other data

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/ShivamGupta-yo/HotelBookingWebsite.git
   cd HotelBookingWebsite

2. **Set up the database:**
   * Import the database schema into PHPMyAdmin or any MySQL database management tool.
   * Create a database named rrwebsite and import the rrwebsite.sql file located in the database folder.
  
3. **Configure the database setup:**
  * Open config.php file in the root directory.
  * Update the database credentials to match your MySQL setup:
    ```php
        <?php
      $servername = "localhost";
      $username = "your_db_username";
      $password = "your_db_password";
      $dbname = "hotel_booking";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      ?>


4. **Run the website:**:
   * Place the project folder in your web server's root directory (e.g., htdocs for XAMPP, www for WAMP).
   * Start your web server (Apache) and navigate to http://localhost/HotelBookingWebsite.
  

## Usage: 
* User Registration and Login: Users can create an account or log in to access booking features.
* Room Browsing: Users can view available rooms and apply filters for price, facilities, features, and dates.
* Room Booking: After logging in, users can book rooms and make payments.
* Admin Management: Admin can manage user accounts, add/delete staff, respond to queries, and update website content dynamically.

  ## Contributing:
  Contributions are welcome! Please follow these steps to contribute:

* Fork the repository.
* Create a new branch (git checkout -b feature-branch).
* Make your changes and commit them (git commit -m 'Add new feature').
* Push to the branch (git push origin feature-branch).
* Create a pull request.

## Contact: 
For any questions or inquiries, please contact shivam1234snr@gmail.com.

# Thank you for checking out our Hotel Booking Website! We hope you find it useful for managing hotel bookings and administration.


