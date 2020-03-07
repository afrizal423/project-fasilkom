@include('public.templates.pubHeader')

<main class="container my-5">
  <h1 class="mb-5">Event</h1>
  <div class="row">
    <div class="col-md-8 col-sm-12">
      <div class="event-item row">
        <div class="col-sm-0 col-lg-3">
          <div class="event-item-img"></div>
        </div>
        
        <div class="event-item-content col-sm-12 col-lg-9">
          <h2 class="event-item-title"><a href="#">Seminar & Bazar Kewirausahaan</a></h2>
          <div class="event-meta">
            <address>By <a href="#" rel="author">Elizabeth Malkin</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
          </div>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos natus assumenda ipsa, et possimus, deleniti provident rem libero vitae cumque error deserunt? Veritatis odit dolorem quam animi corporis mollitia commodi. <br>
            <a href="#" class="read-more">Read More</a>
          </p>
        </div>
      </div>

      <div class="event-item row">
        <div class="col-sm-0 col-lg-3">
          <div class="event-item-img"></div>
        </div>
        
        <div class="event-item-content col-sm-12 col-lg-9">
          <h2 class="event-item-title"><a href="#">Donor Darah</a></h2>
          <div class="event-meta">
            <address>By <a href="#" rel="author">James Smith</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ea, quas quisquam sit libero expedita blanditiis ipsum, sequi animi ex est harum omnis deserunt placeat possimus cum illum. Error, delectus? <br>
            <a href="#" class="read-more">Read More</a>
          </p>
        </div>
      </div>

      <div class="event-item row">
        <div class="col-sm-0 col-lg-3">
          <div class="event-item-img"></div>
        </div>
        
        <div class="event-item-content col-sm-12 col-lg-9">
          <h2 class="event-item-title"><a href="#">Kompetisi Desain Poster</a></h2>
          <div class="event-meta">
            <address>By <a href="#" rel="author">Michael Drew</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores illo alias veniam accusamus, sed numquam ratione suscipit deleniti aperiam eum. Sequi consequatur ipsum et ex similique veritatis distinctio dolore accusamus? <br>
            <a href="#" class="read-more">Read More</a>
          </p>
        </div>
      </div>

      <div class="event-item row">
        <div class="col-sm-12 col-lg-3">
          <div class="event-item-img"></div>
        </div>
        
        <div class="event-item-content col-sm-12 col-lg-9">
          <h2 class="event-item-title"><a href="#">Gemastik 10 2018</a></h2>
          <div class="event-meta">
            <address>By <a href="#" rel="author">James Smith</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, accusamus harum libero explicabo dolorum quos esse atque illum impedit eveniet dicta necessitatibus placeat repellat at ex illo. Quas, facilis voluptates. <br>
            <a href="#" class="read-more">Read More</a>
          </p>
        </div>
      </div>

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item disabled"><a class="page-link" href="#" aria-disabled="true">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-md-4 col-sm-12">
      <h2 class="upcoming-event-title">Upcoming Events</h2>
      <div class="accordion" id="upcomingEvents">
        <div class="card">
          <div class="card-header" id="upEvH1">
            <h2 class="mb-0">
              <button type="button" data-toggle="collapse" data-target="#upEv1" aria-expanded="true" aria-controls="upEv1">
                Lomba Tenis Lapangan 2019
              </button>
            </h2>

            <div id="upEv1" class="collapse" aria-labelledby="headingOne" data-parent="#upcomingEvents">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quisquam iure voluptatem fugiat sapiente eaque dolore odit accusantium harum aperiam saepe ratione quia doloribus eligendi beatae, molestiae ab! Id, possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="upEvH2">
            <h2 class="mb-0">
              <button type="button" data-toggle="collapse" data-target="#upEv2" aria-expanded="true" aria-controls="upEv2">
                Talkshow Workshop
              </button>
            </h2>

            <div id="upEv2" class="collapse" aria-labelledby="upEvH2" data-parent="#upcomingEvents">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quisquam iure voluptatem fugiat sapiente eaque dolore odit accusantium harum aperiam saepe ratione quia doloribus eligendi beatae, molestiae ab! Id, possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="upEvH3">
            <h2 class="mb-0">
              <button type="button" data-toggle="collapse" data-target="#upEv3" aria-expanded="true" aria-controls="upEv3">
                 Seminar Nasional IT
              </button>
            </h2>

            <div id="upEv3" class="collapse" aria-labelledby="upEvH3" data-parent="#upcomingEvents">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quisquam iure voluptatem fugiat sapiente eaque dolore odit accusantium harum aperiam saepe ratione quia doloribus eligendi beatae, molestiae ab! Id, possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="upEvH4">
            <h2 class="mb-0">
              <button type="button" data-toggle="collapse" data-target="#upEv4" aria-expanded="true" aria-controls="upEv4">
                Binus Tourism Championship
              </button>
            </h2>

            <div id="upEv4" class="collapse" aria-labelledby="upEvH4" data-parent="#upcomingEvents">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quisquam iure voluptatem fugiat sapiente eaque dolore odit accusantium harum aperiam saepe ratione quia doloribus eligendi beatae, molestiae ab! Id, possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="upEvH5">
            <h2 class="mb-0">
              <button type="button" data-toggle="collapse" data-target="#upEv5" aria-expanded="true" aria-controls="upEv5">
                Pancasila Debate Competition 2019
              </button>
            </h2>

            <div id="upEv5" class="collapse" aria-labelledby="upEvH5" data-parent="#upcomingEvents">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quisquam iure voluptatem fugiat sapiente eaque dolore odit accusantium harum aperiam saepe ratione quia doloribus eligendi beatae, molestiae ab! Id, possimus.
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="upEvH6">
            <h2 class="mb-0">
              <button type="button" data-toggle="collapse" data-target="#upEv6" aria-expanded="true" aria-controls="upEv6">
                Local Beauty Fest
              </button>
            </h2>

            <div id="upEv6" class="collapse" aria-labelledby="upEvH6" data-parent="#upcomingEvents">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quisquam iure voluptatem fugiat sapiente eaque dolore odit accusantium harum aperiam saepe ratione quia doloribus eligendi beatae, molestiae ab! Id, possimus.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@include('public.templates.pubFooter')