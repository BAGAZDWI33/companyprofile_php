<link href="css/cookies.css" rel="stylesheet">

<div class="cookie-notification" id="cookieNotification">
    <p>We use cookies to improve your experience on our site. By continuing to use this site, you agree to our use of
        cookies. Read more about it in our <a href="#home" showCookieDetails()">Cookies Policy</a>.</p>
    <button class="cookie-btn" onclick="acceptCookies()">Accept</button>
</div>

<!-- Hidden cookie policy details section that will show on the same page -->
<div class="cookie-details hidden" id="cookieDetails">
    <h2>Cookies Policy</h2>
    <p>This website uses cookies to ensure you get the best experience. Cookies are small text files stored on your
        device. We use cookies to personalize content and ads, provide social media features, and analyze our traffic.
    </p>
    <p>You can manage your cookie preferences in your browser settings.</p>
    <button class="cookie-btn" onclick="hideCookieDetails()">Close</button>
</div>



<script>
    function acceptCookies() {
        // Save the user's acceptance in local storage
        localStorage.setItem('cookiesAccepted', 'true');
        // Hide the cookie notification
        document.getElementById('cookieNotification').classList.add('hidden');
    }

    function showCookieDetails() {
        // Show the cookie policy details without navigating to another page
        document.getElementById('cookieDetails').classList.add('shown');
    }

    function hideCookieDetails() {
        // Hide the cookie policy details
        document.getElementById('cookieDetails').classList.remove('shown');
    }

    // Check if cookies were already accepted
    window.onload = function() {
        if (localStorage.getItem('cookiesAccepted')) {
            document.getElementById('cookieNotification').classList.add('hidden');
        }
    }
</script>