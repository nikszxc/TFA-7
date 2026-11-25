
<?php $__env->startSection('content'); ?>
<div class="page-heading"><div class="eyebrow">Customer Accounts</div><h1>Customers.</h1><p class="lead">Create, edit, and validate customer records with Eloquent.</p><a class="button" href="<?php echo e(route('customers.create')); ?>">Add Customer</a></div>
<?php if(session('success')): ?><div class="notice"><?php echo e(session('success')); ?></div><?php endif; ?>
<div class="table-wrap"><table><thead><tr><th>Full Name</th><th>Email</th><th>Phone</th><th>Action</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td><strong><?php echo e($customer->full_name); ?></strong></td><td><?php echo e($customer->email); ?></td><td><?php echo e($customer->phone); ?></td><td><a href="<?php echo e(route('customers.edit',$customer)); ?>">Edit</a></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="4">No customers yet.</td></tr><?php endif; ?>
</tbody></table></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['title'=>'Customers'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\nica\resources\views\customers\index.blade.php ENDPATH**/ ?>