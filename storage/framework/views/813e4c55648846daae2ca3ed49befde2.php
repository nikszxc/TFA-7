
<?php $__env->startSection('content'); ?>
<div class="page-heading"><div class="eyebrow">User Accounts</div><h1>Users.</h1><p class="lead">Create, edit, validate, and upload avatars for user records.</p><a class="button" href="<?php echo e(route('users.create')); ?>">Add User</a></div>
<?php if(session('success')): ?><div class="notice"><?php echo e(session('success')); ?></div><?php endif; ?>
<div class="table-wrap"><table><thead><tr><th>Avatar</th><th>Username</th><th>Full Name</th><th>Email</th><th>Action</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td><img src="<?php echo e($user->avatar?asset('storage/'.$user->avatar):asset('images/avatar-placeholder.svg')); ?>" alt="<?php echo e($user->full_name); ?>" width="48" height="48" style="border-radius:50%;object-fit:cover"></td><td><strong><?php echo e($user->username); ?></strong></td><td><?php echo e($user->full_name); ?></td><td><?php echo e($user->email); ?></td><td><a href="<?php echo e(route('users.edit',$user)); ?>">Edit</a></td></tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="5">No users yet.</td></tr><?php endif; ?>
</tbody></table></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['title'=>'Users'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\nica\resources\views\users\index.blade.php ENDPATH**/ ?>