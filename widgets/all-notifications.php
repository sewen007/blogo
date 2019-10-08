<div class="tab-pane" id="m_widget2_tab1_content">
    <!--Begin::Timeline 3 -->
    <div class="m-timeline-3">
        <div class="m-timeline-3__items">
            
            <?php
            $count = 1;
            foreach ($allNotifications as $notification) {
                $position = $count % 4;
                if ($position == 1){
                ?>
            <div class="m-timeline-3__item m-timeline-3__item--info">
                <span class="m-timeline-3__item-time"><?php echo $notification['time'] ?></span> 
                <div class="m-timeline-3__item-desc">							 
                    <span class="m-timeline-3__item-text">
                        <?php echo $notification['message'] ?>
                    </span><br>
                    <span class="m-timeline-3__item-user-name">
                        <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                            <?php echo $notification['day'] ?>
                        </a>
                    </span>		 
                </div>
            </div>
                <?php
                } else if ($position == 2){
                ?>
            <div class="m-timeline-3__item m-timeline-3__item--warning">
                <span class="m-timeline-3__item-time"><?php echo $notification['time'] ?></span> 
                <div class="m-timeline-3__item-desc">							
                    <span class="m-timeline-3__item-text">
                        <?php echo $notification['message'] ?>
                    </span><br>
                    <span class="m-timeline-3__item-user-name">
                        <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                            <?php echo $notification['day'] ?>
                        </a>	
                    </span>		 
                </div>
            </div>
                <?php    
                } else if ($position == 3){
                ?>
            <div class="m-timeline-3__item m-timeline-3__item--brand">
                <span class="m-timeline-3__item-time"><?php echo $notification['time'] ?></span> 
                <div class="m-timeline-3__item-desc">							
                    <span class="m-timeline-3__item-text">
                        <?php echo $notification['message'] ?>
                    </span><br>
                    <span class="m-timeline-3__item-user-name">
                        <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                            <?php echo $notification['day'] ?>
                        </a>	
                    </span>		 
                </div>
            </div>
                <?php    
                } else {
                ?>
            <div class="m-timeline-3__item m-timeline-3__item--success">
                <span class="m-timeline-3__item-time"><?php echo $notification['time'] ?></span> 
                <div class="m-timeline-3__item-desc">							
                    <span class="m-timeline-3__item-text">
                        <?php echo $notification['message'] ?>
                    </span><br>
                    <span class="m-timeline-3__item-user-name">
                        <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                            <?php echo $notification['day'] ?>
                        </a>	
                    </span>		 
                </div>
            </div>
                <?php    
                }
                
                $count++;
            }
            ?>
        </div>
    </div>
    <!--End::Timeline 3 -->
</div>