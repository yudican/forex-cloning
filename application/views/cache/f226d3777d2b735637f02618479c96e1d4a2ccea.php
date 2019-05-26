<?php $__env->startSection('content'); ?>
<div class="card wow fadeIn" style="margin-bottom:100px;">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>input new list</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">

        <?php echo form_open_multipart(base_url('dashboard/listing/update/'.$lists->id_list),['class' => 'p-5']); ?>

            <div class="row">
                <div class="col-md-6">
                    <label for="textInput">Trading Name</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_nama" value="<?php echo e($lists->list_nama); ?>" placeholder="Trading Name">

                    <label for="textInput">Rating</label>
                    <select class="browser-default custom-select mb-4" name="list_rating" id="select">
                        <option value="" disabled="" selected="">Choose your option</option>
                        <option value="20" <?php echo e(select_value($lists->list_nama,'20')); ?>> 1</option>
                        <option value="40" <?php echo e(select_value($lists->list_nama,'40')); ?>> 2</option>
                        <option value="60" <?php echo e(select_value($lists->list_nama,'60')); ?>> 3</option>
                        <option value="80" <?php echo e(select_value($lists->list_nama,'80')); ?>> 4</option>
                        <option value="100" <?php echo e(select_value($lists->list_nama,'100')); ?>> 5</option>
                    </select>

                    <label for="textInput">Minimum Deposit</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_min_depo" value="<?php echo e($lists->list_min_depo); ?>" placeholder="Minimum Deposit">

                    <label for="textInput">Regulation</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_regulation" value="<?php echo e($lists->list_regulation); ?>" placeholder="Regulation">

                    <label for="textInput">Bonus</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_bonus" value="<?php echo e($lists->list_bonus); ?>" placeholder="Bonus">
                </div>
                <div class="col-md-6">
                    <label for="textInput">Maximum leverage</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_max_leverage" value="<?php echo e($lists->list_max_leverage); ?>" placeholder="Maximum leverage">

                    <label for="textInput">Year founded</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_year_found" value="<?php echo e($lists->list_year_found); ?>" placeholder="Year founded">

                    <label for="textInput">Trading platform</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_trading_platform" value="<?php echo e($lists->list_trading_platform); ?>" placeholder="Trading platform">

                    <label for="textInput">Website Link</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_web_link" value="<?php echo e($lists->list_web_link); ?>" placeholder="Website Link">

                    <label for="textInput">Image</label>
                    <div class="input-group mb-4 col-md-12">
                       <div class="row">
                            <div class="col-md-4 justify-clear-content">
                                <img src="<?php echo e(base_url('uploads/'.$lists->list_gambar)); ?>" alt="<?php echo e($lists->list_gambar); ?>">
                            </div>
                            <div class="custom-file col-md-8">
                                <input type="file" class="custom-file-input" name="list_gambar" id="inputlogo" aria-describedby="fileInput">
                                <label class="custom-file-label" id="fileName" for="fileInput">File Label</label>
                            </div>
                       </div>
                        
                    </div>
                    
                </div>
            </div>
            <button class="btn btn-info btn-block my-4" type="submit">Save</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $('#inputlogo').on('change',function(){
        //get the file name
        var fileName = $(this).val().replace('C:\\fakepath\\', " ");;
        //replace the "Choose a file" label
        $(this).next('#fileName').html(fileName);
        // console.log(fileName);
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/forex/application/views/dashboard/form_edit.blade.php ENDPATH**/ ?>