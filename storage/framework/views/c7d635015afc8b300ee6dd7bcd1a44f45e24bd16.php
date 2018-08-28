<?php $__env->startSection('content'); ?>
<style>

.menu-list1 a {
    color:#2e77d1 !important;
}
        
</style>
<div class="searchbar">
    <div class="bar-row">
        <div class="bookname"><input type="text" id="search" class="searchbartext" name="bookname" placeholder="Book Name"/></div>
        <!-- <div class="authorname"><input type="text" id="search" class="searchbartext" placeholder="Author Name"/></div> -->
        <!-- <div class="publishername"><input type="text" class="searchbartext" placeholder="Publisher Name"/></div> -->
        <div class="searchbtn" type="submit">Search</div>
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
<<<<<<< HEAD
    
=======
        <div class="perbook-title" ><?php echo e($book->bookname); ?> </div>
   </div>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
>>>>>>> 45801620e72ec0672cd99ebc5726d049490b4f67
        </div>

    </div>
</div>


<!-- The Modal -->
<<<<<<< HEAD

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="<?php echo e($book->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
>>>>>>> 45801620e72ec0672cd99ebc5726d049490b4f67
  <div class="modal-dialog" role="document">
      
    <div class="modal-content">
      <div class="modal-header">
          
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($book->bookname); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="book-isbn">Book ISBN No. : <?php echo e($book->ISBN); ?></div>
        <div class="availbook-number">Available Book No. : <?php echo e($book->booknumber); ?></div>
        <div class="book-price">Book Price : <?php echo e($book->bookprice); ?></div>
        <div class="writer-name">Writer Name : <?php echo e($book->writername); ?></div>
        <div class="book-category">Book Category : <?php echo e($book->categoryname); ?></div>
        <div class="book-status">Status : <?php echo e($book->status); ?></div>
        <div class="book-type">Book Type : <?php echo e($book->booktype); ?></div>
        <div class="book-condition">Book Type : <?php echo e($book->bookcondition); ?></div>
        <div class="book-adtl-details">Details : <?php echo e($book->details); ?></div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
   
    </div>
    
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script type="text/javascript">
$('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
      type : 'get',
      url  : '<?php echo e(URL::to('lms')); ?>',
      data : {'search':$value},
      success:function(data){
          $('').html(data);
      }
    });
})

</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('lms.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>