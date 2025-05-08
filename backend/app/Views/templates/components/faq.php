<?php $faqs = $db->table('ci_data')->select('title, content')->where('post_type', 'faq')->where('status',1)->where('deleted_by <=', 0)->get()->getResultArray(); ?>
<section class="faq">
        <div class="container">
            <div class="wrapper">
                <div class="image">
                    <img src="<?=ASSETS_M;?>images/faq-bg.webp" alt="Product Box" width="682" height="461">
                </div>
                <div class="content">
                    <h2>Frequently Asked Question</h2>
                    <div class="accordions custom__scroll">
                        <?php foreach($faqs as $f){ ?>
                        <button class="acc-btn" aria-label="<?= $f['title']??'' ?>"><?= $f['title']??'' ?></button>
                        <div class="panel" data-collapse="false">
                            <p><?= $f['content']??'' ?></p>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- [ FUNCTIONALITY ] -->
    <script>
        // FAQ: ACCORDIONS
        const accordion = document.querySelectorAll('.faq .acc-btn');
            
        accordion.forEach(button => {
            button.addEventListener('click', () => {
                let panel = button.nextElementSibling;
                if (panel.dataset.collapse === 'false') {
                    panel.dataset.collapse = 'true';
                } else {
                    panel.dataset.collapse = 'false';
                }
            });
        });
    </script>