<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($doctor_info as $doc_info)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('/')}}/doctorimage/{{ $doc_info->image }}" alt="" height="300px">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{ $doc_info->name }}</p>
              <span class="text-sm text-grey">{{ $doc_info->spaciality }}</span>
            </div>
          </div>
        </div>   
        @endforeach




      </div>
    </div>
  </div>