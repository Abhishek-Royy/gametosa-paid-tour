<?php
include 'includes/header.php';

// Get game parameter from URL
$game = isset($_GET['game']) ? $_GET['game'] : '';

// If no game is specified, redirect to homepage
if (empty($game)) {
    header("Location: index.php");
    exit;
}

// Define a mapping between URL game names and internal database game names if needed
$gameNameMap = [
    'Call of Duty Mobile' => 'Call of Duty Mobile',
    'PUBG Mobile' => 'PUBG Mobile',
    'Free Fire' => 'Free Fire',
    'Valorant' => 'Valorant',
    'BGMI' => 'BGMI'
];

// Convert URL game name to internal database name if needed
$dbGameName = isset($gameNameMap[$game]) ? $gameNameMap[$game] : $game;

// Define tournaments array (in a real app, this would come from a database)
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
        'filled_slots' => 72,
        'type' => 'Squad'
    ],
    [
        'id' => 2,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 4 days',
        'game' => 'PUBG Mobile',
        'title' => 'PUBG Mobile Solo Masters',
        'logo' => 'pubg.png',
        'back_image' => 'pubg.png',
        'players' => 100,
        'prize' => '₹20,000',
        'date' => '17 Mar 2024',
        'button_text' => 'Register Now',
        'entry_fee' => '₹49',
        'total_slots' => 100,
        'filled_slots' => 35,
        'type' => 'Solo'
    ],
    [
        'id' => 3,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 3 days',
        'game' => 'PUBG Mobile',
        'title' => 'PUBG Mobile Duo Challenge',
        'logo' => 'pubg.png',
        'back_image' => 'pubg.png',
        'players' => 50,
        'prize' => '₹30,000',
        'date' => '16 Mar 2024',
        'button_text' => 'Register Now',
        'entry_fee' => '₹79',
        'total_slots' => 50,
        'filled_slots' => 22,
        'type' => 'Duo'
    ],
    [
        'id' => 4,
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
        'filled_slots' => 50,
        'type' => 'Squad'
    ],
    [
        'id' => 5,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 1 day',
        'game' => 'Free Fire',
        'title' => 'Free Fire Solo Cup',
        'logo' => 'freefire.png',
        'back_image' => 'freefire.png',
        'players' => 50,
        'prize' => '₹15,000',
        'date' => '15 Mar 2024',
        'button_text' => 'Register Now',
        'entry_fee' => '₹29',
        'total_slots' => 50,
        'filled_slots' => 28,
        'type' => 'Solo'
    ],
    [
        'id' => 6,
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
        'filled_slots' => 75,
        'type' => 'Squad'
    ],
    [
        'id' => 7,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 5 days',
        'game' => 'Valorant',
        'title' => 'Valorant Clash Series',
        'logo' => 'valorant.png',
        'back_image' => 'valorant.png',
        'players' => 150,
        'prize' => '₹75,000',
        'date' => '20 Mar 2024',
        'button_text' => 'Register Now',
        'entry_fee' => '₹149',
        'total_slots' => 150,
        'filled_slots' => 45,
        'type' => 'Squad'
    ],
    [
        'id' => 8,
        'category' => 'upcoming',
        'status' => 'Upcoming',
        'status_class' => 'bg-success',
        'time_remaining' => 'Starts in 1 week',
        'game' => 'BGMI',
        'title' => 'BGMI Tournament',
        'logo' => 'bgmi.png',
        'back_image' => 'bgmi.png',
        'players' => 40,
        'prize' => '₹40,000',
        'date' => '25 Mar 2024',
        'button_text' => 'Register Now',
        'entry_fee' => '₹99',
        'total_slots' => 40,
        'filled_slots' => 18,
        'type' => 'Squad'
    ]
];

// Filter tournaments by the selected game
$game_tournaments = array_filter($tournaments, function($t) use ($dbGameName) {
    return $t['game'] === $dbGameName;
});

// Get game image based on game name
$gameImageMap = [
    'Call of Duty Mobile' => 'cod_card.png',
    'PUBG Mobile' => 'Pubg_card.png',
    'Free Fire' => 'free_fire__card.png',
    'Valorant' => 'valorant_card.png',
    'BGMI' => 'bgmi_card.png'
];

$gameImage = isset($gameImageMap[$dbGameName]) ? $gameImageMap[$dbGameName] : 'hero-img.png';

// Get tournament types for this game
$types = [];
foreach ($game_tournaments as $tournament) {
    if (!in_array($tournament['type'], $types)) {
        $types[] = $tournament['type'];
    }
}
?>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
:root {
    --primary: #00ffcc;
    --primary-dark: #00e6b8;
    --secondary: #ff3366;
    --dark: #0d1117;
    --darker: #090c10;
    --neon: #00ffcc;
    --neon-secondary: #ff3366;
}

.game-banner {
    position: relative;
    padding: 100px 0;
    background: linear-gradient(rgba(9, 12, 16, 0.8), rgba(9, 12, 16, 0.9)), url('assests/games/<?php echo $gameImage; ?>');
    background-size: cover;
    background-position: center;
}

.cyber-grid {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(var(--primary-dark) 1px, transparent 1px),
        linear-gradient(90deg, var(--primary-dark) 1px, transparent 1px);
    background-size: 50px 50px;
    background-position: center;
    opacity: 0.03;
    animation: gridMove 20s linear infinite;
}

.tabs-container {
    display: flex;
    margin-bottom: 30px;
    border-bottom: 1px solid rgba(0, 255, 204, 0.2);
}

.tab {
    padding: 15px 25px;
    font-size: 1.1rem;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    position: relative;
    background: transparent;
    border: none;
    transition: all 0.3s ease;
}

.tab:hover {
    color: var(--primary);
}

.tab.active {
    color: var(--primary);
}

.tab.active::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 3px;
    background: var(--primary);
}

.tournament-card {
    background: rgba(13, 17, 23, 0.7);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 255, 204, 0.1);
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    margin-bottom: 20px;
    position: relative;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.tournament-card:hover {
    transform: translateY(-5px);
    border-color: var(--primary);
    box-shadow: 0 10px 30px rgba(0, 255, 204, 0.2);
}

.tournament-header {
    padding: 25px;
    position: relative;
    overflow: hidden;
    height: 180px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-bottom: 1px solid rgba(0, 255, 204, 0.1);
}

.tournament-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(rgba(9, 12, 16, 0.3), rgba(9, 12, 16, 0.9)), url('assests/games/<?php echo $gameImage; ?>');
    background-size: cover;
    background-position: center;
    z-index: -1;
}

.tournament-status {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    padding: 5px 10px;
    border-radius: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
}

.tournament-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #fff;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    font-family: 'Orbitron', sans-serif;
    letter-spacing: 1px;
}

.tournament-info {
    display: flex;
    flex-wrap: wrap;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    background: rgba(9, 12, 16, 0.4);
}

.tournament-info-item {
    display: flex;
    align-items: center;
    margin-right: 20px;
    margin-bottom: 10px;
}

.tournament-info-item i {
    color: var(--primary);
    margin-right: 8px;
    font-size: 1rem;
}

.tournament-info-text {
    font-size: 0.9rem;
    color: #fff;
}

.tournament-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    background: rgba(9, 12, 16, 0.6);
}

.tournament-date, .tournament-prize, .tournament-players, .tournament-type {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
    padding: 10px;
    position: relative;
}

.tournament-date:not(:last-child)::after,
.tournament-prize:not(:last-child)::after, 
.tournament-type:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 25%;
    height: 50%;
    width: 1px;
    background: rgba(255, 255, 255, 0.1);
}

.meta-label {
    font-size: 0.8rem;
    color: #8a8a8a;
    margin-bottom: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.meta-value {
    font-size: 1.1rem;
    font-weight: 600;
    color: #fff;
}

.meta-icon {
    color: var(--primary);
    font-size: 1.2rem;
    margin-bottom: 8px;
}

.tournament-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background: rgba(0, 0, 0, 0.2);
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.tournament-fee {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--primary);
    display: flex;
    align-items: center;
}

.tournament-fee i {
    margin-right: 8px;
}

.btn-neon {
    position: relative;
    background: transparent;
    border: 2px solid var(--primary);
    color: var(--primary);
    padding: 8px 20px;
    font-family: 'Orbitron', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    overflow: hidden;
    z-index: 1;
}

.btn-neon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: var(--primary);
    transition: width 0.3s ease;
    z-index: -1;
}

.btn-neon:hover {
    color: var(--dark);
    text-shadow: none;
}

.btn-neon:hover::before {
    width: 100%;
}

.slots-container {
    height: 10px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    overflow: hidden;
    margin-top: 10px;
}

.slots-filled {
    height: 100%;
    background: linear-gradient(90deg, var(--primary-dark), var(--primary));
    border-radius: 5px;
    transition: width 0.5s ease;
}

.slots-text {
    font-size: 0.85rem;
    color: #8a8a8a;
    margin-top: 5px;
    text-align: center;
    display: flex;
    justify-content: space-between;
}

.prize-details {
    padding: 15px 20px;
    background: rgba(9, 12, 16, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.prize-distribution {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
}

.prize-position {
    font-size: 0.85rem;
    color: #8a8a8a;
}

.prize-amount {
    font-size: 0.85rem;
    color: var(--primary);
    font-weight: 600;
}
</style>

<section class="game-banner">
    <div class="cyber-grid"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="text-white display-4 fw-bold mb-4"><?php echo $dbGameName; ?></h1>
                <p class="text-white-50 lead mb-4">Compete in exciting <?php echo $dbGameName; ?> tournaments and win amazing prizes</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background: var(--dark);">
    <div class="container">
        <div class="tabs-container">
            <button class="tab active" data-type="all">All Tournaments</button>
            <?php foreach ($types as $type): ?>
                <button class="tab" data-type="<?php echo $type; ?>"><?php echo $type; ?></button>
            <?php endforeach; ?>
        </div>

        <div class="row tournament-container">
            <?php if (empty($game_tournaments)): ?>
                <div class="col-12 text-center">
                    <p class="text-white">No tournaments available for <?php echo $dbGameName; ?> at the moment. Check back soon!</p>
                </div>
            <?php else: ?>
                <?php foreach ($game_tournaments as $tournament): ?>
                    <div class="col-lg-4 col-md-6 tournament-item" data-type="<?php echo $tournament['type']; ?>">
                        <div class="tournament-card">
                            <div class="tournament-header">
                                <!-- <span class="tournament-status <?php echo $tournament['status_class']; ?>"><?php echo $tournament['status']; ?></span> -->
                                <h3 class="tournament-title"><?php echo $tournament['title']; ?></h3>
                                <p class="text-white-50"><?php echo $tournament['time_remaining']; ?></p>
                            </div>
                            <div class="tournament-info">
                                <div class="tournament-info-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span class="tournament-info-text"><?php echo $tournament['date']; ?></span>
                                </div>
                                <div class="tournament-info-item">
                                    <i class="fas fa-award"></i>
                                    <span class="tournament-info-text"><?php echo $tournament['prize']; ?></span>
                                </div>
                                <div class="tournament-info-item">
                                    <i class="fas fa-users"></i>
                                    <span class="tournament-info-text"><?php echo $tournament['players']; ?> players</span>
                                </div>
                                <div class="tournament-info-item">
                                    <i class="fas fa-gamepad"></i>
                                    <span class="tournament-info-text"><?php echo $tournament['type']; ?></span>
                                </div>
                            </div>
                            <div class="tournament-meta">
                                <div class="tournament-date">
                                    <i class="fas fa-clock meta-icon"></i>
                                    <span class="meta-label">Time</span>
                                    <span class="meta-value">8:00 PM</span>
                                </div>
                                <div class="tournament-prize">
                                    <i class="fas fa-trophy meta-icon"></i>
                                    <span class="meta-label">Prize</span>
                                    <span class="meta-value"><?php echo $tournament['prize']; ?></span>
                                </div>
                                <div class="tournament-type">
                                    <i class="fas fa-layer-group meta-icon"></i>
                                    <span class="meta-label">Format</span>
                                    <span class="meta-value"><?php echo $tournament['type']; ?></span>
                                </div>
                            </div>
                            <div class="prize-details">
                                <div class="prize-distribution">
                                    <span class="prize-position">1st Place</span>
                                    <span class="prize-amount"><?php echo '₹' . (intval(substr($tournament['prize'], 1)) * 0.6); ?></span>
                                </div>
                                <div class="prize-distribution">
                                    <span class="prize-position">2nd Place</span>
                                    <span class="prize-amount"><?php echo '₹' . (intval(substr($tournament['prize'], 1)) * 0.3); ?></span>
                                </div>
                                <div class="prize-distribution">
                                    <span class="prize-position">3rd Place</span>
                                    <span class="prize-amount"><?php echo '₹' . (intval(substr($tournament['prize'], 1)) * 0.1); ?></span>
                                </div>
                            </div>
                            <div class="px-3 py-3">
                                <div class="slots-container">
                                    <div class="slots-filled" style="width: <?php echo ($tournament['filled_slots'] / $tournament['total_slots']) * 100; ?>%;"></div>
                                </div>
                                <div class="slots-text">
                                    <span>Registrations</span>
                                    <span><?php echo $tournament['filled_slots']; ?>/<?php echo $tournament['total_slots']; ?></span>
                                </div>
                            </div>
                            <div class="tournament-footer">
                                <div class="tournament-fee">
                                    <i class="fas fa-ticket-alt"></i>
                                    Entry: <?php echo $tournament['entry_fee']; ?>
                                </div>
                                <a href="./game-rgn/registration.php"  class="btn btn-neon"><?php echo $tournament['button_text']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tournament filtering
    const tabs = document.querySelectorAll('.tab');
    const tournamentItems = document.querySelectorAll('.tournament-item');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            // Add active class to clicked tab
            this.classList.add('active');
            
            const type = this.dataset.type;
            
            // Show/hide tournament items based on type
            tournamentItems.forEach(item => {
                if (type === 'all' || item.dataset.type === type) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php include('includes/footer.php'); ?> 