@section('header')
<header id="custom-header" ng-if="header.customHeader" ng-bind-html="header.trustedCustomHeader" ng-init="header.triggerAppReady()" ng-class="{'toolbar-expanded': main.$rootScope.isToolbarExpanded}">
    <div id="mobile-header">
        <span class="globeIcon"><svg width="18" height="18" viewBox="0 0 18 18"><path fill="none" d="M10.8 0.2C10.3 0.1 9.9 0 9.5 0 9.3 0 9.2 0 9 0l0 0C8.4 0 7.9 0.1 7.4 0.2 3.2 0.9 0 4.6 0 9c0 4.4 3.2 8.1 7.4 8.8C7.9 17.9 8.4 18 9 18l0 0c0.2 0 0.3 0 0.5 0 0.4 0 0.9-0.1 1.3-0.2C14.9 17 18 13.4 18 9 18 4.6 14.9 1 10.8 0.2zM16.4 6h-3.6c-0.6-2-1.7-3.9-2.8-5C12.8 1.4 15.4 3.5 16.4 6zM12 9c0 0.7-0.1 1.3-0.2 2H6.3C6.1 10.3 6 9.7 6 9c0-0.7 0.1-1.3 0.3-2h5.5C11.9 7.7 12 8.3 12 9zM9 16.5c-1-1.1-1.8-2.7-2.5-4.5h5C11.1 13.8 10 15.4 9 16.5zM6.5 6C7.2 4.2 8 2.6 9 1.5c1 1.1 2.1 2.7 2.6 4.5H6.5zM8 1c-1.1 1.3-2.1 3.1-2.7 5H1.6C2.7 3.4 5.1 1.4 8 1zM1.3 7H5.1C5 7.7 4.9 8.3 4.9 9c0 0.7 0.1 1.3 0.2 2H1.3c-0.2-0.6-0.3-1.3-0.3-2C1 8.3 1.1 7.6 1.3 7zM1.6 12h3.7c0.5 1.9 1.6 3.7 2.7 5C5.1 16.6 2.7 14.6 1.6 12zM10 17c1.2-1.1 2.2-2.9 2.8-5h3.6C15.4 14.5 12.7 16.8 10 17zM16.7 11h-3.7c0.1-0.7 0.2-1.3 0.2-2 0-0.7 0-1.3-0.1-2h3.7c0.1 0.6 0.2 1.3 0.2 2C17 9.7 16.9 10.4 16.7 11z"></path></svg>
            <div class="mobile-drop-down-wrapper">
                <div class="mobile-drop-down-background"></div>
                
            </div>
        </span>
    </div>

<nav id="wix-menu" lang="en" class="">
        <div class="wm-links-dropdown-container">
            <div class="wm-sub-category-container" style="left: 682.828px;"></div>
        </div>
        <div class="wm-container">
            <div class="wm-logo-wrapper">
                <div style="margin: 0; padding: 2; test-align: center; border: 1px dashed lightgray; width: 89px; height: 24px;">LOGOTYPE</div>
            </div>
            <div class="wm-links-wrapper">
                <div class="wm-links-container">
                    <div class="links-mouse-over-indication"></div>
                    <ul class="web">
                        <li class="menuItem">
                            <a id="wm-my-account-link" href="/" class="selected">Blade Templates</a>
                        </li>
                        <li class="menuItem">
                          <a id="wm-my-account-link" href="/tabwc" class="selected">Data change</a>
                        </li>
                        {{-- <li class="menuItem">
                            <a id="wm-create-link" href="/">Templates</a>
                        </li>
                        <li class="wm-dropdown menuItem">
                          <a id="wm-explore-link" href="/">
                            Explore
                            <span class="sub-menu-arrow"><svg width="10" height="5.7" viewBox="0 0 10 5.7"><polygon fill="none" points="5 5.7 0 0.7 0.7 0 5 4.4 9.3 0 10 0.7"></polygon></svg></span>
                          </a>
                          <ul class="wm-submenu">
                            <li>
                              <a id="wm-get-inspired-link" href="/">
                                <span>Get Inspired</span>
                              </a>
                            </li>
                            <li>
                              <a id="wm-features-link" href="/">
                                <span>Features</span>
                              </a>
                            </li>
                            <li>
                              <a id="wm-app-market-link" href="/">
                                <span>App Market</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="wm-dropdown menuItem">
                          <a id="wm-subscriptions" href="/" class="selected-sub-meadd-nu">
                            Subscriptions
                            <span class="sub-menu-arrow"><svg width="10" height="5.7" viewBox="0 0 10 5.7"><polygon fill="none" points="5 5.7 0 0.7 0.7 0 5 4.4 9.3 0 10 0.7"></polygon></svg></span>
                          </a>
                          <ul class="wm-submenu">
                            <li>
                              <a id="wm-sub-upgrade-plans" href="/" class="selected-sub-meadd-nu">
                                <span>Premium Plans</span>
                              </a>
                            </li>
                            <li>
                              <a id="wm-sub-domains" href="/" class="selected-sub-meadd-nu">
                                <span>Domains</span>
                              </a>
                            </li>
                            <li>
                              <a id="wm-sub-mail-box" href="/" class="selected-sub-meadd-nu">
                                <span>Mailboxes</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menuItem selected">
                            <a id="wm-support-link" href="/">Support</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
</div></nav>

</header>
@show