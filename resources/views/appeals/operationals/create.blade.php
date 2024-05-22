@extends('layouts.app')
@section('title', 'COP29 - Operationals')
@section('content')

    <style>
        .add_btn{
            width: 100%;
            border: 1px solid rgb(163, 163, 163);
            border-radius: 8px;
            padding: 8px 16px;
            background-color: #74cb74;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            display: flex;
            justify-content: center;
        }

        .copied_container{
            border: 1px solid #b9b9b9;
            border-radius: 8px;
            padding: 28px 14px;
            margin-bottom: 24px;
        }

        .delete_block{
            background-color: #e55555;
            color: #fff;
            padding: 8px 12px;
            border-radius: 4px;
            text-align: center;
            font-weight: 600;
            font-size: 16px;
        }
    </style>

    <div class="card">
        <div class="card-body">
            <form id="registerForm" action="{{ route('user.operationals.store') }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="row mb-n6">
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="organization">Organization name</label>
                        <input type="text" id="organization" maxlength="50" name="organization" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->company_name }}">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="email_address">Email address</label>
                        <input type="text" id="email_address" maxlength="50" name="email_address" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->email_address }}">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="email_address">Mobile number</label>
                        <input type="text" id="mobile_number" maxlength="50" name="mobile_number" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->mobile_number }}">
                    </div>
                    <div class="col-6 mb-6">
                        <label class="form-label fw-600" for="email_address">Full name</label>
                        <input type="text" id="full_name" maxlength="50" name="full_name" readonly
                               class="form-control error-class"
                               value="{{ \Illuminate\Support\Facades\Auth::user()->full_name }}">
                    </div>

                    <div id="equipment_inputs_container">
                        <div id="copied_container" class="copied_container row">
                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="service_type">Service type</label>
                                <select name="service_type" class="form-control" id="service_type" required>
                                    <option value="">Select service type</option>
                                    <option value="Audio Description Service (ADS)/Mass Cast/FM Radio">Audio Description Service
                                        (ADS)/Mass Cast/FM Radio
                                    </option>
                                    <option value="Interpretation Service">Interpretation Service</option>
                                    <option value="Photographer Wireless Remote">Photographer Wireless Remote</option>
                                    <option value="Telemetry and Tele-Command">Telemetry and Tele-Command</option>
                                    <option value="Wireless IEM Systems">Wireless IEM Systems</option>
                                    <option value="Wireless Microphones">Wireless Microphones</option>
                                    <option value="Wireless Video Cameras">Wireless Video Cameras</option>
                                </select>
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="period">Period</label>
                                <input required type="number" id="period" maxlength="50" name="period"
                                       class="form-control error-class">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="period">Start date</label>
                                <input required type="date" id="start_date" maxlength="50" name="start_date"
                                       class="form-control rdp-single-date">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="period">End date</label>
                                <input required type="date" id="end_date" maxlength="50" name="end_date"
                                       class="form-control rdp-single-date">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="zone">Zone</label>
                                <select name="zone" class="form-control" id="zone">
                                    <option value="">Select zone</option>
                                    <option value="Blue zone">Blue zone</option>
                                    <option value="Green zone">Green zone</option>
                                    <option value="All locations">All locations</option>
                                </select>
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="in_out_use">Indoor or outdoor use</label>
                                <select name="in_out_use" class="form-control" id="in_out_use" required>
                                    <option value="">Select use zone</option>
                                    <option value="Indoor">Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="All locations">All locations</option>
                                </select>
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="manufacturer">Manufacturer</label>
                                <input required type="text" id="manufacturer" maxlength="50" name="manufacturer"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="hand_model">Handheld Model</label>
                                <input required type="text" id="hand_model" maxlength="50" name="hand_model"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="hand_units">Number of Handheld units</label>
                                <input required type="number" id="hand_units" maxlength="50" name="hand_units"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="belt_pack_model">Beltpack Model</label>
                                <input required type="text" id="belt_pack_model" maxlength="50" name="belt_pack_model"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="belt_pack_units">Number of Beltpack units</label>
                                <input required type="number" id="belt_pack_units" maxlength="50" name="belt_pack_units"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="power_output">Max Power Output / Required Radiated
                                    Power[mW]</label>
                                <input required type="number" max="50" id="power_output" maxlength="50" name="power_output"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="antenna_height">Antenna height[m]</label>
                                <input required type="number" id="antenna_height" maxlength="50" name="antenna_height"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="antenna_gain">Antenna gain[dB]</label>
                                <input required type="number" id="antenna_gain" maxlength="50" name="antenna_gain"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="frequency_range_start">Frequency Range Start
                                    [MHz]</label>
                                <input required type="number" id="frequency_range_start" maxlength="50" name="frequency_range_start"
                                       class="form-control">
                            </div>

                            <div class="col-3 mb-6">
                                <label class="form-label fw-600" for="frequency_range_end">Frequency Range End
                                    [MHz]</label>
                                <input required type="number" id="frequency_range_end" maxlength="50" name="frequency_range_end"
                                       class="form-control">
                            </div>

                            <div class="col-4 mb-6">
                                <label class="form-label fw-600" for="tuning_step">Tuning step [KHz] </label>
                                    <input required type="number" id="tuning_step" maxlength="50" name="tuning_step"
                                       class="form-control">
                            </div>

                            <div class="col-4 mb-6">
                                <label class="form-label fw-600" for="bandwidth">Bandwidth [KHz] </label>
                                <input required type="number" id="bandwidth" maxlength="50" name="bandwidth"
                                       class="form-control">
                            </div>

                            <div class="col-4 mb-6">
                                <label class="form-label fw-600" for="bandwidth">Customs Clearance </label>
                                <div class="form-check form-switch form-check-inline">
                                    <input class="form-check-input" name="customs_clearance" type="checkbox" id="exampleSwitch6">
                                    <label class="form-check-label" for="exampleSwitch6">Indicate if the equipment will be temporarily imported into the AZE.
                                        If yes, then complete the CUSTOMS tab</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 add_btn_container mb-6">
                        <button id="add_new_equipment" class="add_btn" type="button">
                            Add
                        </button>
                    </div>

                    <div class="col-12 mb-6">
                        <label class="form-label fw-600" for="bandwidth">Additional comments </label>
                        <textarea name="comments" class="form-control" id="" cols="50" rows="30"></textarea>
                    </div>

                    <div class="col-12 mb-6">
                        <button type="submit" class="btn btn-primary w-100">Save </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('js-code')

<script>
    let equipmentCount = 0;
    let fieldsFull = true;

    document.querySelector('#add_new_equipment').addEventListener('click', function() {

        document.querySelectorAll('input').forEach(input => { if(input.name !== 'customs_clearance' && !input.value) fieldsFull = false; })

        document.querySelectorAll('select').forEach(select => { if(!select.value) fieldsFull = false;})

        if(!fieldsFull){
            alert('Please ensure all input fields and selections are completed before adding new equipment.')
        } else{
            cloneContainerForEquipment();
        }

        fieldsFull = true;
    })

    function cloneContainerForEquipment(){
        equipmentCount++;

        const equipmentsContainer = document.querySelector('#equipment_inputs_container');
        const copiedContainer = document.getElementById('copied_container');

        const cloneContainer = copiedContainer.cloneNode(true);
        cloneContainer.id += equipmentCount;

        const inputs = cloneContainer.querySelectorAll('input');
        const selects = cloneContainer.querySelectorAll('select');

        inputs.forEach((input) => {
            const $input = $(input);
            const $textDiv = $input.siblings('div.text');
            $textDiv.empty();
            input.value = '';
            input.id ? input.id += equipmentCount : null;
        });

        selects.forEach((select) => {
            const $select = $(select);
            $select.find(":selected").val('');
            const $textDiv = $select.siblings('div.text');
            $textDiv.empty();
            if (select.id) {
                select.id += equipmentCount;
            }
        });

        equipmentsContainer.appendChild(cloneContainer);

        const dynamicForm = document.querySelector(`#copied_container${equipmentCount}`);
        if(equipmentCount > 0){
            const deleteContainer = document.createElement('div');
            deleteContainer.id = `delete_container${equipmentCount}`;
            deleteContainer.classList.add('delete_block');
            deleteContainer.textContent = 'Delete box';
            dynamicForm.appendChild(deleteContainer);
        };
    }

    $(document).on('click', '[id^="delete_container"]', function(e) {
        const number = e.target.id.substring(16, e.target.id.length);
        const container = document.querySelector(`#copied_container${number}`);
        container.remove();
        equipmentCount--;
    });
</script>

@endsection

