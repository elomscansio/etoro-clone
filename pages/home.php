<et-home [chat-web-site-touch-point]="$resolve.chatWebSiteTouchPoint" [ab-tests-results]="$resolve.abTestsResults"
    [last-year-chart-data]="$resolve.lastYearChartData" [onboarding-stage]="$resolve.onboardingStage"
    class="ng-scope ng-tns-c705146729-3" _nghost-ng-c705146729="" ng-version="16.2.12">
    <div _ngcontent-ng-c705146729="" etuilayoutpagescroll=""
        class="home-page-wrapper ng-tns-c705146729-3 et-layout-scrollable-page vertical-scroll">
        <et-instruments-ticker _ngcontent-ng-c705146729="" _nghost-ng-c205708944=""
            class="ng-tns-c205708944-4 ng-tns-c705146729-3 ng-star-inserted">
            <!---->
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [{
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500 Index"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "US 100 Cash CFD"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR to USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "Bitcoin"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "Ethereum"
                            }
                        ],
                        "showSymbolLogo": true,
                        "isTransparent": false,
                        "displayMode": "adaptive",
                        "colorTheme": "light",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
            <!---->
        </et-instruments-ticker>
        <!---->
        <div _ngcontent-ng-c705146729="" class="home-page-container et-flex-column rtl-responsive ng-tns-c705146729-3">
            <et-home-initial-group _ngcontent-ng-c705146729="" _nghost-ng-c1642961350=""
                class="ng-tns-c705146729-3 ng-star-inserted">
                <section _ngcontent-ng-c1642961350="" class="initial-group et-flex-column">
                    <et-onboarding-card _ngcontent-ng-c1642961350="" _nghost-ng-c210447535="" class="ng-star-inserted"
                        style="order: 0">
                        <div _ngcontent-ng-c210447535="" automation-id="onboarding-card" class="ng-star-inserted">
                            <div _ngcontent-ng-c210447535="" data-intercom-target="intercom-complete-profile"
                                class="progress verify-identity-container verify-image"
                                automation-id="verify-onboarding-card">
                                <div _ngcontent-ng-c210447535="" class="info-container">
                                    <et-onboarding-stages-progress _ngcontent-ng-c210447535="" _nghost-ng-c737651349="">
                                        <div _ngcontent-ng-c737651349="" class="stages-progress">
                                            <div _ngcontent-ng-c737651349="" class="stage-container ng-star-inserted">
                                                <div _ngcontent-ng-c737651349=""
                                                    automation-id="onboarding-create-account-step"
                                                    class="create-account completed">
                                                    <div _ngcontent-ng-c737651349="" class="stage-text">
                                                        Create Account
                                                    </div>
                                                    <div _ngcontent-ng-c737651349="" class="stage-icon completed">
                                                    </div>
                                                </div>
                                                <hr _ngcontent-ng-c737651349=""
                                                    class="stage-divider ng-star-inserted" />
                                                <!---->
                                            </div>
                                            <div _ngcontent-ng-c737651349="" class="stage-container ng-star-inserted">
                                                <div _ngcontent-ng-c737651349="" automation-id="onboarding-verify-step"
                                                    class="verify-identity progress">
                                                    <div _ngcontent-ng-c737651349="" class="stage-text">
                                                        Verify
                                                    </div>
                                                    <div _ngcontent-ng-c737651349="" class="stage-icon progress">
                                                        2
                                                    </div>
                                                </div>
                                                <hr _ngcontent-ng-c737651349=""
                                                    class="stage-divider ng-star-inserted" />
                                                <!---->
                                            </div>
                                            <div _ngcontent-ng-c737651349="" class="stage-container ng-star-inserted">
                                                <div _ngcontent-ng-c737651349="" automation-id="onboarding-deposit-step"
                                                    class="deposit-funds">
                                                    <div _ngcontent-ng-c737651349="" class="stage-text">
                                                        Deposit
                                                    </div>
                                                    <div _ngcontent-ng-c737651349="" class="stage-icon">
                                                        3
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                            <!---->
                                        </div>
                                    </et-onboarding-stages-progress>
                                    <div _ngcontent-ng-c210447535="" class="verify-texts-container">
                                        <div _ngcontent-ng-c210447535="" automation-id="onboarding-welcome-title"
                                            class="verify-title ets-title-main">
                                            Hi there, is it really you?
                                        </div>
                                        <div _ngcontent-ng-c210447535="" automation-id="onboarding-sub-title"
                                            class="verify-description ets-plain-text">
                                            Verifying your identity helps us
                                            prevent someone else from creating
                                            an account in your name.
                                        </div>
                                    </div>
                                    <button _ngcontent-ng-c210447535="" type="button"
                                        automation-id="onboarding-call-to-action-button"
                                        class="ets-button-basic ets-button-small ets-button-primary verify-button">
                                        Verify Your Account
                                    </button>
                                </div>
                                <div _ngcontent-ng-c210447535="" class="image">
                                </div>
                                <div _ngcontent-ng-c210447535="" class="video-container ng-star-inserted">
                                    <div _ngcontent-ng-c210447535="" class="video-preview-wrapper">
                                        <img _ngcontent-ng-c210447535="" loading="lazy" class="video-preview"
                                            src="/assets/etoro-cdn.etorostatic.com/web-client/img/verify-identity/verify/verify-promo-preview-en.png"
                                            style="opacity: 1" /><span _ngcontent-ng-c210447535=""
                                            class="video-play-icon"></span>
                                    </div>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <!---->
                    </et-onboarding-card>
                    <!---->
                    <!---->
                </section>
            </et-home-initial-group>
            <!---->
            <main _ngcontent-ng-c705146729="" class="et-flex-column ng-tns-c705146729-3 ng-star-inserted">
                <!---->
                <!---->
                <!---->
                <div _ngcontent-ng-c705146729="" class="page-columns-container et-flex ng-tns-c705146729-3 sm:flex-col">
                    <section _ngcontent-ng-c705146729=""
                        class="feed-column-container et-flex-column ng-tns-c705146729-3  sm:w-full">
                        <et-home-above-feed-group _ngcontent-ng-c705146729="" _nghost-ng-c3296901248=""
                            class="ng-tns-c705146729-3 ng-star-inserted">
                            <section _ngcontent-ng-c3296901248="" class="above-feed-group et-flex-column">
                                <et-cms-marketing-cards _ngcontent-ng-c3296901248="" _nghost-ng-c1325810861=""
                                    class="ng-star-inserted" style="order: 0">
                                    <et-ui-swiper-wrapper _ngcontent-ng-c1325810861=""
                                        class="cms-card-swiper ng-star-inserted" _nghost-ng-c1487087480="">
                                        <div _ngcontent-ng-c1487087480="" class="sw-wrapper">
                                            <div _ngcontent-ng-c1487087480="" class="sw-nav ng-star-inserted">
                                                <header _ngcontent-ng-c1487087480="">
                                                    <div _ngcontent-ng-c1487087480="" class="sw-titles">
                                                        <div _ngcontent-ng-c1487087480=""
                                                            automation-id="swiper-header-title" class="sw-title">
                                                            <div _ngcontent-ng-c1487087480=""
                                                                automation-id="swiper-header-title"
                                                                class="sw-title ng-star-inserted">
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div _ngcontent-ng-c1487087480="" class="sw-subtitle-tooltip">
                                                            <div _ngcontent-ng-c1487087480=""
                                                                automation-id="swiper-header-title" class="sw-subtitle">
                                                                <div _ngcontent-ng-c1487087480=""
                                                                    automation-id="swiper-subtitle"
                                                                    class="sw-subtitle ng-star-inserted">
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div _ngcontent-ng-c1487087480="" class="sw-tooltip">
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-ng-c1487087480=""
                                                        class="et-navigation-buttons ng-star-inserted">
                                                        <!----><button _ngcontent-ng-c1487087480=""
                                                            automation-id="swiper-arrow-right"
                                                            class="et-icon-arrow-start ng-star-inserted button-disabled"></button>
                                                        <!----><button _ngcontent-ng-c1487087480=""
                                                            automation-id="swiper-arrow-left"
                                                            class="et-icon-arrow-end ng-star-inserted"></button>
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                </header>
                                                <!---->
                                            </div>
                                            <!---->
                                            <!---->
                                            <swiper _ngcontent-ng-c1487087480="">
                                                <div
                                                    class="s-wrapper swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-android">
                                                    <div class="swiper-wrapper" style="
                                                    transform: translate3d(
                                                      0px,
                                                      0px,
                                                      0px
                                                    );
                                                  ">
                                                        <div _ngcontent-ng-c1325810861=""
                                                            class="swiper-slide card-wrapper swiper-slide-active ng-star-inserted"
                                                            style="
                                                      width: 645px;
                                                      margin-right: 3px;
                                                    ">
                                                            <et-cms-marketing-card _ngcontent-ng-c1325810861=""
                                                                _nghost-ng-c917853289="">
                                                                <div _ngcontent-ng-c917853289=""
                                                                    automation-id="home-cms-card"
                                                                    class="cms-card-container rtl-responsive ng-star-inserted">
                                                                    <div _ngcontent-ng-c917853289=""
                                                                        class="cms-card-upper-section">
                                                                        <div _ngcontent-ng-c917853289=""
                                                                            class="close-container">
                                                                            <p _ngcontent-ng-c917853289=""
                                                                                automation-id="home-cms-card-title"
                                                                                class="ets-title-secondary ets-bold cms-card-header">
                                                                                Markets
                                                                                are
                                                                                shaking
                                                                            </p>
                                                                            <div _ngcontent-ng-c917853289=""
                                                                                automation-id="home-cms-card-close"
                                                                                class="close-button">
                                                                                <span _ngcontent-ng-c917853289=""
                                                                                    class="ets-icon-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p _ngcontent-ng-c917853289=""
                                                                            automation-id="home-cms-card-description"
                                                                            class="cms-card-text ets-info">
                                                                            But
                                                                            our
                                                                            analysts
                                                                            aren't.
                                                                            Watch
                                                                            how
                                                                            they're
                                                                            responding
                                                                            in
                                                                            the
                                                                            feed.
                                                                        </p>
                                                                    </div>
                                                                    <!---->
                                                                    <div _ngcontent-ng-c917853289=""
                                                                        automation-id="home-cms-card-desktop-cta-button"
                                                                        class="desktop-cta-btn ng-star-inserted">
                                                                        <a _ngcontent-ng-c917853289=""
                                                                            class="ets-link-sudo-button-mid ets-link-primary">
                                                                            Check
                                                                            It
                                                                            Out
                                                                            <i _ngcontent-ng-c917853289=""
                                                                                class="icon-arrow-right"></i></a>
                                                                    </div>
                                                                    <!----><img _ngcontent-ng-c917853289=""
                                                                        automation-id="home-cms-card-image"
                                                                        alt="CMS Card Image" loading="lazy"
                                                                        class="cms-card-image ng-star-inserted"
                                                                        src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/marketing-cards/analysts-x4.png" />
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                            </et-cms-marketing-card>
                                                        </div>
                                                        <div _ngcontent-ng-c1325810861=""
                                                            class="swiper-slide card-wrapper swiper-slide-next ng-star-inserted"
                                                            style="
                                                      width: 645px;
                                                      margin-right: 3px;
                                                    ">
                                                            <et-cms-marketing-card _ngcontent-ng-c1325810861=""
                                                                _nghost-ng-c917853289="">
                                                                <div _ngcontent-ng-c917853289=""
                                                                    automation-id="home-cms-card"
                                                                    class="cms-card-container rtl-responsive ng-star-inserted">
                                                                    <div _ngcontent-ng-c917853289=""
                                                                        class="cms-card-upper-section">
                                                                        <div _ngcontent-ng-c917853289=""
                                                                            class="close-container">
                                                                            <p _ngcontent-ng-c917853289=""
                                                                                automation-id="home-cms-card-title"
                                                                                class="ets-title-secondary ets-bold cms-card-header">
                                                                                Outperformers
                                                                                to
                                                                                Watch
                                                                            </p>
                                                                            <div _ngcontent-ng-c917853289=""
                                                                                automation-id="home-cms-card-close"
                                                                                class="close-button">
                                                                                <span _ngcontent-ng-c917853289=""
                                                                                    class="ets-icon-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p _ngcontent-ng-c917853289=""
                                                                            automation-id="home-cms-card-description"
                                                                            class="cms-card-text ets-info">
                                                                            These
                                                                            Popular
                                                                            Investors
                                                                            posted
                                                                            gains
                                                                            over
                                                                            the
                                                                            last
                                                                            three
                                                                            months
                                                                            even
                                                                            with
                                                                            markets
                                                                            down.
                                                                        </p>
                                                                    </div>
                                                                    <!---->
                                                                    <div _ngcontent-ng-c917853289=""
                                                                        automation-id="home-cms-card-desktop-cta-button"
                                                                        class="desktop-cta-btn ng-star-inserted">
                                                                        <a _ngcontent-ng-c917853289=""
                                                                            class="ets-link-sudo-button-mid ets-link-primary">
                                                                            Learn
                                                                            More
                                                                            <i _ngcontent-ng-c917853289=""
                                                                                class="icon-arrow-right"></i></a>
                                                                    </div>
                                                                    <!----><img _ngcontent-ng-c917853289=""
                                                                        automation-id="home-cms-card-image"
                                                                        alt="CMS Card Image" loading="lazy"
                                                                        class="cms-card-image ng-star-inserted"
                                                                        src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/marketing-cards/tough-market.png" />
                                                                    <!---->
                                                                </div>
                                                                <!---->
                                                            </et-cms-marketing-card>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                    <div class="swiper-scrollbar" hidden=""></div>
                                                    <div class="swiper-button-prev" hidden="" disabled="true"></div>
                                                    <div class="swiper-button-next" hidden=""></div>
                                                    <div class="swiper-pagination" hidden=""></div>
                                                    <span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                                </div>
                                            </swiper>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                    </et-ui-swiper-wrapper>
                                    <!---->
                                </et-cms-marketing-cards>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                            </section>
                        </et-home-above-feed-group>
                        <!---->
                        <!---->
                        <!---->
                        <div _ngcontent-ng-c705146729="" class="feed-top ng-tns-c705146729-3 ng-star-inserted">
                        </div>
                        <et-create-new-post _ngcontent-ng-c705146729="" _nghost-ng-c33949245=""
                            class="ng-tns-c705146729-3 ng-star-inserted">
                            <div _ngcontent-ng-c33949245="" automation-id="whats-on-your-mind-section"
                                class="post-item create-new-post ng-star-inserted">
                                <div _ngcontent-ng-c33949245="" class="new-post-section">
                                    <et-avatar _ngcontent-ng-c33949245="" _nghost-ng-c258238721=""><a
                                            _ngcontent-ng-c258238721="" class="avatar-ph ng-star-inserted"
                                            href="/assets/people/myUsername"><img _ngcontent-ng-c258238721=""
                                                loading="lazy" class="avatar"
                                                src="/assets/etoro-cdn.etorostatic.com/images/avatoros/150x150/ng.png"
                                                alt="myUsername" />
                                            <!---->
                                        </a>
                                        <!---->
                                    </et-avatar><button _ngcontent-ng-c33949245=""
                                        automation-id="whats-on-your-mind-button"
                                        class="placeholder-text ets-plain-text">
                                        What's on your mind?
                                    </button>
                                </div>
                                <div _ngcontent-ng-c33949245="" class="buttons-footer">
                                    <span _ngcontent-ng-c33949245="" class="button-container">
                                        <et-form-attachment-upload _ngcontent-ng-c33949245=""
                                            automation-id="attach-file-icon-button" _nghost-ng-c2933580802="">
                                            <div _ngcontent-ng-c2933580802=""
                                                class="form-attach-upload-wrap ets-icon-attach ets-icon-small">
                                                <input _ngcontent-ng-c2933580802="" automation-id="upload-image-icon"
                                                    accept="image/*" type="file" name="photo" value="" />
                                                <div _ngcontent-ng-c2933580802="">
                                                    <span _ngcontent-ng-c33949245=""
                                                        class="ets-info ets-plain-text button-text ets-neutral-90">Upload</span>
                                                </div>
                                            </div>
                                        </et-form-attachment-upload>
                                    </span><span _ngcontent-ng-c33949245="" automation-id="add-poll-button"
                                        class="button-container poll-button ng-star-inserted"><i
                                            _ngcontent-ng-c33949245="" class="ets-icon-polls ets-icon-small"></i><span
                                            _ngcontent-ng-c33949245=""
                                            class="ets-info ets-plain-text button-text ets-neutral-90">Poll</span></span>
                                    <!---->
                                </div>
                            </div>
                            <!---->
                        </et-create-new-post>
                        <div _ngcontent-ng-c705146729=""
                            class="desktop-select-placeholder ng-tns-c705146729-3 ng-star-inserted">
                            <div _ngcontent-ng-c705146729="" etstickyscroll=""
                                class="feed-types-selector-container rtl-responsive ng-tns-c705146729-3">
                                <div _ngcontent-ng-c705146729=""
                                    class="feed-select-wrapper ng-tns-c705146729-3 ng-star-inserted">
                                    <et-select _ngcontent-ng-c705146729=""
                                        automation-id="news-feed-btn-top-right-dropdown" isnewdropdownstyle="true"
                                        class="rtl-responsive ng-tns-c206250979-5 ng-tns-c705146729-3 ng-star-inserted"
                                        _nghost-ng-c206250979="">
                                        <div _ngcontent-ng-c206250979="" class="ng-tns-c206250979-5 new-dropdown-style">
                                            <et-select-header _ngcontent-ng-c705146729=""
                                                class="et-bolder ng-tns-c206250979-5" _nghost-ng-c3317408547="">
                                                <div _ngcontent-ng-c3317408547="" automation-id="select-header-text"
                                                    class="header-text">
                                                    <span _ngcontent-ng-c705146729="" class="et-font-l et-bolder">What
                                                        is happen on market</span>
                                                </div>
                                                <i _ngcontent-ng-c3317408547=""
                                                    automation-id="select-header-icon-arrow-down"
                                                    class="icon-arrow-down"></i><i _ngcontent-ng-c3317408547=""
                                                    class="arrow-down"></i>
                                            </et-select-header>
                                            <!---->
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </et-select>
                                    <!---->
                                </div>
                                <!---->
                                <div _ngcontent-ng-c705146729=""
                                    class="updates-alert rtl-responsive ng-tns-c705146729-3 ng-star-inserted">
                                    <!-- <a _ngcontent-ng-c2632139819="" automation-id="feed-post-scroll-to-top"
                                        class="pointer new-updates ng-star-inserted"><span _ngcontent-ng-c2632139819=""
                                            class="update-arrow ets-icon-new-feed-item ets-icon-small"></span><span
                                            _ngcontent-ng-c2632139819="" class="text">New Posts</span></a> -->
                                    <!---->
                                </div>
                                <!---->
                            </div>
                        </div>
                        <!---->
                        <et-feed _ngcontent-ng-c705146729="" _nghost-ng-c2632139819=""
                            class="ng-tns-c705146729-3 ng-star-inserted">
                            <div _ngcontent-ng-c2632139819="" automation-id="feed-wrapp" etfeedkeyboardscroll=""
                                class="main-feed-wrapper">
                                <div _ngcontent-ng-c2632139819="" class="ng-star-inserted">
                                    <div _ngcontent-ng-c2632139819="">
                                        <!--<a _ngcontent-ng-c2632139819="" class="feed-top"></a>-->
                                        <!---->
                                        <!---->
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                                {
                                                    "feedMode": "all_symbols",
                                                    "isTransparent": false,
                                                    "displayMode": "adaptive",
                                                    "width": "100%",
                                                    "height": "550",
                                                    "colorTheme": "light",
                                                    "locale": "en"
                                                }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                                <!---->
                                <!---->
                            </div>
                            <!---->
                            <!---->
                        </et-feed>
                        <!---->
                        <!---->
                    </section>
                    <section _ngcontent-ng-c705146729="" class="sticky-side-container ng-tns-c705146729-3 sm:w-full"
                        style="top: -129px">
                        <et-home-account-insights-group _ngcontent-ng-c705146729="" _nghost-ng-c1805836010=""
                            class="ng-tns-c705146729-3 ng-star-inserted">
                            <section _ngcontent-ng-c1805836010="" class="account-insights-group et-flex-column">
                                <et-top-movers _ngcontent-ng-c1805836010="" _nghost-ng-c2623526169=""
                                    class="ng-star-inserted" style="order: 2">
                                    <div _ngcontent-ng-c2623526169="" automation-id="top-movers-card"
                                        class="home-feed-card et-bg-white rtl-responsive">
                                        <div _ngcontent-ng-c2623526169="" automation-id="top-movers-title"
                                            class="card-title et-font-s et-color-black ng-star-inserted">
                                            <div _ngcontent-ng-c2623526169="" class="title-text ng-star-inserted">
                                                <span _ngcontent-ng-c2623526169="" class="ng-star-inserted">Big
                                                    Movers
                                                    <!---->
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                            <!---->
                                            <!---->
                                            <div _ngcontent-ng-c2623526169=""
                                                class="buttons-container et-padding-horizontal-m ng-star-inserted">
                                                <div _ngcontent-ng-c2623526169="" class="gainers-losers-buttons">
                                                    <button _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-top-gainers-button"
                                                        aria-label="gainers"
                                                        class="ets-icon-columns-up-fill ets-icon-small et-icon-button et-selected"></button>
                                                    <div _ngcontent-ng-c2623526169="" class="et-vertical-divider">
                                                    </div>
                                                    <button _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-top-losers-button" aria-label="losers"
                                                        class="ets-icon-columns-down-fill ets-icon-small et-icon-button"></button>
                                                </div>
                                            </div>
                                            <!---->
                                            <div _ngcontent-ng-c2623526169="" automation-id="top-movers-dropdown"
                                                class="top-movers-right-drop-menu ng-star-inserted">
                                                <et-select _ngcontent-ng-c2623526169=""
                                                    class="select-header-icon ng-tns-c206250979-6 ng-star-inserted"
                                                    _nghost-ng-c206250979="">
                                                    <div _ngcontent-ng-c206250979=""
                                                        class="ng-tns-c206250979-6 new-dropdown-style">
                                                        <et-select-header _ngcontent-ng-c2623526169=""
                                                            _nghost-ng-c3317408547="" class="ng-tns-c206250979-6">
                                                            <div _ngcontent-ng-c3317408547=""
                                                                automation-id="select-header-text" class="header-text">
                                                                <div _ngcontent-ng-c2623526169=""
                                                                    automation-id="top-movers-dropdown-arrow"
                                                                    class="ets-icon-three-dots-fill ets-icon-tiny">
                                                                </div>
                                                            </div>
                                                            <i _ngcontent-ng-c3317408547=""
                                                                automation-id="select-header-icon-arrow-down"
                                                                class="icon-arrow-down"></i><i
                                                                _ngcontent-ng-c3317408547="" class="arrow-down"></i>
                                                        </et-select-header>
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </et-select>
                                            </div>
                                            <!---->
                                            <!---->
                                        </div>
                                        <!---->
                                        <p _ngcontent-ng-c2623526169=""
                                            class="tooltip-prefix ets-info ets-neutral-90 ets-plain-text ng-star-inserted">
                                            Today’s biggest gainers and losers.
                                            <span _ngcontent-ng-c2623526169="" automation-id="top-movers-tooltip-icon"
                                                class="ets-plain-text ets-icon-info"></span>
                                            <!---->
                                        </p>
                                        <!---->
                                        <!---->
                                        <div _ngcontent-ng-c2623526169="" class="content ng-star-inserted">
                                            <div _ngcontent-ng-c2623526169=""
                                                class="graph-container spaced-flex smaller">
                                                <a _ngcontent-ng-c2623526169="" automation-id="top-mover-graph-link"
                                                    class="repeated-items et-positive ng-star-inserted"
                                                    href="/assets/markets/mstr">
                                                    <p _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-bar-change"
                                                        class="et-font-xs graph-number-label">
                                                        1.78%
                                                    </p>
                                                    <div _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-bar" class="graph-bar"
                                                        style="height: 100%">
                                                    </div>
                                                </a><a _ngcontent-ng-c2623526169="" automation-id="top-mover-graph-link"
                                                    class="repeated-items et-positive ng-star-inserted"
                                                    href="/assets/markets/pltr">
                                                    <p _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-bar-change"
                                                        class="et-font-xs graph-number-label">
                                                        1.15%
                                                    </p>
                                                    <div _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-bar" class="graph-bar"
                                                        style="height: 64.9275%">
                                                    </div>
                                                </a><a _ngcontent-ng-c2623526169="" automation-id="top-mover-graph-link"
                                                    class="repeated-items empty-bar ng-star-inserted">
                                                    <p _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-bar-change"
                                                        class="et-font-xs graph-number-label">
                                                    </p>
                                                    <div _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-bar" class="graph-bar"
                                                        style="height: 100%">
                                                    </div>
                                                </a>
                                                <!---->
                                            </div>
                                            <div _ngcontent-ng-c2623526169=""
                                                class="labels-container spaced-flex smaller">
                                                <a _ngcontent-ng-c2623526169="" automation-id="top-mover-link"
                                                    class="label repeated-items positive-gradient ng-star-inserted"
                                                    href="/assets/markets/mstr">
                                                    <div _ngcontent-ng-c2623526169=""
                                                        class="et-avatar changing-avatars ng-star-inserted">
                                                        <div _ngcontent-ng-c2623526169=""
                                                            class="et-instrument-icon-info__icon" style="
                                                      background-color: rgb(
                                                        217,
                                                        37,
                                                        48
                                                      );
                                                    ">
                                                            <img _ngcontent-ng-c2623526169=""
                                                                automation-id="top-movers-market-image" loading="lazy"
                                                                src="/assets/etoro-cdn.etorostatic.com/market-avatars/6473/6473_D92530_F7F7F7.svg"
                                                                alt="mstr logo" />
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <div _ngcontent-ng-c2623526169="">
                                                    </div>
                                                    <p _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-symbol"
                                                        class="et-h3 variable-font">
                                                        MSTR
                                                    </p>
                                                </a><a _ngcontent-ng-c2623526169="" automation-id="top-mover-link"
                                                    class="label repeated-items positive-gradient ng-star-inserted"
                                                    href="/assets/markets/pltr">
                                                    <div _ngcontent-ng-c2623526169=""
                                                        class="et-avatar changing-avatars ng-star-inserted">
                                                        <div _ngcontent-ng-c2623526169=""
                                                            class="et-instrument-icon-info__icon" style="
                                                      background-color: rgb(
                                                        44,
                                                        44,
                                                        44
                                                      );
                                                    ">
                                                            <img _ngcontent-ng-c2623526169=""
                                                                automation-id="top-movers-market-image" loading="lazy"
                                                                src="/assets/etoro-cdn.etorostatic.com/market-avatars/7991/7991_2C2C2C_F7F7F7.svg"
                                                                alt="pltr logo" />
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <div _ngcontent-ng-c2623526169="">
                                                    </div>
                                                    <p _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-symbol"
                                                        class="et-h3 variable-font">
                                                        PLTR
                                                    </p>
                                                </a><a _ngcontent-ng-c2623526169="" automation-id="top-mover-link"
                                                    class="label repeated-items empty-label ng-star-inserted">
                                                    <div _ngcontent-ng-c2623526169=""
                                                        class="et-avatar changing-avatars empty-avatar ng-star-inserted">
                                                    </div>
                                                    <!---->
                                                    <div _ngcontent-ng-c2623526169="">
                                                    </div>
                                                    <p _ngcontent-ng-c2623526169=""
                                                        automation-id="top-movers-market-symbol"
                                                        class="et-h3 variable-font">
                                                    </p>
                                                </a>
                                                <!---->
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <p _ngcontent-ng-c2623526169="" automation-id="top-movers-disclaimer"
                                        class="et-font-xxs et-color-dark-grey desktop-disclaimer rtl-responsive">
                                        Significant gainers and losers from
                                        your portfolio and all your watchlists
                                        since 01:00 last trading day.
                                        <!---->
                                        <!---->
                                        <!---->
                                    </p>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </et-top-movers>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <et-beat-the-market _ngcontent-ng-c1805836010="" _nghost-ng-c3656366357=""
                                    class="ng-star-inserted" style="order: 3">
                                    <div _ngcontent-ng-c3656366357="" automation-id="beat-the-market-card-container"
                                        class="beat-the-market-card-container home-feed-card ng-star-inserted">
                                        <div _ngcontent-ng-c3656366357="" class="ets-secondary-info main-paragraph">
                                            These investors have outperformed
                                            the
                                            <span _ngcontent-ng-c3656366357="" class="instrument-name ets-bold">SPX500
                                                Index (Non Expiry)</span><span _ngcontent-ng-c3656366357=""
                                                class="beat-the-market-instrument-gain ets-bold et-positive">
                                                (5.88%) </span>over the last 12
                                            months
                                        </div>
                                        <div _ngcontent-ng-c3656366357="" class="investors-container ng-star-inserted">
                                            <div _ngcontent-ng-c3656366357=""
                                                automation-id="beat-the-market-investor-container"
                                                class="et-flex-column ng-star-inserted" username="BernardusJS">
                                                <a _ngcontent-ng-c3656366357="" class="et-flex investor-container"
                                                    href="/assets/people/bernardusjs/"
                                                    automation-id="investor-BernardusJS"><img
                                                        _ngcontent-ng-c3656366357="" alt="" loading="lazy"
                                                        class="investor-avatar"
                                                        src="/assets/etoro-cdn.etorostatic.com/avatars/35X35/6368232/3.jpg" />
                                                    <div _ngcontent-ng-c3656366357=""
                                                        class="investor-info et-flex-column" style="width: 16.79%">
                                                        <div _ngcontent-ng-c3656366357=""
                                                            class="et-flex investors-data">
                                                            <p _ngcontent-ng-c3656366357="" class="investor-name">
                                                                Bernardus Smith
                                                            </p>
                                                            <p _ngcontent-ng-c3656366357="" class="investor-gain">
                                                                (6.79%)
                                                            </p>
                                                        </div>
                                                        <div _ngcontent-ng-c3656366357="" class="gain-graph">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div _ngcontent-ng-c3656366357=""
                                                automation-id="beat-the-market-investor-container"
                                                class="et-flex-column ng-star-inserted" username="ddvaz2097">
                                                <a _ngcontent-ng-c3656366357="" class="et-flex investor-container"
                                                    href="/assets/people/ddvaz2097/"
                                                    automation-id="investor-ddvaz2097"><img _ngcontent-ng-c3656366357=""
                                                        alt="" loading="lazy" class="investor-avatar"
                                                        src="/assets/etoro-cdn.etorostatic.com/avatars/35X35/11447344/1.jpg" />
                                                    <div _ngcontent-ng-c3656366357=""
                                                        class="investor-info et-flex-column" style="width: 26.12%">
                                                        <div _ngcontent-ng-c3656366357=""
                                                            class="et-flex investors-data">
                                                            <p _ngcontent-ng-c3656366357="" class="investor-name">
                                                                Daniel Diogo Vaz
                                                            </p>
                                                            <p _ngcontent-ng-c3656366357="" class="investor-gain">
                                                                (16.12%)
                                                            </p>
                                                        </div>
                                                        <div _ngcontent-ng-c3656366357="" class="gain-graph">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div _ngcontent-ng-c3656366357=""
                                                automation-id="beat-the-market-investor-container"
                                                class="et-flex-column ng-star-inserted" username="uinci1103">
                                                <a _ngcontent-ng-c3656366357="" class="et-flex investor-container"
                                                    href="/assets/people/uinci1103/"
                                                    automation-id="investor-uinci1103"><img _ngcontent-ng-c3656366357=""
                                                        alt="" loading="lazy" class="investor-avatar"
                                                        src="/assets/etoro-cdn.etorostatic.com/avatars/35X35/14003408/2.jpg" />
                                                    <div _ngcontent-ng-c3656366357=""
                                                        class="investor-info et-flex-column" style="width: 32.03%">
                                                        <div _ngcontent-ng-c3656366357=""
                                                            class="et-flex investors-data">
                                                            <p _ngcontent-ng-c3656366357="" class="investor-name">
                                                                Ufuk Inci
                                                            </p>
                                                            <p _ngcontent-ng-c3656366357="" class="investor-gain">
                                                                (22.03%)
                                                            </p>
                                                        </div>
                                                        <div _ngcontent-ng-c3656366357="" class="gain-graph">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!---->
                                        </div>
                                        <!----><a _ngcontent-ng-c3656366357="" automation-id="beat-the-market-card-btn"
                                            class="beat-the-market-card-btn et-flex-center"
                                            href="/assets/discover/people/results?Period=OneYearAgo&amp;HasAvatar=true&amp;IsTestAccount=false&amp;DisplayFullName=true&amp;OptIn=true&amp;BonusOnly=false&amp;Blocked=false&amp;Verified=true&amp;PopularInvestor=true&amp;CopyBlock=false&amp;IsFund=false&amp;IsBronze=false&amp;GainMin=0&amp;GainMax=100&amp;RiskScoreMin=1&amp;RiskScoreMax=7&amp;DailyGainMin=-5&amp;ThisWeekGainMin=-5&amp;MaxDailyRiskScoreMin=1&amp;MaxDailyRiskScoreMax=7&amp;MaxMonthlyRiskScoreMin=1&amp;MaxMonthlyRiskScoreMax=7&amp;CopiersMin=80&amp;CopiersMax=790&amp;CopiedTradesMax=0&amp;CopyTradesPctMax=0&amp;CopyInvestmentPctMax=0&amp;DailyDDMin=-6&amp;WeeklyDDMin=-10&amp;ProfitableMonthsPctMax=80&amp;PeakToValleyMin=-10&amp;TopTradedAssetClassId=5&amp;TopTradedInstrumentPctMin=0&amp;TotalTradedInstrumentsMin=8&amp;WeeksSinceRegistrationMin=30&amp;Sort=-Gain"><span
                                                _ngcontent-ng-c3656366357="">Discover
                                                CopyTrader</span><span _ngcontent-ng-c3656366357=""
                                                class="selected-column"></span></a>
                                    </div>
                                    <div _ngcontent-ng-c3656366357=""
                                        class="beat-the-market-disclaimer ets-secondary-info ng-star-inserted">
                                        Past performance is not an indication
                                        of future results
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </et-beat-the-market>
                                <!---->
                                <!---->
                                <et-daily-recap-touchpoint _ngcontent-ng-c1805836010="" _nghost-ng-c1683840600=""
                                    class="ng-star-inserted">
                                    <div _ngcontent-ng-c1683840600="" etinviewport=""
                                        class="touchpoint-wrapper rtl-responsive ng-star-inserted">
                                        <div _ngcontent-ng-c1683840600=""
                                            class="touchpoint-container ets-violet-blue-gradient-bottom-bg">
                                            <div _ngcontent-ng-c1683840600="" class="avatar-title-container ets-flex">
                                                <div _ngcontent-ng-c1683840600="" class="avatar-container">
                                                    <div _ngcontent-ng-c1683840600="" class="avatar ng-star-inserted"
                                                        style="
                                                    background-color: rgb(
                                                      247,
                                                      247,
                                                      247
                                                    );
                                                    color: rgb(44, 44, 44);
                                                  ">
                                                        <img _ngcontent-ng-c1683840600="" alt="avatar" loading="lazy"
                                                            src="/assets/etoro-cdn.etorostatic.com/market-avatars/1069/1069_F7F7F7_2C2C2C.svg" />
                                                    </div>
                                                    <div _ngcontent-ng-c1683840600="" class="avatar ng-star-inserted"
                                                        style="
                                                    background-color: rgb(
                                                      118,
                                                      185,
                                                      0
                                                    );
                                                    color: rgb(247, 247, 247);
                                                  ">
                                                        <img _ngcontent-ng-c1683840600="" alt="avatar" loading="lazy"
                                                            src="/assets/etoro-cdn.etorostatic.com/market-avatars/1137/1137_76B900_F7F7F7.svg" />
                                                    </div>
                                                    <div _ngcontent-ng-c1683840600="" class="avatar ng-star-inserted"
                                                        style="
                                                    background-color: rgb(
                                                      230,
                                                      0,
                                                      18
                                                    );
                                                    color: rgb(247, 247, 247);
                                                  ">
                                                        <img _ngcontent-ng-c1683840600="" alt="avatar" loading="lazy"
                                                            src="/assets/etoro-cdn.etorostatic.com/market-avatars/4481/4481_E60012_F7F7F7.svg" />
                                                    </div>
                                                    <!---->
                                                </div>
                                                <div _ngcontent-ng-c1683840600="" class="ets-title-main">
                                                    My Market Minutes
                                                </div>
                                            </div>
                                            <!---->
                                            <div _ngcontent-ng-c1683840600="" class="player-container ets-flex">
                                                <audio _ngcontent-ng-c1683840600="">
                                                    <source _ngcontent-ng-c1683840600="" type="audio/mpeg"
                                                        src="/assets/dailyrecap.delta.app/stitch/S0nMzKmML0pNTiyIz01NyUzUNzQ3MbE0NjExAAH9zLySovz41JL8ony93AJjqxQC6o0MLUyNDXEoLS5JLMlM1k8qzS1ILSLWOBNLU6oaZ2hONePyS1EC50NmYOGOtq74cvMG5snx4b6X5OeaWtq_d69zKj2d9lnzOwA" />
                                                </audio>
                                                <div _ngcontent-ng-c1683840600="" class="custom-audio-controls">
                                                    <button _ngcontent-ng-c1683840600="" class="playPause">
                                                        <img _ngcontent-ng-c1683840600="" alt="Play icon"
                                                            class="icon ng-star-inserted"
                                                            src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/play-lightmode.svg" />
                                                        <!---->
                                                        <!---->
                                                    </button>
                                                    <div _ngcontent-ng-c1683840600=""
                                                        class="ets-flex-column ng-star-inserted">
                                                        <div _ngcontent-ng-c1683840600=""
                                                            class="ets-secondary-info audio-title ets-neutral-70">
                                                            <span _ngcontent-ng-c1683840600="">Your
                                                                AI generated
                                                                market
                                                                summary</span><span _ngcontent-ng-c1683840600=""
                                                                class="ng-star-inserted">01:39</span>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <et-animated-title _ngcontent-ng-c1683840600=""
                                                            _nghost-ng-c3982455237="" class="ng-star-inserted">
                                                            <div _ngcontent-ng-c3982455237=""
                                                                class="animated-title-container rtl-responsive ng-star-inserted">
                                                                <div _ngcontent-ng-c3982455237=""
                                                                    class="animated-title-wrapper" style="
                                                          animation-duration: 297.333s;
                                                          transform: translateX(
                                                            100%
                                                          );
                                                        ">
                                                                    <span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <span _ngcontent-ng-c3982455237=""
                                                                            class="dot-container ng-star-inserted"><img
                                                                                _ngcontent-ng-c3982455237=""
                                                                                alt="Dot icon"
                                                                                src="/assets/etoro-cdn.etorostatic.com/web-client/et/img/home/daily-recap/Dot-lightmode.svg" /></span>
                                                                        <!---->
                                                                    </span><span _ngcontent-ng-c3982455237=""
                                                                        class="ets-info ets-neutral-100 ets-bold daily-recap-title ng-star-inserted">18
                                                                        Apr -
                                                                        Today
                                                                        covering:
                                                                        NVIDIA,
                                                                        Super
                                                                        Micro
                                                                        Computer,
                                                                        Taiwan
                                                                        Semiconductor
                                                                        Manufacturing
                                                                        <!---->
                                                                    </span>
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                            </div>
                                                            <!---->
                                                        </et-animated-title>
                                                        <!---->
                                                    </div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                </et-daily-recap-touchpoint>
                                <!---->
                                <!---->
                                <!---->
                            </section>
                        </et-home-account-insights-group>
                        <!---->
                    </section>
                </div>
            </main>
            <!---->
            <!---->
            <!---->
        </div>
    </div>
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
    <!---->
</et-home>