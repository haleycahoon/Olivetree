<!-- resources/views/partials/footer.blade.php -->

<div id="app">
    <div class="footer-container">
        <footer class="footer">
            <div class="footer-column">
                <h4>Customer Service</h4>
                <div class="footer-links">
                    <a href="#">Contact Us</a>
                    <a href="#">Shipping Information</a>
                    <a href="#">Track Your Order</a>
                    <a href="#">Returns & Exchanges</a>
                </div>
            </div>

            <div class="footer-column">
                <h4>Helpful Links</h4>
                <div class="footer-links">
                    <a href="#">FAQs</a>
                    <a href="#">Help</a>
                    <a href="#">Sign In</a>
                    <a href="#">Rewards</a>
                    <a href="#">Wishlist</a>
                </div>
            </div>

            <div class="footer-column">
                <h4>About</h4>
                <div class="footer-links">
                    <a href="#">About Us</a>
                    <a href="#">Our Team</a>
                    <a href="#">Our Mission</a>
                    <a href="#">Careers</a>
                </div>
            </div>

            <div class="footer-column">
                <h4>Site Info</h4>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Terms of Use</a>
                </div>
            </div>

            <div class="followus">
                <p class="followtitle">Follow Us</p>
                <div class="social-links">
                    <a href="https://www.discord.com/" target="_blank"><i class="bi bi-discord"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://x.com/" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.tiktok.com/" target="_blank"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <div class="copyright">
                <p>By continuing to use this site, you agree to our Privacy Policy.</p>
                <p>© Copyright 2024 - 2024 Olivetree. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
</div>
<style>
/* body,
html {
  margin: 0;
  padding: 0;
  height: 100%;
} */

/* #app {
  min-height: 100%;
  display: flex;
  flex-direction: column;
} */

.footer-container {
  flex-grow: 1;
}

.footer {
  margin-top: 100px;
  background-color: #93a04a;
  color: #fff;
  padding: 30px;
  text-align: center;
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
}

.footer-column {
  flex: 1;
  min-width: 250px;
  max-width: 250px;
  margin: 10px; /* Set margin to 10px on all sides */
  text-align: left;
  display: flex;
  flex-direction: column;
}

.footer h4 {
  color: #fff;
  font-size: 18px;
  margin-bottom: 8px;
  text-align: center;
  text-decoration: underline;
}

.footer-links {
  margin-top: 10px;
}

.footer-links a {
  color: #ddd;
  text-decoration: none;
  display: block;
  margin-bottom: 8px;
  text-align: center;
}

.footer-links a:hover {
  color: #fff;
}

.social-links a {
  font-size: 30px;
  margin-right: 30px;
}

.social-links a:hover {
  color: #1da1f2;
}

.copyright {
  width: 100%;
  text-align: center;
  margin-top: 20px;
  color: #ddd;
  font-size: 20px;
}

.followus {
  width: 100%;
  text-align: center; /* Change text-align to left */
  margin-top: 50px;
  color: #ddd;
}

.followtitle {
  font-size: 30px;
  margin-bottom: 10px;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}
</style>