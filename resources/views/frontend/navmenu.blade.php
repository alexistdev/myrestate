@if(!empty($settingProduk))
@foreach($settingProduk as $row)
<header id="header" class="header-transparent-dark-bottom-border" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
    <div class="header-body bg-color-primary border-color-dark border-top-0">
        <div class="header-top header-top-borders header-top-light-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">

                                <ul class="nav nav-pills">


                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="pl-0"><i class="far fa-dot-circle text-4 text-color-light" style="top: 1px;"></i> {{$row->alamat}}</span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-light" style="top: 0;"></i> {{$row->notelp}}</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                        <a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-light" style="top: 1px;"></i> {{$row->email}}</a>
                                    </li>

                                    <!-- Jika kosong maka tidak akan ditampilkan data setting -->

                                </ul>

                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                        <a href="#">Blog</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 pr-0 dropdown">
                                        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('porto/img/blank.gif')}}" class="flag flag-us" alt="English" /> English
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="#"><img src="{{ asset('porto/img/blank.gif')}}" class="flag flag-us" alt="English" /> English</a>
                                            <a class="dropdown-item" href="#"><img src="{{ asset('porto/img/blank.gif')}}" class="flag flag-es" alt="English" /> Español</a>
                                            <a class="dropdown-item" href="#"><img src="{{ asset('porto/img/blank.gif')}}" class="flag flag-fr" alt="English" /> Française</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container header-container-height-sm container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="Porto" width="143" height="40" src="{{ asset('gambar/'.$row->logo)}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe header-nav-force-light-text header-nav-dropdowns-dark header-nav-no-space-dropdown order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="<?= ($nav == 'home') ? 'nav-link active' : 'nav-link'; ?>" href="{{ url('/')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="<?= ($nav == 'propertis') ? 'nav-link active' : 'nav-link'; ?>" href="{{ url('/propertis')}}">
                                                Properties
                                            </a>
                                        </li>

                                        <li class="dropdown dropdown-full-color dropdown-quaternary">
                                            <a class="<?= ($nav == 'about') ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle'; ?>" href="demo-real-estate-who-we-are.html">
                                                About
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('/agen')}}">Agents</a></li>
                                                <li><a class="dropdown-item" href="demo-real-estate-who-we-are.html">Who We Are</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="nav-link" href="demo-real-estate-contact.html">
                                                Contact
                                            </a>
                                        </li>
                                        @if(Auth::check())
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="<?= ($nav == 'beranda') ? 'nav-link active' : 'nav-link'; ?>" href="{{ url('/beranda') }}">
                                                Member Area
                                            </a>
                                        </li>
                                        @else
                                        <li class="dropdown-full-color dropdown-quaternary">
                                            <a class="<?= ($nav == 'login') ? 'nav-link active' : 'nav-link'; ?>" href="{{ url('/login') }}">
                                                Login
                                            </a>
                                        </li>
                                        @endif
                                        <li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega" id="headerSearchProperties">
                                            <a class="nav-link dropdown-toggle" href="#">
                                                Search <i class="fas fa-search ml-2"></i>
                                            </a>
                                            <ul class="dropdown-menu custom-fullwidth-dropdown-menu ml-0">
                                                <li>
                                                    <div class="dropdown-mega-content mt-3 mt-lg-0">
                                                        <form id="propertiesFormHeader" action="demo-real-estate-properties.html" method="POST">
                                                            <div class="container p-0">
                                                                <div class="form-row">
                                                                    <div class="form-group col-lg-2 mb-2 mb-lg-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesPropertyType" data-msg-required="This field is required." id="propertiesPropertyType" required="">
                                                                                <option value="">Property Type</option>
                                                                                <option value="1">Apartment</option>
                                                                                <option value="2">House</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-2 mb-lg-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesLocation" data-msg-required="This field is required." id="propertiesLocation" required="">
                                                                                <option value="">Location</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-2 mb-lg-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesMinBeds" data-msg-required="This field is required." id="propertiesMinBeds" required="">
                                                                                <option value="">Min Beds</option>
                                                                                <option value="1">1</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-2 mb-lg-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesMinPrice" data-msg-required="This field is required." id="propertiesMinPrice" required="">
                                                                                <option value="">Min Price</option>
                                                                                <option value="150000">$150,000</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-2 mb-lg-0">
                                                                        <div class="form-control-custom">
                                                                            <select class="form-control text-uppercase text-2" name="propertiesMaxPrice" data-msg-required="This field is required." id="propertiesMaxPrice" required="">
                                                                                <option value="">Max Price</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-lg-2 mb-2 mb-lg-0">
                                                                        <input type="submit" value="Search Now" class="btn btn-secondary btn-lg btn-block text-uppercase text-2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endforeach
@else
@endif