<nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png"
             data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">

        <div class="sidebar-header-controls">
            <button type="button" class="btn m-l-60 btn-link visible-lg-inline" data-toggle-pin="sidebar"><i
                        class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-menu m-t-10">
        <ul class="menu-items">
            <li>
                <a href="javascript:;">
                    <span class="title">Season</span>
                    <span class=" arrow"></span>
                </a>
                <span class=" icon-thumbnail">SE</span>
                <ul class="sub-menu">
                    <li class="">
                        <div class="row">
                            <div class="radio radio-info">
                                <input type="radio" checked="checked" value="yes" name="radio4" id="spring">
                                <label for="spring">Spring</label><br>
                                <input type="radio" value="no" name="radio4" id="summer">
                                <label for="summer">Summer</label><br>
                                <input type="radio" value="no" name="radio4" id="autumn">
                                <label for="autumn">Autumn</label><br>
                                <input type="radio" value="no" name="radio4" id="winter">
                                <label for="winter">Winter</label>
                            </div>

                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Radius</span>
                    <span class=" arrow"></span>
                </a>
                <span class=" icon-thumbnail">RA</span>
                <ul class="sub-menu">
                    <li class="">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="noUiSlider" class="bg-master"></div>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">Tags</span>
                    <span class=" arrow"></span>
                </a>
                <span class="icon-thumbnail">App</span>
                <ul class="sub-menu">
                    <li class="">
                        <div class="row">
                    <li>
                        <input class="js-tags" style="width:150px"/>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <span class="title">From</span>
                    <span class=" arrow"></span>
                </a>
                <span class=" icon-thumbnail">FR</span>
                <ul class="sub-menu">
                    <li class="">
                        <div class="row">
                    <li>
                    <div class="checkbox check-success  ">
                        <input type="checkbox"   id="instagram_check">
                        <label for="instagram_check">Instagram</label>
                    </div>
                    <div class="checkbox check-danger  ">
                        <input type="checkbox"  id="flickr">
                        <label for="flickr">Flickr</label>
                    </div>
                </ul>
            </li>
            <li>
                <div>
                    <button style="margin-top:15px; margin-left:15px" class="btn btn-default" id="search_photos">Submit</button>
                </div>
            </li>
            <li >
                <div style="margin-top:15px; margin-left:15px" class="btn-group" role="group" >
                    <button class="btn btn-default" id="save_state" onload="toLoadOrNotToLoad" >Save</button>
                    <button class="btn btn-default" id="restore_state">Restore</button>
                    <button class="btn btn-default" id="clear_state">Clear</button>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>
