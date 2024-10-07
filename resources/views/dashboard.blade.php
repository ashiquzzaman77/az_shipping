<x-app-layout :title="'Your Dashboard'">
    <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
        <div class="col-xl-4">
            <div class="card bg-primary h-xl-100">
                <div class="card-body d-flex flex-column pt-13 pb-14">
                    <div class="m-0">
                        <h1 class="fw-semibold text-white text-center lh-lg mb-9">
                            Having Trouble with the Course? <span class="fw-bolder"> Here we are to Help</span>
                        </h1>
                        <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12"
                            style="background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/illustrations/easy/6.svg')">
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-sm btn-success btn-color-white me-2">
                            Support </a>
                        <a class="btn btn-sm bg-white btn-color-white bg-opacity-20" href="#">
                            Contact </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="col-xl-6">
            <div class="card h-xl-100">
                <div class="card-header position-relative py-0 border-bottom-2">
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0 " data-bs-toggle="tab"
                                href="#kt_table_widget_7_tab_content_1" aria-selected="false" tabindex="-1"
                                role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Monday </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>
                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0 " data-bs-toggle="tab"
                                href="#kt_table_widget_7_tab_content_2" aria-selected="false" tabindex="-1"
                                role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Tuesday </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>
                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0 show active" data-bs-toggle="tab"
                                href="#kt_table_widget_7_tab_content_3" aria-selected="true" role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Wednesday </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>
                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0 " data-bs-toggle="tab"
                                href="#kt_table_widget_7_tab_content_4" aria-selected="false" tabindex="-1"
                                role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Thursday </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>
                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0 " data-bs-toggle="tab"
                                href="#kt_table_widget_7_tab_content_5" aria-selected="false" tabindex="-1"
                                role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Friday </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>

                    </ul>

                    <div class="card-toolbar">
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                            class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                            <div class="text-gray-600 fw-bold">23 Jul 2024 - 21 Aug 2024</div>

                            <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span
                                    class="path6"></span></i>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="tab-content mb-2">
                        <div class="tab-pane fade " id="kt_table_widget_7_tab_content_1" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th class="min-w-150px p-0"></th>
                                            <th class="min-w-200px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                            <th class="min-w-80px p-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                11:43-09:43am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 1:
                                                <span class="text-gray-800">French class</span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">5</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 205min </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                09:40-11:20am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 2:
                                                <span class="text-gray-800">Physics class</span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">13</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 25min </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                10:35-43:09am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 3:
                                                <span class="text-gray-800">Chemistry class</span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Court:
                                                <span class="text-gray-800">Main</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 15min </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                15:30-12:23pm </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 4:
                                                <span class="text-gray-800">Biology class</span>

                                                <span class="cursor-pointer" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="Held by Dr. Ana"
                                                    data-bs-original-title="Held by Dr. Ana" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-1 text-warning"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">23</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="kt_table_widget_7_tab_content_2" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th class="min-w-150px p-0"></th>
                                            <th class="min-w-200px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                            <th class="min-w-80px p-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                09:15-12:23am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 1:
                                                <span class="text-gray-800">Geography class</span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">45</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 20min </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                08:30-09:30am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 2:
                                                <span class="text-gray-800">English class</span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">9</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 20min </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                11:15-12:13am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 3:
                                                <span class="text-gray-800">Sports class</span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Court:
                                                <span class="text-gray-800">Main</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 25min </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                14:10-15:35pm </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 4:
                                                <span class="text-gray-800">Picture class</span>
                                                <span class="cursor-pointer" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="Held by Dr. Lebron"
                                                    data-bs-original-title="Held by Dr. Lebron"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-1 text-warning"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">12</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="kt_table_widget_7_tab_content_3" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th class="min-w-150px p-0"></th>
                                            <th class="min-w-200px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                            <th class="min-w-80px p-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                08:30-09:12am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 1:
                                                <span class="text-gray-800">Math class</span>
                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">45</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 15min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                09:30-10:50am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 2:
                                                <span class="text-gray-800">History class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">12</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 20min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                10:35-11:20am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 3:
                                                <span class="text-gray-800">Sports class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Court:
                                                <span class="text-gray-800">Main</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 15min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                12:40-13:25pm </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 4:
                                                <span class="text-gray-800">Chemistry class</span>

                                                <span class="cursor-pointer" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="Held by Dr. Natali"
                                                    data-bs-original-title="Held by Dr. Natali"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-1 text-warning"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>

                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">19</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="kt_table_widget_7_tab_content_4" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th class="min-w-150px p-0"></th>
                                            <th class="min-w-200px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                            <th class="min-w-80px p-0"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                11:25-14:13am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 1:
                                                <span class="text-gray-800">Geography class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">15</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 25min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                08:30-09:30am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 2:
                                                <span class="text-gray-800">English class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">9</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 20min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                11:15-12:13am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 3:
                                                <span class="text-gray-800">Sports class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Court:
                                                <span class="text-gray-800">Main</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 25min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                14:10-15:35pm </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 4:
                                                <span class="text-gray-800">Picture class</span>

                                                <span class="cursor-pointer" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="Held by Dr. Kevin"
                                                    data-bs-original-title="Held by Dr. Kevin"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-1 text-warning"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>

                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">12</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="kt_table_widget_7_tab_content_5" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th class="min-w-150px p-0"></th>
                                            <th class="min-w-200px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                            <th class="min-w-80px p-0"></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                11:43-09:43am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 1:
                                                <span class="text-gray-800">French class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">5</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 205min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                09:40-11:20am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 2:
                                                <span class="text-gray-800">Physics class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">13</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 25min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                10:35-43:09am </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 3:
                                                <span class="text-gray-800">Chemistry class</span>


                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Court:
                                                <span class="text-gray-800">Main</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bold px-3 py-2"
                                                colspan="4">
                                                Break 15min </td>
                                        </tr>

                                        <tr>
                                            <td class="fs-6 fw-bold text-gray-800">
                                                15:30-12:23pm </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                lesson 4:
                                                <span class="text-gray-800">Biology class</span>

                                                <span class="cursor-pointer" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="Held by Dr. Emma"
                                                    data-bs-original-title="Held by Dr. Emma" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-1 text-warning"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>

                                            </td>
                                            <td class="fs-6 fw-bold text-gray-500">
                                                Cabinet:
                                                <span class="text-gray-800">23</span>

                                            </td>
                                            <td class="pe-0 text-end">
                                                <button class="btn btn-sm btn-light">
                                                    Skip
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="float-end">
                        <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_project">Add Lesson</a>

                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6">
            <div class="card h-xl-100">
                <div class="card-header position-relative py-0 border-bottom-2">
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted active px-0" data-bs-toggle="tab"
                                id="kt_chart_widgets_22_tab_1" href="#kt_chart_widgets_22_tab_content_1"
                                aria-selected="true" role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Overview
                                </span>
                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>
                        <li class="nav-item p-0 ms-0" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab"
                                id="kt_chart_widgets_22_tab_2" href="#kt_chart_widgets_22_tab_content_2"
                                aria-selected="false" tabindex="-1" role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Performance
                                </span>
                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="card-toolbar">
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                            class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                            <span class="text-gray-600 fw-bold">
                                Loading date range...
                            </span>
                            <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span></i>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-3">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_chart_widgets_22_tab_content_1" role="tabpanel"
                            aria-labelledby="kt_chart_widgets_22_tab_1">
                            <div class="d-flex flex-wrap flex-md-nowrap">
                                <div class="me-md-5 w-100">
                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                            <div class="symbol symbol-50px me-4">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-timer fs-2qx text-primary"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </div>
                                            <div class="me-2">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Attendance</a>

                                                <span class="text-gray-500 fw-bold d-block fs-7">Great, you always
                                                    attending class. keep it up</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-gray-900 fw-bolder fs-2x">73</span>
                                            <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                            <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">76</span>
                                            <span
                                                class="badge badge-lg badge-light-success align-self-center px-2">95%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                            <div class="symbol symbol-50px me-4">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-element-11 fs-2qx text-primary"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                            </div>
                                            <div class="me-2">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Homeworks</a>

                                                <span class="text-gray-500 fw-bold d-block fs-7">Don’t forget to turn
                                                    in
                                                    your task</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-gray-900 fw-bolder fs-2x">207</span>
                                            <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                            <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">214</span>
                                            <span
                                                class="badge badge-lg badge-light-success align-self-center px-2">92%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                            <div class="symbol symbol-50px me-4">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-abstract-24 fs-2qx text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <div class="me-2">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Tests</a>

                                                <span class="text-gray-500 fw-bold d-block fs-7">You take 12 subjects
                                                    at
                                                    this semester</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-gray-900 fw-bolder fs-2x">27</span>

                                            <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>

                                            <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">38</span>

                                            <span
                                                class="badge badge-lg badge-light-warning align-self-center px-2">80%</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
                                    <div class="fs-4 fw-bold text-gray-900 text-center mb-5">
                                        Session Attendance <br>
                                        for Current Academic Year
                                    </div>
                                    <div id="kt_chart_widgets_22_chart_1" class="mx-auto mb-4"
                                        style="min-height: 191.133px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="kt_chart_widgets_22_tab_content_2" role="tabpanel"
                            aria-labelledby="kt_chart_widgets_22_tab_2">
                            <div class="d-flex flex-wrap flex-md-nowrap">
                                <div class="me-md-5 w-100">
                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                            <div class="symbol symbol-50px me-4">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-element-11 fs-2qx text-primary"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                </span>
                                            </div>
                                            <div class="me-2">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Homeworks</a>

                                                <span class="text-gray-500 fw-bold d-block fs-7">Don’t forget to turn
                                                    in
                                                    your task</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-gray-900 fw-bolder fs-2x">423</span>
                                            <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                            <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">154</span>
                                            <span
                                                class="badge badge-lg badge-light-danger align-self-center px-2">74%</span>
                                        </div>
                                    </div>
                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                            <div class="symbol symbol-50px me-4">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-abstract-24 fs-2qx text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <div class="me-2">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Tests</a>

                                                <span class="text-gray-500 fw-bold d-block fs-7">You take 12 subjects
                                                    at
                                                    this semester</span>
                                            </div>

                                        </div>



                                        <div class="d-flex align-items-center">
                                            <span class="text-gray-900 fw-bolder fs-2x">43</span>

                                            <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>

                                            <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">53</span>

                                            <span
                                                class="badge badge-lg badge-light-info align-self-center px-2">65%</span>
                                        </div>

                                    </div>



                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">

                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">

                                            <div class="symbol symbol-50px me-4">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-timer fs-2qx text-primary"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </div>



                                            <div class="me-2">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Attendance</a>

                                                <span class="text-gray-500 fw-bold d-block fs-7">Great, you always
                                                    attending class. keep it up</span>
                                            </div>

                                        </div>



                                        <div class="d-flex align-items-center">
                                            <span class="text-gray-900 fw-bolder fs-2x">53</span>

                                            <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>

                                            <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">94</span>

                                            <span
                                                class="badge badge-lg badge-light-primary align-self-center px-2">87%</span>
                                        </div>

                                    </div>

                                </div>



                                <div
                                    class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">

                                    <div class="fs-4 fw-bold text-gray-900 text-center mb-5">
                                        Session Attendance <br>
                                        for Current Academic Year
                                    </div>
                                    <div id="kt_chart_widgets_22_chart_2" class="mx-auto mb-4"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5 g-xl-10">
        <div class="col-xxl-8">
            <div class="card h-xl-100" id="kt_timeline_widget_2_card">
                <div class="card-header position-relative py-0 border-bottom-2">
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted active px-0" data-bs-toggle="pill"
                                href="#kt_timeline_widget_2_tab_1" aria-selected="true" role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3">
                                    Today Homeworks
                                </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>

                        <li class="nav-item p-0 ms-0 me-8" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="pill"
                                href="#kt_timeline_widget_2_tab_2" aria-selected="false" tabindex="-1"
                                role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3"> Recent </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>

                        <li class="nav-item p-0 ms-0" role="presentation">
                            <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="pill"
                                href="#kt_timeline_widget_2_tab_3" aria-selected="false" tabindex="-1"
                                role="tab">
                                <span class="nav-text fw-semibold fs-4 mb-3"> Future </span>

                                <span
                                    class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_timeline_widget_2_tab_1" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle gs-0 gy-4">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-10px"></th>
                                            <th class="p-0 w-25px"></th>
                                            <th class="p-0 min-w-400px"></th>
                                            <th class="p-0 min-w-100px"></th>
                                            <th class="p-0 min-w-125px"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                            </td>

                                            <td class="ps-0">
                                                <div
                                                    class="form-check form-check-custom form-check-success form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        checked="" data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Book p.
                                                    77-85, read &amp; complete tasks 1-6 on p.
                                                    85</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">Physics</span>
                                            </td>

                                            <td class="text-end">
                                                <span data-kt-element="status"
                                                    class="badge badge-light-success">Done</span>
                                            </td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>

                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Workbook p.
                                                    17, tasks 1-6</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">Mathematics</span>
                                            </td>

                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                            </td>

                                            <td class="ps-0">
                                                <div
                                                    class="form-check form-check-custom form-check-success form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        checked="" data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Learn
                                                    paragraph p. 99, Exercise 1,2,3Scoping &amp;
                                                    Estimations</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">Chemistry</span>
                                            </td>

                                            <td class="text-end">
                                                <span data-kt-element="status"
                                                    class="badge badge-light-success">Done</span>
                                            </td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>

                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Write essay
                                                    1000 words “WW2 results”</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">History</span>
                                            </td>

                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>

                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Internal
                                                    conflicts in Philip Larkin poems, read p
                                                    380-515</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">English
                                                    Language</span>
                                            </td>

                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_timeline_widget_2_tab_2" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle gs-0 gy-4">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-10px"></th>
                                            <th class="p-0 w-25px"></th>
                                            <th class="p-0 min-w-400px"></th>
                                            <th class="p-0 min-w-100px"></th>
                                            <th class="p-0 min-w-125px"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                            </td>

                                            <td class="ps-0">
                                                <div
                                                    class="form-check form-check-custom form-check-success form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        checked="" data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Book p.
                                                    77-85, read &amp; complete tasks 1-6 on p.
                                                    85</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">Physics</span>
                                            </td>

                                            <td class="text-end">
                                                <span data-kt-element="status"
                                                    class="badge badge-light-success">Done</span>
                                            </td>

                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>

                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Workbook p.
                                                    17, tasks 1-6</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">Mathematics</span>
                                            </td>
                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                            </td>
                                            <td class="ps-0">
                                                <div
                                                    class="form-check form-check-custom form-check-success form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        checked="" data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Learn
                                                    paragraph p. 99, Exercise 1,2,3Scoping &amp;
                                                    Estimations</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">Chemistry</span>
                                            </td>
                                            <td class="text-end">
                                                <span data-kt-element="status"
                                                    class="badge badge-light-success">Done</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>
                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Write essay
                                                    1000 words “WW2 results”</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">History</span>
                                            </td>
                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_timeline_widget_2_tab_3" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table align-middle gs-0 gy-4">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-10px"></th>
                                            <th class="p-0 w-25px"></th>
                                            <th class="p-0 min-w-400px"></th>
                                            <th class="p-0 min-w-100px"></th>
                                            <th class="p-0 min-w-125px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>
                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Workbook p.
                                                    17, tasks 1-6</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">Mathematics</span>
                                            </td>
                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-success"></span>
                                            </td>
                                            <td class="ps-0">
                                                <div
                                                    class="form-check form-check-custom form-check-success form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        checked="" data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Learn
                                                    paragraph p. 99, Exercise 1,2,3Scoping &amp;
                                                    Estimations</a>
                                                <span class="text-gray-500 fw-bold fs-7 d-block">Chemistry</span>
                                            </td>
                                            <td class="text-end">
                                                <span data-kt-element="status"
                                                    class="badge badge-light-success">Done</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>
                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Write essay
                                                    1000 words “WW2 results”</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">History</span>
                                            </td>
                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center h-40px bg-primary"></span>
                                            </td>
                                            <td class="ps-0">
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        data-kt-element="checkbox" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Internal
                                                    conflicts in Philip Larkin poems, read p
                                                    380-515</a>

                                                <span class="text-gray-500 fw-bold fs-7 d-block">English
                                                    Language</span>
                                            </td>

                                            <td class="text-end">
                                                <span data-kt-element="status" class="badge badge-light-primary">In
                                                    Process</span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-printer fs-3"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3">
                                                        <i class="ki-duotone ki-sms fs-3"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Recommended Courses</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Check The Courses Now</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light">All Courses</a>
                    </div>
                </div>
                <div class="card-body pt-6">
                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">
                                M
                            </div>
                        </div>

                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">UI/UX Design</a>

                                <span class="text-muted fw-semibold d-block fs-7">40+ Courses</span>
                            </div>

                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">
                                Q
                            </div>
                        </div>

                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">QA Analysis</a>

                                <span class="text-muted fw-semibold d-block fs-7">18 Courses</span>
                            </div>

                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">
                                W
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Web Development</a>

                                <span class="text-muted fw-semibold d-block fs-7">120+ Courses</span>
                            </div>
                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">
                                M
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Marketing</a>
                                <span class="text-muted fw-semibold d-block fs-7">50+ Courses.</span>
                            </div>
                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">
                                P
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Philosophy</a>

                                <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                            </div>

                            <a href="#"
                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</x-app-layout>
