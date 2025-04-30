 <link rel="stylesheet" href="<?= ASSETS_M ?>css/portfolio-style.php">
 <?php $db = \Config\Database::connect(); $portfolio = $db->table('ci_data')->select('title, slug, banner,alt1')->where('post_type', 'portfolio')->where('status',1)->where('deleted_by <=', 0)->get()->getResultArray(); ?>
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
                <li><span class="active">Portfolio</span></li>
            </ul>
        </div>
    </div>
    <style>
        .gallery #loader { display: flex; margin-inline: auto; }
    </style>
    <section class="gallery" >
        <div class="container">
            <div class="head">
                <h2>The House of Best Custom Printing & Proficient Packaging Solutions
                </h2>
                <p>Emenac Packaging proudly owns the best experts of printing and packaging industry. Here is the colle of some of the boxes crafted right according to our valued customers’ requirements. Having an abili customize packaging boxes in different sizes, shapes and styles, Emenac Packaging fulfills the requir of customers in lowest rate with flawless printed results. Not only we accept short and long run or we use 100% recyclable Cardboard, Kraft and Corrugated materials to give you unrivaled printin packaging solutions.</p>
            </div>
            <div class="products">
                <?php foreach($portfolio as $port){ ?>
                <div class="details">
                    <img src="<?= ASSETS_G.$port['banner']?>" alt="<?= $port['alt1']??"" ?>" width="228" height="280">
                    <div>
                        <strong><?= $port['title']??"" ?></strong>
                        <span>Product ID: <?= $port['slug']??"" ?></span>
                    </div>
                </div>
               <?php } ?>
            </div>
        </div>
        <div class="modal" style="display: none;">
            <button id="close-btn" aria-label="Close Modal">&times;</button>
            <img src="" alt="Promotional Box" width="500" height="400">
        </div>
        <img id="loader" src="<?= ASSETS_G.'eloading.gif' ?>" alt="loading gif" width="200" height="200" style="display: none;">
    </section>

    <script>
        // IMAGES MODAL
        const modal = document.querySelector('.modal');
        const modalImg = modal.querySelector('img');
        const modalClose = modal.querySelector('#close-btn');
        const displayImg = document.querySelectorAll('.gallery .details img');

        function openModal(i) {
            modal.style.display = 'flex';
            displayImg.forEach((image, index) => {
                if (i === index) {
                    modalImg.src = image.src;
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
    <!-- //@@@@@@@@@@@@@@@@@@@@@@ Scrol Loader`@@@@@@@@@@@@@@@@ -->
<script>
   const itemsToShow = 2;
    let totalItems = <?= count($portfolio) ?>;
    let loadedItems = 0;
    const allItems = document.querySelectorAll('.products .details');
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
