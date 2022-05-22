@extends('layout.main')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
    <!-- Content -->
    <div id="main-content" class="container">

        <!--gambar program-->
        <div class="menu-section row">
            <div class="featured-card">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12 px-5">
                        <div class="category-card mt-5">
                            <img src="{{ asset('assets/images/program/poster/' . $program->poster) }}" alt=""
                                width="100%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- keterangan program -->
        <div class="menu-section row mt-5">
            <div class="description col-lg-8 col-sm-12 mt-5 mx-auto ps-5">
                <p class="content-description">
                    {{ $program->description }}
                </p>
            </div>
            <div class="col-lg-4 col-12 my-auto">
                <a href="/programs/download/{{ $program->slug }}">
                    <img src="{{ asset('assets/images/download.png') }}" alt="" width="40%" />
                </a>
            </div>
        </div>

        {{-- Checklist --}}
        @if (auth()->user() != null)
            <div class="row mt-5 px-5">
                <h6 class="text-center">Checklists</h6>
                @if ($program->category->id == 1)
                    <div class="menu-section row justify-content-center mt-5">
                        @for ($i = 1; $i <= 7; $i++)
                            <div class="col-lg-1 mt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="check-{{ $i }}"
                                        value="{{ $i }}"
                                        onchange="updateData(this.value, this.checked, {{ $program->id }}, {{ auth()->user()->id }})"
                                        @if ($progress->where('day', '=', $i)->isNotEmpty()) checked @endif>
                                    <label class="form-check-label" for="check-{{ $i }}">Day
                                        {{ $i }}</label>
                                </div>
                            </div>
                        @endfor
                    @elseif ($program->category->id == 2)
                        <div class="menu-section row mt-3">
                            @for ($i = 1; $i <= 30; $i++)
                                <div class="col-lg-1 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="check-{{ $i }}"
                                            value="{{ $i }}"
                                            onchange="updateData(this.value, this.checked, {{ $program->id }}, {{ auth()->user()->id }})"
                                            @if ($progress->where('day', '=', $i)->isNotEmpty()) checked @endif>
                                        <label class="form-check-label" for="check-{{ $i }}">Day
                                            {{ $i }}</label>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    @else
                        <div class="menu-section row mt-3">
                            {{-- Bulan 1 --}}
                            <h4 class="mt-5">Bulan 1</h4>
                            @for ($i = 1; $i <= 30; $i++)
                                <div class="col-lg-1 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="check-{{ $i }}"
                                            value="{{ $i }}"
                                            onchange="updateData(this.value, this.checked, {{ $program->id }}, {{ auth()->user()->id }})"
                                            @if ($progress->where('day', '=', $i)->isNotEmpty()) checked @endif>
                                        <label class="form-check-label" for="check-{{ $i }}">Day
                                            {{ $i }}</label>
                                    </div>
                                </div>
                            @endfor
                            {{-- Bulan 2 --}}
                            <h4 class="mt-5">Bulan 2</h4>
                            @for ($i = 31; $i <= 60; $i++)
                                <div class="col-lg-1 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="check-{{ $i }}"
                                            value="{{ $i }}"
                                            onchange="updateData(this.value, this.checked, {{ $program->id }}, {{ auth()->user()->id }})"
                                            @if ($progress->where('day', '=', $i)->isNotEmpty()) checked @endif>
                                        <label class="form-check-label" for="check-{{ $i }}">Day
                                            {{ $i }}</label>
                                    </div>
                                </div>
                            @endfor
                            {{-- Bulan 3 --}}
                            <h4 class="mt-5">Bulan 3</h4>
                            @for ($i = 61; $i <= 90; $i++)
                                <div class="col-lg-1 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="check-{{ $i }}"
                                            value="{{ $i }}"
                                            onchange="updateData(this.value, this.checked, {{ $program->id }}, {{ auth()->user()->id }})"
                                            @if ($progress->where('day', '=', $i)->isNotEmpty()) checked @endif>
                                        <label class="form-check-label" for="check-{{ $i }}">Day
                                            {{ $i }}</label>
                                    </div>
                                </div>
                            @endfor
                        </div>
                @endif
            </div>
        @endif
    </div>
    </div>
@endsection

@section('script')
    <script>
        function updateData(id, status, program, user) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: "post",
                url: "{{ url('/programs/check') }}",
                data: {
                    day: id,
                    status: status,
                    program: program,
                    user: user,
                },
                dataType: "json",
                success: function(data) {

                }
            });
        }

        function msg(value) {
            console.log("heelo" + value);
        }
    </script>
@endsection
