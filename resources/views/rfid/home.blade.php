<link href="css/chs.css" rel="stylesheet">
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<header>
<div class="header">
    <div class="chs-logo-header"><img src="/images/chslogo.png" alt=""></div> 
    <a href="" class="fetcher-header">Monitoring System</a>
</div>
</header>
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
<div class="container">
  <h2>Monitoring</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Fetcher</th>
        <th>Status</th>
        <th>Arrival</th>
        <th>Departure</th>
        <th>Student</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Mr. John</td>
        <td>Waiting</td>
        <td>10:30 AM</td>
        <td>11:00 AM</td>
        <td>Juan Dela Cruz</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Mr. Eric</td>
        <td>Arrived</td>
        <td>8:30 AM</td>
        <td>9:00 AM</td>
        <td>Maria Reyes</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Mr. Tony</td>
        <td>Departed</td>
        <td>11:30 AM</td>
        <td>12:00 AM</td>
        <td>Chris Port</td>
      </tr>
    </tbody>
  </table>
</div>