<div class="bgPrimary">
    <div class="col-xl-10 mx-auto col-12">
        <div class="row m-0 p-4 text-light">
            <div class="col-11 col-xl-3 text-center text-xl-start">
                <div class="semiBoldText text-uppercase">
                    <i class="bi bi-info-square me-2"></i>
                    About Vromon
                </div>
                <div class="ps-1 pt-2">
                    <?php
                        $aboutLinks = ['About us', 'Press', 'Resources', 'Policies', 'Career', 'Content Integrity'];
                    ?>
                    @foreach ($aboutLinks as $item)
                    <div class="my-1 p-0">
                        <a href="#" class="text-light ms-4">{{$item}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-11 col-xl-3 text-center text-xl-start mt-4 mt-xl-0">
                <div class="semiBoldText text-uppercase">
                    <i class="bi bi-box-arrow-in-up-right me-2"></i>
                    Explore
                </div>
                <div class="ps-1 pt-2">
                    <?php
                        $exploreLinks = ['Write a Review', 'Join Forum', 'User\'s Choice', 'Insurance', 'Help Center', 'Join Premium Lounge'];
                    ?>
                    @foreach ($exploreLinks as $item)
                    <div class="my-1 p-0">
                        <a href="#" class="text-light ms-4">{{$item}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-11 col-xl-3 text-center text-xl-start mt-4 mt-xl-0">
                <div class="semiBoldText text-uppercase">
                    <i class="bi bi-briefcase me-2"></i>
                    Make a Deal
                </div>
                <div class="ps-1 pt-2">
                    <?php
                        $exploreLinks = ['Founders', 'Our Team', 'Business Advantage', 'Advertisements', 'Sponsorship'];
                    ?>
                    @foreach ($exploreLinks as $item)
                    <div class="my-1 p-0">
                        <a href="#" class="text-light ms-4">{{$item}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-11 col-xl-3 text-center text-xl-start mt-4 mt-xl-0">
                <div class="semiBoldText text-uppercase">
                    <i class="bi bi-tablet me-2"></i>
                    Get the App
                </div>
                <div class="ps-1 pt-2">
                    <?php
                        $exploreLinks = ['Google Play Store', 'App Store'];
                    ?>
                    @foreach ($exploreLinks as $item)
                    <div class="my-1 p-0">
                        <a href="#" class="text-light ms-4">{{$item}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="py-2 border-top mediumText text-light text-center">
            <a href="#" class="text-light mx-3">Terms of Service</a>
            <a href="#" class="text-light mx-3">Sitemap</a>
            <span class="mx-3">2021 © All Rigts Reserved</span>
        </div>
    </div>  
</div>