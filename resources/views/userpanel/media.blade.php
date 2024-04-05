@include('userpanel.partials.userheader')

<main id="main" class="container">
    <div class="d-flex justify-content-center mt-5 mb-3">
        <h1 class="display-3">Media</h1>
    </div>

    <section id="content" class="container my-3">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <nav id="navbar-example2" class="navbar nav-tabs bg-white px-2 mb-3">
                    <a class="navbar-brand" href="#">Latest News</a>
                    <ul class="nav nav-pills">

                        <li class="nav-item">
                            <a href="{{ route('userpanel.index') }}" class="nav-link">All</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('userpanel.media') }}" class="nav-link">Media</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('userpanel.csr') }}" class="nav-link">CSR</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                aria-controls="offcanvasExample">Years
                            </a>

                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Years</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="container">
                                        @php
                                            $years = range(date('Y'), 2010);
                                        @endphp

                                        @foreach ($years as $year)
                                            <ul class="list-group">
                                                <li class="list-group-item border-0 text-center"><a
                                                        href="{{ route('userpanel.year', ['data' => $year]) }}"
                                                        class="btn my-1">{{ $year }}</a></li>
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </nav>

                @if (count($posts) == 0)
                    <div class="d-flex display-4 justify-content-center py-5" style="height: 600px;">
                        There is no post yet.
                    </div>
                @else
                    @foreach ($posts as $post)
                        @if ($post->category == 'Media')
                            <div class="bg-body-tertiary p-3 rounded-2 my-2">

                                <div class="row p-2">
                                    <a href="{{ route('userpanel.show', $post->id) }}">
                                        <div class="h4 my-3 p-3 btn btn-lg fw-bold w-fit">
                                            {{ $post->title }}
                                        </div>
                                    </a>

                                    <div class="col-lg-3 col-md-12">
                                        @if ($post->image1)
                                            <img src="{{ asset('storage/images/' . $post->image1) }}" alt=""
                                                class="img-thumbnail border border-3 rounded-2">
                                        @endif
                                    </div>
                                    <div class="col-lg-9 col-md-12 p-3">
                                        @if ($post->category == 'CSR')
                                            <span class="my-2 h6 fw-bold py-2">{{ $post->category }}: Corporate Social
                                                Responsibility </span>
                                        @else
                                            <span class="my-2 h6 fw-bold py-2">{{ $post->category }}</span>
                                        @endif

                                        <p>
                                            {{ $post->sub_title }}
                                        </p>

                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="float-end mt-3">
                                            <i class="bi bi-calendar3"></i> {{ $post->year }}
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-12">
                                        <div class="container">
                                            <a href="{{ route('userpanel.show', $post->id) }}"
                                                class="btn btn-primary">See
                                                More</a>
                                            <div class="float-end">
                                                {{ $post->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif


                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>This Year News</h5>
                    </div>
                    <div class="card-body">
                        <div class="row py-3">
                            @if (count($sides) == 0)
                                <div class="d-flex">
                                    There is no posts for this year yet.
                                </div>
                            @else
                                @foreach ($sides as $side)
                                    @if ($side->year == date('Y'))
                                        <div class="col-md-12 border-bottom border-dark mb-4">
                                            <a href="{{ route('userpanel.show', $side->id) }}">
                                                <img src="{{ asset('storage/images/' . $side->image1) }}"
                                                    alt="" class="img-fluid img-thumbnail">

                                                <a href="{{ route('userpanel.show', $side->id) }}" class="btn">
                                                    <div class="h6 mt-2">
                                                        {{ $side->title }}
                                                    </div>
                                                </a>
                                                <div class="float-end my-3">
                                                    <span>{{ $side->created_at->diffForHumans() }}</span>
                                                </div>
                                        </div>
                                    @else
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="carRecent" class="container my-5">

        <div class="container my-4">
            <h4>This Year Activities & News</h4>
        </div>

        <div id="carouselRecent" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselRecent" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselRecent" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselRecent" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://kmd.com.sg/images/media/khathein2023.jpg" class="d-block w-100 img-fluid"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="p-2 bg-white rounded-3">
                            <a href="" class="btn btn-lg btn-outline-dark fw-bolder fs-4 rounded-3">
                                (၂၇) ကြိမ်မြောက် KMD Group of Companies ၏ စုပေါင်း မဟာဘုံကထိန်
                                အလှူတော်
                                မင်္ဂလာ
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://kmd.com.sg/images/media/khathein2022.jpg" class="d-block w-100 img-fluid"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="p-2 bg-white rounded-3">
                            <a href="" class="btn btn-lg btn-outline-dark fw-bolder fs-4 rounded-3">
                                (၂၇) ကြိမ်မြောက် KMD Group of Companies ၏ စုပေါင်း မဟာဘုံကထိန်
                                အလှူတော်
                                မင်္ဂလာ
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://kmd.com.sg/images/media/khahtein2021-1.jpg" class="d-block w-100 img-fluid"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="p-2 bg-white rounded-3">
                            <a href="" class="btn btn-lg btn-outline-dark fw-bolder fs-4 rounded-3">
                                (၂၇) ကြိမ်မြောက် KMD Group of Companies ၏ စုပေါင်း မဟာဘုံကထိန်
                                အလှူတော်
                                မင်္ဂလာ
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselRecent"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselRecent"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


</main>

@include('userpanel.partials.userfooter')
