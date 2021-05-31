@extends('layouts.app')
@section('content')


<div class="container w-90 my-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6 col-sm-12">
          <div id="carouselExampleIndicators" class="carousel hov-zoom slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/storage/RealEst/room1.jpg" class="carousel" alt="">
              </div>
              <div class="carousel-item">
                <img src="/storage/RealEst/room2.jpg" class="carousel" alt="">
              </div>
              <div class="carousel-item">
                <img src="/storage/RealEst/room3.jpg" class="carousel" alt="">
              </div>
              <div class="carousel-item">
                <img src="/storage/RealEst/room4.jpg" class="carousel" alt="">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 p-4">
          <h2 class="georgia">Apoorva Apartments</h2>
          <p> - Apoorva Builders</p>
          <p class="text-muted">Last Updated : 30th Jan, 2021</p>
          <p>Est. Cost : 67L - 73L 
            <span class="d-none d-lg-block text-muted" data-toggle="tooltip" data-placement="right" title="GST, Floor rise cost, Maintanence">Excluded Cost (hover)</span>
            <span class="d-block d-sm-none">Excluded cost - GST, Floor rise cost, Maintanence</span> 
          </p> 
          <p>Address : Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quia?</p>
          <p><table class="text-center">
            <tr>
              <th style="border-right: 2px solid #1c75658e; border-left: 2px solid #1c75658e; padding: 0.5rem 1.5rem">Listed On</th>
              <th style="border-right: 2px solid #1c75658e; padding: 0.5rem 1.5rem">Listed On</th>
              <th style="padding: 0.5rem 1.5rem">Listed On</th>
            </tr>
            <tr>
              <td style="border-right: 2px solid #1c75658e; padding: 0.5rem 1.5rem">20 Jan 2021</td>
              <td style="border-right: 2px solid #1c75658e; padding: 0.5rem 1.5rem">20 Jan 2021</td>
              <td style="border-right: 2px solid #1c75658e; border-left: 2px solid #1c75658e; padding: 0.5rem 1.5rem">20 Jan 2021</td>
            </tr>
          </table></p> 
          <div class="btn btn-outline-green">View Similar</div>      
        </div>
    </div>
</div>

<div class="container-fluid">
  <div class="row w-90 justify-content-center" style="position:relative;">
    <ul class="nav w-100 nav-tabs p-3 bgdarkblue" style="position: sticky; top: 0; background-color: white; z-index:200;" onscroll="scrolldisp()" id="scrolldisp">
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" aria-current="page" data-toggle="tab" id="tab-head1" href="#tab1">Overview</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head2" href="#tab2">Location</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head3" href="#tab3">Amenities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head4" href="#tab4">Facing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head5" href="#tab5">Price</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head6" href="#tab6">Property details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head7" href="#tab7">Ownership details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head8" href="#tab8">Acreage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head9" href="#tab9">Added</a>
      </li>
      <li class="nav-item">
        <a class="nav-link acc-link" style="border:0;" data-toggle="tab" id="tab-head10" href="#tab10">Documentation</a>
      </li>
    </ul>
    <div class="col-md-7 col-sm-12 p-3">
      <div class="tab-content p-4" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-head1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-head2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-head3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-head4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab-head5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab-head6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab-head7">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab-head8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab9" role="tabpanel" aria-labelledby="tab-head9">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
        <div class="tab-pane fade" id="tab10" role="tabpanel" aria-labelledby="tab-head10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat deleniti officia sit suscipit earum hic quidem ex quae nulla illum beatae ullam nobis cum nesciunt dolores, necessitatibus laboriosam perspiciatis corporis veritatis velit! Temporibus, expedita placeat consectetur, suscipit repellendus nobis fugiat sequi nisi harum quia vitae veritatis quis reprehenderit adipisci quibusdam nostrum distinctio fugit id? Inventore consequuntur maiores tenetur fugit fugiat, fuga est sunt illo vitae, quidem quae! Itaque saepe quam possimus excepturi quia, maiores quae voluptates, ut id magni doloribus sint quas. Animi fuga ullam illum quaerat tenetur eum maxime impedit magnam sit laborum, veritatis ratione eaque doloribus. Similique, nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit itaque soluta optio dolorem maiores in nisi laboriosam placeat repellat numquam, veritatis eaque corrupti omnis quae, alias eligendi quo, sit nobis sapiente iste molestias. Saepe aliquid aspernatur possimus laudantium porro aut nemo numquam ea deleniti repellendus libero explicabo optio, necessitatibus, ratione dolore veritatis odio quo velit? Eum fuga eveniet, illum rem aliquid sunt voluptates numquam voluptatibus! Hic perferendis, repellat exercitationem voluptas alias sapiente, sint deserunt voluptatibus repudiandae laboriosam suscipit enim et nulla eum. Facilis, doloremque reprehenderit itaque alias dicta, architecto repellendus eos quia nesciunt fugit perferendis, quisquam dolorum cupiditate est ab. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dignissimos sapiente consequatur quia incidunt sunt voluptatum. Voluptatum accusantium officia asperiores non praesentium debitis eius aspernatur ab voluptatem provident! Veniam, quasi magnam. Provident, dignissimos tempore maiores id, deserunt qui labore veritatis in magnam inventore ducimus laborum repudiandae pariatur. Et est dolorem eius necessitatibus dignissimos magnam, nam, earum eligendi inventore doloribus explicabo itaque molestias repellendus veniam aut delectus reiciendis fugiat doloremque voluptate illo dolores provident nemo suscipit consectetur. Eum iste neque voluptas fugit, assumenda ipsam officiis repellat facilis reprehenderit. Accusantium sequi autem, dolores culpa numquam dolore odio dignissimos atque aliquid nesciunt facere?</div>
      </div>
    </div>
    <div class="col-md-5 col-sm-12 p-3" style="position: relative;">
      <div style="position: sticky; top: 5.5rem;">
        <div class="card p-3" style="width:80%">
          <h4 class="">Queries?</h4>
          <form>
            @guest
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputFname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputLname" placeholder="Last Name">
                </div>
                <div class="form-group col-md-12">
                  <input type="tel" class="form-control" id="inputphone" placeholder="Phone Number">
                </div>
              </div>
            @endguest
            @auth
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
              </div>
            @endauth
            <div class="form-group">
              <h6>Choose service</h6>
              <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="Radio" id="Radio1"/>
                <label class="form-check-label" for="Radio1"> Schedule Tour </label>
              </div>
              <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="Radio" id="Radio2"/>
                <label class="form-check-label" for="Radio2"> Confirm Availability</label>
              </div>
              <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="Radio" id="Radio3"/>
                <label class="form-check-label" for="Radio3"> Request Additional Info on House </label>
              </div>
              <div class="form-check mx-3">
                <input class="form-check-input" type="radio" name="Radio" id="Radio4"/>
                <label class="form-check-label" for="Radio4"> Report Inconsistencies </label>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Talk to us... (optional)" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>            

            <button type="submit" class="btn btn-green btn-block">Send Message</button>
          </form>
        </div>
      </div>      
    </div>
  </div>
</div>





<script>


$('.carousel').carousel({
  interval: 1000;
});
</script>
@endsection
