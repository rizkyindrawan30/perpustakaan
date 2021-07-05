<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TemplateLayout::class, []); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <h2 class="font-semibold text-xl to-gray-100 leading-tight">
        <?php echo e($title); ?>

    </h2>

    <a href="<?php echo e(route('databuku.index')); ?>">
        <button class="px-2 py-1 mb-2 mt-3 text-sm rounded text-green-600 border border-green-600 hover:bg-green-600 hover:text-white"><i class="fas fa-chevron-circle-left"></i> Kembali</button>
    </a>
    <table>
        <tr>
            <td>Judul Buku</td>
            <td> : </td>
            <td><?php echo e($databuku->judul_buku); ?></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td> : </td>
            <td><?php echo e($databuku->pengarang); ?></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td> : </td>
            <td><?php echo e($databuku->penerbit); ?></td>
        </tr>
        <tr>
            <td>Cetakan</td>
            <td> : </td>
            <td><?php echo e($databuku->cetakan); ?></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td> : </td>
            <td><?php echo e($databuku->tahun_terbit); ?></td>
        </tr>
        <tr>
            <td>Kode Lemari</td>
            <td> : </td>
            <td><?php echo e($databuku->kode_lemari); ?></td>
        </tr>
        <tr>
            <td>Jumlah Buku</td>
            <td> : </td>
            <td><?php echo e($databuku->jumlah_buku); ?></td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td> : </td>
            <td><?php echo e($databuku->ISBN); ?></td>
        </tr>
        <tr>
            <td>Klasifikasi</td>
            <td> : </td>
            <td><?php echo e($databuku->klasifikasi); ?></td>
        </tr>
        <tr>
            <td>Nomor Panggil</td>
            <td> : </td>
            <td><?php echo e($databuku->nomor_panggil); ?></td>
        </tr>
    </table>
 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/admin/detailbuku.blade.php ENDPATH**/ ?>