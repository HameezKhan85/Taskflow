<link rel="stylesheet" href="<?= ASSETS_M ?>/css/product-style.php">
<?php $db = \Config\Database::connect(); $product_image = $db->table('galleries')->select('image, alt')->where('item_id', $pages_data['id'])->where('deleted_by <=', 0)->get()->getResultArray(); 
$category = $db->table('ci_data')->select('title,slug')->where('id', $pages_data['category_id'])->where('deleted_by <=', 0)->get()->getRowArray(); 
?>
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
                    <a href="<?= isset($category['slug'])?URL.$category['slug']:"" ?>" aria-label="Category"><?= isset($category['title'])?$category['title']:"Uncategorized" ?></a>
                </li>
                <li><span class="active"><?= $pages_data['title']??"" ?></span></li>
            </ul>
        </div>
    </div>

    <!-- ___ PRODUCT ___ -->
    <section class="product">
        <div class="container">
            <div class="head">
                <h1><?= $pages_data['quality_detail_more']??"" ?></h1>
                <div class="custom__scroll">
                    <?= $pages_data['content']; ?>
                </div>
            </div>
            <div class="wrapper">
                <div class="details">
                    <h2>Custom Promotional Boxes</h2>
                    <?php if(!empty($pages_data['product_two_details'])){ $parts = explode(" || ",$pages_data['product_two_details']);?>
                    <ul>
                        <li><strong>Size:</strong> <?= $parts[0] ?></li>
                        <li><strong>Stock:</strong> <?= $parts[1] ?></li>
                        <li><strong>Finishing options:</strong> <?= $parts[2] ?></li>
                        <li><strong>Add on choices:</strong> <?= $parts[3] ?></li>
                    </ul>
                    <?php }else{ ?>
                        <ul>
                            <li><strong>Size:</strong> Available in all shapes and sizes</li>
                            <li><strong>Stock:</strong> 14pt, 16pt, 18pt and 24pt White SBS C1S C2S</li>
                            <li><strong>Finishing options:</strong> Glossy, Matte, Aqeous Coating, Spot UV</li>
                            <li><strong>Add on choices:</strong> Available in all shapes and sizes</li>
                        </ul>
                        <?php } ?>
                    <img src="<?= ASSETS_M ?>/images/design.webp" alt="Free Designign & Free Shipping" width="252" height="92">
                    <a href="tel:03 222 2969" aria-label="Call Now">Call Now! <strong>03 222 2969</strong></a>
                </div>
                <div class="showcase">
                    <div class="carousel">
                        <a href="#" aria-label="Promotional Box">
                            <img src="<?=ASSETS_G.$pages_data['banner']; ?>" alt="Promotional Box" width="800" height="600">
                        </a>
                    </div>
                    <div class="images">
                        <?php if(isset($product_image)){ foreach($product_image as $Img){ ?>
                        <button  aria-label="Promotional Box">
                            <img src="<?= ASSETS_G.$Img['image'] ?>" alt="<?= $Img['alt']?>" width="104" height="104">
                        </button>
                     <?php }} ?>
                    </div>
                </div>
                <?php include 'components/quote-form.php' ?>
                <link rel="stylesheet" href="<?= ASSETS_M ?>/css/quote-form-min-style.php">
                <div class="categories custom__scroll">
                    <strong>Popular Categories</strong>
                    <ul>
                        <li><a href="#" aria-label="Apparal Boxes">Apparal Boxes</a></li>
                        <li><a href="#" aria-label="Bakery Boxes">Bakery Boxes</a></li>
                        <li><a href="#" aria-label="Cardboard Boxes">Cardboard Boxes</a></li>
                        <li><a href="#" aria-label="Cosmetic Boxes">Cosmetic Boxes</a></li>
                        <li><a href="#" aria-label="Cube Boxes">Cube Boxes</a></li>
                        <li><a href="#" aria-label="Display Boxes">Display Boxes</a></li>
                        <li><a href="#" aria-label="Gable Boxes">Gable Boxes</a></li>
                        <li><a href="#" aria-label="Kraft Boxes">Kraft Boxes</a></li>
                        <li><a href="#" aria-label="Mailer Boxes">Mailer Boxes</a></li>
                        <li><a href="#" aria-label="Pillow Boxes">Pillow Boxes</a></li>
                        <li><a href="#" aria-label="Retail Boxes">Retail Boxes</a></li>
                        <li><a href="#" aria-label="Rigid Boxes">Rigid Boxes</a></li>
                        <li><a href="#" aria-label="Shipping Boxes">Shipping Boxes</a></li>
                        <li><a href="#" aria-label="Sleeve Boxes">Sleeve Boxes</a></li>
                    </ul>
                </div>
                <?php if(!empty($pages_data['product_content'])){  ?>
                <div class="content custom__scroll">
                <?= $pages_data['product_content']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="modal" style="display: none;">
            <button id="close-btn">&times;</button>
            <img src="" alt="Promotional Box" width="500" height="400">
        </div>
    </section>

    <!-- [ JAVASCRIPT ] -->
    <script>
        // CAROUSEL IMAGES SLIDER
        const carouselImg = document.querySelector('.product .carousel img');
        const imgsBtn = document.querySelectorAll('.product .images button');

        let currentIndex = 0;

        function handleClick(btn) {
            imgsBtn.forEach(btns => btns.classList.remove('active'));
            
            carouselImg.src = btn.firstElementChild.src;
            carouselImg.width = carouselImg.width;
            carouselImg.height = carouselImg.height;
            
            btn.classList.add('active');
        }

        function autoClickLoop() {
            setInterval(() => {
                handleClick(imgsBtn[currentIndex]);
                currentIndex = (currentIndex + 1) % imgsBtn.length;
            }, 3000);
        }

        imgsBtn.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                handleClick(btn);
                currentIndex = index;
            });
        });

        autoClickLoop();

        // IMAGES MODAL
        const productModal = document.querySelector('.product .modal');
        const modalImg = productModal.querySelector('img');
        const modalClose = productModal.querySelector('#close-btn');

        function openModal() {
            productModal.style.display = 'flex';
            modalImg.src = carouselImg.src;
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            productModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        carouselImg.addEventListener('click', (e) => {
            e.preventDefault();
            openModal();
        });

        modalClose.addEventListener('click', closeModal);

        productModal.addEventListener('click', (e) => {
            if (e.target !== modalImg && e.target !== modalClose) {
                closeModal();
            }
        });
    </script>
