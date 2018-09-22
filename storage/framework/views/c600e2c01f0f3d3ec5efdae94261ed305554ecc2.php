<?php $__env->startSection('content'); ?>
<?php echo Form::open(['id' => 'dataForm', 'url' => '/categories']); ?>


<div class="contact-container">
    <div class="contact-title-container">
        <div class="contact-title">Contact Us</div>
        <div class="contact-desc"><h3>Reservation of books !</h3></div>
    </div>
    <div class="contactus-form">
        <div class="contact-row1">
        <div class="contact-row1-1">
            <div class="contactname"><input type="text" placeholder="Card Number" class="contactnamefield"></div>
            <div class="contactemail"><input type="text" placeholder="Your Name" class="contactemailfield"></div>
        </div>
        </div>
        <div class="contact-row2">
            <div class="contactsubject"><input type="text" placeholder="Book Name" class="contactsubjectfield"></div>
        </div>
        <div class="contact-row3">
            <div class="contactmessage"><input type="text" placeholder="Your Message" class="contactmessagefield"></div>
        </div>
        <div class="contact-submit">Submit</div>
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