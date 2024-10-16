@php
    $navbar_links = [
        [
            'label' => 'Characters',
            'link' => '#'
        ],
        [
            'label' => 'Comics',
            'link' => '#'
        ],
        [
            'label' => 'Movies',
            'link' => '#'
        ],
        [
            'label' => 'Tv',
            'link' => '#'
        ],
        [
            'label' => 'Games',
            'link' => '#'
        ],
        [
            'label' => 'Collectibles',
            'link' => '#'
        ],
        [
            'label' => 'Videos',
            'link' => '#'
        ],
        [
            'label' => 'Fans',
            'link' => '#'
        ],
        [
            'label' => 'News',
            'link' => '#'
        ],
        [
            'label' => 'Shop',
            'link' => '#'
        ],
];
@endphp
    <nav>
        <div class="container navbar py-0">
            <div class="row w-100">       
                <div class="col-2 logo">
                    <img src="img\dc-logo.png" alt="DC Comics">
                </div>
                <div class="col-8 navbar-links">
                    <ul class="w-100 d-flex justify-content-between align-items-center">
                    @foreach ($navbar_links as $navbar_link)
                        <li class="text-uppercase fw-bold fs-6">
                            <a href="{{ $navbar_link['link'] }}">
                                {{ $navbar_link['label'] }}
                            </a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-end">
                    <div class="search-bar">
                        <input type="text" class="search-text" placeholder="Search">
                        <i class="fas fa-search ms-2"></i>
                    </div>
                </div>
            </div>
            
        </div>
    </nav>
