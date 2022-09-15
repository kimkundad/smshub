<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>404 | Basik - Bootstrap 4 Web Application</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css assets/css/site.min.css -->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/assets/css/theme.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}" type="text/css" />
        <!-- endbuild -->
    </head>
    <body class="layout-row">
       
    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="mb-5">
                                <div class="toolbar ">
                                    
                                    <form class="flex">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-theme form-control-sm search" placeholder="Search" required>
                                            <span class="input-group-append">
                <button class="btn btn-white no-border btn-sm" type="button">
                  <span class="d-flex text-muted"><i data-feather="search"></i></span>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>




                                <div class="table-responsive">
                                    <table class="table table-theme table-row v-middle">
                                        <thead>
                                            <tr>
                                                <th class="text-muted">ธนาคาร</th>
                                                <th class="text-muted sortable" data-toggle-class="asc">รายละเอียด</th>
                                                <th class="text-muted"><span class="d-none d-sm-block">ยอดเงิน</span></th>
                                                <th class="text-muted"><span class="d-none d-sm-block">เหลือ</span></th>
                                                <th class="text-muted"><span class="d-none d-sm-block">วันที่โอน</span></th>
                                                <th style="width:50px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if($ex)
                                        @foreach($ex as $u)
                                            <tr class=" v-middle" data-id="9">
                                                <td>{{ $u->subject }}</td>
                                                <td class="flex">
                                                    <div class="item-except text-muted text-sm h-1x">
                                                        {{ $u->message }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="item-amount d-none d-sm-block text-sm ">{{ number_format($u->amount,2) }}</span>
                                                </td>
                                                <td>
                                                <span class="item-amount d-none d-sm-block text-sm ">{{ number_format($u->tatal,2) }}</span>
                                                </td>
                                                <td>
                                                    <span class="item-amount d-none d-sm-block text-sm [object Object]"> {{ $u->send_date }}</span>
                                                </td>
                                                <td>
                                                    <div class="item-action dropdown">
                                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                                            <i data-feather="more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                    
                                                            <a class="dropdown-item trash">
                                                                Delete item
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                          
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex">
                                     {{ $ex->links() }}
                                    <small class="text-muted py-2 mx-2">ทั้งหมด <span id="count">{{ count($ex) }}</span> รายการ</small>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
      
        <!-- jQuery -->
        <script src="{{ url('/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ url('libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ url('/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- ajax page -->
        <script src="{{ url('/libs/pjax/pjax.min.js') }}"></script>
        <script src="{{ url('/assets/js/ajax.js') }}"></script>
        <!-- lazyload plugin -->
        <script src="{{ url('/assets/js/lazyload.config.js') }}"></script>
        <script src="{{ url('/assets/js/lazyload.js') }}"></script>
        <script src="{{ url('/assets/js/plugin.js') }}"></script>
        <!-- scrollreveal -->
        <script src="{{ url('/libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
        <!-- feathericon -->
        <script src="{{ url('/libs/feather-icons/dist/feather.min.js') }}"></script>
        <script src="{{ url('/assets/js/plugins/feathericon.js') }}"></script>
        <!-- theme -->
        <script src="{{ url('/assets/js/theme.js') }}"></script>
        <script src="{{ url('/assets/js/utils.js') }}"></script>
        <!-- endbuild -->
    </body>
</html>