{{-- Modal Add Employee --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" id="modalAdd">
    <form method="POST" action="/employee" class="needs-validation">
        @csrf
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                id="first_name" name="first_name" value="{{ old('first_name') }}">
                            @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="middle_name">Middle name</label>
                            <input type="text" class="form-control @error('middle_name') is-invalid @enderror"
                                id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
                            @error('middle_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                id="last_name" name="last_name" value="{{ old('last_name') }}">
                            @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="employment_status">Employment Status</label>
                            <select id="employment_status" name="employment_status"
                                class="form-control  @error('employment_status') is-invalid @enderror">
                                <option value="">Choose Employment Status</option>
                                <option value="intern" {{ (old("employment_status") == 'intern' ? "selected":"") }}>
                                    Intern
                                </option>
                                <option value="contract" {{ (old("employment_status") == 'contract' ? "selected":"") }}>
                                    Contract</option>
                                <option value="permanent"
                                    {{ (old("employment_status") == 'permanent' ? "selected":"") }}>
                                    Permanent</option>
                                <option value="permanent"
                                    {{ (old("employment_status") == 'permanent' ? "selected":"") }}>
                                    Diperbantukan</option>
                            </select>
                            @error('employment_status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="emp_no">Employee No</label>
                            <input type="text" class="form-control @error('emp_no') is-invalid @enderror" id="emp_no"
                                name="emp_no" value="{{ old('emp_no') }}">
                            @error('emp_no')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="id_number">ID Number</label>
                            <input type="text" class="form-control @error('id_number') is-invalid @enderror"
                                id="id_number" name="id_number" value="{{ old('id_number') }}">
                            @error('id_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="birth_date">Birth Date</label>
                            <input class="form-control @error('id_number') is-invalid @enderror" type="date"
                                value="{{ old('birth_date') }}" id="birth_date" name="birth_date">
                            @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="birth_place">Birth Place</label>
                            <input type="text" class="form-control @error('birth_place') is-invalid @enderror"
                                id="birth_place" name="birth_place" value="{{ old('birth_place') }}">
                            @error('birth_place')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender"
                                class="form-control @error('gender') is-invalid @enderror">
                                <option value="">Choose Gender</option>
                                <option value="male" {{ (old("gender") == 'male' ? "selected":"") }}>
                                    Male</option>
                                <option value="female" {{ (old("gender") == 'female' ? "selected":"") }}>Female
                                </option>
                            </select>
                            @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="address">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address"
                                value="{{ old('address') }}"></textarea>
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>