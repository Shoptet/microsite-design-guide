<section class="section section-primary">
    <div class="section-inner container">
        <h2>O Shoptet API</h2>
        <div class="halfs indented">
            <?php
                $post = get_post(9);
                if (!empty($post)) {
            ?>
            <div class="half">
                <h5><?php echo $post->post_title;?></h5>
                <p>
                    <?php
                    $content = apply_filters( 'the_content', $post->post_content );
                    echo $content;?>
                </p>
                <p>
                    <a href="<?php echo $post->post_name;?>" class="btn btn-secondary">Přejít na článek</a>
                </p>
            </div>
            <?php
                }
            ?>
            <?php
                $post = get_post(11);
                if (!empty($post)) {
            ?>
            <div class="half">
                <h5><?php echo $post->post_title;?></h5>
                <p>
                    <?php
                    $content = apply_filters( 'the_content', $post->post_content );
                    echo $content;?>
                </p>
                <p>
                    <a href="/<?php echo $post->post_name;?>" class="btn btn-secondary">Přejít na článek</a>
                </p>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        <?php
        $post = get_post(13);
        if (!empty($post)) {
        ?>
            <h2><?php echo $post->post_title;?></h2>
            <div class="halfs indented">
                <div class="half">
                    <p>
                        <?php
                        $content = apply_filters( 'the_content', $post->post_content );
                        echo $content;?>
                    </p>
                    <p>
                        <a href="<?php echo $post->post_name;?>" class="btn btn-secondary">Přejít na článek</a>
                    </p>
                </div>
                <div class="half">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        <?php
        $post = get_post(15);
        if (!empty($post)) {
            ?>
            <h2 id="kontakt"><?php echo $post->post_title;?></h2>
            <div class="halfs aligned-left indented">
                <div class="half">
                    <p>
                        <?php echo $post->post_content;?>
                    </p>
                </div>
                <div class="half">
                    <?php get_template_part( 'template-parts/page/content', 'contact-form' ); ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        Primary section
    </div>
</section>

<section class="section section-secondary">
    <div class="section-inner container">
        Secondary section
    </div>
</section>

<section class="section section-perex">
    <div class="section-inner container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" title="Homepage">Homepage</a></li>
            <li class="breadcrumb-item"><a href="#" title="Parent page">Parent page</a></li>
            <li class="breadcrumb-item active" aria-current="page">Current page</li>
        </ol>
        <h1>Section perex</h1>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        <h2>Heading level 2</h2>
        <ul>
            <li>Unordered list item with <a href="#">link</a></li>
            <li>Unordered list item</li>
            <li>Another unordered list item</li>
        </ul>
        <h3>Heading level 3</h3>
        <ol>
            <li>Ordered list item with <a href="#">link</a></li>
            <li>Ordered list item</li>
            <li>Another ordered list item</li>
        </ol>
        <h4>Heading level 4</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculis vestibulum magna nec auctor. Donec non nulla id lectus semper dictum vel sit amet nunc. Nulla a velit odio. Morbi convallis tempus arcu, in eleifend erat porta ac. Mauris maximus ornare orci, in aliquam diam viverra et. Praesent pretium, neque quis tristique tincidunt, metus arcu laoreet enim, vel lobortis lectus nibh vel orci. Mauris a aliquam ligula. Praesent id lectus et quam faucibus blandit eget vitae libero. In id imperdiet purus, eget hendrerit lacus. Ut cursus quis velit quis maximus.
        </p>
        <h5>Heading level 5</h5>
        <p>
            Etiam a risus vel lorem eleifend hendrerit in non elit. Cras accumsan enim rhoncus laoreet facilisis. Maecenas faucibus eu ipsum ornare tincidunt. Quisque feugiat, justo at tristique dapibus, erat mi elementum ex, sed tincidunt libero justo ac massa. Aliquam vehicula rutrum ipsum at ornare. Aenean mollis, magna pharetra placerat tincidunt, nunc justo varius magna, et finibus erat orci et sapien. Maecenas dictum lacus in leo elementum, id auctor lectus ornare. Pellentesque odio elit, tempor ut auctor eget, aliquam scelerisque diam. Mauris quam augue, tempus sit amet urna non, vestibulum tincidunt ex. Etiam et viverra erat.
        </p>
        <h6>Heading level 6</h6>
        <p>
            Integer rhoncus nunc diam, at luctus purus tincidunt sit amet. Nulla a tortor nunc. In ullamcorper feugiat iaculis. Nullam placerat elit nisi, pellentesque vestibulum eros porttitor ut. Integer quis rhoncus nulla. Donec vel ex eros. Aliquam erat volutpat. Integer rutrum lacus eget mauris cursus, nec sodales sapien eleifend. Nunc sodales arcu elit, vitae laoreet elit finibus ac. Aliquam hendrerit, sem ut malesuada cursus, risus mi convallis velit, sit amet luctus risus tellus et dolor.
        </p>
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">1</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        <div class="halfs aligned-left">
            <div class="half">
                <h2>Contact form</h2>
                <p>
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
            <div class="half">
                <form action="">
                    <div class="card bg-light contact-form-wrapper">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="someInput" class="control-label">Label<i class="required">*</i></label>
                                <input type="text" id="someInput" class="form-control">
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary">Submit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        <a href="#shp_demo_colorboxDemo" class="colorbox">Colorbox</a>
        <br />
        <style>
            #shp_demo_colorboxDemo { display: none; }
            #colorbox #shp_demo_colorboxDemo { display: block; }
        </style>
        <span id="shp_demo_colorboxDemo">
                Lorem ipsum.
            </span>
        <a href="#" id="shp_demo_showOverlay">Show overlay</a>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        <article>
            <div class="row">
                <div class="entry-thumbnail col-sm-12 col-md-4 col-lg-4">
                    <a href="#"><img width="271" height="200" src="http://placekitten.com/271/200" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""></a>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <h2 class="entry-title"><a href="https://blognew.shoptet.cz/kvetnove-novinky/" rel="bookmark">Květnové novinky</a></h2>
                    <div class="entry-meta">
                        <div class="entry-date"><i class="fas fa-calendar-alt"></i>04. 06. 2018</div><div class="entry-author"><i class="fas fa-user"></i><a href="#" title="Title" rel="author">Post Author</a></div><div class="entry-tags"><i class="fas fa-tag"></i><a href="#" rel="category tag">Shoptet</a></div></div>
                    <div class="entry-summary">
                        <p>I přes krásné květnové počasí, které nás usilovně lákalo ven, jsme pilně pracovali a připravili další novinky a vylepšení pro váš e-shopový byznys. Pojďme si spolu připomenout, co se událo nového a o co byste neměli přijít.</p>
                    </div>
                    <div class="entry-more">
                        <a href="#" class="btn btn-secondary">Přečíst celé</a>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="row">
                <div class="entry-thumbnail col-sm-12 col-md-4 col-lg-4">
                    <a href="#"><img width="271" height="200" src="http://placekitten.com/271/200" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""></a>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <h2 class="entry-title"><a href="https://blognew.shoptet.cz/kvetnove-novinky/" rel="bookmark">Květnové novinky</a></h2>
                    <div class="entry-meta">
                        <div class="entry-date"><i class="fas fa-calendar-alt"></i>04. 06. 2018</div><div class="entry-author"><i class="fas fa-user"></i><a href="#" title="Title" rel="author">Post Author</a></div><div class="entry-tags"><i class="fas fa-tag"></i><a href="#" rel="category tag">Shoptet</a></div></div>
                    <div class="entry-summary">
                        <p>I přes krásné květnové počasí, které nás usilovně lákalo ven, jsme pilně pracovali a připravili další novinky a vylepšení pro váš e-shopový byznys. Pojďme si spolu připomenout, co se událo nového a o co byste neměli přijít.</p>
                    </div>
                    <div class="entry-more">
                        <a href="#" class="btn btn-secondary">Přečíst celé</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

<section class="section section-primary">
    <div class="section-inner container">
        <h1>Květnové novinky</h1>
        <div class="entry-meta">
            <div class="entry-date">
                <i class="fas fa-calendar-alt"></i>04. 06. 2018
            </div>
            <div class="entry-author">
                <i class="fas fa-user"></i><a href="#" title="Title" rel="author">Post Author</a>
            </div>
            <div class="entry-tags">
                <i class="fas fa-tag"></i><a href="#" rel="category tag">Shoptet</a>
            </div>
        </div>
        <p>
            I přes krásné květnové počasí, které nás usilovně lákalo ven, jsme pilně pracovali a připravili další novinky a vylepšení pro váš e-shopový byznys. Pojďme si spolu připomenout, co se událo nového a o co byste neměli přijít.
        </p>
        <div class="entry-meta">
            <div class="entry-tags">
                <i class="fas fa-tag"></i>
                <a href="#">GDPR</a> |
                <a href="#">shoptet novinky</a> |
                <a href="#">statistiky</a>
            </div>
        </div>
        <div>
            <h2 class="sr-only">Navigace pro příspěvek</h2>
            <nav class="post-navigation" role="navigation">
                <div class="nav-previous">
                    <a class="btn btn-primary" href="#" rel="prev">« <span>GDPR – co a jak si nastavit v e-shopu</span></a>
                </div>
                <div class="nav-next">
                    <a class="btn btn-primary" href="#" rel="next"><span>Influenceři na Instragramu</span> »</a>
                </div>
            </nav>
        </div>
        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">
                Napište komentář
                <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Zrušit odpověď na komentář</a></small>
            </h3>
            <form action="#" method="post" id="commentform" class="comment-form">
                <p class="comment-notes">
                    <span id="email-notes">Vaše emailová adresa nebude zveřejněna.</span> Vyžadované informace jsou označeny <span class="required">*</span>
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <p class="comment-form-author">
                            <label for="author">Jméno <span class="required">*</span></label>
                            <input id="author" name="author" type="text" value="" size="30" class="form-control">
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="comment-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input id="email" name="email" type="text" value="" size="30" class="form-control">
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="comment-form-url"><label for="url">Website</label>
                            <input id="url" name="url" type="text" value="" size="30" class="form-control">
                        </p>
                    </div>
                </div>
                <p class="comment-form-comment">
                    <label for="comment">Komentář <span class="required">*</span></label>
                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea>
                </p>
                <p>
                    Vložením zprávy souhlasíte s
                    <a href="https://www.shoptet.cz/podminky-ochrany-osobnich-udaju/" target="_blank">podmínkami ochrany osobních údajů</a>
                </p>
                <p class="form-submit">
                    <input name="submit" type="submit" id="submit" class="btn btn-secondary" value="Odeslat komentář">
                </p>
            </form>
        </div>
    </div>
</section>
