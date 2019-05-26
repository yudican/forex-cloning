@extends('layout.admin')
@section('content')
<div class="card" style="margin-bottom:100px;">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>input new list</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">

        <?php echo form_open_multipart(base_url('dashboard/listing/store'),['class' => 'p-5']); ?>
            <div class="row">
                <div class="col-md-6">
                    <label for="textInput">Trading Name</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_nama" placeholder="Trading Name">

                    <label for="textInput">Rating</label>
                    <select class="browser-default custom-select mb-4" name="list_rating" id="select">
                        <option value="" disabled="" selected="">Choose your option</option>
                        <option value="20">Option 1</option>
                        <option value="40">Option 2</option>
                        <option value="60">Option 3</option>
                        <option value="80">Option 4</option>
                        <option value="100">Option 5</option>
                    </select>

                    <label for="textInput">Minimum Deposit</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_min_depo" placeholder="Minimum Deposit">

                    <label for="textInput">Regulation</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_regulation" placeholder="Regulation">

                    <label for="textInput">Bonus</label>
                    <input type="text" id="textInput" class="form-control mb-4" name="list_bonus" placeholder="Bonus">
                </div>
                <div class="col-md-6">
                    <label for="textInput">Maximum leverage</label>
                        <input type="text" id="textInput" class="form-control mb-4" name="list_max_leverage" placeholder="Maximum leverage">

                        <label for="textInput">Year founded</label>
                        <input type="text" id="textInput" class="form-control mb-4" name="list_year_found" placeholder="Year founded">

                        <label for="textInput">Trading platform</label>
                        <input type="text" id="textInput" class="form-control mb-4" name="list_trading_platform" placeholder="Trading platform">

                        <label for="textInput">Website Link</label>
                        <input type="text" id="textInput" class="form-control mb-4" name="list_web_link" placeholder="Website Link">

                        <label for="textInput">Image</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="list_gambar" id="inputlogo" aria-describedby="fileInput">
                                <label class="custom-file-label" id="fileName" for="fileInput">File Label</label>
                            </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-info btn-block my-4" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#inputlogo').on('change',function(){
        //get the file name
        var fileName = $(this).val().replace('C:\\fakepath\\', " ");;
        //replace the "Choose a file" label
        $(this).next('#fileName').html(fileName);
        // console.log(fileName);
    })
</script>
@endsection