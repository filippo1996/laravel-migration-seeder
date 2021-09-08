<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{ $title }}</h1>
        <p class="lead text-muted">{{ $subTitle }}</p>
        <p>
          {{ $slot }}
        </p>
      </div>
    </div>
</section>