<!--begin: Datatable -->
<div class="m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--loaded" id="auto_column_hide" style="">
    <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
        <thead class="m-datatable__head">
            <tr class="m-datatable__row" style="left: 0px;">
                <th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Username</span></th>
                <th data-field="ShipCountry" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Full Name</span></th>
                <th data-field="ShipCity" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Email</span></th>
                <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Role</span></th>
                <th data-field="Longitude" class="m-datatable__cell m-datatable__cell--sort""><span style="width: 110px;">Last Login</span></th>
                <th data-field="Notes" class="m-datatable__cell m-datatable__cell--sort" ><span style="width: 150px;">Last Action</span></th>
                <th data-field="Type" class="m-datatable__cell m-datatable__cell--sort" style=""><span style="width: 110px;">Profile</span></th>
            </tr>
        </thead>
        <tbody class="m-datatable__body" style="">
            <?php
            $count = 1;
            foreach ($allEmployees as $employee) {
                $position = $count % 2;
                if ($position == 1){
                ?>
                <tr data-row="0" class="m-datatable__row" style="left: 0px;">
                    <td data-field="OrderID" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['username']; ?></span></td>
                    <td data-field="ShipCountry" class="m-datatable__cell"><span style="width: 150px;"><?php echo $employee['name']; ?></span></td>
                    <td data-field="ShipCity" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['corporate_email']; ?></span></td>
                    <td data-field="Latitude" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['role']; ?></span></td>
                    <td data-field="Longitude" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['last_login']; ?></span></td>
                    <td data-field="Notes" class="m-datatable__cell"><span style="width: 150px;"><?php echo $employee['last_action']; ?></span></td>
                    <td data-field="Type" class="m-datatable__cell">
                        <span style="width: 110px;">
                            <a href="profile?username=<?php echo $employee['username']; ?>">View Profile</a>
                        </span>
                    </td>
                </tr>
                <?php
                } else {
                ?>
                <tr data-row="0" class="m-datatable__row m-datatable__row--even" style="left: 0px;">
                    <td data-field="OrderID" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['username']; ?></span></td>
                    <td data-field="ShipCountry" class="m-datatable__cell"><span style="width: 150px;"><?php echo $employee['name']; ?></span></td>
                    <td data-field="ShipCity" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['corporate_email']; ?></span></td>
                    <td data-field="Latitude" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['role']; ?></span></td>
                    <td data-field="Longitude" class="m-datatable__cell"><span style="width: 110px;"><?php echo $employee['last_login']; ?></span></td>
                    <td data-field="Notes" class="m-datatable__cell"><span style="width: 150px;"><?php echo $employee['last_action']; ?></span></td>
                    <td data-field="Type" class="m-datatable__cell">
                        <span style="width: 110px;">
                            <a href="profile?username=<?php echo $employee['username']; ?>">View Profile</a>
                        </span>
                    </td>
                </tr>
                <?php
                }
                $count++;
            }
            ?>            
        </tbody>
    </table>
    <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
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
    </div>
</div>
<!--end: Datatable -->