<x-admin-app-layout :title="'Officer Create'">

    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.officer.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.officer.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light mb-5">

                    <div class="row p-4">

                        <h2 class="mb-4">Personal Information</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="name" name="name" placeholder="Enter Name"
                                    class="form-control form-control-sm" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="rank" class="mb-2">Rank</label>
                                <input type="name" name="rank" placeholder="Enter Rank"
                                    class="form-control form-control-sm" value="{{ old('rank') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cdc_no" class="mb-2">CDC No</label>
                                <input type="name" name="cdc_no" placeholder="Enter CDC No"
                                    class="form-control form-control-sm" value="{{ old('cdc_no') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="contact" class="mb-2">Contact</label>
                                <input type="name" name="contact" placeholder="Enter Contact"
                                    class="form-control form-control-sm" value="{{ old('contact') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="academy" class="mb-2">Academy</label>
                                <input type="name" name="academy" placeholder="Enter Academy"
                                    class="form-control form-control-sm" value="{{ old('academy') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="batch" class="mb-2">Batch</label>
                                <input type="name" name="batch" placeholder="Enter Batch"
                                    class="form-control form-control-sm" value="{{ old('batch') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="contact" class="mb-2">Current Status</label>
                                <select name="status" class="form-select form-select-sm" id="statusSelect">
                                    <option disabled selected>Choose...</option>
                                    <option value="board">On Board</option>
                                    <option value="leave">On Leave</option>
                                    <option value="fleet">Not in Fleet Yet</option>
                                </select>
                            </div>
                            <div id="additionalField" class="form-group mt-2" style="display: none;">
                                <label for="details" class="mb-2">Ship Name</label>
                                <input type="name" class="form-control form-control-sm" id="details"
                                    name="ship_name" placeholder="Enter Ship Name">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card bg-light mt-5">

                    <div class="row p-4">

                        <h2 class="mb-4">General Information</h2>


                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cdc" class="mb-2">CDC</label>
                                <input type="date" name="cdc" placeholder="Enter CDC"
                                    class="form-control form-control-sm" value="{{ old('cdc') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="coc" class="mb-2">COC</label>
                                <input type="date" name="coc" placeholder="Enter COC"
                                    class="form-control form-control-sm" value="{{ old('coc') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="goc" class="mb-2">GOC</label>
                                <input type="date" name="goc" placeholder="Enter GOC"
                                    class="form-control form-control-sm" value="{{ old('goc') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sid" class="mb-2">SID</label>
                                <input type="date" name="sid" placeholder="Enter SID"
                                    class="form-control form-control-sm" value="{{ old('sid') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ph" class="mb-2">PH</label>
                                <input type="date" name="ph" placeholder="Enter PH"
                                    class="form-control form-control-sm" value="{{ old('ph') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pst" class="mb-2">PST</label>
                                <input type="date" name="pst" placeholder="Enter PST"
                                    class="form-control form-control-sm" value="{{ old('pst') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="fpff" class="mb-2">FPFF</label>
                                <input type="date" name="fpff" placeholder="Enter FPFF"
                                    class="form-control form-control-sm" value="{{ old('fpff') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="efa" class="mb-2">EFA</label>
                                <input type="date" name="efa" placeholder="Enter EFA"
                                    class="form-control form-control-sm" value="{{ old('efa') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pssr" class="mb-2">PSSR</label>
                                <input type="date" name="pssr" placeholder="Enter PSSR"
                                    class="form-control form-control-sm" value="{{ old('pssr') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sat" class="mb-2">SAT</label>
                                <input type="date" name="sat" placeholder="Enter SAT"
                                    class="form-control form-control-sm" value="{{ old('sat') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="dsd" class="mb-2">DSD</label>
                                <input type="date" name="dsd" placeholder="Enter DSD"
                                    class="form-control form-control-sm" value="{{ old('dsd') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pscrb" class="mb-2">PSCRB</label>
                                <input type="date" name="pscrb" placeholder="Enter PSCRB"
                                    class="form-control form-control-sm" value="{{ old('pscrb') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="edh" class="mb-2">EDH</label>
                                <input type="date" name="edh" placeholder="Enter EDH"
                                    class="form-control form-control-sm" value="{{ old('edh') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="radar_navigation" class="mb-2">Radar Navigation</label>
                                <input type="date" name="radar_navigation" placeholder="Enter Radar Navigation"
                                    class="form-control form-control-sm" value="{{ old('radar_navigation') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="aff" class="mb-2">AFF</label>
                                <input type="date" name="aff" placeholder="Enter AFF"
                                    class="form-control form-control-sm" value="{{ old('aff') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="mfa" class="mb-2">MFA</label>
                                <input type="date" name="mfa" placeholder="Enter MFA"
                                    class="form-control form-control-sm" value="{{ old('mfa') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="madical_care" class="mb-2">Medical Care</label>
                                <input type="date" name="madical_care" placeholder="Enter Medical Care"
                                    class="form-control form-control-sm" value="{{ old('madical_care') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ens" class="mb-2">ENS</label>
                                <input type="date" name="ens" placeholder="Enter ENS"
                                    class="form-control form-control-sm" value="{{ old('ens') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sso" class="mb-2">SSO</label>
                                <input type="date" name="sso" placeholder="Enter SSO"
                                    class="form-control form-control-sm" value="{{ old('sso') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="brm" class="mb-2">BRM</label>
                                <input type="date" name="brm" placeholder="Enter BRM"
                                    class="form-control form-control-sm" value="{{ old('brm') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="hvs" class="mb-2">HVS</label>
                                <input type="date" name="hvs" placeholder="Enter HVS"
                                    class="form-control form-control-sm" value="{{ old('hvs') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ship_simulation" class="mb-2">Ship Simulation</label>
                                <input type="date" name="ship_simulation" placeholder="Enter Ship Simulation"
                                    class="form-control form-control-sm" value="{{ old('ship_simulation') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ecdis" class="mb-2">ECDIS</label>
                                <input type="date" name="ecdis" placeholder="Enter ECDIS"
                                    class="form-control form-control-sm" value="{{ old('ecdis') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="atoto" class="mb-2">ATOTO</label>
                                <input type="date" name="atoto" placeholder="Enter ATOTO"
                                    class="form-control form-control-sm" value="{{ old('atoto') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cor" class="mb-2">COR</label>
                                <input type="date" name="cor" placeholder="Enter COR"
                                    class="form-control form-control-sm" value="{{ old('cor') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="covid" class="mb-2">COVID Training</label>
                                <input type="name" name="covid" placeholder="Enter COVID Training"
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

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_one" class="mb-2">Other One</label>
                                <input type="date" name="other_one" class="form-control form-control-sm"
                                    value="{{ old('other_one') }}">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_two" class="mb-2">Other Two</label>
                                <input type="date" name="other_two" class="form-control form-control-sm"
                                    value="{{ old('other_two') }}">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_three" class="mb-2">Other Three</label>
                                <input type="date" name="other_three" class="form-control form-control-sm"
                                    value="{{ old('other_three') }}">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_four" class="mb-2">Other Four</label>
                                <input type="date" name="other_four" class="form-control form-control-sm"
                                    value="{{ old('other_four') }}">
                            </div>
                        </div>


                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>

                    </div>

                </div>


            </form>

            {{-- <form id="myForm" method="post" action="{{ route('admin.officer.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light mb-5">
                    <div class="row p-4">
                        <h2 class="mb-4">Personal Information</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name</label>
                                <input type="text" name="name" placeholder="Enter Name"
                                    class="form-control form-control-sm @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="rank" class="mb-2">Rank</label>
                                <input type="text" name="rank" placeholder="Enter Rank"
                                    class="form-control form-control-sm @error('rank') is-invalid @enderror"
                                    value="{{ old('rank') }}">
                                @error('rank')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cdc_no" class="mb-2">CDC No</label>
                                <input type="text" name="cdc_no" placeholder="Enter CDC No"
                                    class="form-control form-control-sm @error('cdc_no') is-invalid @enderror"
                                    value="{{ old('cdc_no') }}">
                                @error('cdc_no')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="contact" class="mb-2">Contact</label>
                                <input type="text" name="contact" placeholder="Enter Contact"
                                    class="form-control form-control-sm @error('contact') is-invalid @enderror"
                                    value="{{ old('contact') }}">
                                @error('contact')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="academy" class="mb-2">Academy</label>
                                <input type="text" name="academy" placeholder="Enter Academy"
                                    class="form-control form-control-sm @error('academy') is-invalid @enderror"
                                    value="{{ old('academy') }}">
                                @error('academy')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="batch" class="mb-2">Batch</label>
                                <input type="text" name="batch" placeholder="Enter Batch"
                                    class="form-control form-control-sm @error('batch') is-invalid @enderror"
                                    value="{{ old('batch') }}">
                                @error('batch')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="status" class="mb-2">Current Status</label>
                                <select name="status"
                                    class="form-select form-select-sm @error('status') is-invalid @enderror"
                                    id="statusSelect">
                                    <option disabled selected>Choose...</option>
                                    <option value="board" {{ old('status') == 'board' ? 'selected' : '' }}>On Board
                                    </option>
                                    <option value="leave" {{ old('status') == 'leave' ? 'selected' : '' }}>On Leave
                                    </option>
                                    <option value="fleet" {{ old('status') == 'fleet' ? 'selected' : '' }}>Not in
                                        Fleet Yet</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div id="additionalField" class="form-group mt-2" style="display: none;">
                                <label for="details" class="mb-2">Ship Name</label>
                                <input type="text" class="form-control form-control-sm" id="details"
                                    name="ship_name" placeholder="Enter Ship Name" value="{{ old('ship_name') }}">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card bg-light mt-5">
                    <div class="row p-4">
                        <h2 class="mb-4">General Information</h2>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cdc" class="mb-2">CDC</label>
                                <input type="date" name="cdc"
                                    class="form-control form-control-sm @error('cdc') is-invalid @enderror"
                                    value="{{ old('cdc') }}">
                                @error('cdc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="coc" class="mb-2">COC</label>
                                <input type="date" name="coc"
                                    class="form-control form-control-sm @error('coc') is-invalid @enderror"
                                    value="{{ old('coc') }}">
                                @error('coc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="goc" class="mb-2">GOC</label>
                                <input type="date" name="goc"
                                    class="form-control form-control-sm @error('goc') is-invalid @enderror"
                                    value="{{ old('goc') }}">
                                @error('goc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sid" class="mb-2">SID</label>
                                <input type="date" name="sid"
                                    class="form-control form-control-sm @error('sid') is-invalid @enderror"
                                    value="{{ old('sid') }}">
                                @error('sid')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ph" class="mb-2">PH</label>
                                <input type="date" name="ph"
                                    class="form-control form-control-sm @error('ph') is-invalid @enderror"
                                    value="{{ old('ph') }}">
                                @error('ph')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pst" class="mb-2">PST</label>
                                <input type="date" name="pst"
                                    class="form-control form-control-sm @error('pst') is-invalid @enderror"
                                    value="{{ old('pst') }}">
                                @error('pst')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="fpff" class="mb-2">FPFF</label>
                                <input type="date" name="fpff"
                                    class="form-control form-control-sm @error('fpff') is-invalid @enderror"
                                    value="{{ old('fpff') }}">
                                @error('fpff')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="efa" class="mb-2">EFA</label>
                                <input type="date" name="efa"
                                    class="form-control form-control-sm @error('efa') is-invalid @enderror"
                                    value="{{ old('efa') }}">
                                @error('efa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="emergency_contact" class="mb-2">Emergency Contact</label>
                                <input type="text" name="emergency_contact"
                                    class="form-control form-control-sm @error('emergency_contact') is-invalid @enderror"
                                    value="{{ old('emergency_contact') }}" placeholder="Enter Emergency Contact">
                                @error('emergency_contact')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>
                    </div>
                </div>
            </form> --}}


        </div>

    </div>

    @push('scripts')
        <script>
            const statusSelect = document.getElementById('statusSelect');
            const additionalField = document.getElementById('additionalField');

            statusSelect.addEventListener('change', function() {
                if (this.value === 'board') {
                    additionalField.style.display = 'block';
                } else {
                    additionalField.style.display = 'none';
                }
            });
        </script>

        <script>
            document.getElementById('team_member').addEventListener('input', function() {
                const numMembers = parseInt(this.value);
                const additionalFields = document.getElementById('additional_fields');
                const member2Field = document.getElementById('member_2_field');
                const member3Field = document.getElementById('member_3_field');

                if (numMembers > 0) {
                    additionalFields.style.display = 'block';
                    member2Field.style.display = (numMembers >= 2) ? 'block' : 'none';
                    member3Field.style.display = (numMembers === 3) ? 'block' : 'none';
                } else {
                    additionalFields.style.display = 'none';
                }
            });
        </script>
    @endpush




</x-admin-app-layout>
