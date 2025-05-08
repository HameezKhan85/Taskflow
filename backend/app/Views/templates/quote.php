 <link rel="stylesheet" href="<?= ASSETS_M?>css/quote-style.php">
    <!-- ___ BREADCRUMB ___ -->
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li>
                    <a href="<?= URL ?>" aria-label="Home"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li><span class="active">Quote</span></li>
            </ul>
        </div>
    </div>
    <!-- ___ QUOTE ___ -->
    <section class="quote">
        <div class="container">
            <div class="wrapper">
                <div class="main">
                    <h1>BEAT MY QUOTE</h1>
                    <p>All of our packaging solutions are designed, printed & manufactured in New Zealand in our in-house vicinity. We don’t outsource any service, material or labor. Due to all these factors, Emenac Packaging provides custom boxes and custom printed packaging solutions at most competitive & reasonable rates. No one can beat our quote for sure.</p>
                </div>
                <ul>
                    <li>
                        <h2>1.</h2>
                        <div>
                            <h3>Choose Your Style</h3>
                            <p>Select your box style from available range, from mailers to shippers and displays all are available here.</p>
                        </div>
                    </li>
                    <li>
                        <h2>2.</h2>
                        <div>
                            <h3>Choose Your Size</h3>
                            <p>Enter the box dimensions as per your product size to give it a perfect fit and ensure its ultimate protection.</p>
                        </div>
                    </li>
                    <li>
                        <h2>3.</h2>
                        <div>
                            <h3>Upload your Artwork</h3>
                            <p>Upload your design your own brand logo, images, patterns and textures to give your box a personalized look.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ___ FORM ___ -->
    <div class="container">
    <?php include 'components/quote-form.php' ?>
    </div>
    <style>
        .quote-form {max-width: 100%; border-radius: 0;}
        .quote-form .title {display: none;}
        .quote-form form {border-radius: 0;}
    </style>

    <!-- ___ ASSISTS ___ -->
    <section class="assist">
        <div class="container">
            <div class="title">
                <h2>How we help you?</h2>
            </div>
            <div class="wrapper">
                <div class="info">
                    <img src="<?= ASSETS_M?>images/icons/quote-icon-1.svg" alt="Vector Icon" width="70" height="70">
                    <div>
                        <h3>Design Assistance</h3>
                        <p>Our dedicated packaging specialists assists you at every step in creation of your boxes and co-create them.</p>
                    </div>
                </div>
                <div class="info">
                    <img src="<?= ASSETS_M?>images/icons/quote-icon-2.svg" alt="Vector Icon" width="70" height="70">
                    <div>
                        <h3>Artwork Guidance</h3>
                        <p>We provide you thorough guidance in terms of box design and educate you about every technical aspect.</p>
                    </div>
                </div>
                <div class="info">
                    <img src="<?= ASSETS_M?>images/icons/quote-icon-3.svg" alt="Vector Icon" width="70" height="70">
                    <div>
                        <h3>Suitable Suggestions</h3>
                        <p>We suggest you the best shape, style and stocks for your boxes as per your product dimensions and nature.</p>
                    </div>
                </div>
                <div class="info">
                    <img src="<?= ASSETS_M?>images/icons/quote-icon-1.svg" alt="Vector Icon" width="70" height="70">
                    <div>
                        <h3>Design Mock-ups</h3>
                        <p>We send you design mock ups free of cost so you can examine them and ensure they are best for your branding.</p>
                    </div>
                </div>
                <div class="info">
                    <img src="<?= ASSETS_M?>images/icons/quote-icon-2.svg" alt="Vector Icon" width="70" height="70">
                    <div>
                        <h3>Timely Alterations</h3>
                        <p>If you think that your design is not same as you imagine it or want it, we can make changes into it on your request.</p>
                    </div>
                </div>
                <div class="info">
                    <img src="<?= ASSETS_M?>images/icons/quote-icon-3.svg" alt="Vector Icon" width="70" height="70">
                    <div>
                        <h3>Feedbacks</h3>
                        <p>We pay heed to customer’s feedbacks and improving ourselves from time to time to provide you better services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>