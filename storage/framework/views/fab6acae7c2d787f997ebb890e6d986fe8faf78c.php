<?php $__env->startSection('content'); ?>
<style>

.menu-list1 a {
    color:#2e77d1 !important;
}
        
</style>
        <link rel="stylesheet" href="<?php echo ('/css/lms.css'); ?>">

<div class="Search">Search</div>
<div class="container search">
  <div class="row search">
  <div class="col-sm searchbar">
  <select id="searchbartext" class="filtersearch">
                                        <option value="filter" selected="" disabled=""> FILTER SEARCH  </option>
                                        <option value="book"> BOOK</option>
                                        <option value="category"> CATEGORY</option>
                                        <option value="author"> AUTHOR</option>
                                        <option value="publisher"> PUBLISHER</option>
                                    </select>
    </div>
    <div class="col-sm searchbar menusearch">
      <input type="text" id="searchbartext" class="searchbartext" name="searchmenu" placeholder="SEARCH MENU" readonly=""/>
    </div>
    
    <div class="col-sm searchbar booksearch" style="display:none;">
      <input type="text" id="booksearch" class="searchbartext" name="book" placeholder="Book Name"/>
    </div>
    <div class="col-sm searchbar categorysearch" style="display:none;">
      <input type="text" id="categorysearch" class="searchbartext" name="category" placeholder="Category"/>
    </div>
    <div class="col-sm searchbar authorsearch" style="display:none;">
      <input type="text" id="authorsearch" class="searchbartext" name="author" placeholder="Author Name"/>
    </div>
    <div class="col-sm searchbar publishersearch" style="display:none;">
      <input type="text" id="publishersearch" class="searchbartext" name="publisher" placeholder="Publisher"/>
    </div>
  </div>
</div>

<div class="booklist-container">

    <div class="booklist-title">List of Books</div>
    <div class="booklist-row">
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="perbook-container" data-toggle="modal" data-target= "#<?php echo e($book->id); ?>">
        <div class="perbook-img">
                                <?php if($book->digitalphoto): ?>
                                <img src="<?php echo e(asset('storage/uploads/'.$book->digitalphoto)); ?>" alt="">&nbsp;
                                <?php else: ?>
                                <img src="<?php echo e(asset('storage/uploads/book_icon.png')); ?>" alt="">
                                <?php endif; ?>
         
        </div>
        <div class="perbook-title"  ><?php echo e($book->bookname); ?> </div>
        <div class="perbook-title" hidden="true" ><?php echo e($book->category); ?> </div>
        <div class="perbook-title" hidden="true" ><?php echo e($book->writername); ?> </div>
        <div class="perbook-title" hidden="true" ><?php echo e($book->publisher); ?> </div>
   </div>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>

    </div>
</div>


<!-- The Modal -->
<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="<?php echo e($book->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
          
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($book->bookname); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="yearpublish">Year Publish. : <?php echo e($book->yearpublish); ?></div>
        <div class="book-isbn">Book ISBN No. : <?php echo e($book->ISBN); ?></div>
        <div class="availbook-number">Available Book No. : <?php echo e($book->booknumber); ?></div>
        <div class="book-price">Book Price : <?php echo e($book->bookprice); ?></div>
        <div class="writer-name">Author Name : <?php echo e($book->writername); ?></div>
        <div class="book-category">Book Category : <?php echo e($book->categoryname); ?></div>
        <div class="book-category">Book Section : <?php echo e($book->section); ?></div>
        <div class="book-status">Status : <?php echo e($book->status); ?></div>
        <div class="book-type">Book Type : <?php echo e($book->booktype); ?></div>
        <div class="book-condition">Book Condition : <?php echo e($book->bookcondition); ?></div>
        <div class="book-adtl-details">Details : <?php echo e($book->details); ?></div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
   
    </div>
    
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#booksearch").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });

    $("#categorysearch").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });

  $("#authorsearch").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });

  $("#publishersearch").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });


      $('.filtersearch').on('change', function() {
      if ( this.value == 'filter' )
      //.....................^.......
      {
        $(".menusearch").show();
        $(".booksearch").hide();
        $(".categorysearch").hide();
        $(".authorsearch").hide();
        $(".publishersearch").hide();
      }
      else if( this.value == 'book' ){
        $(".menusearch").hide();
        $(".booksearch").show();
        $(".categorysearch").hide();
        $(".authorsearch").hide();
        $(".publishersearch").hide();
      }
      else if( this.value == 'category' ){
        $(".menusearch").hide();
        $(".booksearch").hide();
        $(".categorysearch").show();
        $(".authorsearch").hide();
        $(".publishersearch").hide();
      }
      else if( this.value == 'author' ){
        $(".menusearch").hide();
        $(".booksearch").hide();
        $(".categorysearch").hide();
        $(".authorsearch").show();
        $(".publishersearch").hide();
      }
      else if( this.value == 'publisher' ){
        $(".menusearch").hide();
        $(".booksearch").hide();
        $(".categorysearch").hide();
        $(".authorsearch").hide();
        $(".publishersearch").show();
      }
      else
      {
        $(".menusearch").hide();
        $(".booksearch").hide();
        $(".categorysearch").hide();
        $(".authorsearch").hide();
        $(".publishersearch").hide();
      }
    });
  
    
});
</script>




<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('lms.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>