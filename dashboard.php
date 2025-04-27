<?php include('includes/header.php'); ?>

<!-- Add AOS CSS and JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Add Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
/* Dashboard Styles */
.dashboard {
    background: #0d1117;
    min-height: 100vh;
    padding: 2rem 0;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, rgba(0,255,204,0.1) 0%, rgba(0,0,0,0) 100%);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('assests/gametosa_logos_thumbnails/bg_home.webp') center/cover no-repeat;
    opacity: 0.1;
    z-index: -1;
}

/* Stats Cards */
.stats-card {
    background: rgba(13, 17, 23, 0.8);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 1.5rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stats-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 255, 204, 0.1);
    border-color: rgba(0, 255, 204, 0.3);
}

.stats-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0,255,204,0.1) 0%, rgba(0,255,204,0) 100%);
    z-index: -1;
}

/* Progress Bar */
.progress {
    height: 10px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

.progress-bar {
    background: #00ffcc;
    transition: width 1s ease;
}

/* Activity Card */
.activity-card {
    background: rgba(13, 17, 23, 0.8);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.activity-card:hover {
    transform: translateX(5px);
    border-color: rgba(0, 255, 204, 0.3);
}

/* Quick Action Buttons */
.quick-action-btn {
    background: rgba(13, 17, 23, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 1rem;
    transition: all 0.3s ease;
    text-align: center;
    color: #fff;
    text-decoration: none;
}

.quick-action-btn:hover {
    background: rgba(0, 255, 204, 0.1);
    border-color: rgba(0, 255, 204, 0.3);
    transform: translateY(-3px);
    color: #00ffcc;
}

/* Chart Container */
.chart-container {
    background: rgba(13, 17, 23, 0.8);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 1.5rem;
    height: 400px;
    position: relative;
}

.chart-container canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    padding: 1.5rem;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.fade-in {
    animation: fadeIn 0.5s ease forwards;
}

/* Glowing Text */
.glow-text {
    text-shadow: 0 0 10px rgba(0,255,204,0.5);
    animation: glow 2s infinite;
}

@keyframes glow {
    0% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
    50% { text-shadow: 0 0 20px rgba(0,255,204,0.8), 0 0 30px rgba(0,255,204,0.5); }
    100% { text-shadow: 0 0 10px rgba(0,255,204,0.5); }
}
</style>

<section class="dashboard">
    <div class="container">
        <!-- Hero Section -->
        <div class="hero-section" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4 glow-text">Welcome Back, Player!</h1>
                    <p class="lead text-white-50">Track your progress and stay ahead of the competition</p>
                </div>
                <div class="col-md-6 text-end">
                    <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="img-fluid" style="max-width: 200px;">
                </div>
            </div>
        </div>

        <!-- Stats Overview -->
        <div class="row g-4 mb-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="stats-card">
                    <h3 class="text-white-50 mb-3">Total Matches</h3>
                    <h2 class="display-4 fw-bold text-white">24</h2>
                    <div class="progress mt-3">
                        <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="stats-card">
                    <h3 class="text-white-50 mb-3">Wins</h3>
                    <h2 class="display-4 fw-bold text-white">15</h2>
                    <div class="progress mt-3">
                        <div class="progress-bar" role="progressbar" style="width: 62.5%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="stats-card">
                    <h3 class="text-white-50 mb-3">Ranking</h3>
                    <h2 class="display-4 fw-bold text-white">#12</h2>
                    <div class="progress mt-3">
                        <div class="progress-bar" role="progressbar" style="width: 88%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Chart -->
        <div class="row mb-4">
            <div class="col-12" data-aos="fade-up">
                <div class="chart-container">
                    <h3 class="text-white mb-4">Performance Overview</h3>
                    <canvas id="performanceChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row g-4 mb-4">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="quick-action-btn d-block">
                    <i class="fas fa-gamepad fa-2x mb-3"></i>
                    <h5>Join Tournament</h5>
                </a>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="quick-action-btn d-block">
                    <i class="fas fa-users fa-2x mb-3"></i>
                    <h5>Find Team</h5>
                </a>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="quick-action-btn d-block">
                    <i class="fas fa-trophy fa-2x mb-3"></i>
                    <h5>View Rewards</h5>
                </a>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="quick-action-btn d-block">
                    <i class="fas fa-cog fa-2x mb-3"></i>
                    <h5>Settings</h5>
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <h3 class="text-white mb-4">Recent Activity</h3>
                <div class="activity-card">
                    <div class="d-flex align-items-center">
                        <div class="me-3" style="color: #00ffcc;">
                            <i class="fas fa-trophy fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Tournament Victory</h5>
                            <p class="mb-0 text-white-50">Won the Weekly Battle Royale Tournament</p>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-success">2 hours ago</span>
                        </div>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="d-flex align-items-center">
                        <div class="me-3" style="color: #00ffcc;">
                            <i class="fas fa-level-up-alt fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Rank Up</h5>
                            <p class="mb-0 text-white-50">Advanced to Diamond League</p>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-info">1 day ago</span>
                        </div>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="d-flex align-items-center">
                        <div class="me-3" style="color: #00ffcc;">
                            <i class="fas fa-coins fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Reward Claimed</h5>
                            <p class="mb-0 text-white-50">Received 500 Gametosa Gold Coins</p>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-warning">2 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Initialize AOS -->
<script>
  AOS.init({
    duration: 1000,
    once: false,
    mirror: true
  });

  // Initialize Performance Chart
  const ctx = document.getElementById('performanceChart').getContext('2d');
  const performanceChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Win Rate',
        data: [65, 59, 80, 81, 56, 75],
        borderColor: '#00ffcc',
        backgroundColor: 'rgba(0, 255, 204, 0.1)',
        tension: 0.4,
        fill: true
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      aspectRatio: 2,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            color: 'rgba(255, 255, 255, 0.1)'
          },
          ticks: {
            color: '#fff'
          }
        },
        x: {
          grid: {
            color: 'rgba(255, 255, 255, 0.1)'
          },
          ticks: {
            color: '#fff'
          }
        }
      }
    }
  });

  // Add resize event listener to handle window resizing
  window.addEventListener('resize', function() {
    performanceChart.resize();
  });
</script>

<?php include('includes/footer.php'); ?>
