<?php include './header.php'?>

<div class="site-content">
   <div class="container-fluid">
       <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">All Items</a></li>
               <li class="breadcrumb-item" aria-current="page"><a href="#">WordPress</a></li>
           </ol>
       </nav>
       <div class="nav-sort">
           <button class="btn-sidebar active">
               <span class="icon"><i class="fas fa-plus"></i></span>
               <span class="text">Hide filter</span>
           </button>
           <div class="sort">
               <select>
                   <option value="all">Sort by Popular</option>
                   <option value="new">New</option>
               </select>
           </div>
       </div>
       <div class="row">
           <div id="sidebar" class="col-md-2">
               <div  class="sidebar">
                   <?php
                        include './template-part/sidebar.php'
                   ?>
               </div>
           </div>
           <div id="main-content" class="col-md-10">
               <?php
               include './template-part/block-product-category.php'
               ?>
           </div>
       </div>
   </div>
</div>

<?php include './footer.php'?>