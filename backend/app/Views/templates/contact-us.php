<link rel="stylesheet" href="<?= ASSETS_M?>css/contact-us-style.css">
    <!-- ___ BREADCRUMB ___ -->
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li>
                    <a href="#" aria-label="Home"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li><span class="active">Contact Us</span></li>
            </ul>
        </div>
    </div>

    <!-- ___ Contact ___ -->
    <section class="contact" >
        <div class="container">
            <div class="contact_form">
                <div class="head">
                    <h2>Feel Free to Make a Talk</h2>
                    <p>Emenac Packaging New Zealand- The House of Proficient Printing & Distinct Featured Boxes</p>
                    <p>Emenac Packaging facilitates your business by providing innovative styled boxes in extraor design. We use the finest paper material and high quality cardboard to ensure perfect Die Cut boxes. You will get guaranteed satisfaction with high quality printing and free shipping in New Zealand. Just dial 03 222 2969 to know more about our services.</p>
                </div>
                <form method="post" action="">
                    <div class="group">
                        <div>
                            <label for="fName">Enter Name</label>
                            <input type="text" name="name" id="fName" placeholder="Full Name" aria-label="Enter Your Name" required>
                        </div>
                        <div>
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="your@gmail.com" aria-label="Enter Your Email Address" required>
                        </div>
                    </div>
                    <label for="contact">Contact</label>
                    <input type="tel" name="contact" id="contact" placeholder="Enter Your Contact" aria-label="Enter Your Contact Number">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Enter Your Message for us." aria-label="Write a Message"></textarea>
                    <div class="group">
                        <label for="captcha">
                            <img src="<?= ASSETS_M?>images/icons/captcha-lock.svg" alt="Lock Icon" width="15" height="21">
                            Captcha* 14 + 2 = 
                        </label>
                        <input type="number" name="captcha" id="capchta" placeholder="Answer" aria-label="Enter Correct Captcha Number" required>
                        <button type="submit" aria-label="Submit Form">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ___ MAP ___ -->
    <div class="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6384.137682642492!2d174.777398!3d-36.864771000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d487469bfa4a1%3A0x283e921a2c6ce92f!2s6%20Clayton%20Street%2C%20Newmarket%2C%20Auckland%201023%2C%20New%20Zealand!5e0!3m2!1sen!2sus!4v1716439436600!5m2!1sen!2sus"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="6 Clayton Street, Newmarket, Auckland 1023, New Zealand">
        </iframe>
    </div>