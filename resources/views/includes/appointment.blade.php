<!-- Appointment Section -->
<section id="appointment" class="appointment section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ __('messages.make_appointment') }}</h2>
        <p>{{ __('messages.make_appointment_description') }}</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
            <div>
                <div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <select name="country" id="country" class="form-select" required="">
                                <option value="">Select Country</option>
                                @foreach(\App\Models\Country::all() as $country)
                                    <option value="{{ $country->id }}">{{ $country->C2 }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="service" id="service" class="form-select" required="">
                                <option value="">Select Service</option>
                                @foreach(\App\Models\Services::all() as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="sub_service" id="sub_service" class="form-select" required="">
                                <option value="">Select Sub Service</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                    </div>
                    <div class="mt-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                        <div class="text-center">
                            <button type="submit">Make an Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none customer-info">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                               required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                               placeholder="Appointment Date" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="department" id="department" class="form-select" required="">
                            <option value="">Select Department</option>
                            <option value="Department 1">Department 1</option>
                            <option value="Department 2">Department 2</option>
                            <option value="Department 3">Department 3</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="doctor" id="doctor" class="form-select" required="">
                            <option value="">Select Doctor</option>
                            <option value="Doctor 1">Doctor 1</option>
                            <option value="Doctor 2">Doctor 2</option>
                            <option value="Doctor 3">Doctor 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="mt-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    <div class="text-center">
                        <button type="submit">Make an Appointment</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

</section><!-- /Appointment Section -->
