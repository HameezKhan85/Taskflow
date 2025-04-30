<link rel="stylesheet" href="<?= ASSETS_M?>css/offers-style.php">
<?php $db = \Config\Database::connect(); $productIds = explode(',', $pages_data['product_id']??''); $products = $db->table('ci_data')->select('title, slug, banner,alt1,boxes_detail')->where('post_type', 'product')->where('status',1)->whereIn('id', $productIds)->where('deleted_by <=', 0)->get()->getResultArray();?>
<!-- OFFERS -->
    <section class="offers">
        <div class="container">
            <div class="wrapper">
                <div class="image">
                    <img src="<?= ASSETS_M?>images/No-Offer.webp" alt="No Offer Background" width="767" height="651">
                </div>
                <?php include 'components/quote-form.php' ?>
                <link rel="stylesheet" href="<?= ASSETS_M?>css/quote-form-min-style.css">
            </div>
            <?php if (!empty($pages_data['content'])) { ?>
            <div class="head">
               <?= $pages_data['content']??'' ?>
            </div>
            <?php }  if($pages_data['section2_status'] == 1){?>
            <div class="products">
                <?php foreach($products as $pro){?>
                <a href="<?= URL.'custom/'.$pro['slug'] ?>/" class="item" aria-label="Pillow Cristmas Box">
                    <img src="<?= ASSETS_G. $pro['banner']??""?>" alt="Pillow Christmas Box" width="247" height="185">
                    <strong><?= $pro['title']??''  ?></strong>
                    <button class="custom__btn" aria-label="Get Quote">Get Quote</button>
                </a>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </section>

<!-- FEATURES -->
    <section class="features">
        <div class="container">
            <div class="head">
                <h2>
                    <small>Create Your Own</small>
                    Custom Printed Packaging Boxes
                </h2>
                <p>Available in all custom shapes, sizes and styles. Easily customizable according to product dimensions, they are perfect to portray, present, sell, ship and store any type of product with an extra bit of care and elegance.</p>
            </div>
            <div class="timer">
                <img src="<?= ASSETS_M?>images/icons/offer-end.webp" alt="offer-ends-in" width="489" height="79">
                <div class="time">
                    <span id="dayCount">0</span>
                    <span id="hourCount">0</span>
                    <span id="minuteCount">0</span>
                    <span id="secondCount">0</span>
                </div>
                <img src="<?= ASSETS_M?>images/icons/divider-vector.webp" alt="divider-vector" width="141" height="45">
            </div>
            <div class="highlights">
                <img src="<?= ASSETS_M?>images/icons/offers-highlishts.webp" alt="offers-highlights" width="480" height="77">
            </div>
        </div>
    </section>

    <script>
        // COUNTDOWN TIMER [Offer-Page]
        const dayCount = document.querySelector('#dayCount');
        const hourCount = document.querySelector('#hourCount');
        const minuteCount = document.querySelector('#minuteCount');
        const secondCount = document.querySelector('#secondCount');

        const targetDate = new Date('June 20, 2024 24:00:00').getTime();

        const countdownTimer = setInterval(() => {
        const now = new Date().getTime();

        const distance = targetDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        dayCount.textContent = days;
        hourCount.textContent = hours;
        minuteCount.textContent = minutes;
        secondCount.textContent = seconds;

        if (distance <= 0) {
            clearInterval(countdownTimer);

            dayCount.textContent = 0;
            hourCount.textContent = 0;
            minuteCount.textContent = 0;
            secondCount.textContent = 0;
            }
        }, 1000);
    </script>