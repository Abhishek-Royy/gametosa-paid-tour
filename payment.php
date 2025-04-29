<?php 
session_start();
include('includes/header.php'); 
?>

<!-- Add required CSS libraries -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
/* Payment Page Specific Styles */
.payment-container {
    max-width: 800px;
    margin: 2rem auto;
    padding: 2rem;
    background: rgba(13, 17, 23, 0.8);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 255, 204, 0.1);
    position: relative;
    overflow: hidden;
}

.payment-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent 48%, var(--primary) 49%, transparent 51%);
    opacity: 0.1;
    pointer-events: none;
}

.payment-header {
    text-align: center;
    margin-bottom: 2rem;
}

.payment-header h1 {
    color: var(--primary);
    font-family: 'Orbitron', sans-serif;
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.payment-form {
    display: grid;
    gap: 1.5rem;
}

.form-group {
    position: relative;
}

.form-group label {
    display: block;
    color: var(--primary);
    margin-bottom: 0.5rem;
    font-family: 'Rajdhani', sans-serif;
    font-weight: 500;
}

.form-group input {
    width: 100%;
    padding: 0.8rem;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--primary);
    border-radius: 5px;
    color: #fff;
    font-family: 'Rajdhani', sans-serif;
    transition: all 0.3s ease;
}

.form-group input:focus {
    outline: none;
    box-shadow: 0 0 10px rgba(0, 255, 204, 0.3);
}

.card-details {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 1rem;
}

.payment-amount {
    text-align: center;
    padding: 1.5rem;
    background: rgba(0, 255, 204, 0.1);
    border-radius: 5px;
    margin-bottom: 1rem;
}

.payment-amount h2 {
    color: var(--primary);
    font-family: 'Orbitron', sans-serif;
    font-size: 2rem;
    margin: 0;
}

.pay-button {
    background: linear-gradient(45deg, var(--primary), var(--primary-dark));
    color: var(--dark);
    padding: 1rem 2rem;
    border: none;
    border-radius: 5px;
    font-family: 'Orbitron', sans-serif;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.pay-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 255, 204, 0.3);
}

.payment-methods {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
}

.payment-method {
    width: 60px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.payment-method i {
    font-size: 2rem;
    color: #fff;
    transition: all 0.3s ease;
}

.payment-method:hover {
    background: rgba(0, 255, 204, 0.2);
    transform: translateY(-2px);
}

.payment-method:hover i {
    color: var(--primary);
}

/* Specific colors for payment icons */
.payment-method .fa-cc-visa {
    color: #1a1f71;
}

.payment-method .fa-cc-mastercard {
    color: #eb001b;
}

.payment-method .fa-cc-amex {
    color: #016fd0;
}

.payment-method .fa-cc-paypal {
    color: #003087;
}

/* Responsive Design */
@media (max-width: 768px) {
    .payment-container {
        margin: 1rem;
        padding: 1.5rem;
    }

    .card-details {
        grid-template-columns: 1fr;
    }

    .payment-header h1 {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .payment-container {
        margin: 0.5rem;
        padding: 1rem;
    }

    .payment-header h1 {
        font-size: 1.5rem;
    }

    .payment-methods {
        flex-wrap: wrap;
    }
}
</style>

<div class="payment-container" data-aos="fade-up">
    <div class="payment-header">
        <h1>Complete Your Payment</h1>
        <p>Secure payment gateway powered by our cyber-secure technology</p>
    </div>

    <div class="payment-amount">
        <h2>$99.99</h2>
        <p>Tournament Entry Fee</p>
    </div>

    <form class="payment-form" id="paymentForm" method="POST" action="process_payment.php">
        <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" maxlength="19" required>
        </div>

        <div class="card-details">
            <div class="form-group">
                <label for="expiryDate">Expiry Date</label>
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" maxlength="5" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" maxlength="3" required>
            </div>
        </div>

        <div class="form-group">
            <label for="cardName">Cardholder Name</label>
            <input type="text" id="cardName" name="cardName" placeholder="JOHN DOE" required>
        </div>

        <button type="submit" class="pay-button">Process Payment</button>
    </form>

    <div class="payment-methods">
        <div class="payment-method">
            <i class="fab fa-cc-visa"></i>
        </div>
        <div class="payment-method">
            <i class="fab fa-cc-mastercard"></i>
        </div>
        <div class="payment-method">
            <i class="fab fa-cc-amex"></i>
        </div>
        <div class="payment-method">
            <i class="fab fa-cc-paypal"></i>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
    
    const cardNumber = document.getElementById('cardNumber');
    const expiryDate = document.getElementById('expiryDate');
    
    // Format card number
    cardNumber.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{4})/g, '$1 ').trim();
        e.target.value = value;
    });

    // Format expiry date
    expiryDate.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.slice(0,2) + '/' + value.slice(2);
        }
        e.target.value = value;
    });

    // Form submission
    document.getElementById('paymentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your payment processing logic here
        alert('Payment processing...');
    });
});
</script>

<?php include('includes/footer.php'); ?> 