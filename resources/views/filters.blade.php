<nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu"></div>

    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
        <span style="font-size: 24px;color: #FFF;font-weight:700">Rota-ON</span></span>
        <div class="sidebar-header-controls">
            <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
        <div class="row">
            asasd
        </div>
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        {{--<ul class="menu-items">--}}
            {{--@foreach ($config_menu as $index => $menu)--}}
                {{--<li class="@if($index == 0) m-t-30 @endif @if(isset($menu['active']) && $menu['active']) active @endif">--}}
                    {{--<a href="@if (isset($menu['submenus']) && count($menu['submenus']) > 0)javascript:;@else/{{$menu['url']}}@endif">--}}
                        {{--<span class="title">{!!  $menu['name'] !!} </span>--}}
                        {{--@if (isset($menu['submenus']) && count($menu['submenus']) > 0)--}}
                            {{--<span class=" arrow"></span>--}}
                        {{--@endif--}}
                    {{--</a>--}}
                    {{--<span class="icon-thumbnail "><i class="{{ $menu['class'] }}"></i></span>--}}

                    {{--@if (isset($menu['submenus']) && count($menu['submenus']) > 0)--}}
                        {{--<ul class="sub-menu">--}}
                            {{--@foreach($menu['submenus'] as $menu_item)--}}
                                {{--<li class="@if (isset($menu_item['active']) && $menu_item['active']) active @endif">--}}
                                    {{--<a href="/{{ $menu_item['url'] }}">@if (isset($menu_item['active']) && $menu_item['active'])<i class="fa fa-chevron-right fs-12"></i>&nbsp;&nbsp;@endif{!! $menu_item['name'] !!}</a>--}}
                                    {{--<span class="icon-thumbnail">{{ $menu_item['thumbnail'] }}</span>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--@endif--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</nav>