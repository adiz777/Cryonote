
# CryoNote

CryoNote is a secure, cyberpunk-themed note-taking app that allows users to upload, store, and view notes on Google Drive. With neon-themed styling and a sleek dark mode, CryoNote provides a visually appealing, functional, and secure experience for managing your notes.

## Features
- Upload and manage files on Google Drive.
- View and edit your notes directly in the app.
- Neon cyberpunk theme with smooth hover effects and glowing text.
- Dark mode for an immersive experience.

## Tech Stack
- **Frontend**: React.js, Tailwind CSS, Google Drive API
- **Styling**: Custom Neon Effects using CSS
- **Hosting**: Vercel/Netlify (can be deployed on any static hosting platform)

## Installation

To run CryoNote locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/cryonote.git
   ```

2. Navigate to the project directory:
   ```bash
   cd cryonote
   ```

3. Install dependencies:
   ```bash
   npm install
   ```

4. Start the development server:
   ```bash
   npm start
   ```

5. Open [http://localhost:3000](http://localhost:3000) in your browser to view the app.

## CSS Overview

The app uses a custom **cyberpunk theme** with neon effects and dark mode styling. Below are the key CSS features:

### General Body Styles
- **Background**: Dark background (`#1f1f1f`) for a cyberpunk look.
- **Font**: Roboto, sans-serif for a clean, modern feel.
- **Text Color**: White (`#fff`) text for contrast.

### Neon Text Effects
- **Neon Blue**: `text-neon-blue` applies a glowing neon blue effect.
- **Neon Pink**: `text-neon-pink` applies a glowing neon pink effect.
- **Neon Green**: `text-neon-green` applies a glowing neon green effect.
- **Neon Yellow**: `text-neon-yellow` applies a glowing neon yellow effect.
- **Neon Orange**: `text-neon-orange` applies a glowing neon orange effect.

### Dark Purple Background
- **Background Color**: `bg-dark-purple` applies a deep, dark purple background (`#1c1b2f`) for major sections.

### Neon Button Styles
- **Buttons**: Buttons like `.neon-btn` use neon blue for the border and text color, transitioning to a neon blue background on hover.

### Navbar Styles
- **Navbar**: The navbar has a cyberpunk dark background (`#2a2a3c`) with neon blue links that turn neon pink on hover.
- **Active Links**: Active links glow with neon blue, creating a futuristic look.

### File List Styles
- **File List**: Files are displayed in a list with hover effects (`scale(1.05)`) to enhance interaction.

### Input Fields
- **File Inputs & Text Areas**: Input fields and text areas have a transparent background with neon blue borders that turn neon pink on focus.

### Editor Page Styling
- **Upload Button**: A neon blue upload button that changes to neon blue on hover.

### Neon Box Shadows for Cards
- **Cards**: Cards have a soft neon blue box shadow and a border with smooth hover effects.

### Layout & Responsiveness
- **Grid Layout**: The layout is designed using CSS Grid, making it responsive for smaller screens.
- **Mobile First**: Tailored for mobile-first development, with optimized font sizes and grid layouts for smaller screens.
- **Responsive Breakpoints**:
  - **Small Screens**: Adjusts font sizes and grid columns for better visibility.
  - **Medium & Large Screens**: Changes the number of columns in the grid based on screen size.

### Dark Mode Styling
- **Dark Mode**: The entire app follows a dark mode design with soft neon accents for an immersive and futuristic experience.

## Contributing

Contributions to CryoNote are welcome! To contribute:

1. Fork the repository.
2. Create a new branch for your feature or fix.
3. Submit a pull request with a description of your changes.

## License

This project is licensed under the MIT License.

---

Enjoy using **CryoNote** and experience secure, neon-powered note-taking like never before!
