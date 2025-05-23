<link rel="stylesheet" href="assets/css/thank-you-style.php">
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
                <li><span class="active">Thank You</span></li>
            </ul>
        </div>
    </div>
    <!-- ___ THANK YOU ___ -->
    <section class="thank">
        <div class="container">
            <div class="content">
                <h2>Thank you for submitting your request</h2>
                <p>One of our Expert will contact you within 24 hours. For a quick process on your inquiry, you are welcome
                    to call us at <a href="tel:<?= $site_settings->company_phone ??'' ?>"><?= $site_settings->company_phone ??'' ?></a>. We will be happy to assist you.</p>
                <p>Thank you for choosing Emenac Packaging.</p>
            </div>
        </div>
    </section>
