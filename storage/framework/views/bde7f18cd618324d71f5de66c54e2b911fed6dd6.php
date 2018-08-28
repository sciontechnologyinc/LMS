<?php $__env->startSection('content'); ?>
<link href="css/monitoring.css" rel="stylesheet"> 
<link href="css/lms2.css" rel="stylesheet"> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

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
</div>
  <h2 class="menu-list1">Monitoring</h2>          
  <table class="table">
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
    <tbody>
      <tr>
        <td>1</td>
        <td>09199182828</td>
        <td>Juan Dela Cruz</td>
        <td>9:00 AM</td>
        <td></td>
        <td>IN</td>
      </tr>

       <tr>
        <td>1</td>
        <td>09199182828</td>
        <td>Juan Dela Cruz</td>
        <td>9:00 AM</td>
        <td>11:00 AM</td>
        <td>OUT</td>
      </tr>

    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lms.master.template2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>