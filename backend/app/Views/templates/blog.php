<link rel="stylesheet" href="<?=ASSETS_M ?>css/blog-style.php">
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
                <li><span class="active">Blog</span></li>
            </ul>
        </div>
    </div>
    <!-- ___ Blog ___ -->    
    <section class="blog" >
        <div class="container">
            <div class="blog_wrapper">
                <div class="blog_post">
                <?php 
                      function getExcerpt($content, $wordLimit = 40) {
                        $words = explode(' ', $content);
                        return implode(' ', array_slice($words, 0, $wordLimit)) . '...';
                    }
                    foreach($posts as $post){
                ?>
                    <a href="<?= URL.($post['slug']).'/' ?>" class="blog_detail" aria-label="Top 7 Tips to Ensure Frustration-Free Custom Printed Packaging">
                        <img src="<?= ASSETS.'gallery_images/'. ($post['banner'] ?? '') ?>" alt="<?= $post['alt1']??"" ?>" width="418" height="217">
                        <h4><?= $post['title']??"" ?></h4>
                        <div class="author_details">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                  Emenac Packaging New Zealand
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                </svg>
                                <?= date('M j, Y', $post['created_on']) ?>
                            </span>
                        </div>
                        <p> <?= getExcerpt($post['content'], 40); ?></p>
                        <span class="custom__btn">Read More</span>
                    </a>
                    <?php } ?>
                    <?php if ($totalPages > 1): ?>
                        <ul class="pagination">
                            <!-- Previous Page Link -->
                            <?php if ($currentPage > 1): ?>
                                <li>
                                    <a href="<?= URL . 'blog/page/' . ($currentPage - 1) ?>/" aria-hidden="true" aria-label="Goto Previous Page" title="Goto Previous Page">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="disabled">
                                    <span aria-hidden="true">Previous</span>
                                </li>
                            <?php endif; ?>

                            <!-- Page Numbers -->
                            <?php if ($currentPage > 4): ?>
                                <li><a href="<?= URL . 'blog/page/1/' ?>" aria-label="Goto First Page" title="Goto First Page">1</a></li>
                                <li><span>...</span></li>
                            <?php endif; ?>

                            <!-- Pagination Links -->
                            <?php
                            foreach ($paginationLinks as $link) {
                                if ($link === '...') {
                                    echo '<li><span>...</span></li>';
                                } else {
                                    echo '<li>';
                                    echo '<a href="' . URL . 'blog/page/' . $link . '/" class="' . ($link == $currentPage ? 'current' : '') . '" aria-label="Page ' . $link . '"';
                                    echo $link == $currentPage ? ' aria-current="page"' : '';
                                    echo '>' . $link . '</a>';
                                    echo '</li>';
                                }
                            }
                            ?>

                            <!-- Next Page Link -->
                            <?php if ($currentPage < $totalPages): ?>
                                <li>
                                    <a href="<?= URL . 'blog/page/' . ($currentPage + 1) ?>/" aria-label="Goto Next Page" title="Goto Next Page">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="disabled">
                                    <span>Next</span>
                                </li>
                            <?php endif; ?>

                            <!-- Last Page Link -->
                            <?php if ($currentPage < $totalPages - 3): ?>
                                <li><a href="<?= URL . 'blog/page/' . $totalPages ?>/" aria-label="Goto Last Page" title="Goto Last Page"><?= $totalPages ?></a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>

                </div>
                <div class="contact_form">
                <?php include 'components/quote-form.php' ?>
                    <link rel="stylesheet" href="<?=ASSETS_M ?>css/quote-form-min-style.php">
                    <div class="popular_blog">
                        <strong>Popular Blog Posts</strong>
                        <?php foreach($posts as $post){ if($post['section1_status'] == 1){ ?>
                        <a href="<?= URL.($post['slug']).'/' ?>" aria-label="<?= $post['title']??"" ?>">
                            <img src="<?= ASSETS.'gallery_images/'. ($post['banner'] ?? '') ?>" alt="<?= $post['alt1']??"" ?>" width="70" height="58">
                            <span><?= $post['title']??"" ?></span>
                        </a>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
