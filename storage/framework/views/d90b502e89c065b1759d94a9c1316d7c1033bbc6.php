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

    <form action="<?php echo e((isset($anggota))?route('anggotaperpus.update', $anggota->id):route('anggotaperpus.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($anggota)): ?>
        <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="NIS" class="block text-sm font-medium text-gray-700">
                            NIS
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="NIS" value="<?php echo e((isset ($anggota))?$anggota->NIS:old('NIS')); ?>" id="NIS" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan NIS">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="nama" class="block text-sm font-medium text-gray-700">
                            Nama
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="nama" value="<?php echo e((isset ($anggota))?$anggota->nama:old('nama')); ?>" id="nama" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="kelas" class="block text-sm font-medium text-gray-700">
                            Kelas
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <select name="kelas" id="kelas" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>---Kelas---</option>
                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id_kls); ?>" <?php echo e((old('kelas') == $item->id_kls||(isset($anggota)&&$anggota->kelas==$item->id_kls)) ?'selected' : ''); ?>> <?php echo e($item->kls); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">
                            Jenis Kelamin
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <select name="id_jekel" id="id_jekel" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>---Jenis Kelamin---</option>
                                <?php $__currentLoopData = $jekel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($jk->id_jk); ?>" <?php echo e(old('id_jekel') == $jk->id_jk||(isset($anggota)&&$anggota->id_jekel==$jk->id_jk) ? 'selected' : null); ?>> <?php echo e($jk->jenis_kelamin); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="jurusan" class="block text-sm font-medium text-gray-700">
                            Jurusan
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="jurusan" value="<?php echo e((isset ($anggota))?$anggota->jurusan:old('jurusan')); ?>" id="jurusan" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Jurusan">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">
                            Alamat
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="alamat" value="<?php echo e((isset ($anggota))?$anggota->alamat:old('alamat')); ?>" id="alamat" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Alamat">
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\perpustakaan\resources\views/admin/inputanggota.blade.php ENDPATH**/ ?>