<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{{asset('backend/global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">
                            {{Auth::user()->name}}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;{{Auth::user()->email}}
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            <a href="{{route('admin.dashboard')}}">Dashboard</a>
                        </span>
                    </a>
                </li>
                <!-- Forms -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">User Management</div> <i class="icon-menu" title="Forms"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>User Management</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{route('roles.index')}}" class="nav-link">Roles</a></li>
                        <li class="nav-item"><a href="{{route('roles.create')}}" class="nav-link">create</a></li>
                        <li class="nav-item"><a href="form_select2.html" class="nav-link">Select2 selects</a></li>
                        <li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap multiselect</a></li>
                        <li class="nav-item"><a href="form_input_groups.html" class="nav-link">Input groups</a></li>
                        <li class="nav-item"><a href="form_controls_extended.html" class="nav-link">Extended controls</a></li>
                        <li class="nav-item"><a href="form_floating_labels.html" class="nav-link">Floating labels</a></li>
                        <li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a></li>
                        <li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual Listboxes</a></li>
                        <li class="nav-item"><a href="form_validation.html" class="nav-link">Validation</a></li>
                        <li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>
                        <li class="nav-item"><a href="form_actions.html" class="nav-link">Form actions</a></li>
                        <li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-file-css"></i> <span>Roles</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="JSON forms">
                        <li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Permission</a></li>
                        <li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Advanced inputs</a></li>
                        <li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Controls</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Text editors</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Text editors">
                        <li class="nav-item"><a href="editor_summernote.html" class="nav-link">Summernote editor</a></li>
                        <li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">CKEditor</a></li>
                        <li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Trumbowyg editor</a></li>
                        <li class="nav-item"><a href="editor_code.html" class="nav-link">Code editor</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                        <li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
                        <li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
                        <li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                        <li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
                        <li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
                        <li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <!-- /forms -->

 
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>