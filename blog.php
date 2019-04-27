<?php include './header.php'; ?>
    <div class="site-content-blog">
        <div class="container-fluid">
            <div class="top-content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-blog">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="#">Resources</a></li>
                    </ol>
                </nav>
                <div class="search">
                    <input type="text" placeholder="Search all Kinsta resources">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <h2 class="title">Kinsta Blog</h2>
            <?php
                include './template-part/block-post-blog.php';
                include './template-part/block-post-blog.php';
                include './template-part/block-post-blog.php';
            ?>
            <?php
                include './template-part/pagination.php'
            ?>
        </div>
    </div>
<?php include './footer.php'; ?>