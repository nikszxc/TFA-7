
<?php $__env->startSection('content'); ?>
<section class="hero"><div class="eyebrow">Nica / Point of sale</div><h1>Records.<br>Ready.</h1><p class="lead">A monochrome account management system for customers and users, inspired by the Ace Divino project.</p><a class="button" href="<?php echo e(route('customers.index')); ?>">Open Customers</a></section>
<div class="lines"><section><h2>01</h2><p>Manage customer records.</p></section><section><h2>02</h2><p>Create and edit user accounts.</p></section><section><h2>03</h2><p>Upload secure public avatars.</p></section></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['title'=>'Home'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\nica\resources\views\pages\home.blade.php ENDPATH**/ ?>