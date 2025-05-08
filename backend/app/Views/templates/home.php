
<?php 
$db = \Config\Database::connect();
$categoryIds = explode(',', $pages_data['category_id']); $productIds = explode(',', $pages_data['product_id']); $product_Id = explode(',', $pages_data['product_two_ids']);
$category = $db->table('ci_data')->select('title, slug, banner,alt1')->where('post_type', 'category')->where('status',1)->whereIn('id', $categoryIds)->where('deleted_by <=', 0)->get()->getResultArray();
$products = $db->table('ci_data')->select('title, slug, banner,alt1,boxes_detail')->where('post_type', 'product')->where('status',1)->whereIn('id', $productIds)->where('deleted_by <=', 0)->get()->getResultArray();
$productis = $db->table('ci_data')->select('title, slug, banner,alt1,boxes_detail')->where('post_type', 'product')->where('status',1)->whereIn('id', $product_Id)->where('deleted_by <=', 0)->get()->getResultArray();
$faqs = $db->table('ci_data')->select('title, content')->where('post_type', 'faq')->where('status',1)->where('deleted_by <=', 0)->get()->getResultArray();  
//echo $db->getLastQuery();exit;
?>
<link rel="stylesheet" href="<?=ASSETS_M;?>css/home-style.php">
    
    <!-- ___ BANNER ___ -->
    <?php if(isset($pages_data['banner']) && !empty($pages_data['banner'])){ ?>
    <div class="banner" style="text-align: center;">
         <picture>
			<source media="(min-width: 992px)" srcset="<?=ASSETS_G.$pages_data['banner'];?>" width="1920" height="780">
			<source media="(min-width: 576px) and (max-width: 991px)" srcset="<?=ASSETS_G.$pages_data['banner'];?>" width="992" height="540">
			<source media="(max-width: 575px)" srcset="<?=ASSETS_G.$pages_data['banner'];?>" width="575" height="400">
			<img src="<?=ASSETS_G.$pages_data['banner'];?>" alt="Banner" width="1920" height="780">
		</picture>
    </div>
    <?php }if($pages_data['section1_status'] == 1){?>
    <!-- ___ CATEGORIES SHOWCASE ___ -->
    <section class="showcase-cat">
        <div class="container">
            <?php if(!empty($pages_data['category_section'])){ ?>
            <div class="title custom__scroll-p">
                <?php $parts = explode(" || ", $pages_data['category_section']??'');  $title = $parts[0];  $description = $parts[1] ?? ''; ?>
                <h1><?= $title??""?></h1>
                <p><?= $description??'' ?></p>
            </div>
            <?php } ?>
            <div class="wrapper">
                <?php if($category){ foreach($category as $cat){ ?>
                <a href="<?= URL.$cat['slug']??"" ?>" class="product" aria-label="<?= $cat['title']??"" ?>">
                    <img src="<?=ASSETS_G.$cat['banner']?>" alt="<?= $cat['alt1']??"" ?>" width="224" height="179">
                    <div>
                        <span><?= $cat['title']??"" ?></span>
                        <span class="custom__btn">VIEW ALL</span>
                    </div>
                </a>
                <?php break; }} ?>
                <a href="<?= URL ?>personalized/paper-bags/" class="product" aria-label="Custom Paper Bags">
                    <img src="<?=ASSETS_M;?>images/products/Apparel.webp" alt="Custom Paper Bags" width="224" height="179">
                    <div>
                        <span>Custom Paper Bags</span>
                        <span class="custom__btn">VIEW ALL</span>
                    </div>
                </a>
                <a href="<?= URL ?>personalized/paper-cups/" class="product" aria-label="Paper Cups">
                    <img src="<?=ASSETS_M;?>images/products/Paper-cups.webp" alt="Paper Cups" width="224" height="179">
                    <div>
                        <span>Paper Cups</span>
                        <span class="custom__btn">VIEW ALL</span>
                    </div>
                </a>
                
            </div>
        </div>
    </section>
  <?php } if($pages_data['section2_status'] == 1){?>
    <!-- ___ PRODCUTS SHOWCASE ___ -->
    <section class="showcase">
        <div class="container">
            <div class="title">
                <h2><?= $pages_data['product_section']??"" ?></h2>
            </div>
            <div class="wrapper">
                <?php $counter = 0; if($products){ foreach($products as $pro){ if($counter >= 4){
                    break;
                }  $parts = explode(" || ",$pro['boxes_detail']);?>
                <a href="<?= $pro['slug']??"" ?>" class="product" aria-label="Custom Product Boxes">
                    <img src="<?=ASSETS_G.$pro['banner']??""?>" alt="<?= $pro['alt1']??"" ?>" width="268" height="268">
                    <strong><?= $pro['title']??"" ?></strong>
                    <ul>
                        <?php foreach($parts as $key =>$P){ ?>
                        <li><?= $P ?></li>
                       <?php } ?>
                    </ul>
                    <span>Customize Now</span>
                </a>
                <?php $counter++;  }}?>
            </div>
        </div>
    </section>
<?php } if($pages_data['section3_status'] == 1){ ?>
    <!-- ___ QUOTE ___ -->
    <section class="quote">
        <div class="container">
            <div class="wrapper">
            <?php include 'components/quote-form.php'; if(!empty($pages_data['category_section'])){ ?>
          
                <div class="content">
                  <?= $pages_data['boxes_detail']??"" ?>
                    <ul>
                        <li>Time</li>
                        <li>Money</li>
                        <li>From Overstocking</li>
                        <li>From Hassles</li>
                    </ul>
                </div>
            </div>
          <?php } ?>
        </div>
    </section>
<?php } if($pages_data['section4_status'] == 1){ ?>
    <!-- ___ BRAND ___ -->
    <section class="brand">
        <div class="container">
            <div class="wrapper">
                <?php if(!empty($pages_data['product_quility_detail'])){ ?>
                <div class="content">
                    <?= $pages_data['product_quility_detail']??""  ?>
                    <ul>
                        <li>
                            <img src="<?=ASSETS_M;?>images/icons/people.svg" alt="Peoples Illustration Icon" width="53" height="53">
                            Special finishing effects available on demand
                        </li>
                        <li>
                            <img src="<?=ASSETS_M;?>images/icons/saleicon.svg" alt="Sale Illustraion Icon" width="53" height="53">
                            Flexible order quantities, from small to bulk, with fast delivery
                        </li>
                    </ul>
                </div>
                <?php }if(!empty($pages_data['product_quility_image'])){ ?>
                <div class="image">
                    <img src="<?=ASSETS_G.$pages_data['product_quility_image'];?>" alt="<?= $pages_data['alt2'] ?>" width="514" height="559">
                </div>
                <?php }?>
            </div>
        </div>
    </section>
 <?php }if($pages_data['section5_status'] == 1){ ?>
    <!-- ___ FEATUES ___ -->
    <section class="features">
        <div class="container">
            <div class="wrapper">
                <div class="content">
                    <?php  $parts = explode(" || ",$pages_data['quality_detail_more']);?>
                    <h2><?= $parts[0] ??"" ?></h2>
                    <div class="custom__scroll">
                        <p><?= $parts[1] ??"" ?></p>
                    </div>
                </div>
                <?php if(!empty($pages_data['quality_detail_more'])){ ?>
                <ul>
                    <li>
                        <img src="<?=ASSETS_M;?>images/icons/box-1.svg" alt="Box Icon" width="58" height="48">
                        <div>
                            <strong>50+</strong>
                            <span>Unique Shapes</span>
                        </div>
                    </li>
                    <li>
                        <img src="<?=ASSETS_M;?>images/icons/box-2.svg" alt="Funtion Vector Icon" width="42" height="42">
                        <div>
                            <strong>100+</strong>
                            <span>Functional Styles</span>
                        </div>
                    </li>
                    <li>
                        <img src="<?=ASSETS_M;?>images/icons/box-3.svg" alt="Material Vector Icon" width="47" height="47">
                        <div>
                            <strong>5+</strong>
                            <span>Premium Materials</span>
                        </div>
                    </li>
                    <li>
                        <img src="<?=ASSETS_M;?>images/icons/box-4.svg" alt="Thumbs Up Vector Icon" width="43" height="41">
                        <div>
                            <strong>18+</strong>
                            <span>Custom Inserts</span>
                        </div>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } if($pages_data['section6_status'] == 1){ ?>
    <!-- ___ CUSTOMIZATION ___ -->
    <section class="customization">
        <div class="container">
            <div class="title">
                <h2><?= $pages_data['product_box_section_title']??"" ?></h2>
            </div>
            <div class="wrapper">
                <div class="boxes">
                   <?php $count = 0; foreach($productis as $produ){ if($count >=4){break;} ?>
                    <a href="<?= $produ['slug'] ??""?>" class="product" aria-label="<?= $produ['slug'] ??""?>">
                        <img src="<?=ASSETS_G.$produ['banner']?>" alt="<?= $produ['alt1'] ?>" width="319" height="239">
                        <span><?= $produ['title'] ?></span>
                    </a>
                    <?php $count++; } ?>
                </div>
                <?php if(!empty($pages_data['product_two_details'] == 1)){ ?>
                <div class="content">
                    <div class="custom__scroll">
                        <?= $pages_data['product_two_details']??"" ?>
                    </div>
                    <a href="#quote-form" class="custom__btn" aria-label="Get Quote">Get Quote</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php  } if($pages_data['section7_status'] == 1){ if(!empty($pages_data['priority'])){ ?>
    <!-- ___ IDEAS ___ -->
    <section class="ideas">
        <div class="container">
            <div class="wrapper">
             <?php  $portions = explode(" ||| ", $pages_data['priority']); 
                     $images = ["ideas-vector-1.svg","ideas-vector-2.svg","ideas-vector-3.svg"]; 
                      foreach($portions as $key => $portion){
                        $imageName = $images[$key % count($images)]; 
                      $parts = explode(" || ",$portion);
                    ?>
                <div class="item">
                    
                    <img src="<?=ASSETS_M;?>images/icons/<?= $imageName??"" ?>" alt="Vector Icon" width="36" height="36">
                    <div>
                        <strong><?= $parts[0]??"" ?></strong>
                        <p><?= $parts[1]??"" ?></p>
                    </div>
                </div>
                <?Php } ?>
                
            </div>
        </div>
    </section>
<?php }} if($pages_data['section8_status'] == 1){ ?>
    <!-- ___ DESCRIPTION ___ -->
    <section class="description">
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <h3><?= $pages_data['pricing_detail_title']??"" ?></h3>
                </div>
                <div class="additional custom__scroll">
                   <?= $pages_data['pricing_detail_desc']??'' ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ___ DISCOUNTS ___ -->
    <section class="discounts">
        <div class="container">
            <div class="wrapper">
                <?php if(!empty($pages_data['proudct_p_image'])){ ?>
                <div class="image">
                    <img src="<?=ASSETS_G.$pages_data['proudct_p_image'];?>" alt="<?= $pages_data['alt3'] ?>" width="568" height="601">
                </div>
                <?php } if(!empty($pages_data['pricing_detail_desc'])){ ?>
                <div class="content">
                    <?= $pages_data['pricing_detail_desc']??'' ?>
                    <ul class="info">
                        <li>
                            <strong>No</strong>
                            <span>Shipping Charges</span>
                        </li>
                        <li>
                            <strong>No</strong>
                            <span>Die & Plate Charges</span>
                        </li>
                        <li>
                            <strong>No</strong>
                            <span>Design Assistance Fee</span>
                        </li>
                    </ul>
                    <a href="#" class="custom__btn" aria-label="Get Custom Quote">Get Custom Quote</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php }  if($pages_data['section9_status'] == 1){ $parts = explode(' || ', $pages_data['delievery_pack'])?>
    <!-- ___ SOLUTION ___ -->
    <section class="solution">
        <div class="container">
            <div class="wrapper">
                <div class="content custom__scroll-p">
                    <h2><?= $parts[0]??""  ?></h2>
                    <p><?= $parts[1]??"" ?></p>
                </div>
            </div>
        </div>
    </section>
<?php }if($pages_data['section10_status'] == 1){ $parts = explode(' || ',$pages_data['gallery_head']) ?>
    <!-- ___ GALLERY ___ -->
    <section class="gallery">
        <div class="container">
            <div class="head">
                <h2><?= $parts[0]??'' ?></h2>
                <p><?= $parts[1]??"" ?></p>
            </div>
            <div class="wrapper">
                <div class="box">
                    <img src="<?=ASSETS_M;?>images/products/Display-Box.webp" alt="Display Box" width="787" height="468">
                    <a href="#" aria-label="Display Boxes">
                        <h4>Display Boxes</h4>
                        <span>Learn More</span>
                    </a>
                </div>
                <div class="box">
                    <img src="<?=ASSETS_M;?>images/products/Product-Box.webp" alt="Product Box" width="389" height="231">
                    <a href="#" aria-label="Product Boxes">
                        <h4>Product Boxes</h4>
                        <span>Learn More</span>
                    </a>
                </div>
                <div class="box">
                    <img src="<?=ASSETS_M;?>images/products/Apparel-Box.webp" alt="Apparel Box" width="389" height="231">
                    <a href="#" aria-label="Apparel Boxes">
                        <h4>Apparel Boxes</h4>
                        <span>Learn More</span>
                    </a>
                </div>
                <div class="box">
                    <img src="<?=ASSETS_M;?>images/products/Cosmetic-Box.webp" alt="Cosmetic Box" width="389" height="231">
                    <a href="#" aria-label="Cosmetic Boxes">
                        <h4>Cosmetic Boxes</h4>
                        <span>Learn More</span>
                    </a>
                </div>
                <div class="box">
                    <img src="<?=ASSETS_M;?>images/products/Retail-Box.webp" alt="Retail Box" width="389" height="231">
                    <a href="#" aria-label="Retail Boxes">
                        <h4>Retail Boxes</h4>
                        <span>Learn More</span>
                    </a>
                </div>
                <div class="box">
                    <img src="<?=ASSETS_M;?>images/products/Folding-Box.webp" alt="Folding Box" width="389" height="231">
                    <a href="#" aria-label="Folding Boxes">
                        <h4>Folding Boxes</h4>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php }if($pages_data['section11_status'] == 1){ ?>
    <!-- ___ INFORMATION ___ -->
    <section class="information">
        <div class="container">
            <div class="wrapper">
                <div class="content custom__scroll">
                    <h2><?= $pages_data['shipping_title']??"" ?></h2>
                    <div>
                        <p><?= $pages_data['shipping_desc']??"" ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } if($pages_data['section12_status'] == 1){ ?>
    <!-- ___ ORDER ___ -->
    <section class="order">
        <div class="container">
            <div class="wrapper">
                <div class="image">
                    <img src="<?=ASSETS_G.$pages_data['stylish_box_image']??'';?>" alt="<?= $pages_data['alt4']??'' ?>" width="568" height="568">
                </div>
                <div class="content">
                    <div>
                        <?= $pages_data['stylish_box']??'' ?>
                        </ul>
                    </div>
                    <a href="#" class="custom__btn" aria-label="Get Quote">GET QUOTE</a>
                </div>
            </div>
        </div>
    </section>
    <?php }if($pages_data['section13_status'] == 1){ ?>
    <!-- ___ ADDONS ___ -->
    <section class="addons">
        <div class="container">
            <div class="wrapper">
                <div class="image">
                    <img src="<?=ASSETS_G.$pages_data['hand_box_image'];?>" alt="Hand Carry Box" width="575" height="502">
                </div>
                <div class="content">
                    <?= $pages_data['hand_box']??'' ?>
                </div>
            </div>
        </div>
    </section>
<?php }if($pages_data['section14_status'] == 1){ $parts = explode(' || ',$pages_data['perks_title']); $sections = explode("|||", $pages_data['perks_details']); ?>
    <!-- ___ PERKS ___ -->
    <section class="perks">
        <div class="container">
            <div class="head">
                <h2><?=  $parts[0]??"" ?></h2>
                <p><?=  $parts[1]??"" ?></p>
            </div>
            <div class="wrapper">
                <?php foreach($sections as $val){ 
                     $correct = trim($val);
                     if (empty($correct)) continue;
                     $values = explode("||", $correct);
                     if (count($values) == 3) {
                         $image = trim($values[0]);
                         $title = trim($values[1]);
                         $description = trim($values[2]);
                     }
                    ?>
                <div class="item">
                    <img src="<?=ASSETS_G.$image;?>" alt="Sticker and Label Roll" width="369" height="198">
                    <strong><?= $title??''  ?></strong>
                    <p><?= $description??'' ?></p>
                </div>
              <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- ___ TESTIMONIALS ___ -->
    <?php include('components/reviews.php'); ?>

    <!-- ___ FAQ ___ -->
    <?php include('components/faq.php'); ?>


