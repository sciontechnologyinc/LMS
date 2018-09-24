<?php $__env->startSection('content'); ?>
<style>

.menu-list1 a {
    color:#2e77d1 !important;
}
        
</style>
<div class="searchbar">
    <div class="bar-row">
        <div class="bookname">
        <input type="text" id="searchbartext" class="searchbartext" name="bookname" placeholder="Book Name"/></div>
        <div class="bookname">
        <input type="text" id="searchbartext1" class="searchbartext" name="authorname" placeholder="Category"/></div>
        <div class="bookname">
        <input type="text" id="searchbartext2" class="searchbartext" name="publishername" placeholder="Author Name"/></div>
        <div class="bookname">
        <input type="text" id="searchbartext3" class="searchbartext" name="publishername" placeholder="Year Publish"/></div>
        <div class="searchbtn">Search</div>
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
        <div class="perbook-title" hidden="true" ><?php echo e($book->writername); ?> </div>
        <div class="perbook-title" hidden="true" ><?php echo e($book->yearpublish); ?> </div>
        <div class="perbook-title" hidden="true" ><?php echo e($book->categoryname); ?> </div>
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
    $("#searchbartext").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });

    $("#searchbartext1").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });

  $("#searchbartext2").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });

  $("#searchbartext3").on("keyup", function() {
   var key = this.value;
    $(".perbook-container").each(function() {
       var $this = $(this);
       $this.toggle($(this).text().toLowerCase().indexOf(key) >= 0);
    });

  });
  
    
});
</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('lms.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>