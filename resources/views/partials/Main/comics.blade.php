<section class="comics-list d-flex justify-content-center">
    <div class="container">
        <div class="current-series blue-layout">
            Current Series
        </div>
        <div class="row pt-5 pb-3 flex-wrap justify-content-between comics-container">
            @include('partials.components.single_comic')
        </div>
        <div class="d-flex justify-content-center w-100">
            <button class="blue-layout load-more-button">
                Load More
            </button>
        </div>
    </div>
</section>