<link rel="stylesheet" href="<?=ASSETS_M ?>css/search-style.php">
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
                <li><span class="active">Search</span></li>
            </ul>
        </div>
    </div>
    <!-- ___ REVIEWS ___ -->
    <section class="search">
        <div class="container">
            <div class="head">
                <h1>Search result for: <span></span></h1>
                <p>Emenac Packaging offers the widest range of packaging solutions to almost every type of product. Find your related product below. Furthermore, if you are unable to find the type of boxes you are looking for, we are here to manufacture your desired box right from the scratch precisely according to your specifications.</p>
            </div>
            <div class="wrapper">
                <div class="products">
                    <?php if($result){ foreach($result as $re){  ?>
                    <a href="<?= URL.'custom'.$re['slug'].'/'??"" ?>" class="item" aria-label="<?= $re['title']??"" ?>">
                        <img src="<?=ASSETS_G .$re['banner']??"" ?>" alt="<?= $re['alt1']??"" ?>" width="277" height="208">
                        <strong><?= $re['title']??"" ?></strong>
                        <p><?= $re['content'] ?></p>
                        <button class="custom__btn" aria-label="Get Quote">Get Quote</button>
                    </a>
                    <?php }}else{foreach($cat as $re){ ?>
                        <a href="<?= URL.'custom'.$re['slug'].'/'??"" ?>" class="item" aria-label="<?= $re['title']??"" ?>">
                            <img src="<?=ASSETS_G .$re['banner']??"" ?>" alt="<?= $re['alt1']??"" ?>" width="277" height="208">
                            <strong><?= $re['title']??"" ?></strong>
                            <p><?= $re['content'] ?></p>
                            <button class="custom__btn" aria-label="Get Quote">Get Quote</button>
                         </a>
                        <?php }} ?>
                </div>
                <?php include 'components/quote-form.php' ?>
                <link rel="stylesheet" href="<?=ASSETS_M ?>css/quote-form-min-style.css">
            </div>
        </div>
    </section>