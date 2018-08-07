<?php $__env->startSection('sidepanel'); ?>
    <?php echo $__env->make('admin.layouts.sidepanel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title','Issue a book to a member'); ?>
 
 <?php $__env->startSection('content'); ?>
 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>First</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label class="form-control-label">Book Name</label><div class="iconic-input">
                        
                        <select class="form-control select select2-hidden-accessible" name="book" id="book" required="" tabindex="-1" aria-hidden="true">
                          <option selected="" value="">Choose Book</option>
                          <option value="1">
                              In the line of fire (2 avail)</option><option value="4">
                              kamal haldar (25584 avail)</option><option value="8">
                              kamal haldar (54 avail)</option><option value="9">
                              kamal haldar (34 avail)</option><option value="10">
                              kamal haldar (34 avail)</option><option value="2">
                              karl poems (5 avail)</option><option value="12">
                              Nazrul_bd Islam_nz (33 avail)</option><option value="13">
                              Nazrul_bd Islam_nz (33 avail)</option><option value="14">
                              Nazrul_bd Islam_nz (33 avail)</option><option value="5">
                              new pdf book (10 avail)</option><option value="6">
                              new pdf book (10 avail)</option><option value="7">
                              new pdf book (10 avail)</option><option value="30">
                              new PDF book 30jun (2 avail)</option><option value="26">
                              new PDF book 30jun (10 avail)</option><option value="3">
                              Nokhshi kathar math (4 avail)</option><option value="27">
                              nurse book (10 avail)</option><option value="25">
                              Rekter badon pdf (9 avail)</option><option value="24">
                              two (33 avail)</option></select>
                                    <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 501px;">
                                    <span class="selection">
                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-book-container">
                                    <span class="select2-selection__rendered" id="select2-book-container" title="Choose Book"></span>
                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                          </div>
                        <div class="form-group"><label class="form-control-label">Book ISBN No</label><div class="form-group">
                          <label><button class="btn btn-info pointer check_book" type="button"><i class="fa fa-retweet"></i></button> Check Availability &nbsp; 
                          <span class="book_result"></span>
                        </label></div></div>
                        <div class="form-group"><label class="form-control-label">Member ID</label><input type="text" class="form-control" id="member_id" name="member" placeholder="Member ID" autocomplete="off"></div>
                        <div class="form-group"><label class="form-control-label">Available book number</label><div class="form-group">
                      <label style="width:100%">
                        <button class="btn btn-info pointer check_member" type="button"><i class="fa fa-retweet"></i></button> Check Member &nbsp; 
                        <span class="member_result"></span>
                      </label> 
                    </div>
                  </div>
 
                      </div>
                    </div>
</div>

            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header"><strong>Second</strong><small> Portion</small></div>
                      <div class="card-body card-block">
                <div class="form-group"><label class="form-control-label">Date / Hour</label><div class="form-group">
                <div class="iconic-input">
                  <select class="form-control" name="date_hour" required="">
                    <option value="" selected=""> Choose date/hour </option>
                    <option value="date"> Date wise issue</option>
                    <option value="hour"> Hour wise issue</option>
                  </select>
					</div>
				</div></div>
                       <div class="form-group"><label class="form-control-label"></label><input type="submit" class="btn btn-success" value="Make this issue"></div>
      
                      </div>
                    </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>