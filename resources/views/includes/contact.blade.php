<!-- Contact Section -->
<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 370px;" src="{{ $siteSettings->map }}" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>{{ $siteSettings->address }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>{{ $siteSettings->phone }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ $siteSettings->email }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <form id="contactForm" class="php-email-form" data-aos="" data-aos-delay="500">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="full_name" class="form-control" placeholder="Your Name" required>
                            <div class="invalid-feedback" data-error="full_name"></div>
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            <div class="invalid-feedback" data-error="email"></div>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            <div class="invalid-feedback" data-error="subject"></div>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
                            <div class="invalid-feedback" data-error="message"></div>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="alert alert-danger error-message d-none"></div>
                            <div class="alert alert-success sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const loading = form.querySelector('.loading');
            const errorMessage = form.querySelector('.error-message');
            const sentMessage = form.querySelector('.sent-message');

            // Function to reset form state
            function resetFormState() {
                // Hide messages
                loading.style.display = 'block';
                errorMessage.style.display = 'none';
                errorMessage.innerHTML = '';
                sentMessage.style.display = 'none';

                // Reset validation errors
                const errorElements = form.querySelectorAll('.invalid-feedback');
                errorElements.forEach(el => {
                    el.style.display = 'none';
                    el.textContent = '';
                });

                // Reset input classes
                const inputs = form.querySelectorAll('.form-control');
                inputs.forEach(input => {
                    input.classList.remove('is-invalid');
                });
            }

            // Function to display validation errors
            function displayValidationErrors(errors) {
                Object.keys(errors).forEach(field => {
                    const errorElement = form.querySelector(`[data-error="${field}"]`);
                    const inputElement = form.querySelector(`[name="${field}"]`);

                    if (errorElement && inputElement) {
                        errorElement.textContent = errors[field][0];
                        errorElement.style.display = 'block';
                        inputElement.classList.add('is-invalid');
                    }
                });
            }

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Reset form state
                resetFormState();

                // Get form data
                const formData = new FormData(form);

                // Send AJAX request
                fetch('{{ route('contactForm') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                    .then(response => {
                        loading.style.display = 'none';
                        return response.json().then(data => {
                            return {
                                ok: response.ok,
                                status: response.status,
                                data: data
                            };
                        });
                    })
                    .then(result => {
                        if (result.ok) {
                            sentMessage.style.display = 'block';
                            form.reset();
                        } else {
                            if (result.status === 422 && result.data.errors) {
                                // Display validation errors
                                displayValidationErrors(result.data.errors);
                                errorMessage.innerHTML = 'Please correct the errors below.';
                                errorMessage.style.display = 'block';
                            } else {
                                errorMessage.innerHTML = result.data.message || 'An error occurred while sending the message';
                                errorMessage.style.display = 'block';
                            }
                        }
                    })
                    .catch(error => {
                        loading.style.display = 'none';
                        errorMessage.innerHTML = 'An error occurred while sending the message';
                        errorMessage.style.display = 'block';
                        console.error('Error:', error);
                    });
            });
        });
    </script>
@endpush
