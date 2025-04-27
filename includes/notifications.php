<?php
if (isset($_SESSION['login_success'])) {
    echo '<div class="notification success" id="loginNotification">
            <div class="notification-content">
                <i class="fas fa-check-circle"></i>
                <span>Successfully logged in!</span>
            </div>
            <button class="notification-close" onclick="closeNotification()">
                <i class="fas fa-times"></i>
            </button>
          </div>';
    unset($_SESSION['login_success']);
}

if (isset($_SESSION['login_error'])) {
    echo '<div class="notification error" id="loginNotification">
            <div class="notification-content">
                <i class="fas fa-exclamation-circle"></i>
                <span>' . $_SESSION['login_error'] . '</span>
            </div>
            <button class="notification-close" onclick="closeNotification()">
                <i class="fas fa-times"></i>
            </button>
          </div>';
    unset($_SESSION['login_error']);
}
?>

<style>
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 15px 20px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    z-index: 9999;
    animation: slideIn 0.3s ease-out;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    max-width: 350px;
}

.notification.success {
    background: rgba(0, 255, 204, 0.1);
    border: 1px solid rgba(0, 255, 204, 0.3);
    color: #00ffcc;
}

.notification.error {
    background: rgba(255, 0, 0, 0.1);
    border: 1px solid rgba(255, 0, 0, 0.3);
    color: #ff0000;
}

.notification-content {
    display: flex;
    align-items: center;
    gap: 10px;
}

.notification-content i {
    font-size: 1.2rem;
}

.notification-close {
    background: none;
    border: none;
    color: inherit;
    cursor: pointer;
    padding: 0;
    font-size: 1rem;
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

.notification-close:hover {
    opacity: 1;
}

@keyframes slideIn {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideOut {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(100%);
        opacity: 0;
    }
}

.notification.closing {
    animation: slideOut 0.3s ease-in forwards;
}
</style>

<script>
function closeNotification() {
    const notification = document.getElementById('loginNotification');
    if (notification) {
        notification.classList.add('closing');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }
}

// Auto-close notification after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    const notification = document.getElementById('loginNotification');
    if (notification) {
        setTimeout(() => {
            closeNotification();
        }, 5000);
    }
});
</script> 