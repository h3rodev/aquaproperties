<?php 
    $url = $_SERVER['REQUEST_URI'];
    $queries = explode('&', parse_url($url, PHP_URL_QUERY) );
?>


    <form action="/property-search/" id="advance-search">
        
        <div class="advace-search">
            <div class="search-holder price-search">
                <?php
                
                    if ( isset( $_GET['a'] ) ) {
                        ?><input type="text" name="a" id="a" placeholder="Community / Building" value="{{ $_GET['a'] }}" class="typeahead tt-query" autocomplete="off" spellcheck="false"><?php
                    } else {
                        ?><input type="text" name="a" id="a" placeholder="Community / Building" class="typeahead tt-query" autocomplete="off" spellcheck="false"><?php
                    }
                ?>
                
            </div>
            <div class="search-holder">
                <div class="form-check">
                    <select name="f" id="f" class="selectpicker">
                        <option value="">Property For</option>
                        <?php
                        if ( isset( $_GET['f'] ) && $_GET['f'] == 'rent' ) {
                        ?><option selected value="rent">Rent</option><?php
                        } else {
                            ?><option value="rent">Rent</option><?php
                        }
                        ?>
                        <?php
                        if ( isset( $_GET['f'] ) && $_GET['f'] == 'sale' ) {
                        ?><option selected value="sale">Sale</option><?php
                        } else {
                            ?><option value="sale">Sale</option><?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="search-holder">
                <div class="form-check">
                    <select name="c" id="c" class="selectpicker">
                        <option value="">Property Type</option>

                            <?php
                            if( isset( $_GET['type'] ) && $_GET['type'] == 'commercial' ){
                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'offices' ) {
                                    ?><option selected value="offices">Offices</option><?php
                                } else {
                                    ?><option value="offices">Offices</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'warehouses' ) {
                                    ?><option selected value="warehouses">Warehouses</option><?php
                                } else {
                                    ?><option value="warehouses">Warehouses</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'shops' ) {
                                    ?><option selected value="shops">Shops</option><?php
                                } else {
                                    ?><option value="shops">Shops</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'retails' ) {
                                    ?><option selected value="retails">Retails</option><?php
                                } else {
                                    ?><option value="retails">Retails</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'office_spaces' ) {
                                    ?><option selected value="office_spaces">Office Spaces</option><?php
                                } else {
                                    ?><option value="office_spaces">Office Spaces</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'commercial_villas' ) {
                                    ?><option selected value="commercial_villas">Commercial Villas</option><?php
                                } else {
                                    ?><option value="commercial_villas">Commercial Villas</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'commertial_full_buildings' ) {
                                    ?><option selected value="commertial_full_buildings">Commertial Full Buildings</option><?php
                                } else {
                                    ?><option value="commertial_full_buildings">Commertial Full Buildings</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'land_plots' ) {
                                    ?><option selected value="land_plots">Land Plots</option><?php
                                } else {
                                    ?><option value="land_plots">Land Plots</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'labor_camps' ) {
                                    ?><option selected value="labor_camps">Labor Camps</option><?php
                                } else {
                                    ?><option value="labor_camps">Labor Camps</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'show_rooms' ) {
                                    ?><option selected value="show_rooms">Show Rooms</option><?php
                                } else {
                                    ?><option value="show_rooms">Show Rooms</option><?php
                                }

                            } else {
                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'apartments' ) {
                                    ?><option selected value="apartments">Apartments</option><?php
                                } else {
                                    ?><option value="apartments">Apartments</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'villas' ) {
                                    ?><option selected value="villas">Villas</option><?php
                                } else {
                                    ?><option value="villas">Villas</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'townhouses' ) {
                                    ?><option selected value="townhouses">Townhouses</option><?php
                                } else {
                                    ?><option value="townhouses">Townhouses</option><?php
                                }

                                

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'penthouses' ) {
                                    ?><option selected value="penthouses">Penthouses</option><?php
                                } else {
                                    ?><option value="penthouses">Penthouses</option><?php
                                }

                                if ( isset( $_GET['c'] ) && $_GET['c'] ==  'hotel_apartments' ) {
                                    ?><option selected value="hotel_apartments">Hotel Apartments</option><?php
                                } else {
                                    ?><option value="hotel_apartments">Hotel Apartments</option><?php
                                }
                            }
                            ?>


                    </select>
                </div>
            </div>

            <div class="search-holder">
                <div class="form-check">
                    <select name="min-price" id="min-price" class="selectpicker">
                        <option value="">Min. Price</option>
                        <?php
                            if( isset( $_GET['f'] ) && $_GET['f'] == 'sale' ) {
                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '300000' ) {
                                    ?><option selected value="300000">300,000 AED</option><?php
                                } else {
                                    ?><option value="300000">300,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '400000' ) {
                                    ?><option selected value="400000">400,000 AED</option><?php
                                } else {
                                    ?><option value="400000">400,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '500000' ) {
                                    ?><option selected value="500000">500,000 AED</option><?php
                                } else {
                                    ?><option value="500000">500,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '600000' ) {
                                    ?><option selected value="600000">600,000 AED</option><?php
                                } else {
                                    ?><option value="600000">600,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '700000' ) {
                                    ?><option selected value="700000">700,000 AED</option><?php
                                } else {
                                    ?><option value="700000">700,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '800000' ) {
                                    ?><option selected value="800000">700,000 AED</option><?php
                                } else {
                                    ?><option value="800000">700,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '900000' ) {
                                    ?><option selected value="900000">900,000 AED</option><?php
                                } else {
                                    ?><option value="900000">900,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1000000' ) {
                                    ?><option selected value="1000000">1,000,000 AED</option><?php
                                } else {
                                    ?><option value="1000000">1,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1100000' ) {
                                    ?><option selected value="1100000">1,100,000 AED</option><?php
                                } else {
                                    ?><option value="1100000">1,100,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1200000' ) {
                                    ?><option selected value="1200000">1,200,000 AED</option><?php
                                } else {
                                    ?><option value="1200000">1,200,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1300000' ) {
                                    ?><option selected value="1300000">1,300,000 AED</option><?php
                                } else {
                                    ?><option value="1300000">1,300,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1400000' ) {
                                    ?><option selected value="1400000">1,400,000 AED</option><?php
                                } else {
                                    ?><option value="1400000">1,400,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1500000' ) {
                                    ?><option selected value="1500000">1,500,000 AED</option><?php
                                } else {
                                    ?><option value="1500000">1,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1600000' ) {
                                    ?><option selected value="1600000">1,600,000 AED</option><?php
                                } else {
                                    ?><option value="1600000">1,600,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1700000' ) {
                                    ?><option selected value="1700000">1,700,000 AED</option><?php
                                } else {
                                    ?><option value="1700000">1,700,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1800000' ) {
                                    ?><option selected value="1800000">1,800,000 AED</option><?php
                                } else {
                                    ?><option value="1800000">1,800,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1900000' ) {
                                    ?><option selected value="1900000">1,900,000 AED</option><?php
                                } else {
                                    ?><option value="1900000">1,900,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2000000' ) {
                                    ?><option selected value="2000000">2,000,000 AED</option><?php
                                } else {
                                    ?><option value="2000000">2,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2100000' ) {
                                    ?><option selected value="2100000">2,100,000 AED</option><?php
                                } else {
                                    ?><option value="2100000">2,100,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2200000' ) {
                                    ?><option selected value="2200000">2,200,000 AED</option><?php
                                } else {
                                    ?><option value="2200000">2,200,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2300000' ) {
                                    ?><option selected value="2300000">2,300,000 AED</option><?php
                                } else {
                                    ?><option value="2300000">2,300,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2400000' ) {
                                    ?><option selected value="2400000">2,400,000 AED</option><?php
                                } else {
                                    ?><option value="2400000">2,400,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2500000' ) {
                                    ?><option selected value="2500000">2,500,000 AED</option><?php
                                } else {
                                    ?><option value="2500000">2,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2600000' ) {
                                    ?><option selected value="2600000">2,600,000 AED</option><?php
                                } else {
                                    ?><option value="2600000">2,600,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2700000' ) {
                                    ?><option selected value="2700000">2,700,000 AED</option><?php
                                } else {
                                    ?><option value="2700000">2,700,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2800000' ) {
                                    ?><option selected value="2800000">2,800,000 AED</option><?php
                                } else {
                                    ?><option value="2800000">2,800,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '2900000' ) {
                                    ?><option selected value="2900000">2,900,000 AED</option><?php
                                } else {
                                    ?><option value="2900000">2,900,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '3000000' ) {
                                    ?><option selected value="3000000">3,000,000 AED</option><?php
                                } else {
                                    ?><option value="3000000">3,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '3250000' ) {
                                    ?><option selected value="3250000">3,250,000 AED</option><?php
                                } else {
                                    ?><option value="3250000">3,250,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '3500000' ) {
                                    ?><option selected value="3500000">3,500,000 AED</option><?php
                                } else {
                                    ?><option value="3500000">3,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '4000000' ) {
                                    ?><option selected value="4000000">4,000,000 AED</option><?php
                                } else {
                                    ?><option value="4000000">4,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '4250000' ) {
                                    ?><option selected value="4250000">4,250,000 AED</option><?php
                                } else {
                                    ?><option value="4250000">4,250,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '4500000' ) {
                                    ?><option selected value="4500000">4,500,000 AED</option><?php
                                } else {
                                    ?><option value="4500000">4,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '5000000' ) {
                                    ?><option selected value="5000000">5,000,000 AED</option><?php
                                } else {
                                    ?><option value="5000000">5,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '5250000' ) {
                                    ?><option selected value="5250000">5,250,000 AED</option><?php
                                } else {
                                    ?><option value="5250000">5,250,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '5500000' ) {
                                    ?><option selected value="5500000">5,500,000 AED</option><?php
                                } else {
                                    ?><option value="5500000">5,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '6000000' ) {
                                    ?><option selected value="6000000">6,000,000 AED</option><?php
                                } else {
                                    ?><option value="6000000">6,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '7000000' ) {
                                    ?><option selected value="7000000">7,000,000 AED</option><?php
                                } else {
                                    ?><option value="7000000">7,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '8000000' ) {
                                    ?><option selected value="8000000">8,000,000 AED</option><?php
                                } else {
                                    ?><option value="8000000">8,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '9000000' ) {
                                    ?><option selected value="9000000">9,000,000 AED</option><?php
                                } else {
                                    ?><option value="9000000">9,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '10000000' ) {
                                    ?><option selected value="10000000">10,000,000 AED</option><?php
                                } else {
                                    ?><option value="10000000">10,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '25000000' ) {
                                    ?><option selected value="25000000">25,000,000 AED</option><?php
                                } else {
                                    ?><option value="25000000">25,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '50000000' ) {
                                    ?><option selected value="50000000">50,000,000 AED</option><?php
                                } else {
                                    ?><option value="50000000">50,000,000 AED</option><?php
                                }

                            } else {

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '20000' ) {
                                ?><option selected value="20000">20,000 AED</option><?php
                                } else {
                                    ?><option value="20000">20,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '30000' ) {
                                ?><option selected value="30000">30,000 AED</option><?php
                                } else {
                                    ?><option value="30000">30,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '40000' ) {
                                ?><option selected value="40000">40,000 AED</option><?php
                                } else {
                                    ?><option value="40000">40,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '50000' ) {
                                ?><option selected value="50000">50,000 AED</option><?php
                                } else {
                                    ?><option value="50000">50,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '60000' ) {
                                    ?><option selected value="60000">60,000 AED</option><?php
                                } else {
                                    ?><option value="60000">50,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '70000' ) {
                                    ?><option selected value="70000">70,000 AED</option><?php
                                } else {
                                    ?><option value="70000">70,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '80000' ) {
                                    ?><option selected value="80000">80,000 AED</option><?php
                                } else {
                                    ?><option value="80000">80,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '90000' ) {
                                    ?><option selected value="90000">90,000 AED</option><?php
                                } else {
                                    ?><option value="90000">90,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '100000' ) {
                                    ?><option selected value="100000">100,000 AED</option><?php
                                } else {
                                    ?><option value="100000">100,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '110000' ) {
                                    ?><option selected value="110000">110,000 AED</option><?php
                                } else {
                                    ?><option value="110000">110,000 AED</option><?php
                                }
                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '120000' ) {
                                    ?><option selected value="120000">120,000 AED</option><?php
                                } else {
                                    ?><option value="120000">120,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '130000' ) {
                                    ?><option selected value="130000">130,000 AED</option><?php
                                } else {
                                    ?><option value="130000">130,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '140000' ) {
                                    ?><option selected value="140000">140,000 AED</option><?php
                                } else {
                                    ?><option value="140000">140,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '150000' ) {
                                    ?><option selected value="150000">150,000 AED</option><?php
                                } else {
                                    ?><option value="150000">150,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '160000' ) {
                                    ?><option selected value="160000">160,000 AED</option><?php
                                } else {
                                    ?><option value="120000">160,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '170000' ) {
                                    ?><option selected value="170000">170,000 AED</option><?php
                                } else {
                                    ?><option value="170000">170,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '180000' ) {
                                    ?><option selected value="180000">180,000 AED</option><?php
                                } else {
                                    ?><option value="120000">180,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '190000' ) {
                                    ?><option selected value="190000">190,000 AED</option><?php
                                } else {
                                    ?><option value="190000">190,000 AED</option><?php
                                }

                                if ( isset( $_GET['min-price'] ) && $_GET['min-price'] == '1000000' ) {
                                    ?><option selected value="1000000">1,000,000 AED</option><?php
                                } else {
                                    ?><option value="1000000">1,000,000 AED</option><?php
                                }
                                                                
                            }

                        ?>
                    </select>
                </div>
            </div>
            <div class="search-holder">
                <div class="form-check">
                    <select name="max-price" id="max-price" class="selectpicker">
                        <option value="">Max. Price</option>
                        <?php

                        if( isset( $_GET['f'] ) && $_GET['f'] == 'sale' ) {
                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '300000' ) {
                                ?><option selected value="300000">300,000 AED</option><?php
                            } else {
                                ?><option value="300000">300,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '400000' ) {
                                ?><option selected value="400000">400,000 AED</option><?php
                            } else {
                                ?><option value="400000">400,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '500000' ) {
                                ?><option selected value="500000">500,000 AED</option><?php
                            } else {
                                ?><option value="500000">500,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '600000' ) {
                                ?><option selected value="600000">600,000 AED</option><?php
                            } else {
                                ?><option value="600000">600,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '700000' ) {
                                ?><option selected value="700000">700,000 AED</option><?php
                            } else {
                                ?><option value="700000">700,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '800000' ) {
                                ?><option selected value="800000">700,000 AED</option><?php
                            } else {
                                ?><option value="800000">700,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '900000' ) {
                                ?><option selected value="900000">900,000 AED</option><?php
                            } else {
                                ?><option value="900000">900,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1000000' ) {
                                ?><option selected value="1000000">1,000,000 AED</option><?php
                            } else {
                                ?><option value="1000000">1,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1100000' ) {
                                ?><option selected value="1100000">1,100,000 AED</option><?php
                            } else {
                                ?><option value="1100000">1,100,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1200000' ) {
                                ?><option selected value="1200000">1,200,000 AED</option><?php
                            } else {
                                ?><option value="1200000">1,200,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1300000' ) {
                                ?><option selected value="1300000">1,300,000 AED</option><?php
                            } else {
                                ?><option value="1300000">1,300,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1400000' ) {
                                ?><option selected value="1400000">1,400,000 AED</option><?php
                            } else {
                                ?><option value="1400000">1,400,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1500000' ) {
                                ?><option selected value="1500000">1,500,000 AED</option><?php
                            } else {
                                ?><option value="1500000">1,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1600000' ) {
                                ?><option selected value="1600000">1,600,000 AED</option><?php
                            } else {
                                ?><option value="1600000">1,600,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1700000' ) {
                                ?><option selected value="1700000">1,700,000 AED</option><?php
                            } else {
                                ?><option value="1700000">1,700,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1800000' ) {
                                ?><option selected value="1800000">1,800,000 AED</option><?php
                            } else {
                                ?><option value="1800000">1,800,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1900000' ) {
                                ?><option selected value="1900000">1,900,000 AED</option><?php
                            } else {
                                ?><option value="1900000">1,900,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2000000' ) {
                                ?><option selected value="2000000">2,000,000 AED</option><?php
                            } else {
                                ?><option value="2000000">2,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2100000' ) {
                                ?><option selected value="2100000">2,100,000 AED</option><?php
                            } else {
                                ?><option value="2100000">2,100,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2200000' ) {
                                ?><option selected value="2200000">2,200,000 AED</option><?php
                            } else {
                                ?><option value="2200000">2,200,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2300000' ) {
                                ?><option selected value="2300000">2,300,000 AED</option><?php
                            } else {
                                ?><option value="2300000">2,300,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2400000' ) {
                                ?><option selected value="2400000">2,400,000 AED</option><?php
                            } else {
                                ?><option value="2400000">2,400,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2500000' ) {
                                ?><option selected value="2500000">2,500,000 AED</option><?php
                            } else {
                                ?><option value="2500000">2,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2600000' ) {
                                ?><option selected value="2600000">2,600,000 AED</option><?php
                            } else {
                                ?><option value="2600000">2,600,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2700000' ) {
                                ?><option selected value="2700000">2,700,000 AED</option><?php
                            } else {
                                ?><option value="2700000">2,700,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2800000' ) {
                                ?><option selected value="2800000">2,800,000 AED</option><?php
                            } else {
                                ?><option value="2800000">2,800,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '2900000' ) {
                                ?><option selected value="2900000">2,900,000 AED</option><?php
                            } else {
                                ?><option value="2900000">2,900,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '3000000' ) {
                                ?><option selected value="3000000">3,000,000 AED</option><?php
                            } else {
                                ?><option value="3000000">3,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '3250000' ) {
                                ?><option selected value="3250000">3,250,000 AED</option><?php
                            } else {
                                ?><option value="3250000">3,250,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '3500000' ) {
                                ?><option selected value="3500000">3,500,000 AED</option><?php
                            } else {
                                ?><option value="3500000">3,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '4000000' ) {
                                ?><option selected value="4000000">4,000,000 AED</option><?php
                            } else {
                                ?><option value="4000000">4,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '4250000' ) {
                                ?><option selected value="4250000">4,250,000 AED</option><?php
                            } else {
                                ?><option value="4250000">4,250,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '4500000' ) {
                                ?><option selected value="4500000">4,500,000 AED</option><?php
                            } else {
                                ?><option value="4500000">4,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '5000000' ) {
                                ?><option selected value="5000000">5,000,000 AED</option><?php
                            } else {
                                ?><option value="5000000">5,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '5250000' ) {
                                ?><option selected value="5250000">5,250,000 AED</option><?php
                            } else {
                                ?><option value="5250000">5,250,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '5500000' ) {
                                ?><option selected value="5500000">5,500,000 AED</option><?php
                            } else {
                                ?><option value="5500000">5,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '6000000' ) {
                                ?><option selected value="6000000">6,000,000 AED</option><?php
                            } else {
                                ?><option value="6000000">6,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '7000000' ) {
                                ?><option selected value="7000000">7,000,000 AED</option><?php
                            } else {
                                ?><option value="7000000">7,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '8000000' ) {
                                ?><option selected value="8000000">8,000,000 AED</option><?php
                            } else {
                                ?><option value="8000000">8,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '9000000' ) {
                                ?><option selected value="9000000">9,000,000 AED</option><?php
                            } else {
                                ?><option value="9000000">9,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '10000000' ) {
                                ?><option selected value="10000000">10,000,000 AED</option><?php
                            } else {
                                ?><option value="10000000">10,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '25000000' ) {
                                ?><option selected value="25000000">25,000,000 AED</option><?php
                            } else {
                                ?><option value="25000000">25,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '50000000' ) {
                                ?><option selected value="50000000">50,000,000 AED</option><?php
                            } else {
                                ?><option value="50000000">50,000,000 AED</option><?php
                            }
                        } else {
                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '20000' ) {
                            ?><option selected value="20000">20,000 AED</option><?php
                            } else {
                                ?><option value="20000">20,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '30000' ) {
                            ?><option selected value="30000">30,000 AED</option><?php
                            } else {
                                ?><option value="30000">30,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '40000' ) {
                            ?><option selected value="40000">40,000 AED</option><?php
                            } else {
                                ?><option value="40000">40,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '50000' ) {
                            ?><option selected value="50000">50,000 AED</option><?php
                            } else {
                                ?><option value="50000">50,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '60000' ) {
                                ?><option selected value="60000">60,000 AED</option><?php
                            } else {
                                ?><option value="60000">50,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '70000' ) {
                                ?><option selected value="70000">70,000 AED</option><?php
                            } else {
                                ?><option value="70000">70,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '80000' ) {
                                ?><option selected value="80000">80,000 AED</option><?php
                            } else {
                                ?><option value="80000">80,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '90000' ) {
                                ?><option selected value="90000">90,000 AED</option><?php
                            } else {
                                ?><option value="90000">90,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '100000' ) {
                                ?><option selected value="100000">100,000 AED</option><?php
                            } else {
                                ?><option value="100000">100,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '110000' ) {
                                ?><option selected value="110000">110,000 AED</option><?php
                            } else {
                                ?><option value="110000">110,000 AED</option><?php
                            }
                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '120000' ) {
                                ?><option selected value="120000">120,000 AED</option><?php
                            } else {
                                ?><option value="120000">120,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '130000' ) {
                                ?><option selected value="130000">130,000 AED</option><?php
                            } else {
                                ?><option value="130000">130,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '140000' ) {
                                ?><option selected value="140000">140,000 AED</option><?php
                            } else {
                                ?><option value="140000">140,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '150000' ) {
                                ?><option selected value="150000">150,000 AED</option><?php
                            } else {
                                ?><option value="150000">150,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '160000' ) {
                                ?><option selected value="160000">160,000 AED</option><?php
                            } else {
                                ?><option value="120000">160,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '170000' ) {
                                ?><option selected value="170000">170,000 AED</option><?php
                            } else {
                                ?><option value="170000">170,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '180000' ) {
                                ?><option selected value="180000">180,000 AED</option><?php
                            } else {
                                ?><option value="120000">180,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '190000' ) {
                                ?><option selected value="190000">190,000 AED</option><?php
                            } else {
                                ?><option value="190000">190,000 AED</option><?php
                            }

                            if ( isset( $_GET['max-price'] ) && $_GET['max-price'] == '1000000' ) {
                                ?><option selected value="1000000">1,000,000 AED</option><?php
                            } else {
                                ?><option value="1000000">1,000,000 AED</option><?php
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>



            <div class="search-holder">
                <div class="form-check">
                    <select name="min-bed" id="min-bed" class="selectpicker">
                        <option value="">Min. Bed</option>
                        <?php
                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '0' ) {
                                ?><option selected value="0">Studio</option><?php
                            } else {
                                ?><option value="0">Studio</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '1' ) {
                                ?><option selected value="1">1 BR</option><?php
                            } else {
                                ?><option value="1">1 BR</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '2' ) {
                                ?><option selected value="2">2 BR</option><?php
                            } else {
                                ?><option value="2">2 BR</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '3' ) {
                                ?><option selected value="3">3 BR</option><?php
                            } else {
                                ?><option value="3">3 BR</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '4' ) {
                                ?><option selected value="4">4 BR</option><?php
                            } else {
                                ?><option value="4">4 BR</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '5' ) {
                                ?><option selected value="5">5 BR</option><?php
                            } else {
                                ?><option value="5">5 BR</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '6' ) {
                                ?><option selected value="6">6 BR</option><?php
                            } else {
                                ?><option value="6">6 BR</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '7' ) {
                                ?><option selected value="7">7 BR</option><?php
                            } else {
                                ?><option value="7">7 BR</option><?php
                            }

                            if ( isset( $_GET['min-bed'] ) && $_GET['min-bed'] == '8' ) {
                                ?><option selected value="8">8 BR</option><?php
                            } else {
                                ?><option value="8">8 BR</option><?php
                            }
                        ?>

                    </select>
                </div>
            </div>
            <div class="search-holder">
                <div class="form-check">
                    <select name="max-bed" id="max-bed" class="selectpicker">
                        <option value="">Max. Bed</option>
                        <?php
                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '0' ) {
                                ?><option selected value="0">Studio</option><?php
                            } else {
                                ?><option value="0">Studio</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '1' ) {
                                ?><option selected value="1">1 BR</option><?php
                            } else {
                                ?><option value="1">1 BR</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '2' ) {
                                ?><option selected value="2">2 BR</option><?php
                            } else {
                                ?><option value="2">2 BR</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '3' ) {
                                ?><option selected value="3">3 BR</option><?php
                            } else {
                                ?><option value="3">3 BR</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '4' ) {
                                ?><option selected value="4">4 BR</option><?php
                            } else {
                                ?><option value="4">4 BR</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '5' ) {
                                ?><option selected value="5">5 BR</option><?php
                            } else {
                                ?><option value="5">5 BR</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '6' ) {
                                ?><option selected value="6">6 BR</option><?php
                            } else {
                                ?><option value="6">6 BR</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '7' ) {
                                ?><option selected value="7">7 BR</option><?php
                            } else {
                                ?><option value="7">7 BR</option><?php
                            }

                            if ( isset( $_GET['max-bed'] ) && $_GET['max-bed'] == '8' ) {
                                ?><option selected value="8">8 BR</option><?php
                            } else {
                                ?><option value="8">8 BR</option><?php
                            }
                        ?>
                    </select>
                </div>
            </div>                           

            <div class="search-holder search-button">
                <button class="btn aqua-btn-blue" type="submit">
                    Search
                </button>
            </div>

        </div>
    </form>


