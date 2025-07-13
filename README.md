# Asanda Mkhize Portfolio

A professional portfolio website showcasing my skills, projects, and experience as a software developer.

## Features

- Responsive design with modern animations
- Interactive project showcase
- Contact form with email functionality
- Skills and experience sections
- Professional styling with Bootstrap

## How to Run

### Option 1: Using a Local Web Server (Recommended)

To avoid the "TypeError: Failed to fetch" error, you need to run this through a web server with PHP support:

#### Using XAMPP (Windows):
1. Download and install XAMPP from https://www.apachefriends.org/
2. Copy this entire folder to `C:\xampp\htdocs\`
3. Start XAMPP Control Panel
4. Start Apache and MySQL services
5. Open your browser and go to `http://localhost/your-folder-name`

#### Using WAMP (Windows):
1. Download and install WAMP from https://www.wampserver.com/
2. Copy this entire folder to `C:\wamp64\www\`
3. Start WAMP
4. Open your browser and go to `http://localhost/your-folder-name`

#### Using Live Server (VS Code):
1. Install the "Live Server" extension in VS Code
2. Right-click on `index.html` and select "Open with Live Server"
3. Note: This will work for viewing but the contact form won't function without PHP

### Option 2: Direct File Opening (Limited Functionality)

If you open `index.html` directly in your browser:
- ✅ The portfolio will display correctly
- ✅ All animations and styling will work
- ✅ Project links will work
- ❌ The contact form will show a "Failed to fetch" error
- ✅ The form will still show a success message (simulated)

## Contact Form

The contact form requires:
- A web server with PHP support
- Proper email configuration on the server
- The `forms/contact.php` file to be accessible

If you're running locally without a web server, the form will show a helpful error message explaining the issue.

## File Structure

```
portfolio/
├── index.html              # Main portfolio page
├── assets/                 # CSS, JS, and image files
├── forms/
│   └── contact.php        # Contact form handler
└── README.md              # This file
```

## Customization

- Update personal information in `index.html`
- Modify styling in `assets/css/main.css`
- Add new projects in the projects section
- Update contact information and social links

## Troubleshooting

### "TypeError: Failed to fetch" Error

This error occurs when:
1. Opening the HTML file directly (file:// protocol)
2. No web server is running
3. PHP is not configured properly

**Solutions:**
- Use a local web server (XAMPP, WAMP, etc.)
- The form will still work for demonstration purposes
- Contact information is displayed for direct communication

### Contact Form Not Working

If the contact form doesn't send emails:
1. Ensure you're running through a web server
2. Check that PHP is properly installed
3. Verify email configuration on your server
4. Use the provided contact information for direct communication

## Contact Information

- **Email:** asandamkhize9@gmail.com
- **Phone:** +27 71 852 4662
- **Location:** New Germany, Pinetown, KZN, South Africa

## Technologies Used

- HTML5
- CSS3
- JavaScript
- Bootstrap 5
- PHP (for contact form)
- Various animation libraries (AOS, Typed.js, etc.) 