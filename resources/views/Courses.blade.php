
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course</h2>
           <ol class="breadcrumb">
            <li><a href="/">Home</a></li>            
            <li class="active">Courses</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                    @if(isset($courses))
                        @foreach($courses as $course)
                            <div class="col-md-6 col-sm-6">
                                <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="/course-detail/<?= $course->id ?>"><img style="max-height: 400px!important;" src="images/courses/{{ $course->img }}" alt="img"></a>
                                    <!-- <a href="/course-detail/<?= $course->id ?>"><img src="assets/img/courses/2.jpg" alt="img"></a> -->
                                    <figcaption class="mu-latest-course-imgcaption">
                                    <a>{{$course->category}}</a>
                                    <span><i class="fa fa-clock-o"></i>75Days</span>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="/course-detail/<?= $course->id ?>">{{$course->name}}</a></h4>
                                    <!-- <p>{{$course->desc}}</p> -->
                                    <div class="mu-latest-course-single-contbottom">
                                    <a class="mu-course-details" href="/course-detail/<?= $course->id ?>">Details</a>
                                    <span class="mu-course-price">Free</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- end course content container -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Categories</h3>
                    <ul class="mu-sidebar-catg">
                        @if(isset($courseCategories))
                            @foreach($courseCategories as $cc)
                                <li><a href="/courses/{{$cc->slug}}">{{$cc->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
