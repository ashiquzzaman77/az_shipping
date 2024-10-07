<x-admin-app-layout :title="'Common Banner Update'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.common_banner.index') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Back to list
                </a>

            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.common_banner.update', $item->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                {{-- Banner Section  --}}
                <div class="card bg-light mb-3">
                    <div class="row p-4 pb-0">

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Faq Banner</label>
                            <input type="file" accept="image" name="faq_banner"
                                class="form-control form-control-sm image1 mb-3">

                            <img src="{{ !empty($item->faq_banner) ? url('storage/common_banner/' . $item->faq_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage1" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Term Banner</label>
                            <input type="file" accept="image" name="term_banner"
                                class="form-control form-control-sm image2 mb-3">

                            <img src="{{ !empty($item->term_banner) ? url('storage/common_banner/' . $item->term_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage2" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Privacy Banner</label>
                            <input type="file" accept="image" name="privacy_banner"
                                class="form-control form-control-sm image3 mb-3">

                            <img src="{{ !empty($item->privacy_banner) ? url('storage/common_banner/' . $item->privacy_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage3" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Course Banner</label>
                            <input type="file" accept="image" name="course_banner"
                                class="form-control form-control-sm image4 mb-3">

                            <img src="{{ !empty($item->course_banner) ? url('storage/common_banner/' . $item->course_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage4" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Service Banner</label>
                            <input type="file" accept="image" name="service_banner"
                                class="form-control form-control-sm image5 mb-3">

                            <img src="{{ !empty($item->service_banner) ? url('storage/common_banner/' . $item->service_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage5" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Course Registration Banner</label>
                            <input type="file" accept="image" name="course_registration_banner"
                                class="form-control form-control-sm image6 mb-3">

                            <img src="{{ !empty($item->course_registration_banner) ? url('storage/common_banner/' . $item->course_registration_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage6" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Course Login Banner</label>
                            <input type="file" accept="image" name="course_login_banner"
                                class="form-control form-control-sm image7 mb-3">

                            <img src="{{ !empty($item->course_login_banner) ? url('storage/common_banner/' . $item->course_login_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage7" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Contact Banner</label>
                            <input type="file" accept="image" name="contact_banner"
                                class="form-control form-control-sm image8 mb-3">

                            <img src="{{ !empty($item->contact_banner) ? url('storage/common_banner/' . $item->contact_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage8" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Our Service Banner</label>
                            <input type="file" accept="image" name="our_service_banner"
                                class="form-control form-control-sm image9 mb-3">

                            <img src="{{ !empty($item->our_service_banner) ? url('storage/common_banner/' . $item->our_service_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage9" style="width: 73px; height: 73px;">

                        </div>

                        <div class="col-3 mb-5">
                            <label for="" class="mb-3">Category Banner</label>
                            <input type="file" accept="image" name="our_category_banner"
                                class="form-control form-control-sm image10 mb-3">

                            <img src="{{ !empty($item->our_category_banner) ? url('storage/common_banner/' . $item->our_category_banner) : url('upload/no_image.jpg') }}"
                                alt="" class="showImage10" style="width: 73px; height: 73px;">

                        </div>


                    </div>

                </div>



                <div class="col-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                </div>

            </form>

        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.image1').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage1').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.image2').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.image3').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage3').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image4').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage4').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image5').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage5').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image6').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage6').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image7').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage7').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image8').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage8').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image9').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage9').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.image10').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showImage10').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
</x-admin-app-layout>
