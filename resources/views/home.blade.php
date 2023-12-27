@extends('layouts.frontend.header')

@section('content')
    <body>
    <div class="hm-bn">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12 hm-bn-left">
                    <div class="col-inner">
                        <h1>
                            <span>BITCOIN MINETRIX</span>
                            <span>STAKE TOKENS. <strong>MINE BITCOIN.</strong></span>
                        </h1>
                        <span>One Bitcoin mined in 2013 appreciated 27,300% in 10 years. Bitcoin Minetrix provides hassle-free BTC mining for the next 10 years. Buy $BTCMTX today for as little as $0.0123.</span>
                        <div class="hm-btn">
                            <a href="#">Audit</a>
                            <a class="btn-color" href="#">Whitepaper</a>
                        </div>
                        <div>
                            <img src="{{asset('assets/frontend/media/Cloud-Mining.svg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 hm-bn-right">
                    <div class="col-inner">
                        <div class="walletBox">
                            <h4>BUY IN BEFORE PRICE INCREASES!</h4>
                            <div class="des-walletBox">
                                <div id="countdown">
                                    <ul>
                                        <li><span id="days"></span>days</li>
                                        <li><span id="hours"></span>Hours</li>
                                        <li><span id="minutes"></span>Minutes</li>
                                        <li><span id="seconds"></span>Seconds</li>
                                    </ul>
                                </div>
                                <span class="un-price">Until Price Increase</span>
                                <div class="usdt">
                                    <ul>
                                        <li><strong>USDT RAISED: </strong>$5,757,147.47 / $6,258,616</li>
                                        <li><strong>YOUR PURCHASED BTCMTX: </strong>= 0</li>
                                        <li><strong>YOUR STAKEABLE BTCMTX: </strong>= 0</li>
                                    </ul>
                                    <div class="dashtitle"><span>1 BTCMTX = $0.0123</span></div>
                                </div>
                                <div class="tab-usdt">
                                    <div class="tab">
                                        <button class="tablinks" onclick="openCity(event, 'eth')" id="defaultOpen">ETH</button>
                                        <button class="tablinks" onclick="openCity(event, 'usdt')">USDT</button>
                                        <button class="tablinks" onclick="openCity(event, 'card')">CARD</button>
                                    </div>

                                    <div id="eth" style="display: block;" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Pay with USD1</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                            <div class="input-control">
                                                <span>Receive BTCMTX</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="usdt" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Pay with USD2</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                            <div class="input-control">
                                                <span>Receive BTCMTX</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="card" class="tabcontent">
                                        <div class="form-layout">
                                            <div class="input-control">
                                                <span>Pay with USD3</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                            <div class="input-control">
                                                <span>Receive BTCMTX</span>
                                                <input type="number" placeholder="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-partner hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <h3>featured in</h3>
                        <div class="list-logo">
                            <img src="{{asset('assets/frontend/media/logo1.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo2.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo3.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo4.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo5.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo6.svg')}}">
                            <img src="{{asset('assets/frontend/media/logo7.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>BITCOIN MINING made easy</h4>
                            <h2>What is Bitcoin Minetrix?</h2>
                            <p>Bitcoin Minetrix is a tokenized cloud mining platform that allows everyday people to mine bitcoin (BTC) in a decentralized way. We’re tokenizing cloud mining to ensure a secure and transparent experience.</p>
                            <p>We’re solving a huge problem by removing the risk of third party cloud mining scams and putting the control into the hands of token holders. Simply stake BTCMTX to earn credits, and use these to mine BTC.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrapper hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bn-small.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>DECENTRALIZED CLOUD MINING</h4>
                            <h2>The Bitcoin Minetrix Solution</h2>
                            <p>Bitcoin Minetrix presents a reliable cloud mining platform for everyday crypto users that aims to fix the problem of high hardware costs and deceptive scams that have deterred people from BTC mining.</p>
                            <p>With Bitcoin Minetrix, these concerns are a thing of the past. Users can simply stake their BTCMTX tokens to gain cloud mining credits. This decentralized method safeguards users' interests, ensuring a secure and transparent mining experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrapper hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>how it works</h4>
                            <h2>Stake-To-Mine BTC Mining</h2>
                            <p>The Stake-to-Mine concept is a novel idea that promises to bring bitcoin mining back into the realm of possibility for ordinary crypto aficionados, for several reasons.</p>
                            <p>Users of Bitcoin Minetrix need only an Ethereum-compatible wallet such as MetaMask to purchase and stake BTCMTX tokens, making things very simple. Staking BTCMTX earns non-tradable ERC-20 token credits that must be burned in exchange for BTC cloud mining power.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bn-small-2.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrapper hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <table>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>Bitcoin Minetrix</td>
                                <td>Traditional Cloud Mining</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-1.svg')}}"> Cost Entry Point</span></td>
                                <td>Low - Presale (no minimum buy)</td>
                                <td>High - Large minimum amounts</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-2.svg')}}"> Safety and Security</span></td>
                                <td>Decentralized, user-owned tradable tokens</td>
                                <td>Cash deposits required</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-3.svg')}}"> Risk</span></td>
                                <td>Cash deposits required</td>
                                <td>No refunds, long-term commitments</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-4.svg')}}"> Simplicity</span></td>
                                <td>Buy with ETH, BNB, USDT, or card and stake</td>
                                <td>Complicated contracts</td>
                            </tr>
                            <tr>
                                <td><span><img src="{{asset('assets/frontend/media/table-img-5.svg')}}"> Lock In Period</span></td>
                                <td>Variable dependent on staking</td>
                                <td>Fixed timeframe</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>The Case For Mining</h4>
                            <h2>Reasons To Cloud Mine BTC</h2>
                            <p>Although mostly run by corporations with huge physical mining rigs, cloud mining still provides a legitimate way for individuals to obtain BTC without buying it. There are several benefits:</p>
                            <p>Users of Bitcoin Minetrix need only an Ethereum-compatible wallet such as MetaMask to purchase and stake BTCMTX tokens, making things very simple. Staking BTCMTX earns non-tradable ERC-20 token credits that must be burned in exchange for BTC cloud mining power.</p>
                            <p><strong>Ease of Entry</strong></p>
                            <p>Cloud mining eliminates the need for technical expertise, hardware setup, and maintenance. It's user-friendly, making it accessible to beginners.</p>
                            <p><strong>Cost Efficiency</strong></p>
                            <p>By leveraging cloud mining companies' advanced equipment, individuals avoid high electricity costs and hardware investments.</p>
                            <p><strong>Space & Noise</strong></p>
                            <p>Mining rigs are bulky, noisy, and produce heat. With cloud mining, users won't have these disruptions in their homes.</p>
                            <p><strong>No Resale Worries</strong></p>
                            <p>The rapid ageing of mining hardware can make resale challenging. Cloud mining keeps the responsibility to upgrade with the mining companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="to-access bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h4>HOW TO BUY</h4>
                            <h2>How To Access BTC Mining</h2>
                            <p>Purchase BTCMTX tokens using ETH, USDT, BNB or bank card today and stake them to earn cloud mining credits. Burn credits to increase your bitcoin mining power.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="list-buy">
                            <div class="box">
                                <div class="inner-box">
                                    <div class="buy-img"><img src="{{asset('assets/frontend/media/buy-now.svg')}}"></div>
                                    <div class="buy-text">
                                        <h4>Buy Tokens</h4>
                                        <p>Connect your wallet and use the presale widget at the top of the page to buy BTCMTX tokens. You can use ETH, BNB, USDT, or bank card. Make sure you have enough ETH or BNB to cover gas fees.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="buy-img"><img src="{{asset('assets/frontend/media/stake.svg')}}"></div>
                                    <div class="buy-text">
                                        <h4>Stake-to-Mine</h4>
                                        <p>If you select the ‘Buy & Stake’ option you can start staking immediately and earn more BTCMTX tokens. Staking for mining credits (Stake-to-Mine) will be available when the app is launched.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="buy-img"><img src="{{asset('assets/frontend/media/redeem.svg')}}"></div>
                                    <div class="buy-text">
                                        <h4>Earn BTC</h4>
                                        <p>Your staked BTCMTX will generate mining credits over time. Burn mining credits to purchase bitcoin cloud mining power. The more credits you burn, the more BTC you’ll earn through cloud mining.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-calculator">
        <div class="calculator-bgr hm-pd">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-inner">
                            <div class="hm-content">
                                <h2>Bitcoin Minetrix Stake-to-Mine Dashboard</h2>
                                <p><strong>Manage all your BTCMTX tokens and mining credits in one place with the Bitcoin Minetrix dashboard. Gain cloud mining power using your mining credits earned through staking.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div style="text-align: center;" class="col-inner">
                            <img src="{{asset('assets/frontend/media/bitcoin-mining-calculator.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-join bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h2>Join Our $30K Minedrop!</h2>
                            <p>Enter our Gleam competition below to stand a chance to win one of 10 prize allocations, each worth $3,000. We aim to reward our community with $30,000 worth of $BTCMTX tokens in total. Terms and conditions apply.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-join2">
                            <h4><img src="{{asset('assets/frontend/media/favicon.ico')}}">gleam.io</h4>
                            <p>gleam.io needs to review the security of your connection before proceeding.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bitcoin-mining-competition.svg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="to-access to-roadmap bt-about hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h2>Roadmap</h2>
                            <p>Our project roadmap is set out in four phases, starting with a fair presale to raise the necessary funds for marketing and cloud mining operations and ending with the fully developed Bitcoin Minetrix platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="list-buy">
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 1: </strong>Presale and token distribution</div>
                                    <div class="buy-text">
                                        <h3>Presale</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 2: </strong>Platform development and facility setup</div>
                                    <div class="buy-text">
                                        <h3>Development</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 3: </strong>Public launch of Stake-to-Mine platform</div>
                                    <div class="buy-text">
                                        <h3>Launch</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="inner-box">
                                    <div class="phase"><strong>Phase 4: </strong>Mass adoption of the BTCMTX token</div>
                                    <div class="buy-text">
                                        <h3>Mass Adoption</h3>
                                        <ul>
                                            <li>Industry research and consultation</li>
                                            <li>Token, presale and staking contract development</li>
                                            <li>BTCMTX campaign - presale launch, claim and exchange listings</li>
                                            <li>Extensive multimedia marketing campaign launch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-token hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <img src="{{asset('assets/frontend/media/bn-small-3.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <div class="hm-content">
                            <h2>Tokenomics</h2>
                            <p>42.5% of the BTCMTX tokens will be used to fund the bitcoin mining operations of Bitcoin Minetrix. 35% of the tokens will be allocated to marketing efforts and growing BTCMTX. 12.5% is for BTCMTX staking rewards until the Bitcoin Minetrix cloud mining platform is developed. 10% is allocated to community rewards for active participation in the project.</p>
                        </div>
                        <table>
                            <tbody>
                            <tr>
                                <td>Funds</td>
                                <td>% Allocation</td>
                                <td>Token</td>
                            </tr>
                            <tr>
                                <td>Bitcoin Mining</td>
                                <td>42.5%</td>
                                <td>1,700,000,000</td>
                            </tr>
                            <tr>
                                <td>Marketing</td>
                                <td>35.0%</td>
                                <td>1,400,000,000</td>
                            </tr>
                            <tr>
                                <td>Staking</td>
                                <td>12.5%</td>
                                <td>500,000,000</td>
                            </tr>
                            <tr>
                                <td>Community</td>
                                <td>10.0%</td>
                                <td>400,000,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-questions hm-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <h2>Frequently Asked Questions</h2>
                        <p>The answers to some of your most common questions are listed here. If you can't find the info you're looking for, let our moderators know in Telegram. You can also contact us <strong>atinfo@btcminetrix.com.</strong></p>
                        <img src="{{asset('assets/frontend/media/what-is-bitcoin-mining.svg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="col-inner">
                        <!-- <div class="hm-content">
                            <button class="accordion">What is Bitcoin mining?</button>
                            <div class="panel">
                            <p>Bitcoin mining is the process of creating new bitcoin. Thousands of mining rigs compete to solve complex equations that validate Bitcoin transactions and maintain the public ledger, and earn new bitcoin (BTC) for doing so.</p>
                            </div>

                            <button class="accordion">What is cloud mining?</button>
                            <div class="panel">
                            <p>Cloud mining is the same process as bitcoin mining but allows individuals to purchase or rent a stake in third party mining operations, to remove the need to set up their own hardware.</p>
                            </div>

                            <button class="accordion">Why do we need Bitcoin Minetrix?</button>
                            <div class="panel">
                            <p>Bitcoin (BTC) mining is prohibitively expensive for the ordinary person, but anybody can buy and stake BTCMTX tokens to secure a share in the BTC Minetrix cloud mining platform. Traditional cloud mining has unfortunately been soured by scams, but Bitcoin Minetrix removes this risk with a decentralized solution to cloud mining.</p>
                            </div>
                            <button class="accordion">What is Bitcoin mining?</button>
                            <div class="panel">
                            <p>Bitcoin mining is the process of creating new bitcoin. Thousands of mining rigs compete to solve complex equations that validate Bitcoin transactions and maintain the public ledger, and earn new bitcoin (BTC) for doing so.</p>
                            </div>

                            <button class="accordion">What is cloud mining?</button>
                            <div class="panel">
                            <p>Cloud mining is the same process as bitcoin mining but allows individuals to purchase or rent a stake in third party mining operations, to remove the need to set up their own hardware.</p>
                            </div>

                            <button class="accordion">Why do we need Bitcoin Minetrix?</button>
                            <div class="panel">
                            <p>Bitcoin (BTC) mining is prohibitively expensive for the ordinary person, but anybody can buy and stake BTCMTX tokens to secure a share in the BTC Minetrix cloud mining platform. Traditional cloud mining has unfortunately been soured by scams, but Bitcoin Minetrix removes this risk with a decentralized solution to cloud mining.</p>
                            </div>
                        </div> -->
                        <section class="faq-container" aria-label="Frequently Asked Questions">
                            <details>
                                <summary>
                                    <span class="faq-title">What is Bitcoin mining?</span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is cloud mining?</span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">Why do we need Bitcoin Minetrix?</span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">How is this different to traditional cloud mining? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is the difference between tokens and credits? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is the difference between tokens and credits? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to complete.
                                </div>
                            </details>

                            <details>
                                <summary>
                                    <span class="faq-title">What is the difference between tokens and credits? </span>
                                </summary>
                                <div class="faq-content">
                                    The course is designed to be self-paced, but typically takes about 5 hours to complete.
                                </div>
                            </details>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
@endsection
