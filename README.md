# CryoNote - Secure Note-Taking Web App

CryoNote is a secure, cyberpunk-themed note-taking web application built for agents, operatives, or anyone who values keeping their notes encrypted and safe. With a focus on minimalist design and privacy, CryoNote offers features like self-destructing notes, secure password authentication, and encrypted storage.

This app is designed with a sleek cyberpunk neon aesthetic and a dark mode theme. It includes features that make it feel like a tool used by secret organizations, agents, or intelligence operatives. With encryption at its core, your notes are never compromised.

---

## Features:

### 🔐 Secure Authentication:
- **Login System**: Secure login with encrypted passwords.
- **Registration**: Create new accounts with email and password.
- **Logout**: Log out securely to protect your data.

### ✍️ Encrypted Notes:
- **Create, edit, and delete notes** securely.
- **Self-Destructing Notes**: Notes will automatically delete after a set time.
- **Encryption**: Notes are stored encrypted in the database to ensure no one can read them.

### 🕶️ Secret Agent Mode:
- **Agent Avatars**: Customize your agent profile.
- **Stealth Mode**: The interface can be disguised as a "safe" app when necessary.
- **Mission Tracker**: Organize and manage your assignments and objectives.

### 💻 Cyberpunk Theme:
- **Cyberpunk Neon Aesthetic**: Navy blue and neon blue themes with dark mode.
- **Minimalist Interface**: A clean, distraction-free interface designed for ease of use.

### 💬 Messaging:
- **Encrypted Messaging**: Securely send messages to other agents.

### 📂 Additional Features:
- **Backup Notes**: Download encrypted backups of your notes.
- **Offline Mode**: Access and manage your notes offline.

---

## Demo:
Try the demo of CryoNote (link to live demo).

---

## Tech Stack:
- **Frontend**: HTML, CSS, PHP (for the UI and client-side interactions)
- **Backend**: PHP (handles login, note encryption, and database interactions)
- **Database**: MySQL (stores user data, notes, and messages)
- **Encryption**: AES encryption used for storing encrypted notes.

---

## Setup & Installation:

### Prerequisites:
- A local or remote server that supports PHP and MySQL (e.g., Apache, Nginx, etc.).
- MySQL database (for storing user data, notes, and messages).

### Steps:
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/CryoNote.git
   cd CryoNote

    Set up the database:

        Import the database schema located in the "database/" folder (or create one manually).

        Update the database credentials in "config.php" for MySQL connection.

    Configure the server:

        Upload the files to your web server or set up a local environment using tools like XAMPP or WAMP for development.

        Ensure the server is configured to run PHP files correctly.

    Access the app:

        Open your browser and navigate to "http://localhost/cryo-note/" or your live URL.

Contributing:

    Fork this repository.

    Create a new branch (git checkout -b feature-name).

    Make your changes and commit them (git commit -m 'Add new feature').

    Push to the branch (git push origin feature-name).

    Open a pull request.

License:

CryoNote is licensed under the MIT License - see the LICENSE file for details.
Future Features:

    Biometric Authentication (e.g., fingerprint or facial recognition).

    Voice-to-Text Notes: Convert voice notes into text.

    Two-Factor Authentication (2FA) for added security.

    Voice Messaging: Secure voice messaging between agents.

    Encrypted File Storage: Store sensitive files securely with encryption.

Credits:

    Cyberpunk Neon Theme: Inspired by futuristic aesthetics from popular media.

    Encryption Implementation: AES encryption was implemented following security best practices.

    PHP, MySQL: Standard technologies used to ensure the app is lightweight and efficient.

Project by:

Your Name (https://github.com/adiz777)

Feel free to contribute, report bugs, or ask questions by opening issues or submitting pull requests.
