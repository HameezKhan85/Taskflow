<?php 
$db = \Config\Database::connect();
$reviews_clint = $pages_data['reviews_clint'] ?? '[]';
$decodedReviewsClint = json_decode($reviews_clint, true);
$reviewIds = is_array($decodedReviewsClint) ? array_column($decodedReviewsClint, 'rev') : [];
if (!empty($reviewIds)) {
    $reviews = $db->table('ci_data')
        ->where('post_type', 'reivew')   
        ->where('status', 1)
        ->where('deleted_by <=', 0)
        ->whereIn('id', $reviewIds)
        ->get()
        ->getResultArray();
} else {
    $reviews = [];
}
$staticReviews = $db->table('ci_data')
    ->where('post_type', 'reivew')   
    ->where('status', 1)
    ->where('deleted_by <=', 0)
    ->where('display', 'static')
    ->get()
    ->getResultArray();
$reviews = array_merge($reviews, $staticReviews);
?>
<section class="testimonials">
        <div class="container">
            <div class="head">
                <h2>What They Liked the Most About Us</h2>
                <p>The best way to showcase our commitment is through the experiences and stories through the experiences and stories of t through the experiences and stories through the hose who have partnered with us.</p>
                <a href="#" aria-label="View All">View All</a>
            </div>
            <div class="wrapper">
                <?php  if (!empty($reviews)){ 
                    foreach ($reviews as $review){
                    ?>
                <div class="review custom__scroll-p">
                    <p> <?= $review['content'] ??""?></p>
                    <div>
                        <strong><?= $review['title'] ??""?></strong>
                        <span><?= $review['slug']??"" ?></span>
                    </div>
                </div>
               <?php }} ?>
            </div>
        </div>
    </section>