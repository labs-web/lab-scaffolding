<!-- Name Field -->
<div class="col-sm-12">
    <?php echo Form::label('name', __('models/projects.fields.name').':'); ?>

    <p><?php echo e($project->name); ?></p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    <?php echo Form::label('description', __('models/projects.fields.description').':'); ?>

    <p><?php echo e($project->description); ?></p>
</div>

<?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/projects/show_fields.blade.php ENDPATH**/ ?>