<link rel="stylesheet" href="<?= ASSETS_M ?>css/video-details-style.php">
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
                <li>
                    <a href="#" aria-label="Videos">Videos</a>
                </li>
                <li><span class="active"><?= $pages_data['title']??"" ?></span></li>
            </ul>
        </div>
    </div>
    <?php

        $video_url = $pages_data['video'];
        if (strpos($video_url, 'youtu.be') !== false) {
            preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $video_url, $matches);
            $video_id = $matches[1];
            $embed_url = "https://www.youtube.com/embed/" . $video_id;
        } else {
            $embed_url = $video_url;
        }
        ?>
    <!-- ___ DETAILS ___ -->
    <section class="details">
        <div class="container">
            <div class="wrapper">
                <div class="post">

                    <iframe width="100%" height="420" src="<?= $embed_url ?>" frameborder="0" allowfullscreen="false" title="How to Step-up Medicine’s Protection With Custom Box Packaging?"></iframe>
                        <h1><?= $pages_data['title']??"" ?></h1>
                       <?= $pages_data['content']??"" ?>
                </div>
                <?php include 'components/quote-form.php' ?>
                <link rel="stylesheet" href="<?= ASSETS_M ?>css/quote-form-min-style.css">
            </div>
        </div>
    </section>
