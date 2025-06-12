<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK MODS APK - Download Free Apps</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #121212;
            color: #ffffff;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #6200ea, #03a9f4);
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-bar input {
            padding: 12px;
            width: 70%;
            border: none;
            border-radius: 25px 0 0 25px;
            font-size: 1em;
            outline: none;
        }

        .search-bar button {
            padding: 12px 20px;
            border: none;
            background-color: #03a9f4;
            color: white;
            border-radius: 0 25px 25px 0;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #0288d1;
        }

        /* Navigation */
        nav {
            background-color: #1e1e1e;
            padding: 15px 0;
            margin-bottom: 30px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #03a9f4;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #03a9f4;
        }

        /* Featured Apps Grid */
        .app-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .app-card {
            background-color: #1e1e1e;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .app-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .app-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .app-card-content {
            padding: 15px;
        }

        .app-card-content h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .app-card-content p {
            font-size: 0.9em;
            color: #b0b0b0;
            margin-bottom: 10px;
        }

        .download-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #03a9f4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .download-btn:hover {
            background-color: #0288d1;
        }

        /* Footer */
        footer {
            background-color: #1e1e1e;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

        footer p {
            font-size: 0.9em;
            color: #b0b0b0;
        }

        footer a {
            color: #03a9f4;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            .search-bar input {
                width: 60%;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            .app-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>MK MODS APK</h1>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for apps..." onkeyup="searchApps()">
            <button onclick="searchApps()">Search</button>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#featured">Featured</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Featured Apps Section -->
        <section id="featured">
            <h2 class="section-title">Featured Apps</h2>
            <div class="app-grid" id="appGrid">
                <?php
                // Sample app data with external download links (replace links with your own)
                $apps = [
                    [
                        'name' => 'App Name 1',
                        'description' => 'A powerful app for productivity and entertainment.',
                        'image' => 'https://via.placeholder.com/250x150',
                        'link' => 'https://example.com/app1.apk' // Replace with your actual link
                    ],
                    [
                        'name' => 'App Name 2',
                        'description' => 'Explore new features with this amazing app.',
                        'image' => 'https://via.placeholder.com/250x150',
                        'link' => 'https://example.com/app2.apk' // Replace with your actual link
                    ],
                    [
                        'name' => 'App Name 3',
                        'description' => 'Stay connected with this social media app.',
                        'image' => 'https://via.placeholder.com/250x150',
                        'link' => 'https://example.com/app3.apk' // Replace with your actual link
                    ],
                    [
                        'name' => 'App Name 4',
                        'description' => 'Boost your creativity with this app.',
                        'image' => 'https://via.placeholder.com/250x150',
                        'link' => 'https://example.com/app4.apk' // Replace with your actual link
                    ]
                ];

                // Display apps
                foreach ($apps as $app) {
                    echo '
                    <div class="app-card" data-name="' . htmlspecialchars($app['name']) . '">
                        <img src="' . htmlspecialchars($app['image']) . '" alt="' . htmlspecialchars($app['name']) . '">
                        <div class="app-card-content">
                            <h3>' . htmlspecialchars($app['name']) . '</h3>
                            <p>' . htmlspecialchars($app['description']) . '</p>
                            <a href="' . htmlspecialchars($app['link']) . '" class="download-btn" target="_blank">Download APK</a>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </section>

        <!-- Categories Section -->
        <section id="categories">
            <h2 class="section-title">Browse Categories</h2>
            <div class="app-grid">
                <div class="app-card">
                    <div class="app-card-content">
                        <h3>Productivity</h3>
                        <p>Apps to boost your efficiency.</p>
                        <a href="#" class="download-btn">Explore</a>
                    </div>
                </div>
                <div class="app-card">
                    <div class="app-card-content">
                        <h3>Gaming</h3>
                        <p>Exciting games for all ages.</p>
                        <a href="#" class="download-btn">Explore</a>
                    </div>
                </div>
                <div class="app-card">
                    <div class="app-card-content">
                        <h3>Social</h3>
                        <p>Connect with friends and family.</p>
                        <a href="#" class="download-btn">Explore</a>
                    </div>
                </div>
                <div class="app-card">
                    <div class="app-card-content">
                        <h3>Tools</h3>
                        <p>Essential tools for daily tasks.</p>
                        <a href="#" class="download-btn">Explore</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2025 MK MODS APK. All rights reserved. | <a href="#privacy">Privacy Policy</a> | <a href="#terms">Terms of Service</a></p>
    </footer>

    <script>
        function searchApps() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const appCards = document.querySelectorAll('.app-card');

            appCards.forEach(card => {
                const appName = card.getAttribute('data-name').toLowerCase();
                if (appName.includes(input)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
