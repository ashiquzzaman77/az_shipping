<x-admin-app-layout :title="'FAQ LIst'">
    <div class="card card-p-0 card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 text-lg-start text-sm-center">
                        <div class="d-flex align-items-center position-relative my-1">
                            <span
                                class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor">
                                    </rect>
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <input type="text" data-kt-filter="search"
                                class="form-control form-control-sm form-control-solid w-150px ps-14 rounded-0"
                                placeholder="Search" style="border: 1px solid #eee;" />
                        </div>
                        <div id="kt_datatable_example_1_export" class="d-none"></div>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                        <div class="card-title table_title">
                            <h2 class="text-center">FAQ Table</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">

                        <button type="button" class="btn btn-sm btn-light-success rounded-0"
                            data-kt-menu-placement="bottom-end" data-bs-toggle="modal" data-bs-target="#faqAddModal">
                            Add New
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                id="kt_datatable_example_1">
                <thead class="table_header_bg">
                    <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                        <th class="" width="5%">Sl</th>
                        <th class="" width="10%">Order Number</th>
                        <th class="" width="45%">Question</th>
                        <th class="" width="15%">Status</th>
                        <th class="text-center" width="10%">Action</th>
                </thead>
                <tbody class="fw-bold text-gray-600 text-center">
                    @if ($faqs)
                        @foreach ($faqs as $faq)
                            <tr class="odd">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $faq->order }}
                                </td>
                                <td>
                                    {{ $faq->question }}
                                </td>
                                <td>
                                    <span class="badge {{ $faq->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                        {{ $faq->status == 'active' ? 'Active' : 'Inactive' }}</span>
                                </td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $faq->id }}">
                                        <i class="fa-solid fa-expand"></i>
                                    </a>

                                    @if (Auth::guard('admin')->user()->can('edit.faq'))
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="modal" data-bs-target="#faqEditModal_{{ $faq->id }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('delete.faq'))
                                        <a href="{{ route('admin.faq.destroy', $faq->id) }}"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        </a>
                                    @endif


                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    {{-- Add Modal --}}
    <div class="modal fade" id="faqAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add Faq</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form action="{{ route('admin.faq.store') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Status</label>
                                            <select class="form-select-sm form-select form-select-solid" name="status"
                                                data-dropdown-parent="#faqAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true"
                                                data-hide-search="true" required>
                                                <option></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">In Active</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Active Or In Active. </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Order
                                            </label>
                                            <input type="number" id="validationCustom01"
                                                class="form-control form-control-solid form-control-sm" name="order"
                                                minlength="0" maxlength="100" pattern="^-?[1-9]\d*$"
                                                value="{{ old('order') }}" placeholder="Enter order" required>
                                            <div class="invalid-feedback"> Please Enter Order Number</div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Faq
                                                Category Name
                                            </label>
                                            <select name="category_id" class="form-select form-select-sm"
                                                id="">
                                                <option selected disabled>Choose Category</option>
                                                @foreach ($faqCats as $faqCat)
                                                    <option value="{{ $faqCat->id }}">{{ $faqCat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Question
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                maxlength="255" name="question" id="validationCustom01"
                                                placeholder="Enter Question" value="{{ old('question') }}" required>
                                            <div class="invalid-feedback"> Please Enter A Question </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Answer</label>
                                            <textarea rows="4" name="answer" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Answer" required>{{ old('answer') }}</textarea>
                                            <div class="invalid-feedback"> Please Enter Answer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($faqs as $faq)
        <div class="modal fade" id="faqEditModal_{{ $faq->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Faq</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <form action="{{ route('admin.faq.update', $faq->id) }}" class="needs-validation" method="post"
                        novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">

                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Status</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="status"
                                                    data-dropdown-parent="#faqEditModal_{{ $faq->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" data-hide-search="true" required>
                                                    <option></option>
                                                    <option @selected($faq->status == 'active') value="active">Active</option>
                                                    <option @selected($faq->status == 'inactive') value="inactive">In Active
                                                    </option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Active Or In Active.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Order
                                                </label>
                                                <input type="number" id="validationCustom01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="order" value="{{ $faq->order }}" minlength="0"
                                                    maxlength="100" pattern="^-?[1-9]\d*$" placeholder="Enter order"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Order Number</div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Faq
                                                    Category Name
                                                </label>
                                                <select name="category_id" class="form-select form-select-sm"
                                                    id="">
                                                    <option selected disabled>Choose Category</option>
                                                    @foreach ($faqCats as $faqCat)
                                                        <option value="{{ $faqCat->id }}"
                                                            {{ $faq->category_id == $faqCat->id ? 'selected' : '' }}>
                                                            {{ $faqCat->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom01"
                                                    class="form-label required mb-0">Question
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="question" value="{{ $faq->question }}"
                                                    id="validationCustom01" placeholder="Enter Question" required>
                                                <div class="invalid-feedback"> Please Enter A Question </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom010"
                                                    class="form-label required mb-0">Answer</label>
                                                <textarea rows="5" name="answer" class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Answer" required>{{ $faq->answer }}</textarea>
                                                <div class="invalid-feedback"> Please Enter Answer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-2">
                            <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- View Modal --}}
    @foreach ($faqs as $faq)
        <div class="modal fade" id="faqViewModal_{{ $faq->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">View Faq</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        <p class="badge badge-info custom-badge rounded-0 py-3 fs-4">Details</span>
                                        <div class="card-body p-1 px-2">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-5">
                                                            <p class="fw-bold">Question :</p>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-6">
                                                            <p>{{ $faq->question }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-5">
                                                            <p class="fw-bold">Status :</p>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-6">
                                                            <p>
                                                                <span
                                                                    class="badge {{ $faq->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                                                    {{ $faq->status == 1 ? 'active' : 'inactive' }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-5">
                                                            <p class="fw-bold">Answer :</p>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-6">
                                                            <p>
                                                                {{ $faq->answer }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-admin-app-layout>
