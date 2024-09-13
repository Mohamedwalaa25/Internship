<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>

            <span class="badge badge-warning navbar-badge">1</span>

    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">1 Notifications</span>
        <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item text-bold ">
                <i class="fas fa-envelope mr-2"></i>
                <span class="notification-text">Lorem ipsum dolor aqueore veniam.</span>
                <span class="float-right text-muted text-sm">5d</span>
            </a>
            <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
</li>

<style>
    .dropdown-item {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .notification-text {
        display: inline-block;
        max-width: calc(100% - 80px); /* Adjust this value as needed */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
