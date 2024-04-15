<?php get_header();?>

<main id="white-label">
    <div id="modal-form" class="modal">
        <!-- Modal content -->
        <div class="modal-content py-6 px-3 p-md-6">
            <div class="modal-header">
                <h2 class="mb-0 text-center flex-grow-1">Free Demo</h2>
                <i id="close-modal" class="close-modal fas fa-window-close d-flex justify-content-between align-items-center fs-2"></i>
            </div>
            <div class="modal-body">
                <div class="mp-form">
                    <?=do_shortcode(get_field("white_label_form_shortcode"));?>
                </div>
            </div>
            <!-- <div class="modal-footer"></div> -->
        </div>
    </div>

    <section class="section-1 banner">
        <div class="d-flex h-100 w-100 justify-content-end align-items-center position-absolute top-0 end-0">
            <img src="<?=get_template_directory_uri()?>/assets/montypay-banner.png" alt="MontyPay" width="60%" style="filter: blur(37px);">
        </div>
        <div class="d-none d-lg-flex h-100 justify-content-center align-items-center position-absolute top-0 end-0" style="width:60%">
            <img class="laptop-gif d-none" src="<?=get_template_directory_uri()?>/assets/laptop.gif" alt="Laptop" width="70%">
            <img class="laptop-gif-loader" src="<?=get_template_directory_uri()?>/assets/laptop.png" alt="Laptop" width="70%">
        </div>
        <div class="d-none d-lg-flex h-100 justify-content-center align-items-center position-absolute top-0 end-0" style="width:60%">
            <img src="<?=get_template_directory_uri()?>/assets/metrics.gif" alt="Metrics" width="70%">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="fs-large m-0">White-Label payment solution</h1>
                    <h2 class="fs-medium mt-2 mp-blue">Launch your PSP in 4 weeks</h2>
                    <div class="d-block d-lg-none">
                        <img class="laptop-gif d-none" src="<?=get_template_directory_uri()?>/assets/laptop.gif" alt="Laptop" width="100%">
                        <img  class="laptop-gif-loader" src="<?=get_template_directory_uri()?>/assets/laptop.png" alt="Laptop" width="100%">
                        <div class="position-absolute top-0 end-0">
                            <img src="<?=get_template_directory_uri()?>/assets/metrics.gif" alt="Metrics" width="100%">
                        </div>
                    </div>
                    <p class="mt-3">Stay ahead of the curve with MontyPay’s payment gateway, a fully brandable, white-label solution. You can now own an end-to-end ready-to-use, PCI DSS gateway, in just a few weeks and without the hassle of unnecessary development costs!</p>
                    <button class="open-modal mp-button mt-4">Request a free demo</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-2">
        <div class="container">
            <div class="section-content">
                <div class="header m-auto text-center animatedParent animateOnce">
                    <h3 class="animated fadeInDownShort">Benefits</h3>
                    <h2 class="pb-4 fs-large animated fadeInUpShort">Seamless, secure, customizable</h2>
                </div>
            </div>

            <div class="animatedParent animateOnce">
                <div class="slideshow js-slideshow benefits-slider animated fadeInDownShort">
                    <div class="slide p-4">
                        <h2>Customization all the way</h2>
                        <p>Our white label solution can be customized to meet the needs of your customers and provide a seamless customer experience.</p>
                    </div>
                    <div class="slide p-4">
                        <h2>Security, our main priority</h2>
                        <p>Our PCI DSS compliant platform boasts a fully secure payment page allowing a smooth transaction flow on any device, not to mention that it is equipped with fraud prevention tools for optimized security.</p>
                    </div>
                    <div class="slide p-4">
                        <h2>Easy integration</h2>
                        <p>One integration is all it takes to access 200+ready-made connectors to banks and payment methods. As a result, you can now allow your clients to cater to international customers across various industries, which will help you expand your business into new international markets.</p>
                    </div>
                    <div class="slide p-4">
                        <h2>Your payment gateway</h2>
                        <p>Use your own brand guidelines for a seamless customer journey.<br />all of your colors, logos and look and feel into the platform making the solution entirely recognizable under your name. </p>
                    </div>
                    <div class="slide p-4">
                        <h2>High level support</h2>
                        <p>We provide a personalized approach as well as a high level of support going above and beyond our clients’ needs. Our dedicated team is always ready to go the extra mile in case of an issue always making sure that your business remains unimpaired.</p>
                    </div>
                    <div class="slide p-4">
                        <h2>And many more!</h2>
                        <p>Our benefits are endless. Stay tuned to find out more about our product. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-3 position-relative">
        <picture>
            <source srcset="<?=get_template_directory_uri()?>/assets/main-features.png" media="(min-width: 1200px)" alt="" width="4320" height="2427"> 
            <source srcset="<?=get_template_directory_uri()?>/assets/main-features-tablet.png" media="(min-width: 768px)" alt="" width="4320" height="3240"> 
            <img loading="lazy" src="<?=get_template_directory_uri()?>/assets/main-features-mobile.png" alt="Features" width="1170" height="2427">
        </picture>
        <div class="position-absolute top-0 left-0 d-flex align-items-center w-100 h-100">
            <div class="container">
                <div class="section-content text-center">
                    <div class="header m-auto animatedParent animateOnce">
                        <h3 class="animated fadeInDownShort">Highlights</h3>
                        <h2 class="fs-large m-0 animated fadeInUpShort">Main features</h2>
                    </div>
                    <div class="row justify-content-center mt-3 mt-sm-4 mt-md-4 mt-lg-4 animatedParent animateOnce" data-sequence="200">
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="0">
                            <img src="<?=get_template_directory_uri()?>/assets/checkout.svg" alt="Online & Mobile Checkout" width="100%">
                            <h5 class="mt-2">Online & mobile<br/>checkout</h5>
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="1">
                            <img src="<?=get_template_directory_uri()?>/assets/qr.svg" alt="Pay by Ling & Qr Code" width="100%">
                            <h5 class="mt-2">Pay by link<br/>and QR code</h5>
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="2">
                            <img src="<?=get_template_directory_uri()?>/assets/recurring-bills.svg" alt="Recurring Bills" width="100%">
                            <h5 class="mt-2">Recurring<br/>bills</h5>
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="3">
                            <img src="<?=get_template_directory_uri()?>/assets/digital-onboarding.svg" alt="Digital Onboarding" width="100%">
                            <h5 class="mt-2">Digital<br/>onboarding</h5>
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="4">
                            <img src="<?=get_template_directory_uri()?>/assets/routing.svg" alt="Smart Routing & Cascading" width="100%">
                            <h5 class="mt-2">Smart routing &<br/>cascading</h5>
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="5">
                            <img src="<?=get_template_directory_uri()?>/assets/reporting.svg" alt="Advanced Reporting" width="100%">
                            <h5 class="mt-2">Advanced<br/>reporting</h5>
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="6">
                            <img src="<?=get_template_directory_uri()?>/assets/mobile.svg" alt="Merchants’ Mobile App" width="100%">
                            <h5 class="mt-2">Merchants’<br/>mobile app</h5>
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-5 pt-0 pt-md-3 animated fadeInUpShort" data-id="7">
                            <img src="<?=get_template_directory_uri()?>/assets/risk-compliance.svg" alt="Risk & Compliance" width="100%">
                            <h5 class="mt-2">Risk &<br/>Compliance</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-4">
        <div class="container">
            <div class="section-content">
                <div class="header animatedParent animateOnce">
                    <h3 class="animated fadeInDownShort">Consultancy</h3>
                    <h2 class="animated fadeInUpShort">The best consultancy in the payment industry</h2>
                </div>
                <div class="row mt-5 animatedParent animateOnce" data-sequence="200">
                    <div class="col-12 col-md-6 animated fadeInUpShort" data-id="0">
                        <p class="pe-0 pe-md-5">By leveraging our expertise in the payment industry, you can now bring your business to life and launch your own PSP in no matter of time. But first, scaling your business requires the implementation of the right strategy. This is where MontyPay steps in to provide with you with the needed consultancy especially in terms of best practices in the payment industry.</p> 
                        </div>
                    <div class="col-12 col-md-6 animated fadeInUpShort" data-id="1">
                        <p class="ps-0 ps-md-5">With our personalized approach, we help you put in place the most efficient processes while anticipating and analyzing the future trends that can impact the market. We also support you in overcoming the industry challenges and achieving a considerable market performance through a solid plan based on your business goals.</p>
                    </div>
                </div>
                <div class="mt-5 pt-5 animatedParent animateOnce">
                    <div class="animated fadeInUpShort">
                        <h2 class="fs-3 text-center">We have 200+ connectors</h2>
                        <div class="slideshow js-slideshow connectors-slider mb-5 ">
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-visa.png" alt="Visa"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-stripe.png" alt="Stripe"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-aci-universal-payments.png" alt="ACI Universal Payments"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-airtel.png" alt="Airtel"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-axcess.png" alt="Axcess"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-azericard.png" alt="Azericard"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-cardinity.png" alt="Cardinity"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-concord-bank.png" alt="Concord Bank"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-connectum.png" alt="Connectum"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-credit-libanais.png" alt="Credit Libanais"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-decta.png" alt="Decta"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-emrald.png" alt="Emrald"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-flutterwave.png" alt="Flutterwave"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-iboxbank.png" alt="Ibox Bank"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-latpay.png" alt="Latpay"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-lpb.png" alt="LPB"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-master-card.png" alt="Master Card"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-millikart.png" alt="Millikart"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-mtn.png" alt="MTN"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-opay.png" alt="Opay"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-paypal.png" alt="PayPal"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-payretailers.png" alt="Pay Retailers"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-payu.png" alt="PayU"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-ppro.png" alt="Ppro"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-riyad-bank.png" alt="Riyad Bank"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-seb.png" alt="SEB"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-stcpay.png" alt="STC Pay"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-total-processing.png" alt="Total Processing"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-tranzzo.png" alt="Tranzzo"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-truevo.png" alt="Truevo"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-trust-payments.png" alt="Trust Payments"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-unlimint.png" alt="Unlimint"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-upc.png" alt="UPC"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-virtualpay.png" alt="VirtualPay"></div>
                            <div class="slide bg-white"><img loading="lazy" src="<?=get_template_directory_uri()?>/assets/connectors/logo-xpate.png" alt="Xpate"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-5">
        <div class="container">
            <div class="section-content">
                <div class="row g-4 mt-5 justify-content-center animatedParent animateOnce" data-sequence="200">
                    <div class="d-none d-md-flex justify-content-center align-items-center justify-content-lg-end align-items-lg-end position-absolute bottom-0 end-0 w-75 h-100">
                        <img src="<?=get_template_directory_uri()?>/assets/montypay.png" alt="MontyPay" width="100%">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 animated fadeInUpShort" data-id="0">
                        <div class="card">
                            <h2>Processing Revenue</h2>
                            <div class="circle-chart is-active">
                                <div>
                                    <svg class="circle-outer" viewBox="0 0 32 32">
                                        <circle r="16" cx="16" cy="16" stroke-dasharray="80 100" stroke="#BBBBBB" fill="transparent" stroke-width="5"></circle>
                                    </svg>
                                </div>
                                <svg viewBox="0 0 32 32" class="circle-inner">
                                    <circle r="16" cx="16" cy="16" stroke="#1EAAE6" stroke-dasharray="60 100" fill="transparent" stroke-width="5"></circle>
                                </svg>
                            </div>
                            <div class="d-flex mt-4">
                                <div class="blue">
                                    <div class="fs-5">Before</div>
                                    <div class="display-4 visby-extra">
                                        <span class="counter">60</span>
                                        <span>%</span>   
                                    </div>
                                </div>
                                <div class="ms-4">
                                    <span class="d-block fs-5">After</span>
                                    <div class="display-4 visby-extra">
                                        <span class="counter">80</span>
                                        <span>%</span>   
                                    </div>  
                                </div>
                            </div>
                            <p class="mt-4">Scale your online business with MontyPay’s advanced white-label payment platform allowing you to increase your customer retention rate and maximize your revenues.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 animated fadeInUpShort" data-id="1">
                        <div class="card">
                            <h2>Approval Ratio</h2>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="d-flex flex-column">
                                    <div class="blue">
                                        <span class="d-block fs-5">Before</span>
                                        <div class="display-4 visby-extra">
                                            <span class="counter">50</span>
                                            <span>%</span>   
                                        </div>  
                                    </div>
                                    <div class="mt-4">
                                        <span class="d-block fs-5">After</span>
                                        <div class="display-4 visby-extra">
                                            <span class="counter">70</span>
                                            <span>%</span>   
                                        </div> 
                                    </div>
                                </div>
                                
                                <div class="bars-chart is-active d-flex justify-content-between align-items-end">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2 ms-4"></div>
                                </div>
                            </div>
                            <p class="mt-4">MontyPay’s most advanced and innovative feature, Smart Routing and Cascading, helps you route your transactional traffic and increase your approval ratio.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 animated fadeInUpShort" data-id="2">
                        <div class="card">
                            <h2>Time to Market</h2>
                            <div class="display-4 visby-extra">
                                <span class="blue counter">4</span>
                                <span class="grey">weeks</span>
                            </div>
                            <p class="mt-4">Thanks to its knowledge in the Payment industry and unrivalled expertise, MontyPay will help you launch your Business in 4 weeks while putting in place the most efficient processes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section section-6">
        <div class="container">
            <div class="section-content">
                <picture>
                    <source srcset="<?=get_template_directory_uri()?>/assets/technology.png" media="(min-width: 768px)" alt="MontyPay" width="100%"> 
                    <img src="<?=get_template_directory_uri()?>/assets/technology-mobile.png" alt="MontyPay" width="100%">
                </picture>
                <div class="overlay position-absolute top-0 start-0 d-flex flex-column justify-content-center">
                    <div class="header animatedParent animateOnce">
                        <h3 class="animated fadeInDownShort">Technology</h3>
                        <h2 class="fs-large animated fadeInUpShort">Convenient and seamless payment</h2>
                        <p class="animated fadeInUpShort">MontyPay is utilizing the latest technology to help our customers expand into new markets, capture more revenue, and create seamless checkout experience with a convenient and global payment method.</p>
                    </div>
                </div>
            </div>
        
        </div>
    </section>

    <section class="section section-7">
        <div class="container">
            <div class="section-content">
                <div class="header m-auto text-center">
                    <h3>integration</h3>
                    <h2 class="pb-4 fs-large">Plugins and SDK</h2>
                </div>
                <div class="row icons animatedParent animateOnce" data-sequence="200">
                    <div class="col-12 col-sm-6 col-md-3 animated fadeInUpShort" data-id="0">
                        <img src="<?=get_template_directory_uri()?>/assets/mobile.svg" alt="Mobile-ready Checkout" width="100%">
                        <h4 class="fs-5 mt-2">Mobile-ready Checkout that converts</h4>
                        <p>Smooth checkout to decrease your cart abandonment rate</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 animated fadeInUpShort" data-id="1">
                        <img src="<?=get_template_directory_uri()?>/assets/integration.svg" alt="Host 2 Host Integration" width="100%">
                        <h4 class="fs-5 mt-2">Host-2-Host integration </h4>
                        <p>Allowing merchant to accept payment information on their own payment pages</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 animated fadeInUpShort" data-id="2">
                        <img src="<?=get_template_directory_uri()?>/assets/plugin.svg" alt="Plugin to CMS" width="100%">
                        <h4 class="fs-5 mt-2">Plugins to CMS</h4>
                        <p>Ready for use plugins to most popular CMS for easy integration of your merchants</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 animated fadeInUpShort" data-id="3">
                        <img src="<?=get_template_directory_uri()?>/assets/sdk.svg" alt="Mobile SDK" width="100%">
                        <h4 class="fs-5 mt-2">Mobile SDK</h4>
                        <p>iOS and Android SDK for merchants willing to accept payments in their mobile applications.</p>
                    </div>
                </div>

                <div class="integration-plugins animatedParent animateOnce" data-sequence="200">
                    <div class="iplugin animated fadeInDownShort go" data-id="0">
                        <img src="<?=get_template_directory_uri()?>/assets/magento1.svg" alt="Magento">
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="1">
                        <img src="<?=get_template_directory_uri()?>/assets/magento2.svg" alt="IOS" >
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="2">
                        <img src="<?=get_template_directory_uri()?>/assets/woocommerce.svg" alt="WooCommerce" >
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="3">
                        <img src="<?=get_template_directory_uri()?>/assets/nop-commerce.svg" alt="NopCommerce" >
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="4">
                        <img src="<?=get_template_directory_uri()?>/assets/prestashop.svg" alt="PrestaShop" >
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="5">
                        <img src="<?=get_template_directory_uri()?>/assets/ecomz.svg" alt="eComz" >
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="7">
                        <img src="<?=get_template_directory_uri()?>/assets/open-cart.svg" alt="Open Cart" >
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="6">
                        <img src="<?=get_template_directory_uri()?>/assets/android.svg" alt="Android" >
                    </div>
                    <div class="iplugin animated fadeInDownShort go" data-id="7">
                        <img src="<?=get_template_directory_uri()?>/assets/ios.svg" alt="IOS" >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-8">
        <div class="container">
            <div class="section-content animatedParent animateOnce">
                <div class="d-flex justify-content-center align-items-center position-absolute bottom-0 end-0 w-100 h-100">
                    <img src="<?=get_template_directory_uri()?>/assets/montypay.png" alt="MontyPay" width="100%">
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="pe-0 me-0 pe-md-5 me-md-5">
                            <h3 class="animated fadeInDownShort">Checkout</h3>
                            <h2 class="animated fadeInUpShort">Personalize your customers’ checkout experience</h2>
                            <p class="animated fadeInUpShort">Allow your customers to use their preferred checkout to scale and optimize their shopping experience while meeting their expectations</p>
                        </div>
                        <picture class="animated fadeInLeftShort">
                            <source srcset="<?=get_template_directory_uri()?>/assets/checkout-2.png" media="(min-width: 768px)" alt="" width="100%"> 
                            <img class="mt-5 position-relative" loading="lazy" src="<?=get_template_directory_uri()?>/assets/checkout-mobile.png" alt="Checkout Experience" width="100%">
                        </picture>
                    </div>
                    <div class="d-none d-md-block col-12 col-md-6 animated fadeInRightShort">
                        <img class="position-relative" src="<?=get_template_directory_uri()?>/assets/checkout-1.png" alt="Checkout Experience" width="100%">
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</script>
</main>

<?php get_footer();?>