<x-admin-app-layout :title="'Officer Edit'">
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

            <form id="myForm" method="post" action="{{ route('admin.officer.update', $officer->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card bg-light mb-5">

                    <div class="row p-4">

                        <h2 class="mb-4">Personal Information</h2>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="name" class="mb-2">Name <span class="text-danger"></span></label>
                                <input type="text" name="name" placeholder="Enter Name"
                                    class="form-control form-control-sm"
                                    value="{{ old('name', $officer->name ?? 'John Doe') }}" required>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="rank" class="mb-2">Rank</label>
                                <input type="text" name="rank" placeholder="Enter Rank"
                                    class="form-control form-control-sm"
                                    value="{{ old('rank', $officer->rank ?? 'Captain') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cdc_no" class="mb-2">CDC No</label>
                                <input type="text" name="cdc_no" placeholder="Enter CDC No"
                                    class="form-control form-control-sm"
                                    value="{{ old('cdc_no', $officer->cdc_no ?? 'CDC12345') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="contact" class="mb-2">Contact <span class="text-danger"></span></label>
                                <input type="text" name="contact" placeholder="Enter Contact (e.g., 123-456-7890)"
                                    class="form-control form-control-sm"
                                    value="{{ old('contact', $officer->contact ?? '123-456-7890') }}" required>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="academy" class="mb-2">Academy</label>
                                <input type="text" name="academy" placeholder="Enter Academy"
                                    class="form-control form-control-sm"
                                    value="{{ old('academy', $officer->academy ?? 'Naval Academy') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="batch" class="mb-2">Batch</label>
                                <input type="text" name="batch" placeholder="Enter Batch"
                                    class="form-control form-control-sm"
                                    value="{{ old('batch', $officer->batch ?? '2022') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="contact" class="mb-2">Current Status</label>
                                <select name="status" class="form-select form-select-sm" id="statusSelect">
                                    <option disabled {{ $officer->status ? '' : 'selected' }}>Choose...</option>
                                    <option value="board" {{ $officer->status == 'board' ? 'selected' : '' }}>On Board</option>
                                    <option value="leave" {{ $officer->status == 'leave' ? 'selected' : '' }}>On Leave</option>
                                    <option value="fleet" {{ $officer->status == 'fleet' ? 'selected' : '' }}>Not in Fleet Yet</option>
                                </select>
                            </div>
                            
                            <div id="additionalField" class="form-group mt-2" style="{{ $officer->status == 'board' ? '' : 'display: none;' }}">
                                <label for="details" class="mb-2">Ship Name</label>
                                <input type="text" class="form-control form-control-sm" id="details" value="{{ $officer->ship_name }}" name="ship_name" placeholder="Enter ship name">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="remarks" class="mb-2">Remarks</label>
                                <input type="text" name="remarks" placeholder="Enter Remarks"
                                    class="form-control form-control-sm"
                                    value="{{ old('remarks', $officer->remarks) }}">
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
                                    class="form-control form-control-sm"
                                    value="{{ old('cdc', $officer->cdc ?? 'CDC67890') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="coc" class="mb-2">COC</label>
                                <input type="date" name="coc" placeholder="Enter COC"
                                    class="form-control form-control-sm"
                                    value="{{ old('coc', $officer->coc ?? 'COC11223') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="goc" class="mb-2">GOC</label>
                                <input type="date" name="goc" placeholder="Enter GOC"
                                    class="form-control form-control-sm"
                                    value="{{ old('goc', $officer->goc ?? 'GOC33445') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sid" class="mb-2">SID</label>
                                <input type="date" name="sid" placeholder="Enter SID"
                                    class="form-control form-control-sm"
                                    value="{{ old('sid', $officer->sid ?? 'SID55667') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ph" class="mb-2">PH</label>
                                <input type="date" name="ph" placeholder="Enter PH"
                                    class="form-control form-control-sm"
                                    value="{{ old('ph', $officer->ph ?? 'PH78901') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pst" class="mb-2">PST</label>
                                <input type="date" name="pst" placeholder="Enter PST"
                                    class="form-control form-control-sm"
                                    value="{{ old('pst', $officer->pst ?? 'PST23456') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="fpff" class="mb-2">FPFF</label>
                                <input type="date" name="fpff" placeholder="Enter FPFF"
                                    class="form-control form-control-sm"
                                    value="{{ old('fpff', $officer->fpff ?? 'FPFF89012') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="efa" class="mb-2">EFA</label>
                                <input type="date" name="efa" placeholder="Enter EFA"
                                    class="form-control form-control-sm"
                                    value="{{ old('efa', $officer->efa ?? 'EFA12345') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pssr" class="mb-2">PSSR</label>
                                <input type="date" name="pssr" placeholder="Enter PSSR"
                                    class="form-control form-control-sm"
                                    value="{{ old('pssr', $officer->pssr ?? 'PSSR67890') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sat" class="mb-2">SAT</label>
                                <input type="date" name="sat" placeholder="Enter SAT"
                                    class="form-control form-control-sm"
                                    value="{{ old('sat', $officer->sat ?? 'SAT23456') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="dsd" class="mb-2">DSD</label>
                                <input type="date" name="dsd" placeholder="Enter DSD"
                                    class="form-control form-control-sm"
                                    value="{{ old('dsd', $officer->dsd ?? 'DSD78901') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="pscrb" class="mb-2">PSCRB</label>
                                <input type="date" name="pscrb" placeholder="Enter PSCRB"
                                    class="form-control form-control-sm"
                                    value="{{ old('pscrb', $officer->pscrb ?? 'PSCRB23456') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="edh" class="mb-2">EDH</label>
                                <input type="date" name="edh" placeholder="Enter EDH"
                                    class="form-control form-control-sm"
                                    value="{{ old('edh', $officer->edh ?? 'EDH89012') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="radar_navigation" class="mb-2">Radar Navigation</label>
                                <input type="date" name="radar_navigation" placeholder="Enter Radar Navigation"
                                    class="form-control form-control-sm"
                                    value="{{ old('radar_navigation', $officer->radar_navigation ?? 'RadarNav1') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="aff" class="mb-2">AFF</label>
                                <input type="date" name="aff" placeholder="Enter AFF"
                                    class="form-control form-control-sm"
                                    value="{{ old('aff', $officer->aff ?? 'AFF12345') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="mfa" class="mb-2">MFA</label>
                                <input type="date" name="mfa" placeholder="Enter MFA"
                                    class="form-control form-control-sm"
                                    value="{{ old('mfa', $officer->mfa ?? 'MFA67890') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="madical_care" class="mb-2">Medical Care</label>
                                <input type="date" name="madical_care" placeholder="Enter Medical Care"
                                    class="form-control form-control-sm"
                                    value="{{ old('madical_care', $officer->madical_care ?? 'MedCare1') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ens" class="mb-2">ENS</label>
                                <input type="date" name="ens" placeholder="Enter ENS"
                                    class="form-control form-control-sm"
                                    value="{{ old('ens', $officer->ens ?? 'ENS23456') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="sso" class="mb-2">SSO</label>
                                <input type="date" name="sso" placeholder="Enter SSO"
                                    class="form-control form-control-sm"
                                    value="{{ old('sso', $officer->sso ?? 'SSO78901') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="brm" class="mb-2">BRM</label>
                                <input type="date" name="brm" placeholder="Enter BRM"
                                    class="form-control form-control-sm"
                                    value="{{ old('brm', $officer->brm ?? 'BRM23456') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="hvs" class="mb-2">HVS</label>
                                <input type="date" name="hvs" placeholder="Enter HVS"
                                    class="form-control form-control-sm"
                                    value="{{ old('hvs', $officer->hvs ?? 'HVS67890') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ship_simulation" class="mb-2">Ship Simulation</label>
                                <input type="date" name="ship_simulation" placeholder="Enter Ship Simulation"
                                    class="form-control form-control-sm"
                                    value="{{ old('ship_simulation', $officer->ship_simulation ?? 'ShipSim1') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="ecdis" class="mb-2">ECDIS</label>
                                <input type="date" name="ecdis" placeholder="Enter ECDIS"
                                    class="form-control form-control-sm"
                                    value="{{ old('ecdis', $officer->ecdis ?? 'ECDIS12345') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="atoto" class="mb-2">ATOTO</label>
                                <input type="date" name="atoto" placeholder="Enter ATOTO"
                                    class="form-control form-control-sm"
                                    value="{{ old('atoto', $officer->atoto ?? 'ATOTO67890') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="cor" class="mb-2">COR</label>
                                <input type="date" name="cor" placeholder="Enter COR"
                                    class="form-control form-control-sm"
                                    value="{{ old('cor', $officer->cor ?? 'COR23456') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="covid" class="mb-2">COVID Training</label>
                                <input type="text" name="covid" placeholder="Enter COVID Training"
                                    class="form-control form-control-sm"
                                    value="{{ old('covid', $officer->covid ?? 'COVID12345') }}">
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="current_status" class="mb-2">Current Status</label>
                                <input type="date" name="current_status" placeholder="Leave / On Leave"
                                    class="form-control form-control-sm"
                                    value="{{ old('current_status', $officer->current_status ?? 'On Leave') }}">
                            </div>
                        </div> --}}

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="discharge_date" class="mb-2">Discharge Date</label>
                                <input type="date" name="discharge_date" class="form-control form-control-sm"
                                    value="{{ old('discharge_date', $officer->discharge_date ?? '2024-10-01') }}"
                                    aria-label="Discharge Date">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="end_of_contract" class="mb-2">End of Contract</label>
                                <input type="date" name="end_of_contract" class="form-control form-control-sm"
                                    value="{{ old('end_of_contract', $officer->end_of_contract ?? '2025-10-01') }}"
                                    aria-label="End of Contract">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_one" class="mb-2">Other One</label>
                                <input type="date" name="other_one" class="form-control form-control-sm"
                                    value="{{ old('other_one',$officer->other_one) }}">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_two" class="mb-2">Other Two</label>
                                <input type="date" name="other_two" class="form-control form-control-sm"
                                    value="{{ old('other_two',$officer->other_two) }}">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_three" class="mb-2">Other Three</label>
                                <input type="date" name="other_three" class="form-control form-control-sm"
                                    value="{{ old('other_three',$officer->other_three) }}">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="other_four" class="mb-2">Other Four</label>
                                <input type="date" name="other_four" class="form-control form-control-sm"
                                    value="{{ old('other_four',$officer->other_four) }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update Data</button>
                        </div>

                    </div>



                </div>
            </form>

        </div>

    </div>

    @push('scripts')
    <script>
        const statusSelect = document.getElementById('statusSelect');
        const additionalField = document.getElementById('additionalField');
    
        // Function to toggle the additional field
        function toggleAdditionalField() {
            if (statusSelect.value === 'board') {
                additionalField.style.display = 'block';
            } else {
                additionalField.style.display = 'none';
            }
        }
    
        // Event listener for the dropdown
        statusSelect.addEventListener('change', toggleAdditionalField);
    
        // Initial check to set visibility based on the selected status
        toggleAdditionalField();
    </script>
    @endpush




</x-admin-app-layout>
