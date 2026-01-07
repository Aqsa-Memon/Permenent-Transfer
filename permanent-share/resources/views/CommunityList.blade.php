@extends('layouts.app')

@section('title', 'Acorn Admin Template | Community List')
@section('description', 'Service Provider Community List')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/vendor/baguetteBox.min.css') }}" />
@endpush

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container mb-3">
  <div class="row">
    <!-- Title Start -->
    <div class="col mb-2">
      <h1 class="mb-2 pb-0 display-4" id="title">Community List</h1>
      <div class="text-muted font-heading text-small">Let us manage the database engines for your applications so you can focus on building.</div>
    </div>
    <!-- Title End -->

    <!-- Top Buttons Start -->
    <div class="col-12 col-sm-auto d-flex align-items-center justify-content-end">
      <!-- Add New Button Start -->
      <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
        <i data-acorn-icon="plus"></i>
        <span>New Topic</span>
      </button>
      <!-- Add New Button End -->
    </div>
    <!-- Top Buttons End -->
  </div>
</div>
<!-- Title and Top Buttons End -->

<div class="row">
  <div class="col-12 col-xxl-8 mb-5 mb-xxl-0">
    <!-- Popular Posts Start -->
    <div>
      <ul class="nav nav-tabs nav-tabs-title nav-tabs-line-title responsive-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" data-bs-toggle="tab" href="#popularPosts" aria-selected="true" role="tab">Popular Posts</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" href="#popularPosts" aria-selected="false" role="tab">Newest</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" href="#popularPosts" aria-selected="false" role="tab">Unread</a>
        </li>
        <li class="nav-item dropdown ms-auto d-none responsive-tab-dropdown">
          <a class="btn btn-icon btn-icon-only btn-background pt-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i data-acorn-icon="more-horizontal"></i>
          </a>
          <ul class="dropdown-menu mt-2 dropdown-menu-end"></ul>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active show" id="popularPosts" role="tabpanel">
          
          <!-- First Post with Image and Comments -->
          <div class="card mb-2">
            <div class="card-body">
              <div class="row g-0">
                <div class="col-auto d-none d-sm-flex pe-4">
                  <div class="sw-5">
                    <div class="text-center mb-2">
                      <a href="#" class="primary-link">
                        <i data-acorn-icon="arrow-top"></i>
                      </a>
                    </div>
                    <div class="cta-3 text-alternate text-center mb-2">214</div>
                    <div class="text-center">
                      <a href="#" class="muted-link">
                        <i data-acorn-icon="arrow-bottom"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="position-relative mb-3 mb-sm-4">
                    <a href="#" class="heading d-block body-link mb-3">Fruitcake chupa chups gingerbread sweet roll pie!</a>
                    <a href="{{ asset('img/product/large/product-1.webp') }}" class="lightbox">
                      <img alt="detail" src="{{ asset('img/product/large/product-1.webp') }}" class="rounded img-fluid sh-35 w-100 h-md-400" />
                    </a>
                  </div>
                  <div class="row g-0">
                    <div class="col-12 col-sm mb-2 mb-sm-0">
                      <div class="row g-0 sh-4">
                        <div class="col-auto pe-3">
                          <img src="{{ asset('img/profile/profile-4.webp') }}" class="card-img rounded-xl sh-4 sw-4" alt="thumb" />
                        </div>
                        <div class="col d-flex align-items-center">Cherish Kerr</div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-auto text">
                      <div class="d-inline-block me-3">
                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                        <span class="align-middle">245</span>
                      </div>
                      <div class="d-inline-block">
                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                        <span class="align-middle">12</span>
                      </div>
                      <div class="d-inline-block float-end d-sm-none">
                        <a href="#" class="primary-link">
                          <i data-acorn-icon="arrow-top" data-acorn-size="15"></i>
                        </a>
                        <span class="mx-1 align-middle">214</span>
                        <a href="#" class="muted-link">
                          <i data-acorn-icon="arrow-bottom" data-acorn-size="15"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom border-separator opacity-50 mt-5 mb-5"></div>
                  
                  <!-- Comments Section -->
                  <div class="row g-0 mb-3">
                    <div class="col-auto pe-3">
                      <img src="{{ asset('img/profile/profile-8.webp') }}" class="card-img rounded-xl sh-3 sw-3" alt="thumb" />
                    </div>
                    <div class="col">
                      <div class="mb-2 pt-1 text-alternate">Esperanza Lodge</div>
                      <div class="text-alternate mb-1">
                        Topping cotton candy halvah marshmallow jujubes chupa chups macaroon cookie croissant. Marshmallow tiramisu marshmallow
                        gummi bears dragée oat cake fruitcake dessert. Topping bonbon gingerbread chocolate apple pie cheesecake liquorice muffin
                        pudding.
                      </div>
                      <div>
                        <div class="d-inline-block sw-9">
                          <a href="#" class="primary-link d-inline-block me-1 align-middle">
                            <i data-acorn-icon="arrow-top" data-acorn-size="15"></i>
                          </a>
                          <span class="d-inline-block align-middle text-alternate text-medium">184</span>
                          <a href="#" class="alternate-link d-inline-block ms-1 align-middle">
                            <i data-acorn-icon="arrow-bottom" data-acorn-size="15"></i>
                          </a>
                        </div>
                        <span class="text-muted text-small">Two hours ago</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row g-0 mb-3">
                    <div class="col-auto pe-3">
                      <img src="{{ asset('img/profile/profile-9.webp') }}" class="card-img rounded-xl sh-3 sw-3" alt="thumb" />
                    </div>
                    <div class="col">
                      <div class="mb-2 pt-1 text-alternate">Kathryn Mengel</div>
                      <div class="text-alternate mb-1">Brownie jelly-o carrot.</div>
                      <div>
                        <div class="d-inline-block sw-9">
                          <a href="#" class="primary-link d-inline-block me-1 align-middle">
                            <i data-acorn-icon="arrow-top" data-acorn-size="15"></i>
                          </a>
                          <span class="d-inline-block align-middle text-alternate text-medium">7</span>
                          <a href="#" class="alternate-link d-inline-block ms-1 align-middle">
                            <i data-acorn-icon="arrow-bottom" data-acorn-size="15"></i>
                          </a>
                        </div>
                        <span class="text-muted text-small">One day ago</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row g-0 mb-3">
                    <div class="col-auto pe-3">
                      <img src="{{ asset('img/profile/profile-1.webp') }}" class="card-img rounded-xl sh-3 sw-3" alt="thumb" />
                    </div>
                    <div class="col">
                      <div class="mb-2 pt-1 text-alternate">Joisse Kaycee</div>
                      <div class="text-alternate mb-1">Beans marshmallow dessert biscuit biscuit gummies ice cream.</div>
                      <div>
                        <div class="d-inline-block sw-9">
                          <a href="#" class="primary-link d-inline-block me-1 align-middle">
                            <i data-acorn-icon="arrow-top" data-acorn-size="15"></i>
                          </a>
                          <span class="d-inline-block align-middle text-alternate text-medium">12</span>
                          <a href="#" class="alternate-link d-inline-block ms-1 align-middle">
                            <i data-acorn-icon="arrow-bottom" data-acorn-size="15"></i>
                          </a>
                        </div>
                        <span class="text-muted text-small">Four days ago</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="input-group mt-5">
                    <input type="text" class="form-control" placeholder="Add a comment" aria-label="Add a comment" />
                    <button class="btn btn-icon btn-icon-end btn-outline-primary" type="button">
                      <span>Add</span>
                      <i data-acorn-icon="send"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Remaining Posts (simplified for brevity) -->
          @php
            $posts = [
              ['votes' => 105, 'title' => 'Marshmallow tiramisu marshmallow gummi bears dragée oat cake', 'author' => 'Kathryn Mengel', 'profile' => '3', 'views' => 245, 'comments' => 12, 'text' => 'Brownie topping apple pie pie toffee wafer cookie bonbon sweet roll. Marshmallow sugar plum chupa chups tart brownie dessert lemon drops topping chocolate. Jelly dragée apple pie halvah jujubes. Sweet sugar plum wafer carrot cake jelly chocolate bar. Brownie gummi bears wafer brownie. Caramels sesame snaps apple pie fruitcake cheesecake topping lemon drops gummi bears icing.'],
              ['votes' => 42, 'title' => 'Cheesecake pie dessert?', 'author' => 'Esperanza Lodge', 'profile' => '2', 'views' => 245, 'comments' => 12, 'text' => 'Marshmallow beans ice cream candy canes sugar plum chupa chups tart brownie dessert lemon drops topping chocolate. Jelly dragée apple pie halvah jujubes.'],
              ['votes' => 53, 'title' => 'Lemon drops marzipan cotton candy gingerbread!', 'author' => 'Joisse Kaycee', 'profile' => '7', 'views' => 245, 'comments' => 12, 'text' => 'Candy jelly beans cupcake. Jelly sesame snaps marshmallow lollipop. Brownie jelly-o carrot cake brownie lemon drops gummi bears. Halvah pudding tootsie roll carrot cake biscuit ice cream halvah tootsie roll.']
            ];
          @endphp

          @foreach($posts as $index => $post)
          <div class="card mb-2">
            <div class="card-body">
              <div class="row g-0">
                <div class="col-auto d-none d-sm-flex pe-4">
                  <div class="sw-5">
                    <div class="text-center mb-2">
                      <a href="#" class="{{ $index === 1 ? 'primary-link' : 'muted-link' }}">
                        <i data-acorn-icon="arrow-top"></i>
                      </a>
                    </div>
                    <div class="cta-2 text-alternate text-center mb-2">{{ $post['votes'] }}</div>
                    <div class="text-center">
                      <a href="#" class="muted-link">
                        <i data-acorn-icon="arrow-bottom"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="position-relative mb-4">
                    <a href="#" class="heading d-block body-link stretched-link mb-3">{{ $post['title'] }}</a>
                    <p class="text-alternate mb-0">{{ $post['text'] }}</p>
                  </div>
                  <div class="row g-0">
                    <div class="col-12 col-sm mb-3 mb-sm-0">
                      <div class="row g-0 sh-4">
                        <div class="col-auto pe-2">
                          <img src="{{ asset('img/profile/profile-' . $post['profile'] . '.webp') }}" class="card-img rounded-xl sh-4 sw-4" alt="thumb" />
                        </div>
                        <div class="col d-flex align-items-center">{{ $post['author'] }}</div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-auto text">
                      <div class="d-inline-block me-3">
                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                        <span class="align-middle">{{ $post['views'] }}</span>
                      </div>
                      <div class="d-inline-block">
                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                        <span class="align-middle">{{ $post['comments'] }}</span>
                      </div>
                      <div class="d-inline-block float-end d-sm-none">
                        <a href="#" class="primary-link">
                          <i data-acorn-icon="arrow-top" data-acorn-size="15"></i>
                        </a>
                        <span class="mx-1 align-middle">214</span>
                        <a href="#" class="muted-link">
                          <i data-acorn-icon="arrow-bottom" data-acorn-size="15"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          <div class="text-center my-5">
            <button class="btn btn-lg btn-outline-primary">Load More</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Popular Posts End -->
  </div>

  <div class="col-12 col-xxl-4 mb-n5">
    <!-- About the Topic Start -->
    <h2 class="small-title">About the Topic</h2>
    <div class="card mb-5">
      <div class="card-body mb-n2">
        <p>
          Topping bonbon gingerbread chocolate apple pie cheesecake liquorice muffin pudding. Jelly beans marshmallow dessert biscuit biscuit
          gummies ice cream chupa chups cotton candy. Brownie topping apple pie pie toffee wafer cookie bonbon sweet roll.
        </p>
        <div class="row g-0 mb-n2">
          <div class="col-4 mb-2">
            <div class="text-small text-muted">POSTS</div>
            <div class="cta-2 text-primary">423</div>
          </div>
          <div class="col-4 mb-2">
            <div class="text-small text-muted">USERS</div>
            <div class="cta-2 text-primary">89</div>
          </div>
          <div class="col-4 mb-2">
            <div class="text-small text-muted">UPDATED</div>
            <div class="cta-2 text-primary">12h</div>
          </div>
        </div>
      </div>
    </div>
    <!-- About the Topic End -->

    <!-- Related Topics Start -->
    <h2 class="small-title">Related Topics</h2>
    <div class="card mb-5">
      <div class="card-body">
        @php
          $relatedTopics = [
            ['icon' => 'server', 'title' => 'Hosting', 'posts' => '352'],
            ['icon' => 'database', 'title' => 'Database', 'posts' => '124'],
            ['icon' => 'startup', 'title' => 'Applications', 'posts' => '514'],
            ['icon' => 'user', 'title' => 'User Management', 'posts' => '251'],
            ['icon' => 'cpu', 'title' => 'Computing', 'posts' => '441']
          ];
        @endphp
        @foreach($relatedTopics as $index => $topic)
        <a href="#" class="row g-0 sh-3 {{ $index < 4 ? 'mb-4' : '' }}">
          <div class="col-auto">
            <div class="sh-3 d-inline-block d-flex justify-content-center align-items-center">
              <i data-acorn-icon="{{ $topic['icon'] }}" class="text-primary"></i>
            </div>
          </div>
          <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
              <div class="d-flex flex-column">
                <div>{{ $topic['title'] }}</div>
              </div>
              <div class="d-flex">
                <span class="badge bg-outline-alternate">{{ $topic['posts'] }} POSTS</span>
              </div>
            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
    <!-- Related Topics End -->

    <!-- Video Guides Start -->
    <h2 class="small-title">Video Guides for the Topic</h2>
    <div class="mb-5">
      @php
        $videos = [
          ['thumbnail' => '1', 'duration' => '12:00', 'title' => 'Database Basics', 'desc' => 'Icing liquorice oat roll chocolate cake bar marzipan marzipan carrot.'],
          ['thumbnail' => '2', 'duration' => '16:22', 'title' => 'Shared Storage', 'desc' => 'Jujubes cream toffee candy jelly chups jujubes muffin chupa chups carrot cake chupa.'],
          ['thumbnail' => '3', 'duration' => '10:05', 'title' => 'Api', 'desc' => 'Candy jelly chups jujubes Cookie cream toffee cream chocolate.']
        ];
      @endphp
      @foreach($videos as $video)
      <div class="card mb-2">
        <a href="#" class="row g-0 sh-11">
          <div class="col-auto">
            <img src="{{ asset('img/video/video-thumbnail-' . $video['thumbnail'] . '.webp') }}" alt="alternate text" class="card-img card-img-horizontal sw-14 theme-filter" />
            <div class="position-absolute bg-foreground opacity-75 text-primary py-1 px-2 text-small b-1 s-1 rounded-lg">{{ $video['duration'] }}</div>
          </div>
          <div class="col">
            <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
              <div class="d-flex flex-column">
                <div class="font-heading">{{ $video['title'] }}</div>
                <div class="text-small text-muted text-truncate">{{ $video['desc'] }}</div>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <!-- Video Guides End -->

    <!-- Tags Start -->
    <h2 class="small-title">Tags</h2>
    <div class="card mb-5">
      <div class="card-body">
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Food (12)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Baking (3)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Sweet (1)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Molding (3)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Pastry (5)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Healthy (7)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Rye (3)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Simple (3)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Cake (2)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Recipe (6)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Bread (8)</span></button>
        <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button"><span>Wheat (2)</span></button>
      </div>
    </div>
    <!-- Tags End -->
  </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/vendor/baguetteBox.min.js') }}"></script>
<script src="{{ asset('js/cs/responsivetab.js') }}"></script>
<script src="{{ asset('js/pages/communitylist.js') }}"></script>
@endpush