<!-- need to remove -->
<li class="nav-item">
    <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(Request::is('home') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('projects.index')); ?>" class="nav-link <?php echo e(Request::is('projects*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p><?php echo app('translator')->get('models/projects.plural'); ?></p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('tasks.index')); ?>" class="nav-link <?php echo e(Request::is('tasks*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p><?php echo app('translator')->get('models/tasks.plural'); ?></p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('members.index')); ?>" class="nav-link <?php echo e(Request::is('members*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p><?php echo app('translator')->get('models/members.plural'); ?></p>
    </a>
</li>
<?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/layouts/menu.blade.php ENDPATH**/ ?>