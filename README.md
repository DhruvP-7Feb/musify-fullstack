🎵 Musify – Your Personal Music World

A full-stack music streaming web app built with HTML, CSS, JavaScript, and PHP, featuring login, liked songs, and database integration with MySQL.
Enjoy a seamless experience with curated songs from multiple genres and an interactive player that stores your favorite tracks.

✨ Features

🎧 15 Songs Across Genres – Explore pop, rock, classical, and more.
🔐 User Login System – Secure PHP & MySQL-based authentication.
❤️ Like Songs – Store your favorite tracks in the database.
🎵 Browse & Library Pages – Discover music and manage your liked collection.
💾 Database Integration (MySQL) – Persists user data and liked songs.
📱 Responsive Interface – Clean, modern, and works on all devices.
⚙️ API Folder – Modular backend logic for efficient data handling.

🛠️ Tech Stack
Layer	Technology
Frontend	HTML5, CSS3, JavaScript
Backend	PHP
Database	MySQL
Server	XAMPP (Apache & MySQL)
Large File Storage	Git LFS (for .mp3 files)
📂 Folder Structure
📁 Musify/
│
├── index.html          # Home page / player interface
├── browse.html         # Browse songs by genre
├── library.html        # Displays liked songs
├── login.html          # Login page UI
│
├── login.php           # Handles authentication logic
├── script.js           # Frontend interactivity
├── styles.css          # App styling & responsiveness
│
├── music_db.sql        # Database schema & sample data
│
├── 📁 API/             # Backend PHP scripts (like, fetch, update)
├── 📁 audio/           # Contains 15 audio tracks (.mp3)
└── .gitattributes      # Git LFS configuration

⚙️ Setup Instructions
🔹 1. Clone the Repository
git clone https://github.com/DhruvP-7Feb/musify-fullstack

🔹 2. Move Project to Server Directory

If using XAMPP:

C:\XAMPP\htdocs\musify

🔹 3. Import the Database

Open phpMyAdmin

Create a database named music_db

Import the file music_db.sql

🔹 4. Start the Server

Launch Apache and MySQL from XAMPP

Visit in your browser:

http://localhost/musify/login.html

🚀 Future Enhancements

🧾 Add playlist creation & shuffle mode
📱 Build a mobile app version (React Native)
👥 Add registration & profile pages
🌙 Implement dark mode
🧠 Add AI-based recommendations

🧠 Key Highlights

Built entirely from scratch with HTML, CSS, JS, PHP, and MySQL

Audio files managed with Git LFS for smooth GitHub integration

Clean folder structure and easy-to-extend backend design

👨‍💻 Author
Dhruv
B-Tech Computer Engineering | PDEU
