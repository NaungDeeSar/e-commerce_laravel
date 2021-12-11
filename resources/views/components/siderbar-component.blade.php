
 <div class="left-sidebar my-4 shadow-sm">
              <div class="panel-group category-products mt-4" id="accordian">
                  <!--category-productsr-->
                  <h2>Category</h2>

                  @php $i=1; @endphp
                  @foreach($category as $category)
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$i}}">
                                  <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                  {{$category->name}}
                              </a>
                          </h4>
                      </div>
                      <div id="sportswear{{$i}}" class="panel-collapse collapse">
                          <div class="panel-body">

                              <ul class="ml-3">
                                  @foreach($category->subcategories as $subcategory)
                                     <li>
                                       <a  href="{{route('filter',$subcategory->id)}}"># {{$subcategory->name}} </a>
                                    </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
                      @php $i++; @endphp
                  @endforeach

              </div>
              <!--/category-products-->
          </div>