# 📌 PHP Contact Form Mini Assignment  
A simple PHP project that includes a contact form with form validation, MySQL database storage, email notifications using PHPMailer, and a page to view all submissions.

---

## ✔ Features

### 📝 Contact Form
- Collects: **Name, Email, Phone, Message**
- Validates:
  - All fields required
  - Email format validation
  - Phone number must be 10 digits

### 💾 Database Storage
- Inserts submitted form data into `contact_form` table
- Stores: name, email, phone, message, created_at timestamp

### 📧 Email Notification (PHPMailer + SMTP)
- Sends a confirmation email to the user upon successful form submission
- Uses **Gmail SMTP App Password**

### 📄 View Submissions Page
- Displays all stored form entries in a Bootstrap table
- Sorted by ID ascending
- Includes a navigation bar for better user experience

### 📱 Fully Responsive UI
- Built using Bootstrap 4.4.1
- Works well on mobile, tablet, and desktop

---

## ✔ Requirements

- PHP 7.4+ or 8.x  
- MySQL or MariaDB  
- XAMPP / WAMP / LAMP  
- Composer  
- Internet connection (for SMTP email sending)  

---

## 🚀 Installation & Setup

### 1️⃣ Clone or Extract the Project
Place the folder inside your server directory:

```
C:\xampp\htdocs\contact_form\
```

### 2️⃣ Install PHPMailer (Already Included If Vendor Folder Exists)

If reinstallation is needed:

```
composer require phpmailer/phpmailer
```

### 3️⃣ Database Setup

Create a database:

```sql
CREATE DATABASE assignment;
```

Import the SQL file provided:

- Open phpMyAdmin → Select *assignment*
- Click **Import**
- Choose **contact_form.sql**
- Click **Go**

The table structure:

```sql
CREATE TABLE contact_form (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 🔧 Configure Database Connection

File: `db_connect.php`

```php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "assignment";

$conn = mysqli_connect($servername, $username, $password, $database);
```

---

## ✉️ SMTP Email Setup (Gmail)

### Step 1 — Enable 2-Step Verification  
Go to:  
https://myaccount.google.com/security

### Step 2 — Create an App Password  
Visit:  
https://myaccount.google.com/apppasswords

Choose:

- App: **Mail**
- Device: **Windows**

Google gives you a 16-character password like:

```
abcd efgh ijkl mnop
```

Remove spaces before using it:

```
abcdifghijklmnop
```

### Step 3 — Add to `index.php`

```php
$mail->Username = 'your_email@gmail.com';
$mail->Password = 'your_app_password_here';
```

---

## 📄 File Structure

```
contact_form/
│ index.php               # Main form + validation + email + DB insert
│ view.php                # Displays saved submissions
│ db_connect.php          # Database connection
│ contact_form.sql        # Database export
│ README.md               # Documentation
│ vendor/                 # PHPMailer library (autoloaded)
```

---

## 🧪 How It Works

1. User fills the contact form  
2. Form validates input  
3. If valid:
   - Inserts data into MySQL  
   - Sends confirmation email  
4. A success popup appears  
5. Admin can view submissions in `view.php`

---

## 👨‍💻 Author

**JS Hemanth Rao**

---

## 🎉 Done!
Your assignment is fully implemented with:

✔ Form  
✔ Validation  
✔ Email  
✔ Database  
✔ View Records  
✔ Responsive Layout  

---
