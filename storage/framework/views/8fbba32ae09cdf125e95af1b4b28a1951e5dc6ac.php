


<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo ('/css/lms.css'); ?>">

<?php echo Form::open(['id' => 'dataForm','class' => 'reservations', 'url' => '/reservations']); ?>


<div class="contact-container">
    <div class="contact-title-container">
        <div class="contact-title">Contact Us</div>
        <div class="contact-desc">&nbsp;&nbsp;  <h3>Reservation of books !</h3></div>
    </div>
    <div class="contactus-form">
        <div class="contact-row1">
        <div class="contact-row1-1">
            <div class="contactname">
            <?php echo Form::text('LRN',null, ['placeholder' => 'Card Number', 'class' => 'contactemailfield', 'required' => '' ]); ?>

            </div>
            <div class="contactemail">
            <?php echo Form::text('membername',null, ['placeholder' => 'Your Name', 'class' => 'contactsubjectfield', 'required' => '' ]); ?>

            </div>
        </div>
        </div>

        <div class="contact-row3">

                            <select name="bookname" class="form-control">
                                    <option value="" disabled <?php echo e(old('bookname') ? '' : 'selected'); ?>>Choose a books</option>
                                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($book->bookname); ?>" <?php if(old('bookname')&&old('bookname')== $book->bookname): ?> selected='selected' <?php endif; ?> ><?php echo e($book->bookname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                </div>

        <div class="contact-row3">
            <div class="contactmessage">
            <?php echo Form::text('message',null, ['placeholder' => 'Your Message', 'class' => 'contactmessagefield', 'required' => '' ]); ?>

        </div>
        </div>
        <br>
        <div class="form-group">
        <?php echo Form::submit('Submit', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-2 offset-5']); ?>

        </div>
        <br>
    </div>
    <div class="or-option-container">
        <div class="or-txt">Do you have any questions? Please do not hesitate to contact us directly. <br>Our team will come back to you within matter of hours to help you.</div>
        <div class="contact-column2">
            <div class="contact1">
            <div class="contact-school"><i class="fa fa-university"></i> Culiat High School</div>
            <div class="contactschool-info">Email : culiathighschool@gmail.com</div>
            <div class="contactschool-info">Phone No : 0912345678/123-45-67</div></div>
            <div class="contact1">
            <div class="contact-librarian"><i class="fa fa-book"></i> CHS Librarian</div>
            <div class="contactschool-info">Email : juandelacruz@gmail.com</div>
            <div class="contactschool-info">Phone No : 0912345678/123-45-67</div></div>
        </div>
    </div>
</div>
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<style>

.menu-list3 a {
    color:#2e77d1 !important;
}
                
</style>


<?php echo $__env->make('lms.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>