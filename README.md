Logisticasoft Web Project
Introduction
Welcome to the official repository of the Logisticasoft website, developed using the Laravel framework. This project aims to provide a robust, efficient, and user-friendly web platform for Logisticasoft, a company specializing in Warehouse Management Solutions (WMS) by SERVINET.

Features
User Authentication: Secure login and registration functionalities.
Profile Management: Users can update their profiles, including uploading profile images.
Project Showcase: A section dedicated to showcasing the projects managed by Logisticasoft.
Social Media Integration: Links to social media profiles (LinkedIn, Facebook) and the company website.
Responsive Design: The website is fully responsive, ensuring a seamless experience on both desktop and mobile devices.
Technologies Used
Backend: Laravel 8, PHP 7.4
Frontend: Bootstrap, HTML5, CSS3, JavaScript
Database: MySQL
Version Control: Git
Installation
Prerequisites
Before you begin, ensure you have met the following requirements:

PHP 7.4 or higher
Composer
Node.js and NPM
MySQL
Steps
Clone the repository:

sh
Copiar código
git clone https://github.com/maxhandx/logisticasoft.git
cd logisticasoft
Install dependencies:

sh
Copiar código
composer install
npm install
npm run dev
Environment Configuration:

Copy .env.example to .env:
sh
Copiar código
cp .env.example .env
Generate an application key:
sh
Copiar código
php artisan key:generate
Update your .env file with your database credentials.
Database Migration and Seeding:

sh
Copiar código
php artisan migrate --seed
Serve the application:

sh
Copiar código
php artisan serve
Visit http://localhost:8000 to view the application.

Usage
After setting up the project, you can start using the platform. Here are a few key functionalities:

Login/Register: Access via /login and /register routes.
Profile Management: Users can update their profile information and upload profile images.
Project Showcase: Browse the projects managed by Logisticasoft via the /projects route.
Contributing
We welcome contributions from the community. To contribute:

Fork the project.
Create your feature branch (git checkout -b feature/AmazingFeature).
Commit your changes (git commit -m 'Add some AmazingFeature').
Push to the branch (git push origin feature/AmazingFeature).
Open a pull request.
License
This project is licensed under the MIT License - see the LICENSE file for details.

Contact
For any inquiries or issues, please contact Carlos A Ramirez C at LinkedIn or visit our Facebook page.

Feel free to adjust the content to better suit your project's specifics and preferences.