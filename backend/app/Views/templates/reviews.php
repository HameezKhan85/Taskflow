<link rel="stylesheet" href="<?= ASSETS_M?>css/reviews-style.php">
<?php $db = \Config\Database::connect(); $reviews = $db->table('ci_data')->select('title, slug, banner,alt1,content')->where('post_type', 'reivew')->where('status',1)->where('deleted_by <=', 0)->get()->getResultArray(); ?>
    <!-- ___ BREADCRUMB ___ -->
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li><span class="active">Customer Reviews</span></li>
            </ul>
        </div>
    </div>

    <!-- ___ REVIEWS ___ -->
    <section class="reviews">
        <div class="container">
            <div class="head">
                <h1>What we confide, We fulfill!</h1>
                <p>Emenac Packaging is a project of Kolaxo where we commit to deliver 100% customised packaging and printing
                    solutions for your business products. Get customised packaging and printing solutions from Emenac
                    Packaging at affordable rates in less time. <a href="#">Contact us on: 03 222 2969</a></p>
            </div>
            <div class="wrapper">
                <iframe id="ytv-video-playerresponsivePlayer0" class="ytv-video-playerContainer" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="Emenac Packaging New Zealand Review By Bridgett Townsend" width="100%" height="460" src="https://www.youtube.com/embed/ibqCsONGd00?enablejsapi=1&amp;origin=https%3A%2F%2Fwww.emenacpackaging.co.nz&amp;controls=1&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;autoplay=0&amp;theme=light&amp;wmode=opaque&amp;widgetid=1"></iframe>
                <div class="feedback">
                    <span>Overall Rating</span>
                    <ul>
                        <?php for ($s = 0; $s < 5; $s++) : ?>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#efc610" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        </li>
                        <?php endfor; ?>
                    </ul>
                    <strong>(4.72/5)</strong>
                    <a href="#">
                        <img src="<?= ASSETS_M?>images/icons/review-btn.webp" alt="Write a Review" width="162" height="40">
                    </a>
                </div>
                <div class="customer-reviews">
                    <?php foreach($reviews as $rev) {?>
                    <div class="review custom__scroll-p">
                        <p><?= $rev['content']??"" ?></p>
                        <div>
                            <strong><?= $rev['title']??"" ?></strong>
                            <img src="<?= ASSETS_M?>images/icons/5-stars.svg" alt="5 Star Rating" width="95" height="18">
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>