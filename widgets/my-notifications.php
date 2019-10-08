<div class="tab-pane active show" id="m_widget2_tab2_content">
    <!--Begin::Timeline 3 -->
    <div class="m-timeline-3">
        <div class="m-timeline-3__items">
            <?php
            $count = 1;
            foreach($myNotifications as $notification){
                $position = $count % 4;
                if ($position == 1){
            ?>
            <div class="m-timeline-3__item m-timeline-3__item--info">
                <span class="m-timeline-3__item-time m--font-focus"><?php echo $notification['time'] ?></span> 
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
                } else if ($position == 2) {
            ?>
            <div class="m-timeline-3__item m-timeline-3__item--warning">
                <span class="m-timeline-3__item-time m--font-warning"><?php echo $notification['time'] ?></span> 
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
                <span class="m-timeline-3__item-time m--font-primary"><?php echo $notification['time'] ?></span> 
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
                <span class="m-timeline-3__item-time m--font-success"><?php echo $notification['time'] ?></span> 
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