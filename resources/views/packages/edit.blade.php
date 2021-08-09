@extends('admin.adminMaster')

@section('content')
    <div class="row p-0 m-0">
        {{-- content --}}
        <div class="col-10 p-3 mx-auto">
            <h3 class="boldText textPrimary text-center">
                <a href="/admin" class="align-middle">
                    <i class="bi bi-arrow-left-short textPrimary"></i>
                </a>
                <span >
                    Edit package
                </span>
            </h3>

            <form
                class="mx-auto shadow-sm border p-2 mb-3 col-10 px-md-5 py-md-3 rounded-3"
                style="background-color: hsl(220, 14%, 96%)"
                action="/updatePackage/{{$package['id']}}"
                {{-- action="packages/'{{$package['id']}}" --}}
                method="POST"
                enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <label class="semiBoldText mb-2">Package Title</label>
                            <input type="text" class="form-control" name="title" required value="{{$package['title']}}">
                        </div>
                        <div class="form-group mt-2">
                            <label class="semiBoldText mb-2">Package Price</label>
                            <input type="text" class="form-control" name="price" required value="{{$package['price']}}">
                        </div>
                        <div class="form-group mt-2">
                            <input class="form-check-input" checked onclick="showDiscount()" type="checkbox" value="" id="discountCheck">
                            <label class="form-check-label semiBoldText ms-2" for="check">
                                Package has discount
                            </label>
                        </div>
                        <div class="form-group mt-2" id="editDiscountInput">
                            <label class="semiBoldText mb-2">Discount (%)</label>
                            <input type="text my-3" class="form-control" name="discount" value="{{$package['discount']}}">
                        </div>
                        <div class="form-group mt-2">
                            <label class="semiBoldText mb-2">Package Duration</label>
                            <div class="row ms-0 d-flex align-items-center mediumText">
                                <input type="number" class="form-control w-25 me-2" name="durationDay" value="{{$package['durationDay']}}">
                                Day(s)
                                <input type="number" class="form-control w-25 mx-2" name="durationNight" value="{{$package['durationNight']}}">
                                Night(s)
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group my-3">
                            <label class="semiBoldText mb-2">Package Image</label>
                            <input class="form-control mediumText" type="file" name="file" id="imgInput" value="{{$package['file_path']}}">
                        </div>
                        <div class="m-2 ratio ratio-16x9 w-75 mx-auto border" style="object-fit: cover;">
                            <img src="" class="mediumText" alt="Preview of Product Image" id="imagePreview">
                        </div>
                        <div class="alert alert-danger fade show shadow-sm my-1 mx-auto mediumText" role="alert" id="imageWarning">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            Please choose a Package Image
                        </div>
                        <script>
                            imgInput.onchange = evt => {
                                var imageInput = document.getElementById('imgInput');
                                var alert = document.getElementById('imageWarning');

                                if(imgInput.value != null) {
                                    alert.style.display = 'none';
                                }
                                else {
                                    alert.style.display = 'block';
                                }

                                const [file] = imgInput.files
                                if (file) {
                                    imagePreview.src = URL.createObjectURL(file)
                                }
                            }
                        </script>
                    </div>
                    <div class="form-group mt-2 col-12">
                        <label class="semiBoldText mb-2">Package Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required>{!! $package['description'] !!}</textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                        </script>
                    </div>
                </div>
                <button class="btn semiBoldText text-light shadow-sm mx-auto mt-2 d-block bgPrimary" type="submit">Update package</button>
            </form>
        </div>
    </div>
@endsection

<script>
    var checkBox = document.getElementById('discountCheck');
    var discountInput = document.getElementById('discountInput');

    function showDiscount() {
        if(checkBox.checked == true) {
            discountInput.style.display = 'block';
        }
        else {
            discountInput.style.display = 'none';
        }
    }

</script>