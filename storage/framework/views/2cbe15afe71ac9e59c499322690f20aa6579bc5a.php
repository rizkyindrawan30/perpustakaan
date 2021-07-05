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

    <form action="<?php echo e((isset($peminjamanbuku))?route('peminjamanbuku.update', $peminjamanbuku->id):route('peminjamanbuku.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($peminjamanbuku)): ?>
        <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="tanggal_pinjam" class="block text-sm font-medium text-gray-700">
                            Tanggal Pinjam
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="date" name="tanggal_pinjam" value="<?php echo e((isset ($peminjamanbuku))?$peminjamanbuku->tanggal_pinjam:old('tanggal_pinjam')); ?>" id="tanggal_pinjam" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Pinjam">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="tanggal_kembali" class="block text-sm font-medium text-gray-700">
                            Tanggal Kembali
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="date" name="tanggal_kembali" value="<?php echo e((isset ($peminjamanbuku))?$peminjamanbuku->tanggal_kembali:old('tanggal_kembali')); ?>" id="tanggal_kembali" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="id_buku" class="block text-sm font-medium text-gray-700">
                            Kode Buku
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <select name="id_buku" id="id_buku" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <?php $__currentLoopData = $databuku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>" <?php echo e((old('id_buku') == $item->id||(isset($peminjamanbuku)&&$peminjamanbuku->id_buku==$item->id)) ?'selected' : ''); ?>> <?php echo e($item->kode_buku); ?> | <?php echo e($item->judul_buku); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="id_agt" class="block text-sm font-medium text-gray-700">
                            NIS
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <select name="id_agt" id="id_agt" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>" <?php echo e((old('id_agt') == $item->id||(isset($peminjamanbuku)&&$peminjamanbuku->id_agt==$item->id)) ?'selected' : ''); ?>> <?php echo e($item->NIS); ?> | <?php echo e($item->nama); ?> | <?php echo e($item->kls); ?> <?php echo e($item->jurusan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>

 <?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#id_buku').select2();
        $('#id_agt').select2();
    });
</script><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/admin/pinjam/inputpeminjamanbuku.blade.php ENDPATH**/ ?>