<x-admin-app-layout :title="'Job Edit'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.job.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.job.update', $job->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Status</label>
                                <select name="status" class="form-select form-select-sm" data-control="select2">
                                    <option value="active" {{ $job->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $job->status == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="rank" class="mb-2">Rank</label>
                                <input type="text" name="rank" placeholder="Enter Rank Name"
                                    class="form-control form-control-sm" value="{{ old('rank', $job->rank) }}">
                                @error('rank')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="deadline" class="mb-2">Deadline</label>
                                <input type="date" name="deadline" class="form-control form-control-sm"
                                    value="{{ old('deadline', $job->deadline) }}">
                                @error('deadline')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="contract_duration" class="mb-2">Contract Duration</label>
                                <input type="text" name="contract_duration" class="form-control form-control-sm"
                                    value="{{ old('contract_duration', $job->contract_duration) }}">
                                @error('contract_duration')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="experienced" class="mb-2">Experienced</label>
                                <input type="text" name="experienced" placeholder="Eg: 12+years"
                                    class="form-control form-control-sm"
                                    value="{{ old('experienced', $job->experienced) }}">
                                @error('experienced')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="salary" class="mb-2">Salary</label>
                                <input type="text" name="salary" placeholder="Eg: $1200-$1500"
                                    class="form-control form-control-sm" value="{{ old('salary', $job->salary) }}">
                                @error('salary')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="dwt" class="mb-2">DWT/GRT/TEU</label>
                                <input type="text" name="dwt" class="form-control form-control-sm"
                                    value="{{ old('dwt', $job->dwt) }}">
                                @error('dwt')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="total_needed" class="mb-2">Total Needed</label>
                                <input type="number" name="total_needed" class="form-control form-control-sm"
                                    value="{{ old('total_needed', $job->total_needed) }}">
                                @error('total_needed')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="ship_particulars" class="mb-2">Ship Particulars</label>
                                <input type="text" name="ship_particulars" class="form-control form-control-sm"
                                    value="{{ old('ship_particulars', $job->ship_particulars) }}">
                                @error('ship_particulars')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="long_descp" class="mb-2">Long Description</label>
                                <textarea name="long_descp" class="form-control editor" cols="30" rows="10">{!! $job->long_descp !!}</textarea>
                                @error('long_descp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>

                    </div>
                </div>
            </form>


        </div>

    </div>

    @push('scripts')
    @endpush




</x-admin-app-layout>
