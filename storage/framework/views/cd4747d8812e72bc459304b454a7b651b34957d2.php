<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Anak</h1>
    <ul>
        <?php $__currentLoopData = $dataAnak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <strong>Nama:</strong> <?php echo e($anak['nama']); ?> <br>
                <strong>Alamat:</strong> <?php echo e($anak['alamat']); ?> <br>
                <strong>Kelas:</strong> <?php echo e($anak['kelas']); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH C:\Users\ASUS\Music\skripsi\pmks-anak-yatim\resources\views/maps/map.blade.php ENDPATH**/ ?>