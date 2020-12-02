@extends('layouts.pages')

@section('content')
    <!-- START SECTION BANNER -->
    <section class="section_breadcrumb dark_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="/images/home_banner_bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="banner_text text-center">
                        <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">FAQ</h1>
                        <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s">
                            <li><a href="{{ route('home') }}">Home</a> </li>
                            <li><span><a href="{{ route('fag') }}">FAQ</a></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->


    <!-- START SECTION FAQ -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_default_dark title_border text-center">
                        <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Frequently Asked Questions</h4>
                        <!-- <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context</p> -->
                    </div>
                </div>
            </div>
            <div class="row small_space">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div id="accordion" class="faq_question">
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne1">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                        How long does withdrawals take?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne1" class="collapse  show " aria-labelledby="headingOne1" data-parent="#accordion">
                                <div class="card-body">
                                    Withdrawals are paid in a space of 0 - 24 hours, considering the functioning of the blockchain network when there are many transactions to be added to a block.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne2">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                                        Is DEPOSIT Automatic?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne2" class="collapse " aria-labelledby="headingOne2" data-parent="#accordion">
                                <div class="card-body">
                                    All deposits are automatically credited to your balance, as you send BTC to the unique wallet address generated during funding request.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne3">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne">
                                        Can I invest in multiple plans?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne3" class="collapse " aria-labelledby="headingOne3" data-parent="#accordion">
                                <div class="card-body">
                                    Yes, you can invest in multiple plans. All investments run concurrently.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne4">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne">
                                        What does Binary Option Solutions trade?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne4" class="collapse " aria-labelledby="headingOne4" data-parent="#accordion">
                                <div class="card-body">
                                    Binary Option Solutions earns on cryptocurrency mining as well as on cloud mining and trading of cryptocurrencies.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne5">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne">
                                        Is the company legally registered?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne5" class="collapse " aria-labelledby="headingOne5" data-parent="#accordion">
                                <div class="card-body">
                                    Crypto Assets is a subsidiary of FINANCIAL SERVICES BUREAU LIMITED incorporated in United Kingdom
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne6">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne6" aria-expanded="true" aria-controls="collapseOne">
                                        Is there a registration fee?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne6" class="collapse " aria-labelledby="headingOne6" data-parent="#accordion">
                                <div class="card-body">
                                    Registration on Binary Option Solutions is free.
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
          <div class="card-header" id="headingTwo">
            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Which cryptocurrency is best to buy today?</a> </h6>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body"> The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99% and would start buying more of it if the price dropped.</div>
          </div>
        </div>
        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
          <div class="card-header" id="headingThree">
            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How about day trading crypto?</a> </h6>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body"> While profits are possible trading cryptocurrencies, so are losses. My first year involved me spending hundreds of hours trading Bitcoin with a result of losing over $5,000 with nothing to show for it. Simply trading digital currencies is very similar to gambling because no one really knows what is going to happen next although anyone can guess! While I was lucky to do nothing expect lose money when I started, the worst thing that can happen is to get lucky right away and get a big ego about what an amazing cryptocurrency trader we are. </div>
          </div>
        </div>
        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
          <div class="card-header" id="headingFour">
            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">When to sell a cryptocurrency?</a> </h6>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body"> Before Steem I was all in an another altcoin and really excited about it. When I first bought the price was low and made payments to me every week just for holding it. As I tried to participate in the community over the next several months, I was consistently met with a mix of excitement and hostility. When I began talking openly about this, the negative emotions won over in the community and in me. Originally I had invested and been happy to hold no matter what the price which quickly went up after I bought it. </div>
          </div>
        </div>
        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1.2s">
          <div class="card-header" id="headingFive">
            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How does one acquire bitcoins?</a> </h6>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.</div>
          </div>
        </div>
        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1.4s">
          <div class="card-header" id="headingSix">
            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Can I make money with Bitcoin?</a> </h6>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic economic rules.</div>
          </div>
        </div>
        <div class="card animation" data-animation="fadeInUp" data-animation-delay="1.6s">
          <div class="card-header" id="headingSeven">
            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What happens when bitcoins are lost?</a> </h6>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
            <div class="card-body">When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand, when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.</div>
          </div>
        </div> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div id="accordion" class="accordion-style">
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne7">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne7" aria-expanded="true" aria-controls="collapseOne">
                                        When can I withdraw money?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne7" class="collapse " aria-labelledby="headingOne7" data-parent="#accordion">
                                <div class="card-body">
                                    You can make a request at anytime, including weekends.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne8">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne8" aria-expanded="true" aria-controls="collapseOne">
                                        What is withdrawal limit?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne8" class="collapse " aria-labelledby="headingOne8" data-parent="#accordion">
                                <div class="card-body">
                                    There is no limit for withdrawals.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne9">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne9" aria-expanded="true" aria-controls="collapseOne">
                                        How long does it take to credit my deposit?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne9" class="collapse " aria-labelledby="headingOne9" data-parent="#accordion">
                                <div class="card-body">
                                    It needs 2-3 network confirmations and may take up to 30 minutes.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne10">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne10" aria-expanded="true" aria-controls="collapseOne">
                                        Can I lose my money?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne10" class="collapse " aria-labelledby="headingOne10" data-parent="#accordion">
                                <div class="card-body">
                                    It is always the possibility in the sphere of investment. However, in our case, the probability is relatively low.
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne11">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne">
                                        Can't find an answer to your question
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne11" class="collapse " aria-labelledby="headingOne11" data-parent="#accordion">
                                <div class="card-body">
                                    feel free to contact us on live chat or via email : info@binaryoptionsolutions.com
                                </div>
                            </div>
                        </div>
                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="card-header" id="headingOne12">
                                <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne12" aria-expanded="true" aria-controls="collapseOne">
                                        How can I close my account?
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne12" class="collapse " aria-labelledby="headingOne12" data-parent="#accordion">
                                <div class="card-body">
                                    Please email at info@cryptoassest.com to request closing of your account. You will receive an email confirmation when this request will be completed.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION FAQ -->

@endsection
