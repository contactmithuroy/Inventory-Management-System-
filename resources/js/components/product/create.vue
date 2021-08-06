<template>
    <div class="card-body p-0">
        <div class="card card-primary card-outline">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                    <!-- form start -->
                    <form role="form" action="" id="create_product" method="post">
                        <div class="row mt-5 ml-2 mr-2">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label for="name">Product Name<span class="text-danger">*</span></label>
                                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter product name" >
                                </div>
                            </div>

                            <div class="col-md-8 offset-md-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="status" type="checkbox" id="status" checked>
                                    <label class="form-check-label" for="status">Is show your home page?</label>
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-2 mt-3">
                                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                        <!-- /.card-body -->               
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    
}
</script>