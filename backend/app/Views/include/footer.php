<link rel="stylesheet" href="<?=ASSETS_M;?>css/footer-style.php">

<!-- ___ FOOTER ___ -->
<footer>
    <div class="container">
        <div class="wrapper up">
            <div class="main">
                <h2>Order Custom Boxes. Designed in Minutes. <br> Delivered in Days. <br> Distinction Quality.</h2>
                <span>Connect Us At:</span>
                <ul>
                    <li><a href="#" aria-label="Facebook Logo"><img src="<?=ASSETS_M;?>images/icons/fb.webp" alt="Facebook Logo" width="40" height="40"></a></li>
                    <li><a href="#" aria-label="Instagram Logo"><img src="<?=ASSETS_M;?>images/icons/insta.webp" alt="Instagram Logo" width="40" height="40"></a></li>
                    <li><a href="#" aria-label="Linkedin Logo"><img src="<?=ASSETS_M;?>images/icons/linkedin.webp" alt="Linkedin Logo" width="40" height="40"></a></li>
                    <li><a href="#" aria-label="Pintrest Logo"><img src="<?=ASSETS_M;?>images/icons/pintrest.webp" alt="Pintrest Logo" width="40" height="40"></a></li>
                    <li><a href="#" aria-label="Twitter X Logo"><img src="<?=ASSETS_M;?>images/icons/X_Logo.svg" alt="Twitter X Logo" width="40" height="40"></a></li>
                    <li><a href="#" aria-label="YouTube Logo"><img src="<?=ASSETS_M;?>images/icons/YT.webp" alt="YouTube Logo" width="40" height="40"></a></li>
                </ul>
            </div>
            <div class="info">
                <span>Need Assistance? Call us at:</span>
                <a href="tel:<?= $site_settings->company_phone ??'' ?>" aria-label="Contact Number"><?= $site_settings->company_phone ??'' ?></a>
                <span>For More Convenience</span>
                <ul>
                    <li><a href="#" aria-label="Install App From Google Play Store"><img src="<?=ASSETS_M;?>images/icons/android.webp" alt="Google Play Icon" width="150" height="43"></a></li>
                    <li><a href="#" aria-label="Install App From App Store"><img src="<?=ASSETS_M;?>images/icons/IOS.webp" alt="App Store Icon" width="150" height="43"></a></li>
                </ul>
            </div>
        </div>
        <div class="wrapper down">
            <div class="details">
                <div class="logo">
                    <a href="#" aria-label="Emenac Packaging Logo">
                        <img src="<?=ASSETS_M;?>images/logo-white.webp" alt="Emenac Packaging Logo" width="246" height="24">
                    </a>
                </div>
                <p>Emenac Packaging is the first priority of businesses for personalised packaging solutions. With years of experience to back us, we strive forward to offer the best custom-printed boxes of all kinds. Quality distinction and affordable rates are also guaranteed.</p>
                <ul>
                    <li>
                        <a href="mailto:<?= $site_settings->company_email ??'' ?>" aria-label="Our Email Address">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                            </svg>
                            <?= $site_settings->company_email ??'' ?>
                            
                        </a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg>
                        <?= $site_settings->company_address ??'' ?>, <span></span> New Zealand
                    </li>
                </ul>
                <span>(Sales & Customer Service)</span>
            </div>
            <div class="links">
                <strong>LEARN MORE:</strong>
                <ul>
                    <li><a href="<?= URL.'choose-your-style/' ?>" aria-label="Choose Your Style Page">Choose Your Style</a></li>
                    <li><a href="<?= URL.'about-us/' ?>" aria-label="About Us Page">About Us</a></li>
                    <li><a href="<?= URL.'blog/' ?>" aria-label="Blog Page">Blog</a></li>
                    <li><a href="<?= URL.'custom-box-videos/' ?>" aria-label="Videos Page">Videos</a></li>
                    <li><a href="<?= URL.'comments/'?>" aria-label="Customer Reviews Page">Customer Reviews</a></li>
                </ul>
            </div>
            <div class="additional">
                <div class="newsletter">
                    <strong>JOIN OUR NEWSLETTER:</strong>
                    <form method="get" action="">
                        <input type="email" name="newsletter" id="newsletter" placeholder="Enter email here..." required aria-label="Enter Email ID For Newsletter">
                        <button type="submit" class="custom__btn" aria-label="Submit Email">SUBMIT</button>
                    </form>
                </div>
                <div class="payments">
                    <span>Payment System:</span>
                    <img src="<?=ASSETS_M;?>images/icons/payment.webp" alt="All Payment Methods Icons" width="369" height="30">
                </div>
            </div>
        </div>
        <div class="copyright">
            <span>Copyright © 2024 www.emenacpackaging.co.nz All rights reserved.</span>
        </div>
    </div>
</footer>

<!-- [ JAVASCRIPT ] -->
<script>
    // STICKY BAR ON TOP
    const stickyBar = document.querySelector('.sticky-bar');

    window.addEventListener('scroll', () => {
        if (scrollY > 58) {
            stickyBar.style.top = '0'
        } else {
            stickyBar.style.top = '-100%'
        }
    });

    // NAVIGATION SMALL SCREEN TOGGLE
    const navToggleBtn = document.querySelector('#nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    const linksWrapper = document.querySelector('.menu-links .wrapper');

    navToggleBtn.addEventListener('click', () => {
        if (navToggleBtn.dataset.hidden === 'true') {
            navToggleBtn.dataset.hidden = 'false';
            navLinks.style.display = 'block';
            linksWrapper.style.flexDirection = 'column';
            linksWrapper.style.alignItems = 'flex-start';
            navToggleBtn.style.marginTop = '7px';
        } else {
            navToggleBtn.dataset.hidden = 'true';
            navLinks.style.display = 'none';
            linksWrapper.style.flexDirection = 'row';
            linksWrapper.style.alignItems = 'center';
            navToggleBtn.style.marginTop = '0';
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth < 991) {
            navLinks.style.display = 'none';
            linksWrapper.style.flexDirection = 'row';
            linksWrapper.style.alignItems = 'center';
        } else {
            navToggleBtn.dataset.hidden = 'true';
            navLinks.style.display = 'flex';
        }
    });
</script>

</body>
</html>