<!-- Stats Section -->
<section id="stats" class="stats section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fas fa-building flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="{{ \App\Models\Hospitals::count() }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.clinics') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="far fa-hospital flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="{{ \App\Models\Departments::count() }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.departments') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fas fa-user-md flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="{{ \App\Models\Doctors::count() }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.doctors') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fas fa-list-alt flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="{{ \App\Models\Services::count() }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ __('messages.services') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
