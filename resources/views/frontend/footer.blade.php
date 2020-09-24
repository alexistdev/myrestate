@if(!empty($settingProduk))
@foreach($settingProduk as $row)
<footer id="footer" class="m-0 custom-bg-color-1 py-4">
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-md-4 col-lg-3">
                <h4 class="mb-3">Porto Real Estate</h4>
                <p class="custom-color-2 mb-0">
                    {{$row->alamat}}<br>

                    Phone : {{$row->notelp}}<br>
                    Email : <a class="text-color-secondary" href="mailto:{{$row->email}}">{{$row->email}}</a>
                </p>
            </div>
            <div class="col-md-2">
                <h4 class="mb-3">Properties</h4>
                <nav class="nav-footer">
                    <ul class="custom-list-style-1 mb-0">
                        <li>
                            <a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
                                For Sale
                            </a>
                        </li>
                        <li>
                            <a href="demo-real-estate-properties.html" class="custom-color-2 text-decoration-none">
                                For Rent
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2">
                <h4 class="mb-3">Links</h4>
                <nav class="nav-footer">
                    <ul class="custom-list-style-1 mb-0">
                        <li>
                            <a href="demo-real-estate-agents.html" class="custom-color-2 text-decoration-none">
                                Agents
                            </a>
                        </li>
                        <li>
                            <a href="demo-real-estate-who-we-are.html" class="custom-color-2 text-decoration-none">
                                Who We Are
                            </a>
                        </li>
                        <li>
                            <a href="demo-real-estate-contact.html" class="custom-color-2 text-decoration-none">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4 col-lg-5">
                <h4 class="mb-3">Latest Tweet</h4>
                <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 1}">
                    <p>Please wait...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright custom-bg-color-1 pb-0">
        <div class="container">
            <div class="row pt-3 pb-4">
                <div class="col-lg-12 left m-0 pb-3">
                    <p>© Copyright 2020 . All Rights Reserved (develop by www.kedaiprogramming.com)</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endforeach
@else
@endif