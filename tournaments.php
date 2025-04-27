<?php
include 'includes/header.php';

// Define tournaments array
$tournaments = [
    [
        'id' => 1,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 2 days',
        'game' => 'PUBG Mobile',
        'title' => 'PUBG Mobile Championship',
        'logo' => 'pubg.png',
        'back_image' => 'pubg.png',
        'players' => 100,
        'prize' => '₹50,000',
        'date' => '15 Mar 2024',
        
        'button_text' => 'Register Now',
        'entry_fee' => '₹99',
        'total_slots' => 100,
        'filled_slots' => 72
    ],
    [
        'id' => 2,
        'category' => 'ongoing',
        'status' => 'Ongoing',
        'status_class' => 'bg-warning',
        'time_remaining' => 'Ends in 5 hours',
        'game' => 'Free Fire',
        'title' => 'Free Fire Pro League',
        'logo' => 'freefire.png',
        'back_image' => 'freefire.png',
        'players' => 50,
        'prize' => '₹25,000',
        'date' => '14 Mar 2024',
        
        'button_text' => 'View Details',
        'entry_fee' => '₹49',
        'total_slots' => 50,
        'filled_slots' => 50
    ],
    [
        'id' => 3,
        'category' => 'completed',
        'status' => 'Completed',
        'status_class' => 'bg-danger',
        'time_remaining' => 'Ended 2 days ago',
        'game' => 'Call of Duty Mobile',
        'title' => 'CODM Masters',
        'logo' => 'cod.png',
        'back_image' => 'cod.png',
        'players' => 75,
        'prize' => '₹30,000',
        'date' => '12 Mar 2024',

        'button_text' => 'View Results',
        'entry_fee' => '₹79',
        'total_slots' => 75,
        'filled_slots' => 75
    ],
    // Add more tournaments here as needed
    [
        'id' => 4,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 5 days',
        'game' => 'Valorent',
        'title' => 'Valorent Clash Series',
        'logo' => 'valorent.png',
        'back_image' => 'valorent.png',
        'players' => 150,
        'prize' => '₹75,000',
        'date' => '20 Mar 2024',
        
        'button_text' => 'Register Now',
        'entry_fee' => '₹149',
        'total_slots' => 150,
        'filled_slots' => 45
    ],
    [
        'id' => 5,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 1 week',
        'game' => 'Chess',
        'title' => 'Chess Compitition',
        'logo' => 'chess.png',
        'back_image' => 'chess.png',
        'players' => 40,
        'prize' => '₹40,000',
        'date' => '25 Mar 2024',
        
        'button_text' => 'Register Now',
        'entry_fee' => '₹99',
        'total_slots' => 40,
        'filled_slots' => 18
    ]
];

// Get unique games for tournament display
$games = array_unique(array_column($tournaments, 'game'));
?>

<!-- START MAIN CONTENT -->
<main class="main-content">
    <!-- Tournament Header -->
    <!-- <section class="py-5 position-relative" style="background: var(--darker);">
        <div class="cyber-grid"></div>
        <div class="container position-relative">
            <h1 class="text-center text-white mb-4 glitch-text" data-text="Tournaments">Tournaments</h1>
            <p class="text-center text-white-50 mb-5">Compete in exciting tournaments and win amazing prizes</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tournament-stats d-flex justify-content-around mb-4" >
                        <div class="stat-item text-center">
                            <h3 class="text-primary mb-0" id="activePlayerCount">150,000+</h3>
                            <p class="text-white-50 mb-0">Active Players</p>
                        </div>
                        <div class="stat-item text-center">
                            <h3 class="text-primary mb-0" id="tournamentCount">1,250+</h3>
                            <p class="text-white-50 mb-0">Tournaments</p>
                        </div>
                        <div class="stat-item text-center">
                            <h3 class="text-primary mb-0" id="prizePool">₹2,500,000+</h3>
                            <p class="text-white-50 mb-0">Prize Money</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="py-5 position-relative" style="background: var(--darker);">
        <div class="cyber-grid"></div>
        <div class="container position-relative">
            <h1 class="text-center text-white mb-4 glitch-text" data-text="Tournaments">Tournaments</h1>
            <p class="text-center text-white-50 mb-5">Compete in exciting tournaments and win amazing prizes</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tournament-stats d-flex flex-wrap justify-content-around mb-4">
                        <div class="stat-item text-center mb-md-0">
                            <h3 class="text-primary mb-0" id="activePlayerCount">150,000+</h3>
                            <p class="text-white-50 mb-0">Active Players</p>
                        </div>
                        <div class="stat-item text-center mb-md-0">
                            <h3 class="text-primary mb-0" id="tournamentCount">1,250+</h3>
                            <p class="text-white-50 mb-0">Tournaments</p>
                        </div>
                        <div class="stat-item text-center mb-md-0">
                            <h3 class="text-primary mb-0" id="prizePool">₹2,500,000+</h3>
                            <p class="text-white-50 mb-0">Prize Money</p>
                        </div>
                    </div>
                    
                    <!-- Tournament List Button -->
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-outline-primary btn-lg position-relative">
                            View Tournaments
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                New
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tournament Filters -->
    <section class="py-4" style="background: var(--dark);">
        <div class="container">
            <div class="tournament-filter">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-white mb-3 mb-md-0">Browse Tournaments</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end">
                            <div class="filter-buttons">
                                <button class="btn btn-filter active" data-filter="all">All</button>
                                <button class="btn btn-filter" data-filter="upcoming">Upcoming</button>
                                <button class="btn btn-filter" data-filter="ongoing">Ongoing</button>
                                <button class="btn btn-filter" data-filter="completed">Completed</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tournament List -->
    <section class="py-5" style="background: var(--darker);">
        <div class="container">
            <div class="tournament-grid" id="tournamentList">
                <!-- Tournament cards will be inserted here through JavaScript -->
            </div>
        </div>
    </section>

    <!-- Join CTA Section -->
    <section class="py-5 position-relative" style="background: linear-gradient(45deg, var(--dark), var(--darker));">
        <div class="cyber-grid"></div>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="text-white display-5 fw-bold mb-4 glitch-text" data-text="Ready to Compete?">
                        Ready to Compete?
                    </h2>
                    <p class="text-white-50 mb-5">Join thousands of gamers on India's fastest-growing esports platform</p>
                    <a href="login.php?form=register" class="btn btn-neon btn-lg">Register Now</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Template for Tournament Card -->
<template id="tournamentCardTemplate">
    <div class="tournament-card" data-category="">
        <div class="tournament-header">
            <div class="tournament-status"></div>
            <div class="tournament-time"></div>
        </div>
        <div class="tournament-body">
            <div class="tournament-game-logo">
                <img src="" alt="" class="logo-img">
            </div>
            <h3 class="tournament-title"></h3>
            <div class="tournament-meta">
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span class="players-count"></span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-trophy"></i>
                    <span class="prize-amount"></span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="tournament-date"></span>
                </div>
                <!-- <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span class="tournament-time"></span>
                </div> -->
                <div class="meta-item">
                    <i class="fas fa-ticket-alt"></i>
                    <span class="entry-fee"></span>
                </div>
            </div>
            
            <!-- Slots Information -->
            <div class="slots-container mt-3">
                <div class="d-flex justify-content-between mb-1">
                    <span class="text-white-50 small">Slots</span>
                    <span class="text-white-50 small slots-count"></span>
                </div>
                <div class="progress slots-progress">
                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class="tournament-footer">
            <a href="#" class="btn btn-neon btn-register"></a>
        </div>
    </div>
</template>

<!-- Tournament JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tournament data from PHP
        const tournaments = <?php echo json_encode($tournaments); ?>;
        const tournamentList = document.getElementById('tournamentList');
        const template = document.getElementById('tournamentCardTemplate');
        
        // Display all tournaments initially
        displayTournaments('all');
        
        // Filter buttons
        const filterButtons = document.querySelectorAll('.btn-filter');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                // Display tournaments based on filter
                displayTournaments(this.getAttribute('data-filter'));
            });
        });
        
        // Function to display tournaments based on filter
        function displayTournaments(filter) {
            // Clear tournament list
            tournamentList.innerHTML = '';
            
            // Filter tournaments
            let filteredTournaments = tournaments;
            if (filter !== 'all') {
                filteredTournaments = tournaments.filter(tournament => tournament.category === filter);
            }
            
            // Display tournaments
            filteredTournaments.forEach(tournament => {
                const card = template.content.cloneNode(true);
                
                // Set card attributes
                card.querySelector('.tournament-card').setAttribute('data-category', tournament.category);
                card.querySelector('.tournament-status').textContent = tournament.status;
                card.querySelector('.tournament-status').classList.add(tournament.status_class);
                card.querySelector('.tournament-time').textContent = tournament.time_remaining;
                card.querySelector('.logo-img').src = 'assests/games/' + tournament.logo;
                card.querySelector('.logo-img').alt = tournament.game;
                card.querySelector('.tournament-title').textContent = tournament.title;
                card.querySelector('.players-count').textContent = tournament.players + ' Players';
                card.querySelector('.prize-amount').textContent = tournament.prize;
                card.querySelector('.tournament-date').textContent = tournament.date;
                card.querySelector('.tournament-time').textContent = tournament.time;
                card.querySelector('.entry-fee').textContent = tournament.entry_fee;
                card.querySelector('.btn-register').textContent = tournament.button_text;
                card.querySelector('.btn-register').href = 'tournament-details.php?id=' + tournament.id;
                
                // Set slots information
                const slotsCountElement = card.querySelector('.slots-count');
                slotsCountElement.textContent = tournament.filled_slots + '/' + tournament.total_slots;
                
                // Calculate percentage of filled slots
                const filledPercentage = (tournament.filled_slots / tournament.total_slots) * 100;
                const progressBar = card.querySelector('.progress-bar');
                progressBar.style.width = filledPercentage + '%';
                progressBar.setAttribute('aria-valuenow', filledPercentage);
                
                // Set progress bar color based on fill percentage
                if (filledPercentage >= 90) {
                    progressBar.classList.remove('bg-primary');
                    progressBar.classList.add('bg-danger');
                } else if (filledPercentage >= 70) {
                    progressBar.classList.remove('bg-primary');
                    progressBar.classList.add('bg-warning');
                }
                
                // Add card to list
                tournamentList.appendChild(card);
            });
            
            // Display message if no tournaments found
            if (filteredTournaments.length === 0) {
                tournamentList.innerHTML = '<div class="no-tournaments"><p>No tournaments found</p></div>';
            }
        }
    });
    window.onload = function() {
    let activePlayerCount = document.querySelector("#activePlayerCount")
    const maxCount = 150000; // The maximum number to count up to
  let currentCount = 0;
  const duration = 4000; // Duration in milliseconds (2 seconds)

  // Calculate the step increment based on the total duration and max count
  const incrementPerFrame = maxCount / (duration / 16); // 16ms is roughly one frame (60 FPS)

  const startTime = performance.now(); // Get the start time for animation

  function incrementCount(timestamp) {
    const elapsed = timestamp - startTime; // Calculate elapsed time

    // Calculate the current count based on elapsed time
    currentCount = Math.min(Math.floor(elapsed / duration * maxCount), maxCount);

    // Update the counter text
    activePlayerCount.textContent = `+${currentCount}`;

    // Continue the animation until the counter reaches maxCount
    if (elapsed < duration) {
      requestAnimationFrame(incrementCount);
    }
  }

  // Start the counting animation when the page loads
  requestAnimationFrame(incrementCount);
};

</script>

<style>
:root {
    --primary-color: #00ffcc;
    --secondary-color: #ff4757;
    --dark-bg: #0d1117;
    --card-bg: #1a1a1a;
    --text-primary: #ffffff;
    --text-secondary: #ffffff99;
}
.glitch-text {
            position: relative;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .glitch-text::before,
        .glitch-text::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .glitch-text::before {
            left: 2px;
            text-shadow: -1px 0 var(--primary);
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim 2s infinite linear alternate-reverse;
        }
        
        .glitch-text::after {
            left: -2px;
            text-shadow: -1px 0 magenta;
            clip: rect(85px, 550px, 140px, 0);
            animation: glitch-anim2 2s infinite linear alternate-reverse;
        }
        
        @keyframes glitch-anim {
            0% { clip: rect(69px, 9999px, 71px, 0); }
            5% { clip: rect(26px, 9999px, 48px, 0); }
            10% { clip: rect(60px, 9999px, 36px, 0); }
            15% { clip: rect(7px, 9999px, 90px, 0); }
            20% { clip: rect(82px, 9999px, 91px, 0); }
            25% { clip: rect(33px, 9999px, 17px, 0); }
            30% { clip: rect(73px, 9999px, 39px, 0); }
        }
        
        @keyframes glitch-anim2 {
            0% { clip: rect(13px, 9999px, 11px, 0); }
            5% { clip: rect(48px, 9999px, 75px, 0); }
            10% { clip: rect(42px, 9999px, 19px, 0); }
            15% { clip: rect(59px, 9999px, 34px, 0); }
            20% { clip: rect(18px, 9999px, 87px, 0); }
            25% { clip: rect(63px, 9999px, 22px, 0); }
            30% { clip: rect(9px, 9999px, 51px, 0); }
        }
        
/* Tournament Filter Styles */
.tournament-filter {
    padding: 1rem 0;
}

.filter-buttons {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.btn-filter {
    background: rgba(13, 17, 23, 0.7);
    color: var(--text-secondary);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-filter:hover, .btn-filter.active {
    background: var(--primary-color);
    color: var(--dark-bg);
    border-color: var(--primary-color);
}
/* Tournament Grid Styles */
.tournament-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(361px, 1fr));
    gap: 1.5rem;
}
.text-primary{
    font-size : 30px;
}

/* Tournament Card Styles */
.tournament-card {
    background: rgba(26, 26, 26, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    height: auto; /* Allow height to be determined by content */
    max-height: 600px; /* Increased to accommodate new elements */
}

.tournament-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    border-color: var(--primary-color);
}

.tournament-header {
    background: rgba(0, 0, 0, 0.3);
    padding: 0.75rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.tournament-status {
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

.tournament-time-remaining {
    color: var(--text-secondary);
    font-size: 0.85rem;
}

.tournament-body {
    padding: 1.25rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.tournament-game-logo {
    width: 100%;
    max-width: 300px; /* Decreased from 220px */
    height: 180px; /* Decreased from 220px */
    margin: 0 auto 1rem;
    overflow: hidden;
    border: 2px solid var(--primary-color);
    aspect-ratio: 1/1; /* Maintain square aspect ratio */
}

.tournament-game-logo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.tournament-title {
    font-size: 1.3rem; /* Decreased from 1.5rem */
    color: var(--text-primary);
    margin-bottom: 0.75rem; /* Decreased from 1rem */
    text-align: center;
    line-height: 1.3;
}

.tournament-meta {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.75rem;
    width: 100%;
    margin-bottom: 0.5rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-secondary);
    font-size: 0.9rem; /* Slightly smaller font */
}

.meta-item i {
    color: var(--primary-color);
    font-size: 0.9rem; /* Slightly smaller icon */
}

.tournament-time {
    color: var(--text-secondary);
    font-size: 0.85rem;
}

.tournament-footer {
    padding: 1.25rem; /* Decreased from 1.5rem */
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    margin-top: auto; /* Pushes footer to bottom of card */
}

.btn-neon {
    background: transparent;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-align: center;
    display: block;
    width: 100%;
}

.btn-neon:hover {
    background: var(--primary-color);
    color: var(--dark-bg);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 255, 204, 0.3);
}

.no-tournaments {
    grid-column: 1 / -1;
    text-align: center;
    padding: 3rem;
    color: var(--text-secondary);
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
    .tournament-grid {
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    }
}

@media (max-width: 992px) {
    .tournament-grid {
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    }
    
    .tournament-game-logo {
        height: 160px;
        max-width: 160px;
    }
    
    .tournament-title {
        font-size: 1.2rem;
    }
}

@media (max-width: 767px) {
    .tournament-grid {
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    }
    
    .tournament-game-logo {
        height: 150px;
        max-width: 150px;
    }
    
    .filter-buttons {
        justify-content: center;
        margin-top: 1rem;
    }
    
    .tournament-body {
        padding: 1rem;
    }
    
    .tournament-footer {
        padding: 1rem;
    }
}

@media (max-width: 576px) {
    .tournament-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
    
    .tournament-meta {
        grid-template-columns: 1fr;
        gap: 0.4rem;
    }
    
    .tournament-game-logo {
        height: 140px;
        max-width: 140px;
    }
    
    .meta-item {
        font-size: 0.85rem;
    }
    
    .tournament-title {
        font-size: 1.1rem;
    }
}

/* For very small devices */
@media (max-width: 420px) {
    .tournament-grid {
        grid-template-columns: 1fr;
    }
    
    .tournament-game-logo {
        height: 160px;
        max-width: 160px;
    }
}

/* Slots Information Styles */
.slots-container {
    width: 100%;
    margin-top: 1rem;
}

.slots-progress {
    height: 8px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
    overflow: hidden;
}

.progress-bar {
    transition: width 0.6s ease;
}

.slots-count {
    font-size: 0.85rem;
    font-weight: 600;
}

/* Adjust meta item for entry fee */
.meta-item .entry-fee {
  
    font-weight: 600;
}
</style>

<?php include 'includes/footer.php'; ?>