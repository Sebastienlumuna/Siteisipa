@foreach ($posts as $post)
<div class="col-lg-4 col-12 mb-4 wow fadeInUp floating" data-wow-delay="0.1s">
    <div class="card border-0 shadow-lg h-100 hover-shadow">
      <div class="product-thumb position-relative overflow-hidden">
        <a href="" class="hover-zoom">
          <img src="{{ $post->image}}" class="img-fluid product-image" alt="actu" width="1232" height="816">
        </a>
      </div>
      <div class="product-info p-4">
        <div class="card-body">
          <div class="d-flex justify-content-between mb-2">
            <small class="text-muted"> {{ $post->created_at}} </small>
            <small class="text-danger"><a href="#" class="">Événement</a></small>
          </div>
          <h5 class="product-title">
            <a href="" class="text-dark text-decoration-none hover-text" onmouseover="this.style.color='#3C3882'" onmouseout="this.style.color=''">
                {{ $post->titre}}
            </a>
          </h5>
          <a href="l">
            <p class="text-muted">
            {{ $post->extrait}}
            </p>
          </a>
        </div>
      </div>
    </div>
  </div>

@endforeach
