@include('public.templates.pubHeader')

<main class="container my-5">
  <h1 class="single-title">Lorem ipsum dolor sit amet</h1>
  <div class="single-content row">
    <div class="article-content col-sm-12 col-lg-8">
      <div class="single-img"></div>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo quidem ex minima nihil assumenda incidunt odit, a expedita iusto temporibus consequuntur! Voluptate vero laborum dignissimos, nostrum placeat sit illo dolorum?
      </p>
      <div class="single-meta">
        <div class="user">
          <i class="fas fa-user"></i> Username
        </div>
        <div class="tags">
          <i class="fas fa-tags"></i> 0 Tags
        </div>
        <div class="comment-counts">
          <i class="fas fa-comments"></i> 10 Comments
        </div>
      </div>

      <div class="single-author-info">
        <h3 class="mb-4">Author Name</h3>
        <div class="row">
          <div class="col-12 col-sm-2 author-img">
            <img src="{{ asset('images/icon1.png') }}" alt="" class="d-block mx-auto">
          </div>
          <div class="col-12 col-sm-10">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum nobis dicta eius facilis nesciunt, ipsa labore distinctio molestias! Sequi at nulla culpa quaerat voluptatem eius eos natus? Voluptas, possimus magnam! <br>
              View all posts by <a href="#">Author</a>
            </p>
          </div>
        </div>
      </div>
      <hr>

      <div class="comments">
        <h3>Responses</h3>
        <div class="comment-item row">
          <div class="col-12 col-sm-2 comment-img">
            <img src="{{ asset('images/icon1.png') }}" alt="">
            Admin
          </div>
          <div class="col-12 col-sm-10 comment-body">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique voluptatibus qui, ipsam asperiores doloremque placeat architecto, et 
            </p>
            <div class="comment-meta">
              <time>25 Oktober 2016</time>
              <button>Balas</button>
            </div>
          </div>
        </div>
        <div class="comment-item reply row">
          <div class="col-12 col-sm-2 comment-img">
            <img src="{{ asset('images/icon1.png') }}" alt="">
            Admin
          </div>
          <div class="col-12 col-sm-10 comment-body">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique voluptatibus qui, ipsam asperiores doloremque placeat architecto, et 
            </p>
            <div class="comment-meta">
              <time>25 Oktober 2016</time>
              <button>Balas</button>
            </div>
          </div>
        </div>
        <div class="comment-item row">
          <div class="col-12 col-sm-2 comment-img">
            <img src="{{ asset('images/icon1.png') }}" alt="">
            Admin
          </div>
          <div class="col-12 col-sm-10 comment-body">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique voluptatibus qui, ipsam asperiores doloremque placeat architecto, et 
            </p>
            <div class="comment-meta">
              <time>25 Oktober 2016</time>
              <button>Balas</button>
            </div>
          </div>
        </div>
      </div>

      <div class="leave-comment-form">
        <h3>Tinggalkan Komentar</h3>
        <form action="">
          <input type="text" placeholder="Nama">
          <input type="email" placeholder="Email (tidak akan dipublikasi)" name="" id="">
          <textarea name="" id="" placeholder="Komentar Anda"></textarea>
          <button type="submit">Kirim Komentar</button>
        </form>
      </div>
    </div>
    <aside class="article-side-content col-sm-12 col-lg-4">
      <div class="categories-listing mt-5 mt-lg-0">
        <h3>Categories</h3>
        <ul>
          <li><a href="#">Aliquam erat volutpat</a></li>
          <li><a href="#">Integer rutrum ante eu lacus</a></li>
          <li><a href="#">Cum sociis natoque penatibus</a></li>
          <li><a href="#">Mauris fermentum dictum magna</a></li>
          <li><a href="#">Sed laoreet aliquam leo</a></li>
          <li><a href="#">Cum sociis natoque penatibus</a></li>
        </ul>
      </div>

      <div class="recent-comments">
        <h3>Recent Comments</h3>
        <ul>
          <li class="r-comment-item row">
            <div class="r-comment-img col-2">
            </div>
            <div class="r-comment-body col-10">
              <h4>Integer rutrum ante eu</h4>
              <p>
                Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.
              </p>
            </div>
          </li>
          <li class="r-comment-item row">
            <div class="r-comment-img col-2">
            </div>
            <div class="r-comment-body col-10">
              <h4>Integer rutrum ante eu</h4>
              <p>
                Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.
              </p>
            </div>
          </li>
          <li class="r-comment-item row">
            <div class="r-comment-img col-2">
            </div>
            <div class="r-comment-body col-10">
              <h4>Integer rutrum ante eu</h4>
              <p>
                Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.
              </p>
            </div>
          </li>
        </ul>
      </div>

      <div class="recent-tags">
        <h3>Recent Tags</h3>
        <ul>
          <li><a href="#">awesome</a></li>
          <li><a href="#">strategy</a></li>
          <li><a href="#">development</a></li>
          <li><a href="#">css</a></li>
          <li><a href="#">photoshop</a></li>
          <li><a href="#">photography</a></li>
          <li><a href="#">html</a></li>
          <li><a href="#">awesome</a></li>
          <li><a href="#">strategy</a></li>
          <li><a href="#">development</a></li>
        </ul>
      </div>

      <div class="poll">

      </div>
    </aside>
  </div>
</main>

@include('public.templates.pubFooter')