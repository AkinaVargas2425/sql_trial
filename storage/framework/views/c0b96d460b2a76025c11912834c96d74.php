<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Modern Task Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Variables using CSS Custom Properties */
        :root {
            --primary-color: #ab7dcd;
            --secondary-color: #d1a7e1;
            --accent-color: #e2d9ee;
            --light-gray: #f5f6fa;
            --dark-gray: #2f3640;
            --spacing-unit: 1rem;
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        /* Base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
        }

        /* Header styles */
        .header {
            background-color: white;
            padding: calc(var(--spacing-unit) * 2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: calc(var(--spacing-unit) * 2);
        }

        .nav-links a {
            text-decoration: none;
            color: var(--secondary-color);
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        /* Hero section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            background-color: var(--light-gray); /* palitan mo ung img */
            background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.feu.edu.ph%2Fundergraduate-programs%2F&psig=AOvVaw23-7Gz5vM1nsWabhp4DQbV&ust=1738485848985000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMCqx5vho4sDFQAAAAAdAAAAABAJ'); /* Add the background image */
            background-size: cover; /* Ensures the image covers the whole section */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents repeating the image */
            padding: calc(var(--spacing-unit) * 4);
        }

        .hero-content {
            max-width: 1200px;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: calc(var(--spacing-unit) * 2);
            color: var(--secondary-color);
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: calc(var(--spacing-unit) * 3);
            color: var(--dark-gray);
            max-width: 600px;
            margin-inline: auto;
        }

        .cta-buttons {
            display: flex;
            gap: var(--spacing-unit);
            justify-content: center;
        }

        .primary-btn, .secondary-btn {
            padding: var(--spacing-unit) calc(var(--spacing-unit) * 2);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
        }

        .primary-btn {
            background-color: var(--primary-color);
        }

        .secondary-btn {
            background-color: var(--secondary-color);
        }

        .primary-btn:hover, .secondary-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Features section */
        .features {
            padding: calc(var(--spacing-unit) * 4);
        }

        .features h2 {
            text-align: center;
            margin-bottom: calc(var(--spacing-unit) * 4);
            font-size: 2.5rem;
            color: var(--secondary-color);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: calc(var(--spacing-unit) * 2);
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: white;
            padding: calc(var(--spacing-unit) * 2);
            border-radius: var(--border-radius);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .feature-card h3 {
            color: var(--primary-color);
            margin-bottom: var(--spacing-unit);
        }

        /* Footer styles */
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: calc(var(--spacing-unit) * 4);
            margin-top: calc(var(--spacing-unit) * 4);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: calc(var(--spacing-unit) * 2);
        }

        .footer h4 {
            margin-bottom: var(--spacing-unit);
        }

        .footer ul {
            list-style: none;
        }

        .footer li {
            margin-bottom: calc(var(--spacing-unit) / 2);
        }

        .footer a {
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer a:hover {
            color: var(--primary-color);
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .hero {
                padding: calc(var(--spacing-unit) * 2);
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav>
            <div class="logo">TaskFlow</div>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#register">Register</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Manage Tasks with Ease</h1>
            <p>TaskFlow helps teams stay organized, meet deadlines, and achieve their goals with powerful yet simple task management tools.</p>
            <div class="cta-buttons">
                <button class="primary-btn">Get Started Free</button>
                <button class="secondary-btn">Watch Demo</button>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <h2>Why Choose TaskFlow</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <h3>Simple & Intuitive</h3>
                <p>Get started in minutes with our user-friendly interface designed for teams of all sizes.</p>
            </div>
            <div class="feature-card">
                <h3>Team Collaboration</h3>
                <p>Work together seamlessly with real-time updates and team-wide task visibility.</p>
            </div>
            <div class="feature-card">
                <h3>Custom Workflows</h3>
                <p>Create workflows that match your team's unique processes and requirements.</p>
            </div>
            <div class="feature-card">
                <h3>Progress Tracking</h3>
                <p>Monitor project progress with visual dashboards and detailed reports.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#careers">Careers</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Product</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#integrations">Integrations</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Support</h4>
                <ul>
                    <li><a href="#help">Help Center</a></li>
                    <li><a href="#documentation">Documentation</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Legal</h4>
                <ul>
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#terms">Terms of Service</a></li>
                    <li><a href="#security">Security</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html><?php /**PATH /Users/sofhiadoronila/sql_trial/resources/views/taskmanagement.blade.php ENDPATH**/ ?>