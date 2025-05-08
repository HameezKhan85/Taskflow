<link rel="stylesheet" href="<?=ASSETS_M ?>css/post-style.php">
<?php  $db = \Config\Database::connect();
      $posts =   $db->table('ci_data')->where('post_type','post')->where('section1_status',1)->where('status',1)->where('deleted_by',0)->orderBy('id', 'DESC')->get()->getResultArray();
       
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
                    <a href="<?= URL.'blog/' ?>" aria-label="Blog Posts">Blog</a>
                </li>
                <li><span class="active"><?= $pages_data['title']??"" ?></span></li>
            </ul>
        </div>
    </div>

    <!-- ___ Post ___ -->
    <section class="post" >
        <div class="container">
            <div class="content_wrap">
                <div class="blog_content">
                    <h1><?= $pages_data['title']??"" ?></h1>
                    <img src="<?=ASSETS_G.$pages_data['banner']??'' ?>" alt="<?= $pages_data['title']??"" ?>" width="857" height="451">
                    <?= $pages_data['content']??"" ?>
                    <strong>Share This</strong>
                    <ul class="socail_icons" >
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= URL . $pages_data['slug'] ?>"target="_blank" aria-label="Our Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757575"  viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/intent/tweet?url=<?= URL . $pages_data['slug'] ?>&text=Check%20this%20out!"target="_blank" aria-label="Our Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757575" viewBox="0 0 16 16">
                                    <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="https://www.pinterest.com/pin/create/button/?url=<?= URL . $pages_data['slug'] ?>&media=&description=Check%20out%20this%20post!"target="_blank" aria-label="Our Pintrest">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757575"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0" />
                            </svg></a></li>
                        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= URL . $pages_data['slug'] ?>&title=Check%20out%20this%20post"target="_blank" aria-label="Our Linkedin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757575"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                        </a>
                        </li>
                        <li>
                            <a href="mailto:?subject=Check%20this%20out&body=Hi,%20I%20found%20this%20post%20interesting:%20<?= URL . $pages_data['slug'] ?>"target="_blank" aria-label="Our Mail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#757575" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact_form">
                <?php include 'components/quote-form.php' ?>
                <link rel="stylesheet" href="<?=ASSETS_M ?>css/quote-form-min-style.css">
                   <div class="popular_blog">
                        <strong>Popular Blog Posts</strong>
                        <?php foreach($posts as $post){  ?>
                        <a href="<?= URL.($post['slug']).'/' ?>" aria-label="<?= $post['title']??"" ?>">
                            <img src="<?= ASSETS.'gallery_images/'. ($post['banner'] ?? '') ?>" alt="<?= $post['alt1']??"" ?>" width="70" height="58">
                            <span><?= $post['title']??"" ?></span>
                        </a>
                        <?php } ?>
                    </div>
                 </div>
            </div>
        </div>
    </section>
