@extends('admin.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Product</h4>
                        <div>
                            <form action="{{ route('admin.store.product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="my-2">
                                    <label for="Fragrance_name"> Fragrance Name</label>
                                    <input type="text" name="fragrance_name" id="fragrance_name"
                                        class="form-control text-white">
                                </div>
                                <div class="my-2">
                                    <label for="fragrance_desc">Description</label>
                                    <textarea class="form-control text-white" id="fragrance_desc"
                                        style="height: 100px" name="fragrance_description"></textarea>
                                </div>
                                <div class="my-2">
                                    <label for="fragrance_ingre">Ingredients</label>
                                    <textarea class="form-control text-white" id="fragrance_ingredients"
                                    style="height: 100px" name="ingredients"></textarea>
                                </div>
                                
                                <div class="my-2">
                                    <label for="gender">Gender</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="unisex">Unisex</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="price"> Price </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control text-white" aria-label="Amount" name="price">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>

                                <div class="my-2">
                                    <label for="qty"> Quantity </label>
                                    <input type="number" name="quantity" id="qty" class="form-control text-white">
                                </div>

                                <div class="my-2">
                                    <label for="image1"> Image 1 </label>
                                    <input type="file" name="image1" id="image1" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label for="image2"> Image 2 </label>
                                    <input type="file" name="image2" id="image2" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label for="image3"> Image 3 </label>
                                    <input type="file" name="image3" id="image3" class="form-control">
                                </div>
                                <div class="my-2">
                                    <label for="image4"> Image 4 </label>
                                    <input type="file" name="image4" id="image4" class="form-control">
                                </div>

                                <div class="d-flex justify-content-end my-2">
                                    <input type="submit" value="Add Product" class="btn btn-success btn-lg">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
    </footer>
    <!-- partial -->
</div>
@endsection