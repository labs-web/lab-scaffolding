<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
<?php echo app('translator')->get('models/projects.singular'); ?> <?php echo app('translator')->get('crud.detail'); ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="<?php echo e(route('projects.index')); ?>">
                                                    <?php echo app('translator')->get('crud.back'); ?>
                                            </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo $__env->make('projects.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/projects/show.blade.php ENDPATH**/ ?>