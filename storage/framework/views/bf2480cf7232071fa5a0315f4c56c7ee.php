<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Nica'); ?> | Nica</title>
    <style>
        :root { --black:#111; --white:#fff; --gray:#666; --line:#d7d7d7; }
        * { box-sizing:border-box } body { margin:0; min-height:100vh; color:var(--black); background:linear-gradient(145deg,#fff 0%,#f0f0f0 55%,#cfcfcf 100%); font-family:Arial,Helvetica,sans-serif }
        .container { max-width:1080px; margin:auto; padding:68px 28px 125px } .brand { display:inline-block; color:var(--black); font-size:15px; font-weight:900; letter-spacing:.24em; text-decoration:none; text-transform:uppercase }
        .hero { min-height:490px; padding:80px 9%; display:flex; flex-direction:column; justify-content:center; border:1px solid var(--black); background:rgba(255,255,255,.55) }
        .eyebrow { font-size:11px; font-weight:700; letter-spacing:.22em; text-transform:uppercase } h1 { max-width:760px; margin:20px 0 16px; font-size:clamp(46px,9vw,104px); line-height:.9; letter-spacing:-.08em }
        h2 { margin:0 0 12px; font-size:25px; letter-spacing:-.04em } .lead { max-width:610px; color:#444; line-height:1.7; font-size:18px }
        .button { display:inline-block; align-self:flex-start; margin-top:24px; padding:14px 20px; color:var(--white); background:var(--black); border:0; text-decoration:none; font-size:11px; font-weight:700; letter-spacing:.1em; text-transform:uppercase }
        .button:hover { color:var(--black); background:var(--white); outline:1px solid var(--black) }
        .page-heading { padding:25px 0 30px; border-top:5px solid var(--black); border-bottom:1px solid var(--black); margin-bottom:40px } .page-heading h1 { margin:12px 0 0; font-size:clamp(44px,7vw,78px) } .page-heading .lead { margin:14px 0 0; font-size:16px }
        .table-wrap { overflow-x:auto; border:1px solid var(--black); background:rgba(255,255,255,.7) } table { width:100%; min-width:650px; border-collapse:collapse } th,td { padding:18px 20px; text-align:left; border-bottom:1px solid var(--line) } th { color:var(--white); background:var(--black); font-size:11px; letter-spacing:.12em; text-transform:uppercase } tr:last-child td { border-bottom:0 }
        .nav { position:fixed; z-index:10; bottom:20px; left:50%; transform:translateX(-50%); max-width:calc(100% - 24px); padding:7px; border:1px solid #aaa; border-radius:999px; background:linear-gradient(110deg,rgba(255,255,255,.94),rgba(205,205,205,.94)); box-shadow:0 9px 28px rgba(0,0,0,.18) } .nav-inner { display:flex; align-items:center } .links { display:flex; gap:2px } .links a { border:0; color:#555; padding:10px 14px; border-radius:999px; text-decoration:none; font-size:11px; font-weight:700; letter-spacing:.08em; text-transform:uppercase } .links a:hover,.links a.active { color:var(--white); background:var(--black) }
        label { display:block; margin-bottom:7px; font-weight:700 } input { width:100%; max-width:620px; padding:12px; border:1px solid var(--black); background:rgba(255,255,255,.8); font:inherit } form p { max-width:620px; margin:0 0 20px } .notice { margin-bottom:20px; padding:12px 15px; border:1px solid var(--black); background:var(--white) } .errors { color:#8b0000 }
        .lines { display:grid; grid-template-columns:repeat(3,1fr); border-left:1px solid var(--black); border-bottom:1px solid var(--black) } .lines section { min-height:190px; padding:28px 24px; border-right:1px solid var(--black) } .lines p { color:var(--gray); line-height:1.75 }
        @media(max-width:700px){ .container{padding:35px 17px 125px}.hero{padding:48px 27px}.lines{grid-template-columns:1fr}.nav{width:calc(100% - 24px)}.nav-inner{justify-content:center}.links{width:100%;justify-content:space-around}.links a{padding:10px 5px;font-size:9px} }
    </style>
</head>
<body>
    <main class="container">
        <a class="brand" href="<?php echo e(route('home')); ?>">Nica</a>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <nav class="nav"><div class="nav-inner"><div class="links">
        <a class="<?php echo e(request()->routeIs('home')?'active':''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
        <a class="<?php echo e(request()->routeIs('about')?'active':''); ?>" href="<?php echo e(route('about')); ?>">About</a>
        <a class="<?php echo e(request()->routeIs('customers.*')?'active':''); ?>" href="<?php echo e(route('customers.index')); ?>">Customers</a>
        <a class="<?php echo e(request()->routeIs('users.*')?'active':''); ?>" href="<?php echo e(route('users.index')); ?>">Users</a>
    </div></div></nav>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\nica\resources\views/layouts/app.blade.php ENDPATH**/ ?>