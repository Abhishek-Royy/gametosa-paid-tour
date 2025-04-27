<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Gametosa | Competitive Gaming</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="description" content="Gametosa - The ultimate platform for competitive gaming and esports tournaments" />
  <meta name="theme-color" content="#0d1117" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Base CSS -->
  <link rel="stylesheet" href="assests/css/style.css" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="assests/css/responsive.css" />
  <!-- Mobile Navbar CSS -->
  <link rel="stylesheet" href="assests/css/navbar-mobile.css" />
  <!-- Responsive Utilities -->
  <link rel="stylesheet" href="assests/css/responsive-utilities.css" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Common JS -->
  <script src="assests/js/common.js" defer></script>
  <!-- Main JS -->
  <script src="assests/js/script.js" defer></script>
  <!-- Navbar Fix JS -->
  <script src="assests/js/navbar-fix.js" defer></script>
  <style>
    .cyber-header {
      width: 100%;
      background-color: #0d1117;
      padding: 0.5rem 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      height: 70px; /* Fixed height */
      display: flex;
      align-items: center;
    }

    .cyber-header .container {
      max-width: 1400px;
      width: 95%;
      padding: 0;
      margin-right: 0;
      margin-left: auto;
      height: 100%;
      display: flex;
      align-items: center;
    }

    .navbar {
      height: 100%;
      display: flex;
      align-items: center;
      width: 100%;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      flex-wrap: nowrap;
      gap: 1rem;
      margin-left: auto;
      height: 100%;
    }
    
    .nav-item {
      white-space: nowrap;
      display: flex;
      align-items: center;
      height: 100%;
    }

    .nav-link {
      padding: 0.5rem 1rem;
      display: flex;
      align-items: center;
      height: 100%;
    }

    .navbar-brand {
      margin-right: auto;
      padding: 0;
      height: 100%;
      display: flex;
      align-items: center;
    }

    .navbar-brand img.logo {
      height: 50px;
      width: auto;
      margin-left: -20px; /* Shift logo more to the left */
    }

    .nav-item .nav-link.auth-btn {
      background: linear-gradient(90deg, #00ffcc, #00ccff);
      color: #000;
      padding: 8px 20px;
      border-radius: 4px;
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 1px;
      border: 1px solid rgba(0, 255, 204, 0.3);
    }
    
    .nav-item .nav-link.auth-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 255, 204, 0.3);
      color: #000;
    }
    
    .nav-item .nav-link.auth-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: 0.5s;
    }
    
    .nav-item .nav-link.auth-btn:hover::before {
      left: 100%;
    }
    
    /* Download App Button Styling */
    .nav-item .nav-link.download-app-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(0, 255, 204, 0.1);
      border: 1px solid rgba(0, 255, 204, 0.3);
      color: #00ffcc;
      padding: 8px 15px;
      border-radius: 4px;
      transition: all 0.3s ease;
      font-weight: 500;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
    }
    
    .nav-item .nav-link.download-app-btn:hover {
      background: rgba(0, 255, 204, 0.2);
      color: #fff;
      box-shadow: 0 3px 10px rgba(0, 255, 204, 0.2);
      transform: translateY(-1px);
    }
    
    .nav-item .nav-link.download-app-btn i {
      font-size: 1.1rem;
    }
    
    /* Discord Button Styling */
    .nav-item .nav-link.discord-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #5865F2;
      border: 1px solid rgba(88, 101, 242, 0.3);
      color: #fff;
      padding: 8px 15px;
      border-radius: 4px;
      transition: all 0.3s ease;
      font-weight: 500;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
    }
    
    .nav-item .nav-link.discord-btn:hover {
      background: #4752c4;
      color: #fff;
      box-shadow: 0 3px 10px rgba(88, 101, 242, 0.3);
      transform: translateY(-1px);
    }
    
    .nav-item .nav-link.discord-btn i {
      font-size: 1.1rem;
    }

    @media (max-width: 991px) {
      .cyber-header {
        height: auto;
        padding: 0.5rem 0;
      }

      .navbar-nav {
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 1rem;
      }

      .nav-item {
        width: 100%;
        text-align: center;
      }

      .navbar-brand {
        margin-left: 0;
      }

      .navbar-brand img.logo {
        margin-left: 0;
      }
    }

    @media (min-width: 992px) {
      .navbar-collapse {
        display: flex;
        justify-content: flex-end;
        margin-right: 1rem;
        height: 100%;
      }
    }
  </style>
</head>
<body>
    <?php include 'includes/notifications.php'; ?>
    
    <header class="cyber-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="logo">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tournaments.php">Tournaments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                        <!-- Discord Button -->
                        <li class="nav-item">
                            <a class="nav-link discord-btn" href="https://discord.gg/vcufWpyB7g">
                                <i class="fab fa-discord"></i> Join Our Discord
                            </a>
                        </li>

                        <!-- Download App Button -->
                        <li class="nav-item">
                            <a class="nav-link download-app-btn" href="https://play.google.com/store/apps/details?id=gametosa.com">
                                <i class="fab fa-google-play"></i> Download App
                            </a>
                        </li>

                        <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user-circle"></i> <?php echo htmlspecialchars($_SESSION['username']); ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="my_tournaments.php">My Tournaments</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link auth-btn" href="login.php">Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
