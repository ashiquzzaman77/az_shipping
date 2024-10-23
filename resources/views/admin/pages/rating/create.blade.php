<x-admin-app-layout :title="'Rating Create'">

    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.rating.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.rating.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light mb-5">

                    <div class="row p-4">

                        <h2 class="mb-4">Personal Information</h2>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text" name="name" placeholder="Enter Name"
                                    class="form-control form-control-sm" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="rank" class="mb-2">Rank</label>
                                <input type="text" name="rank" placeholder="Enter Rank"
                                    class="form-control form-control-sm" value="{{ old('rank') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cdc_no" class="mb-2">CDC No</label>
                                <input type="text" name="cdc_no" placeholder="Enter CDC No"
                                    class="form-control form-control-sm" value="{{ old('cdc_no') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="contact" class="mb-2">Contact</label>
                                <input type="text" name="contact" placeholder="Enter Contact"
                                    class="form-control form-control-sm" value="{{ old('contact') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="academy" class="mb-2">Academy</label>
                                <input type="text" name="academy" placeholder="Enter Academy"
                                    class="form-control form-control-sm" value="{{ old('academy') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="contact" class="mb-2">Current Status</label>
                                <select name="status" class="form-select form-select-sm" id="">
                                    <option disabled selected>Choose...</option>
                                    <option value="board">On Board</option>
                                    <option value="leave">On Leave</option>
                                    <option value="fleet">Not in Fleet Yet</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card bg-light mt-5">

                    <div class="row p-4">

                        <h2 class="mb-4">General Information</h2>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="batch" class="mb-2">Batch</label>
                                <input type="text" name="batch" placeholder="Enter Batch"
                                    class="form-control form-control-sm" value="{{ old('batch') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cdc" class="mb-2">CDC</label>
                                <input type="text" name="cdc" placeholder="Enter CDC"
                                    class="form-control form-control-sm" value="{{ old('cdc') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="coc" class="mb-2">Passport</label>
                                <input type="text" name="passport" placeholder="Enter Passport"
                                    class="form-control form-control-sm" value="{{ old('passport') }}">
                            </div>
                        </div>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sid" class="mb-2">SID</label>
                                <input type="text" name="sid" placeholder="Enter SID"
                                    class="form-control form-control-sm" value="{{ old('sid') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ph" class="mb-2">PH</label>
                                <input type="text" name="ph" placeholder="Enter PH"
                                    class="form-control form-control-sm" value="{{ old('ph') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pst" class="mb-2">PST</label>
                                <input type="text" name="pst" placeholder="Enter PST"
                                    class="form-control form-control-sm" value="{{ old('pst') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="aff" class="mb-2">AFF</label>
                                <input type="text" name="aff" placeholder="Enter AFF"
                                    class="form-control form-control-sm" value="{{ old('aff') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="fpff" class="mb-2">FPFF</label>
                                <input type="text" name="fpff" placeholder="Enter FPFF"
                                    class="form-control form-control-sm" value="{{ old('fpff') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="efa" class="mb-2">EFA</label>
                                <input type="text" name="efa" placeholder="Enter EFA"
                                    class="form-control form-control-sm" value="{{ old('efa') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pssr" class="mb-2">PSSR</label>
                                <input type="text" name="pssr" placeholder="Enter PSSR"
                                    class="form-control form-control-sm" value="{{ old('pssr') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sat" class="mb-2">SAT</label>
                                <input type="text" name="sat" placeholder="Enter SAT"
                                    class="form-control form-control-sm" value="{{ old('sat') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="atoto" class="mb-2">ATOTO</label>
                                <input type="text" name="atoto" placeholder="Enter ATOTO"
                                    class="form-control form-control-sm" value="{{ old('atoto') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="dsd" class="mb-2">DSD</label>
                                <input type="text" name="dsd" placeholder="Enter DSD"
                                    class="form-control form-control-sm" value="{{ old('dsd') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pscrb" class="mb-2">PSCRB</label>
                                <input type="text" name="pscrb" placeholder="Enter PSCRB"
                                    class="form-control form-control-sm" value="{{ old('pscrb') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="edh" class="mb-2">NWR</label>
                                <input type="text" name="nwr" placeholder="Enter NWR"
                                    class="form-control form-control-sm" value="{{ old('nwr') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="rasd" class="mb-2">RASD</label>
                                <input type="text" name="rasd" placeholder="Enter RASD"
                                    class="form-control form-control-sm" value="{{ old('rasd') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="covid" class="mb-2">COVID</label>
                                <input type="text" name="covid" placeholder="Enter COVID Training"
                                    class="form-control form-control-sm" value="{{ old('covid') }}">
                            </div>
                        </div>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="discharge_date" class="mb-2">Discharge Date</label>
                                <input type="date" name="discharge_date" class="form-control form-control-sm"
                                    value="{{ old('discharge_date') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="end_of_contract" class="mb-2">End of Contract</label>
                                <input type="date" name="end_of_contract" class="form-control form-control-sm"
                                    value="{{ old('end_of_contract') }}">
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
