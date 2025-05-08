<link rel="stylesheet" href="<?= ASSETS_M?>css/choose-your-style.php">
<?php $db = \Config\Database::connect(); $box_style = $db->table('ci_data')->select('title, slug, banner,alt1')->where('post_type', 'box-style')->where('status',1)->where('deleted_by <=', 0)->get()->getResultArray(); ?>
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
                <li><span class="active">Choose Your Style</span></li>
            </ul>
        </div>
    </div>
    <style>
        .choose #loader { display: flex; margin-inline: auto; }
    </style>
    <!-- ___ Choose Your Style ___ -->
    <section class="choose" >
        <div class="container">
            <div class="head">
                <h2>Emenac Packaging - What We Commit, We Deliver</h2>
                <p>Emenac Packaging is a project of Kolaxo, where We guarantee to deliver 100% customized packagin printing service for your business products. Get personalized packaging products boxes and card pro printing from Emenac Packaging at low price. <a href="#" aria-label="Contact Us">Contact us on 03 - 222-2969.</a></p>
            </div>
            <div class="product_style">
            <?php foreach($box_style as $box){ ?>
                <a href="#" class="style_detail" aria-label="Drawer Style">
                    <img src="<?= ASSETS_G.$box['banner']?>" alt="<?= $box['alt1'] ?>" width="269" height="269">
                    <div>
                        <strong><?= $box['title'] ?></strong>
                        <span>Style ID: <?= $box['slug'] ?></span>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
        <div class="modal" style="display: none;">
            <button id="close-btn" aria-label="Close Modal">&times;</button>
            <img src="" alt="Promotional Box" width="500" height="400">
        </div>
        <img id="loader" src="<?= ASSETS_G.'eloading.gif' ?>" alt="loading gif" width="200" height="200" style="display: none;">
    </section>

    <!-- ___ Choose Details -->
    <section class="choose_block" >
        <div class="container">
            <div class="block_title">
                <?= $pages_data['content'] ?>
            </div>
        </div>
    </section>

    <!-- [ JAVASCRIPT ] -->
    <script>
        // IMAGES MODAL
        const modal = document.querySelector('.modal');
        const modalImg = modal.querySelector('img');
        const modalClose = modal.querySelector('#close-btn');
        const displayImg = document.querySelectorAll('.style_detail');

        function openModal(i) {
            modal.style.display = 'flex';
            displayImg.forEach((image, index) => {
                if (i === index) {
                    modalImg.src = image.firstElementChild.src;
                }
            });
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        displayImg.forEach((img, i) => {
            img.addEventListener('click', (e) => {
                e.preventDefault();
                openModal(i);
            });
        });

        modalClose.addEventListener('click', closeModal);

        modal.addEventListener('click', (e) => {
            if (e.target !== modalImg && e.target !== modalClose) {
                closeModal();
            }
        });
    </script>
    <script>
   const itemsToShow = 2;
    let totalItems = <?= count($box_style) ?>;
    let loadedItems = 0;
    const allItems = document.querySelectorAll('.product_style .style_detail');
    const totalPortfolioItems = allItems.length;
    const loader = document.getElementById('loader');
    const loadMoreItems = () => {
        if (loadedItems < totalItems) {
            for (let i = loadedItems; i < Math.min(loadedItems + itemsToShow, totalPortfolioItems); i++) {
                const item = allItems[i];
                if (item) {
                    item.style.display = 'block';
                }
            }
            loadedItems += itemsToShow;
        }
    };

    // Initially hide all items except the first `itemsToShow`
    allItems.forEach((item, index) => {
        if (index >= itemsToShow) {
            item.style.display = 'none'; // Hide items after the initial ones
        }
    });

    // Throttling the scroll event listener
    let isScrolling = false;
    const handleScroll = () => {
        if (isScrolling) return;

        isScrolling = true;
        requestAnimationFrame(() => {
            const scrollPosition = document.documentElement.scrollTop + window.innerHeight;
            const pageHeight = document.documentElement.scrollHeight;

            // If we are close to the bottom of the page (e.g., 200px from the bottom)
            if (scrollPosition >= pageHeight - 200) {
                showLoader();  // Show loader when nearing bottom
                loadMoreItems();
            }

            isScrolling = false;
        });
    };

    // Function to show loader while loading
    const showLoader = () => {
        loader.style.display = 'block'; // Display the loader
        setTimeout(() => {
            loader.style.display = 'none'; // Hide the loader after a short delay (adjust as needed)
        }, 2000); // 2-second loader duration, adjust as needed
    };

    // Listen to scroll event with throttle
    window.addEventListener('scroll', handleScroll);

    // Load initial items
    loadMoreItems();
</script>