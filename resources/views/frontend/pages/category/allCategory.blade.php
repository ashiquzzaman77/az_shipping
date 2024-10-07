@extends('frontend.master')
@section('content')
    <style>
        .faq-nav-link {
            color: black
        }

        .faq-nav-link.active {
            background-color: #001c44 !important;
            color: white !important;
            border-radius: 5px !important;
        }
    </style>

    <section>
        <div class="showcase">
            <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->our_category_banner) }}"
                alt="Picture"
                onerror="this.onerror=null; this.src='https://images.ctfassets.net/ihx0a8chifpc/GTlzd4xkx4LmWsG1Kw1BB/ad1834111245e6ee1da4372f1eb5876c/placeholder.com-1280x720.png?w=1920&q=60&fm=webp';" />
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center py-5 w-75 w-lg-100 mx-auto">
                        <h2>Course <span class="main_color">Categories</span> We Offer</h2>
                        <div>
                            <img decoding="async" width="137" height="21"
                                src="https://www.promisetrainingglobal.com/wp-content/uploads/2019/02/line.jpg"
                                class="vc_single_image-img attachment-full webpexpress-processed" alt="">
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex">
                        <!-- (Optional) Existing dropdowns can stay here -->
                    </div>

                    <div>
                        <div class="input-group">
                            <input type="text" id="categorySearch" class="form-control" placeholder="Category Name"
                                style="width: 350px;" autocomplete="off">
                            <span class="input-group-text primary-btn-one text-center" style="width: 50px;">
                                <i class="fa-solid fa-search"></i>
                            </span>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        </div>
    </section>



    <section class="py-5 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 px-0">
                    <div class="px-2" style="background-color: #eee;">
                        <h5 class="mb-0 py- pt-3 text-center"><span class="fw-bold"
                                style="border-bottom: 1px solid #001c44">Course</span> Section</h5>

                        <ul class="nav nav-tabs border-0 flex-column py-3 mt-3" id="myTab" role="tablist">

                            @foreach ($courseSections as $courseSection)
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link faq-nav-link border-0 rounded-0 text-start w-100 {{ $loop->first ? 'active' : '' }}"
                                        id="home-{{ $courseSection->id }}" data-bs-toggle="tab"
                                        data-bs-target="#home-{{ $courseSection->id }}-pane" type="button" role="tab"
                                        aria-controls="home-{{ $courseSection->id }}-pane"
                                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $courseSection->name }}
                                    </button>
                                </li>
                            @endforeach



                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">


                            <div class="tab-content" id="myTabContent">
                                @foreach ($courseSections as $courseSection)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="home-{{ $courseSection->id }}-pane" role="tabpanel"
                                        aria-labelledby="home-{{ $courseSection->id }}" tabindex="0">

                                        @php
                                            $sectionWiseCats = App\Models\CourseCategory::where(
                                                'course_section_id',
                                                $courseSection->id,
                                            )
                                                ->orderBy('name', 'ASC')
                                                ->limit(3)
                                                ->get();
                                        @endphp
                                        <div class="row mb-4">

                                            <div class="row" id="servicesContainer">
                                                @forelse ($sectionWiseCats as $sectionWiseCat)
                                                    <div class="col-lg-4">
                                                        <div class="card border-0 shadow-sm category-course-card">
                                                            <div class="card-header p-0">
                                                                <div>
                                                                    <img class="img-fluid w-100 rounded-2"
                                                                        src="{{ asset('storage/course_category/' . $sectionWiseCat->thumbnail_image) }}"
                                                                        alt="" style="height: 220px;">
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <h5>{{ $sectionWiseCat->name }}</h5>
                                                                <p
                                                                    style="background-color: #001c44; width: 40%; height: 3px;">
                                                                </p>

                                                                @php
                                                                    $description = $sectionWiseCat->description;
                                                                    $words = explode(' ', strip_tags($description));
                                                                    $limitedWords = array_slice($words, 0, 15);
                                                                    $limitedDescription = implode(' ', $limitedWords);
                                                                @endphp


                                                                <p class="catagory-course-desc">{!! $limitedDescription !!}.....</p>

                                                                <a href="{{ url('/category/details/' . $sectionWiseCat->id . '/' . $sectionWiseCat->slug) }}"
                                                                    class="primary-btn-one"> See Details <i
                                                                        class="fa-solid fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty

                                                <div>
                                                    <img src="{{ asset('frontend/images/no-category-found-iamge.jpg') }}" alt="">
                                                </div>
                                                @endforelse
                                            </div>



                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#categorySearch').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('category.search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#servicesContainer').html(data);
                    }
                });
            });
        });
    </script>
@endsection

@push('scripts')
    <script>
        const items = document.querySelectorAll(".custom-accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute("aria-expanded");

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute("aria-expanded", "false");
            }

            if (itemToggle == "false") {
                this.setAttribute("aria-expanded", "true");
            }
        }

        items.forEach((item) => item.addEventListener("click", toggleAccordion));
    </script>
@endpush
