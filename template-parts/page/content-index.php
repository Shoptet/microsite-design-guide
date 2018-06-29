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
                <?php get_template_part( 'template-parts/page/content', 'contact-form' ); ?>
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
