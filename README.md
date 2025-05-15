# 🧠 Questionator - Automatic Question Paper Generator

A smart web application that automates question paper creation for educators.  
Built with PHP/MySQL backend and a rich, responsive frontend using Bootstrap.

---

## 📌 Table of Contents
- [About](#about)
- [Tech Stack](#tech-stack)
- [Technologies Used](#technologies-used)
- [Features](#features)
- [How It Works](#how-it-works)
- [Setup Instructions](#setup-instructions)
- [Future Scope](#future-scope)
- [Credits](#credits)
- [License](#license)

---

## 📖 About

**Questionator** simplifies the manual effort of preparing question papers.  
Supports objective and subjective formats with categories like:  
Knowledge-based, Logic-based, Memory-based, Application-based questions.

---

## 🛠 Tech Stack

| Frontend                    | Backend          | Database   |
| --------------------------- | ---------------- | ---------- |
| HTML, CSS, Bootstrap, JS    | PHP              | MySQL      |

---

## ⚙️ Technologies Used

### Frontend
- **HTML5, CSS3, JavaScript** — core web technologies  
- **Bootstrap 4** — responsive UI and layout  
- **jQuery** — DOM manipulation and Bootstrap dependency  
- **Font Awesome** — icons  
- **Owl Carousel** — slider for team members  
- **Counter-Up & Waypoints** — animated stats  
- **TinyMCE** — rich text editor for adding questions  
- **Google Fonts** — Jost and Open Sans for typography

### Backend
- **PHP** — server-side scripting and business logic  
- **MySQL** — relational database management  
- **PDF Generation** — PHP libraries (e.g., TCPDF/FPDF/DOMPDF) for exporting question papers

### APIs & Services
- TinyMCE Cloud (rich text editing)  
- Google Fonts CDN  

### Development Tools
- **GitHub** — version control & repo hosting  
- **XAMPP** — local development environment with Apache, PHP, and MySQL

---

## 🌟 Features

- Easy-to-use interface for adding, editing, and deleting questions  
- Supports different types and categories of questions  
- Quickly generates question papers based on selected criteria  
- Secure login system with user access control  
- Option to export question papers as PDF files  
- Helps save time and prevents question paper leaks

---

## 🔧 How It Works

1. Teacher/Admin logs in securely.  
2. Admin can manage user access and permissions.  
3. Users can add, update, or remove questions easily.  
4. Select question types and paper criteria.  
5. System fetches matching questions from the database.  
6. Generates a printable question paper instantly.

---

## ⚙️ Setup Instructions

1. Download and install [XAMPP](https://www.apachefriends.org).  
2. Place the project folder inside `htdocs`.  
3. Start Apache and MySQL via XAMPP Control Panel.  
4. Import the SQL database via `phpMyAdmin`.  
5. Access the app at `http://localhost/your-folder-name`.

---

## 🚀 Future Scope

- Online test generation & evaluation  
- Export to PDF/DOC formats  
- Analytics dashboard for admins  
- Multi-user roles & permissions  

---

## 🙏 Credits

> UI template based on [Edukate](https://htmlcodex.com/online-education-website-template) by [HTML Codex](https://htmlcodex.com), used under [CC BY 4.0](https://htmlcodex.com/license).

---

⭐ Thanks for checking out **Questionator**!
