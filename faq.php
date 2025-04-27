<?php
include 'includes/header.php';
?>

<!-- Add AOS CSS and JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
/* FAQ Styles */
.faq-section {
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

/* Search Bar */
.search-container {
    position: relative;
    margin-bottom: 2rem;
}

.search-container input {
    background: rgba(13, 17, 23, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 1rem 1rem 1rem 3rem;
    color: #fff;
    width: 100%;
    transition: all 0.3s ease;
}

.search-container input:focus {
    border-color: #00ffcc;
    box-shadow: 0 0 0 0.2rem rgba(0, 255, 204, 0.25);
}

.search-container i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
}

/* Category Filter */
.category-filter {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.category-btn {
    background: rgba(13, 17, 23, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 0.5rem 1.5rem;
    color: #fff;
    transition: all 0.3s ease;
    cursor: pointer;
}

.category-btn:hover, .category-btn.active {
    background: rgba(0, 255, 204, 0.1);
    border-color: rgba(0, 255, 204, 0.3);
    color: #00ffcc;
}

/* Accordion Styles */
.accordion-item {
    background: rgba(13, 17, 23, 0.8) !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
    border-radius: 10px !important;
    margin-bottom: 1rem;
    overflow: hidden;
    transition: all 0.3s ease;
}

.accordion-item:hover {
    border-color: rgba(0, 255, 204, 0.3) !important;
}

.accordion-button {
    background: rgba(13, 17, 23, 0.8) !important;
    color: #fff !important;
    padding: 1.5rem !important;
    font-weight: 600;
    transition: all 0.3s ease;
}

.accordion-button:not(.collapsed) {
    background: rgba(0, 255, 204, 0.1) !important;
    color: #00ffcc !important;
    box-shadow: none !important;
}

.accordion-button:focus {
    box-shadow: none !important;
    border-color: rgba(0, 255, 204, 0.3) !important;
}

.accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2300ffcc'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.accordion-body {
    background: rgba(13, 17, 23, 0.8) !important;
    color: #fff !important;
    padding: 1.5rem !important;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
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

<!-- Hero Section -->
<section class="hero-section" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold mb-4 glow-text">Frequently Asked Questions</h1>
                <p class="lead text-white-50">Find answers to common questions about Gametosa</p>
            </div>
            <div class="col-md-6 text-end">
                <img src="assests/gametosa_logos_thumbnails/header_gametosa.png" alt="Gametosa Logo" class="img-fluid" style="max-width: 200px;">
            </div>
        </div>
    </div>
</section>

<!-- FAQ Content Section -->
<section class="faq-section">
    <div class="container">
        <!-- Search Bar -->
        <div class="search-container" data-aos="fade-up">
            <i class="fas fa-search"></i>
            <input type="text" id="faqSearch" placeholder="Search for questions..." class="form-control">
        </div>

        <!-- Category Filter -->
        <div class="category-filter" data-aos="fade-up" data-aos-delay="100">
            <button class="category-btn active" data-category="all">All</button>
            <button class="category-btn" data-category="account">Account</button>
            <button class="category-btn" data-category="coins">Gold Coins</button>
            <button class="category-btn" data-category="tournaments">Tournaments</button>
            <button class="category-btn" data-category="hosting">Hosting</button>
        </div>

        <!-- FAQ Accordion -->
        <div class="accordion" id="faqAccordion">
            <!-- Account Related FAQs -->
            <div class="faq-category" data-category="account">
                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                            How to change Email/Mobile details?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Click on the top-left side of the profile avatar. Click on the "edit" icon to edit your email id or mobile number. Write a new email id or mobile number and click on the "Update" button.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                            I am unable to login into my Tournafest Account, what should I do?
                        </button>
                    </h2>
                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We are sorry for this issue, please contact us.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                            Can I have more than one account?
                        </button>
                    </h2>
                    <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Users are allowed to make only one account on Gametosa. Making more than one account on Gametosa is a violation of our Terms and Conditions. It can lead to permanent account termination and it results in losing all your Gametosa gold coins in your wallet.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gold Coins Related FAQs -->
            <div class="faq-category" data-category="coins">
                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What are Gametosa Gold Coins?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Gametosa Gold Coins can be converted to an equal amount of INR. Gametosa Gold coins are the currency of the Gametosa app. You can earn it by playing tournament/scrims and can redeem it in Wallet.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            How to redeem Gametosa Gold Coins?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Click on top right Gold Coins icon or wallet then choose redeem section where you can find the amount you want to redeem in your UPI ID. Click on amount and Provide Valid UPI ID to get amount into it.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            What is the minimum amount required to redeem from the wallet?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Minimum 20 Gametosa Gold Coins required to redeem from the in app wallet.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            How to earn Gametosa Gold Coins?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Gametosa Gold coins can be earned by winning in tournaments/scrims. You can join various guilds to play more tournaments/scrims and earn big. You can also earn by doing daily task.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            What withdrawal modes are available to redeem Gametosa Gold coins?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can withdraw the amount directly in any UPI ID.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            Where can I see my earnings?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Click on top right Gold coins icon and their you can find all transactions history and related activities.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tournaments Related FAQs -->
            <div class="faq-category" data-category="tournaments">
                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                            Can I directly receive my prize money in my personal account?
                        </button>
                    </h2>
                    <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            No, all winnings are transferred to the User's in-app Wallet from where they can redeem to their account.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hosting Related FAQs -->
            <div class="faq-category" data-category="hosting">
                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq11">
                            Who are Hosters in Gametosa app?
                        </button>
                    </h2>
                    <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Hosters are the Players or user who Organise tournaments/Scrims.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq12">
                            How Hoster are get paid?
                        </button>
                    </h2>
                    <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Hosters are get paid on NET30 basis.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq13">
                            How to be a Hoster in Gametosa app?
                        </button>
                    </h2>
                    <div id="faq13" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Contact us on Discord to join us as a Hoster.
                        </div>
                    </div>
                </div>
            </div>

            <!-- General FAQs -->
            <div class="faq-category" data-category="general">
                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq14">
                            What are Offers in Gametosa App?
                        </button>
                    </h2>
                    <div id="faq14" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Offers are API generated task where you can complete the task to earn Gametosa Gold Coins.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq15">
                            What is Gametosa: ESports and Gaming?
                        </button>
                    </h2>
                    <div id="faq15" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A dedicated solution for gamers to play or host their own tournaments/scrims to earn Money.
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

  // Search functionality
  document.getElementById('faqSearch').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    accordionItems.forEach(item => {
      const question = item.querySelector('.accordion-button').textContent.toLowerCase();
      const answer = item.querySelector('.accordion-body').textContent.toLowerCase();
      
      if (question.includes(searchTerm) || answer.includes(searchTerm)) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  });

  // Category filter functionality
  document.querySelectorAll('.category-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      // Remove active class from all buttons
      document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
      // Add active class to clicked button
      this.classList.add('active');
      
      const category = this.dataset.category;
      const faqCategories = document.querySelectorAll('.faq-category');
      
      faqCategories.forEach(faqCategory => {
        if (category === 'all' || faqCategory.dataset.category === category) {
          faqCategory.style.display = '';
        } else {
          faqCategory.style.display = 'none';
        }
      });
    });
  });
</script>

<?php include('includes/footer.php'); ?> 