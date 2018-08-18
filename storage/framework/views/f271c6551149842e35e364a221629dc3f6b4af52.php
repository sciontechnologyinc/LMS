    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo asset('./'); ?>"><img src="<?php echo asset('images/logo.png'); ?>" alt="Logo"></a>
                <a class="navbar-brand hidden" href="<?php echo asset('./'); ?>"><img src="<?php echo asset('images/logo2.png'); ?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo e(url('dashboard')); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Books</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="<?php echo e(url('books.create')); ?>">Add New Book</a></li>
                            <li><i class="fa fa-list-alt"></i><a href="<?php echo e(url('books')); ?>">Book List</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tags"></i>Categories</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="<?php echo e(url('create')); ?>">Add New Category</a></li>
                            <li><i class="fa fa-list-alt"></i><a href="<?php echo e(url('categories')); ?>">Category List</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Members</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus"></i><a href="<?php echo e(url('addmembers')); ?>">Add New Member</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="<?php echo e(url('members')); ?>">Member List</a></li>
                            <li><i class="menu-icon fa fa-users text-success"></i><a href="#">New members</a></li>
                            <li><i class="menu-icon fa fa-globe text-success"></i><a href="#">Visitors</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-retweet"></i>Book Issue</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-hand-o-right"></i><a href="<?php echo e(url('bookissues.create')); ?>">Issue a Book</a></li>
                            <li><i class="menu-icon fa fa-calendar-check-o"></i><a href="<?php echo e(url('bookissues')); ?>">Issued Books</a></li>
                            <li><i class="menu-icon fa fa-times"></i><a href="#">Non-return Books</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(url('generalsettings')); ?>"> <i class="menu-icon fa fa-cogs"></i>General Setting </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-book"></i>My book list </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-handshake-o"></i>Terms & Condition</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus"></i><a href="<?php echo e(url('addterms')); ?>">Add New Terms</a></li>
                            <li><i class="menu-icon fa fa-eye"></i><a href="<?php echo e(url('terms')); ?>">View Terms</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-power-off" style="color:red"></i> <label style="color:red"> Logout </label> </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->