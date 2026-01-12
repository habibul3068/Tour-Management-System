@extends('website.master')

@section('content')

    <div class="auth-background flex-grow-1 d-flex flex-column position-relative">
        <div class="auth-overlay"></div>

        <div class="container d-flex justify-content-center py-5 mt-5">
            <div class="glass-card mt-4" style="max-width: 850px; width: 100%; font-family: 'Poppins', sans-serif;">

                <div class="text-center mb-5">
                    <h2 class="fw-bold text-white display-6">Student Registration</h2>
                    <p class="text-white-50">Join our batch and start your journey</p>
                </div>

                <form method="POST" action=""> @csrf

                    <h5 class="fw-bold mb-4 text-uppercase"
                        style="color: #81e6d9; letter-spacing: 2px; font-size: 0.85rem; border-bottom: 1px solid rgba(129, 230, 217, 0.2); padding-bottom: 10px;">
                        <i class="fa fa-user me-2"></i>Basic Information
                    </h5>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Full Name</label>
                            <input type="text" class="form-control glass-input" name="name" placeholder="Enter full name"
                                required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Phone Number</label>
                            <input type="text" class="form-control glass-input" name="phone" placeholder="017xxxxxxxx"
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Email Address</label>
                            <input type="email" class="form-control glass-input" name="email"
                                placeholder="email@example.com" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Blood Group</label>
                            <select class="form-control glass-input form-select" name="blood_group">
                                <option value="" selected disabled>Select Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>

                    <hr class="border-light opacity-25 my-3">

                    <h5 class="fw-bold mb-4 text-uppercase"
                        style="color: #81e6d9; letter-spacing: 2px; font-size: 0.85rem; border-bottom: 1px solid rgba(129, 230, 217, 0.2); padding-bottom: 10px;">
                        <i class="fa fa-users me-2"></i>Guardian Information
                    </h5>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Father's Name</label>
                            <input type="text" class="form-control glass-input" name="father_name"
                                placeholder="Enter father's name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Mother's Name</label>
                            <input type="text" class="form-control glass-input" name="mother_name"
                                placeholder="Enter mother's name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Emergency Contact</label>
                            <input type="text" class="form-control glass-input" name="emergency_contact"
                                placeholder="Guardian's phone number">
                        </div>
                    </div>

                    <hr class="border-light opacity-25 my-3">

                    <h5 class="fw-bold mb-4 text-uppercase"
                        style="color: #81e6d9; letter-spacing: 2px; font-size: 0.85rem; border-bottom: 1px solid rgba(129, 230, 217, 0.2); padding-bottom: 10px;">
                        <i class="fa fa-book me-2"></i>Course Details
                    </h5>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Select Course</label>
                            <select class="form-control glass-input form-select" name="course_id">
                                <option value="" selected disabled>Choose Course...</option>
                                <option value="web">Web Development</option>
                                <option value="graphics">Graphics Design</option>
                                <option value="marketing">Digital Marketing</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Address</label>
                            <input type="text" class="form-control glass-input" name="address"
                                placeholder="Village, District, etc.">
                        </div>
                    </div>

                    <hr class="border-light opacity-25 my-3">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-light fw-medium small ps-1">Password</label>
                            <input type="password" class="form-control glass-input" name="password"
                                placeholder="Create Password" required>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label class="form-label text-light fw-medium small ps-1">Confirm Password</label>
                            <input type="password" class="form-control glass-input" name="password_confirmation"
                                placeholder="Repeat Password" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-adventure w-100 py-3 fw-bold shadow-sm">
                        Register Now
                    </button>

                    <div class="text-center mt-4">
                        <span class="small opacity-75 text-white">Already have an account?</span>
                        <a href="{{ route('auth.login') }}" class="auth-link ms-1">Login here</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection