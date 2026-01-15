<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
       
              <script type="text/javascript">
      function ConfirmDelete($id)
      {
            if (confirm("Are you sure you want to logout?"))
                 window.location.href='logout.php';
               return true
      }
  </script>
        <li class="nav-item">
          <a class="nav-link" href="update.php">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Update Page</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="settings.php">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Manage Settings</span></a>
        </li>
        <!-- <li class="nav-item">-->
        <!--  <a class="nav-link" href="updatecv.php">-->
        <!--    <i class="fas fa-fw fa-file-alt"></i>-->
        <!--    <span>Update CV</span></a>-->
        <!--</li>-->
        <li class="nav-item">
          <a class="nav-link" onclick="ConfirmDelete()" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>logout</span></a>
        </li>
       
      </ul>
      