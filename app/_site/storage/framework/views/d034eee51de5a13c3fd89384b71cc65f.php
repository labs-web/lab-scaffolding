<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="members-table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($member->first_name); ?></td>
                    <td><?php echo e($member->last_name); ?></td>
                    <td  style="width: 120px">
                        <?php echo Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']); ?>

                        <div class='btn-group'>
                            <a href="<?php echo e(route('members.show', [$member->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('members.edit', [$member->id])); ?>"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            <?php echo Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $members], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/members/table.blade.php ENDPATH**/ ?>