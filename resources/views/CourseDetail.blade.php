<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course Detail</h2>
           <ol class="breadcrumb">
            <li><a href="/">Home</a></li>            
            <li class="active">Course Detail</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 @if(sizeof($course)>0)
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
                          <a ><img style="max-hight: 500px;" src="/images/courses/{{ $course[0]->img }}" alt="img"></a>
                          <figcaption class="mu-latest-course-imgcaption">
                            <a >{{ $course[0]->category}}</a>
                            <!-- <span><i class="fa fa-clock-o"></i>90Days</span> -->
                          </figcaption>
                        </figure>
                        <div class="mu-latest-course-single-content">
                          <h2><a >{{ $course[0]->name}}</a></h2>
                          <h4>Course Information</h4>
                          <div style="text-align: right;">
                            <a href="/course/{{ $course[0]->slug }}">
                              <button class="btn btn-danger btn-flat"">Enroll In</button>
                            </a>
                          </div>
                          <ul>
                            <li> <span>Course Price</span> <span>Free</span></li>
                            <li> <span>Place</span> <span>Online</span></li>
                            <li> <span>Total Students</span> <span>800+</span></li>
                            <li> <span>Course Duration</span> <span>4 Weeks</span></li>
                            <!-- <li> <span>Course Start</span> <span>July 25, 2016</span></li> -->
                          </ul>
                          <h4>Description</h4>
                          <p> <?php echo html_entity_decode($course[0]->desc) ?></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo est itaque vero porro quasi illo ex consequuntur ad animi commodi, ipsam provident voluptas vel adipisci. Minima repellendus vel est, sequi labore quo ipsa voluptatem officiis ex fuga nemo quas. Eligendi inventore ducimus omnis, maxime, alias accusantium similique minus! Labore facilis qui, sunt, ipsam consectetur minus sapiente saepe numquam magnam quidem.</p>
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, placeat, ipsa. Modi sed quibusdam vel autem fugit, eaque, iste. Excepturi fugit dignissimos suscipit dolor perferendis debitis magni sed, quia ab.</p>
                          </blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ea consequatur doloremque deleniti error ullam, accusamus vel est alias, sit. Similique voluptas aliquid, excepturi accusamus, sequi ducimus incidunt mollitia non.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi saepe possimus doloribus quod quibusdam officia suscipit qui illum nemo itaque, porro ipsam tempore enim error eius quia, culpa. Reprehenderit consequuntur voluptatem dolorum magni natus inventore molestias veritatis eos aspernatur repudiandae.</p>
                          <h4>Course Outline</h4>
                          <div class="table-responsive">
                            <table class="table">
                            <thead>
                              <tr>
                                <th> Title </th>
                                <th> Course Time </th>
                                <th> Spent Time </th>
                                <th> Status </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> 1. Topic 1 </td>
                                <td> 15:30 </td>
                                <td> 13:80 </td>
                                <td> Successful </td>
                              </tr>
                              <tr>
                                <td> 2. Topic 2 </td>
                                <td> 15:30 </td>
                                <td> 13:80 </td>
                                <td> Successful </td>
                              </tr>
                              <tr>
                                <td> 3. Topic 3 </td>
                                <td> 15:30 </td>
                                <td> - </td>
                                <td> Successful </td>
                              </tr>
                              <tr>
                                <td> 4. Topic 4 </td>
                                <td> 15:30 </td>
                                <td> 13:80 </td>
                                <td> Successful </td>
                              </tr>
                              <tr>
                                <td> 5. Topic 5 </td>
                                <td> 15:30 </td>
                                <td> - </td>
                                <td> Waiting </td>
                              </tr>
                              <tr>
                                <td> 6. Topic 6 </td>
                                <td> 15:30 </td>
                                <td> 13:80 </td>
                                <td> - </td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                        </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start related course item -->
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                  <h3>Related Courses</h3>
                  <div class="mu-related-item-area">
                    <div id="mu-related-item-slide">
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="#"><img alt="img" src="assets/img/courses/1.jpg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              <a href="#">Drawing</a>
                              <span><i class="fa fa-clock-o"></i>90Days</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                            <div class="mu-latest-course-single-contbottom">
                              <a href="#" class="mu-course-details">Details</a>
                              <span href="#" class="mu-course-price">$165.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="#"><img alt="img" src="assets/img/courses/2.jpg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              <a href="#">Drawing</a>
                              <span><i class="fa fa-clock-o"></i>90Days</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                            <div class="mu-latest-course-single-contbottom">
                              <a href="#" class="mu-course-details">Details</a>
                              <span href="#" class="mu-course-price">$165.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="#"><img alt="img" src="assets/img/courses/3.jpg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              <a href="#">Drawing</a>
                              <span><i class="fa fa-clock-o"></i>90Days</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                            <div class="mu-latest-course-single-contbottom">
                              <a href="#" class="mu-course-details">Details</a>
                              <span href="#" class="mu-course-price">$165.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="#"><img alt="img" src="assets/img/courses/1.jpg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              <a href="#">Drawing</a>
                              <span><i class="fa fa-clock-o"></i>90Days</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                            <div class="mu-latest-course-single-contbottom">
                              <a href="#" class="mu-course-details">Details</a>
                              <span href="#" class="mu-course-price">$165.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                </div> -->
                <!-- end start related course item -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
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
 @endif