<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        @foreach($data as $data)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$data->head}}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="newsImage/{{$data->photo}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">{{$data->details}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="editorImages/{{$data->editor_photo}}" alt="">
                  </div>
                  <span>{{$data->head}}</span>
                </div>
                <span class="mai-time"></span> Posted on {{$data->created_at}}
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="blog.html" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->