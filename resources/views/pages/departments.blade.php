@extends('layouts.app')

@section('content')
    <!-- Departments Section -->
    <section id="doctors" class="doctors section light-backgroundn">
        <!-- Section Title -->
        <div class="container section-title">
            <h2>Departments</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>

        <div class="container">
            <div class="row gy-4">
                @foreach($departments as $department)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset("storage/".$department->image) }}" class="img-fluid" alt="{{ $department->name }}">
                            </div>
                            <div class="member-info">
                                <h4>{{ $department->name }}</h4>
                                <span>{{ $department->speciality }}</span>
                                <a href="{{ route('department', ['id' => $department->id, 'locale' => \Illuminate\Support\Facades\App::getLocale()]) }}" class="readmore">Learn more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav class="d-flex justify-content-center">
                        {{ $departments->links('components.pagination.custom') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
