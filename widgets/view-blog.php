<!-- begin: Datatable -->
<div class="m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--loaded" id="auto_column_hide" style="">
    <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
        
        <tbody class="m-datatable__body" style="">
            <?php
            $count = 1;
            foreach ($allPosts as $post) {
                $allBlogPosts = $blog->getAllBlogPosts($post['blog_id']);
                $position = $count % 2;
                $date = new DateTime($post['timestamp']);
                $timestamp = $date->format('jS M Y');
                $content = strip_tags($post['content']);
                list($firstword, $withoutfirstword) = explode(' ', $post['content'], 2);
            
                
                if ($position == 1){
            ?>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-blog-post-margin-b tm-blog-post-box-container">
                    <div class="tm-blog-post-box">
                        <img src="img/img-21-04.jpg" alt="Image" class="img-fluid">
                        <div class="tm-blog-post-text-box-outer">
                            <div class="tm-blog-post-text-box">
                                <h2 class="tm-blog-post-title"><?php echo $post['title']; ?></h2>
                                <p class="tm-blog-post-description" style="font-size: 15px;">
                                        <span class="" style="font-size:2.5em"><?php echo $content[0]; ?></span><?php echo trim( implode(' ', array_slice(explode(' ', $content), 0, 50)), $content[0]); ?></p>  
                                        <a href="post.php" id=link1 class="tm-blog-post-link">Read More...</a>`                       
                            </div>
                        </div>                                                
                    </div>
                </div>
                             
                
            <?php
                } else {
            ?>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-blog-post-margin-b tm-blog-post-box-container">
                    <div class="tm-blog-post-box">
                        <img src="img/img-21-04.jpg" alt="Image" class="img-fluid">
                        <div class="tm-blog-post-text-box-outer">
                            <div class="tm-blog-post-text-box">
                                <h2 class="tm-blog-post-title"><?php echo $post['title']; ?></h2>
                                <p class="tm-blog-post-description" style="font-size: 15px;">
                                        <span class="" style="font-size:2.5em"><?php echo $content[0]; ?></span><?php echo trim( implode(' ', array_slice(explode(' ', $content), 0, 50)), $content[0]); ?></p>  

                                        <a href="post.php" id=link2 class="tm-blog-post-link">Read More...</a>`                       
                            </div>
                        </div>                                                
                    </div>
                </div>               
            <?php
                }
                $count++;
            }
            ?>
        </tbody>
    </table>
    <!-- <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
        <ul class="m-datatable__pager-nav">
            <li><a title="First" class="m-datatable__pager-link m-datatable__pager-link--first m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-double-left"></i></a></li>
            <li><a title="Previous" class="m-datatable__pager-link m-datatable__pager-link--prev m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-left"></i></a></li>
            <li style="display: none;"><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-prev" data-page="1"><i class="la la-ellipsis-h"></i></a></li>
            <li style="display: none;">
                <input type="text" class="m-pager-input form-control" title="Page number">
            </li>
            <li><a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--active" data-page="1" title="1">1</a></li>
            <li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="2" title="2">2</a></li>
            <li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="3" title="3">3</a></li>
            <li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="4" title="4">4</a></li>
            <li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="5" title="5">5</a></li>
            <li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="6" title="6">6</a></li>
            <li><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-next" data-page="7"><i class="la la-ellipsis-h"></i></a></li>
            <li><a title="Next" class="m-datatable__pager-link m-datatable__pager-link--next" data-page="2"><i class="la la-angle-right"></i></a></li>
            <li><a title="Last" class="m-datatable__pager-link m-datatable__pager-link--last" data-page="35"><i class="la la-angle-double-right"></i></a></li>
        </ul>
        <div class="m-datatable__pager-info">
            <div class="btn-group bootstrap-select m-datatable__pager-size" style="width: 70px;">
                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Select page size"><span class="filter-option pull-left">10</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                </button>
                <div class="dropdown-menu open" role="combobox">
                    <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                        <li data-original-index="1" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">10</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                        <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">20</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                        <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">30</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                        <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">50</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                        <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">100</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                    </ul>
                </div>
                <select class="selectpicker m-datatable__pager-size" title="Select page size" data-width="70px" data-selected="10" tabindex="-98">
                    <option class="bs-title-option" value="">Select page size</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div><span class="m-datatable__pager-detail">Displaying 1 - 10 of 100 posts</span></div>
    </div> -->
</div>
<!--end: Datatable 