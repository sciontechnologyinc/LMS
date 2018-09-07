<?php $__env->startSection('content'); ?>
<link href="css/monitoring.css" rel="stylesheet"> 
<link href="css/lms2.css" rel="stylesheet"> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<div class="img-logo"><img src="<?php echo e(asset('img/half.jpg')); ?>"></div>
<div class="container">
<div class="filter-bar">
    <div class="filter-section" ><input type="text" placeholder="Section" list="section-list">
    <datalist id="section-list">
        <option value="IV-001"/>
        <option value="III-002"/>
        <option value="IV-008"/>
    </datalist></div>
    <div class="filter-section" ><input type="text" placeholder="Fetcher" list="fetcher-list">
    <datalist id="fetcher-list">
        <option value="Mr. John"/>
        <option value="Mr. Eric"/>
        <option value="Mr. Tony"/>
    </datalist></div>
    <div class="filter-section" ><input type="text" placeholder="Student" list="student-list">
    <datalist id="student-list">
        <option value="Juan Dela Cruz"/>
        <option value="Maria Reyes"/>
        <option value="Chris Port"/>
    </datalist></div>
    <div class="filter-section" ><input type="text" placeholder="Status" list="status-list">
    <datalist id="status-list">
        <option value="Waiting"/>
        <option value="Arrived"/>
        <option value="Departed"/>
    </datalist></div>
    <input type="text" class="RFIDSAVEEEE" autofocus>
   
</div>
  <h2 class="menu-list1">Monitoring</h2>  
 
      <?php echo Form::open(['id' => 'dataForm', 'url' => '/rfid', 'method' => 'POST']); ?>




<?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <input class="form-control col-lg-12" type="text" value="<?php echo e($member->LRN); ?>" <?php echo e(old('studentid') ? 'selected' : ''); ?> name="studentid" id="studentid"/>                                 
      <input class="form-control col-lg-12" type="text" value="<?php echo e($member->membername); ?>" <?php echo e(old('studentname') ? 'selected' : ''); ?> name="studentname" id="studentname"/>
      <?php echo Form::text('timein',null, ['placeholder' => 'timein Name', 'class' => 'form-control col-lg-12', 'required' => '',  ]); ?>

      <?php echo Form::text('timeout',null, ['placeholder' => 'timeout Name', 'class' => 'form-control col-lg-12', 'required' => '' ]); ?>

      <?php echo Form::text('status',null, ['placeholder' => 'status Name', 'class' => 'form-control col-lg-12', 'required' => '' ]); ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php echo Form::submit('Create logsheet', ['id' => 'addForm','class' => 'btn btn-primary  col-lg-2 offset-7']); ?>

<?php echo Form::close(); ?>

  
<button href="<?php echo e(url('/rfidgetdata')); ?>" class="btn btn-primary">test</button>
    <table class="table  offset-1">
          <thead>
            <tr>
              <th>#</th>
              <th>Student ID</th>
              <th>Student Name</th>
              <th>Time In</th>
              <th>Time Out</th>
              <th>Status</th>
            </tr>
          </thead>
        <?php $__currentLoopData = $rfids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rfid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tbody>
              <tr>
                  <td><?php echo e($rfid->studentid); ?></td>
                  <td><?php echo e($rfid->studentname); ?></td>
                  <td><?php echo e($rfid->timein); ?></td>
                  <td><?php echo e($rfid->timein); ?></td>
                  <td><?php echo e($rfid->timein); ?></td>
                  <td><?php echo e($rfid->status); ?></td>
               </tr>
          </tbody>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </table>
  </div>
 

<script>

  $(document).ready(function(){
    var now = new Date();
    $('.RFIDSAVEEEE').focus();

      $('.RFIDSAVEEEE').change(function(){
        $('#addForm').trigger('click');

        $('.RFIDSAVEEEE').val('');
        $('.RFIDSAVEEEE').focus();
      })
      

  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lms.master.template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>