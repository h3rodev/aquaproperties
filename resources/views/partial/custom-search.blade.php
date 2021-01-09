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
                    <select name="minprice" id="minprice" class="selectpicker">
                        <option value="">Min. Price</option>
                        <?php
                            if( isset( $_GET['f'] ) && $_GET['f'] == 'sale' ) {
                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '300000' ) {
                                    ?><option selected value="300000">300,000 AED</option><?php
                                } else {
                                    ?><option value="300000">300,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '400000' ) {
                                    ?><option selected value="400000">400,000 AED</option><?php
                                } else {
                                    ?><option value="400000">400,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '500000' ) {
                                    ?><option selected value="500000">500,000 AED</option><?php
                                } else {
                                    ?><option value="500000">500,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '600000' ) {
                                    ?><option selected value="600000">600,000 AED</option><?php
                                } else {
                                    ?><option value="600000">600,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '700000' ) {
                                    ?><option selected value="700000">700,000 AED</option><?php
                                } else {
                                    ?><option value="700000">700,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '800000' ) {
                                    ?><option selected value="800000">700,000 AED</option><?php
                                } else {
                                    ?><option value="800000">700,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '900000' ) {
                                    ?><option selected value="900000">900,000 AED</option><?php
                                } else {
                                    ?><option value="900000">900,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1000000' ) {
                                    ?><option selected value="1000000">1,000,000 AED</option><?php
                                } else {
                                    ?><option value="1000000">1,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1100000' ) {
                                    ?><option selected value="1100000">1,100,000 AED</option><?php
                                } else {
                                    ?><option value="1100000">1,100,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1200000' ) {
                                    ?><option selected value="1200000">1,200,000 AED</option><?php
                                } else {
                                    ?><option value="1200000">1,200,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1300000' ) {
                                    ?><option selected value="1300000">1,300,000 AED</option><?php
                                } else {
                                    ?><option value="1300000">1,300,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1400000' ) {
                                    ?><option selected value="1400000">1,400,000 AED</option><?php
                                } else {
                                    ?><option value="1400000">1,400,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1500000' ) {
                                    ?><option selected value="1500000">1,500,000 AED</option><?php
                                } else {
                                    ?><option value="1500000">1,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1600000' ) {
                                    ?><option selected value="1600000">1,600,000 AED</option><?php
                                } else {
                                    ?><option value="1600000">1,600,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1700000' ) {
                                    ?><option selected value="1700000">1,700,000 AED</option><?php
                                } else {
                                    ?><option value="1700000">1,700,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1800000' ) {
                                    ?><option selected value="1800000">1,800,000 AED</option><?php
                                } else {
                                    ?><option value="1800000">1,800,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1900000' ) {
                                    ?><option selected value="1900000">1,900,000 AED</option><?php
                                } else {
                                    ?><option value="1900000">1,900,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2000000' ) {
                                    ?><option selected value="2000000">2,000,000 AED</option><?php
                                } else {
                                    ?><option value="2000000">2,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2100000' ) {
                                    ?><option selected value="2100000">2,100,000 AED</option><?php
                                } else {
                                    ?><option value="2100000">2,100,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2200000' ) {
                                    ?><option selected value="2200000">2,200,000 AED</option><?php
                                } else {
                                    ?><option value="2200000">2,200,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2300000' ) {
                                    ?><option selected value="2300000">2,300,000 AED</option><?php
                                } else {
                                    ?><option value="2300000">2,300,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2400000' ) {
                                    ?><option selected value="2400000">2,400,000 AED</option><?php
                                } else {
                                    ?><option value="2400000">2,400,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2500000' ) {
                                    ?><option selected value="2500000">2,500,000 AED</option><?php
                                } else {
                                    ?><option value="2500000">2,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2600000' ) {
                                    ?><option selected value="2600000">2,600,000 AED</option><?php
                                } else {
                                    ?><option value="2600000">2,600,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2700000' ) {
                                    ?><option selected value="2700000">2,700,000 AED</option><?php
                                } else {
                                    ?><option value="2700000">2,700,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2800000' ) {
                                    ?><option selected value="2800000">2,800,000 AED</option><?php
                                } else {
                                    ?><option value="2800000">2,800,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '2900000' ) {
                                    ?><option selected value="2900000">2,900,000 AED</option><?php
                                } else {
                                    ?><option value="2900000">2,900,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '3000000' ) {
                                    ?><option selected value="3000000">3,000,000 AED</option><?php
                                } else {
                                    ?><option value="3000000">3,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '3250000' ) {
                                    ?><option selected value="3250000">3,250,000 AED</option><?php
                                } else {
                                    ?><option value="3250000">3,250,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '3500000' ) {
                                    ?><option selected value="3500000">3,500,000 AED</option><?php
                                } else {
                                    ?><option value="3500000">3,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '4000000' ) {
                                    ?><option selected value="4000000">4,000,000 AED</option><?php
                                } else {
                                    ?><option value="4000000">4,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '4250000' ) {
                                    ?><option selected value="4250000">4,250,000 AED</option><?php
                                } else {
                                    ?><option value="4250000">4,250,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '4500000' ) {
                                    ?><option selected value="4500000">4,500,000 AED</option><?php
                                } else {
                                    ?><option value="4500000">4,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '5000000' ) {
                                    ?><option selected value="5000000">5,000,000 AED</option><?php
                                } else {
                                    ?><option value="5000000">5,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '5250000' ) {
                                    ?><option selected value="5250000">5,250,000 AED</option><?php
                                } else {
                                    ?><option value="5250000">5,250,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '5500000' ) {
                                    ?><option selected value="5500000">5,500,000 AED</option><?php
                                } else {
                                    ?><option value="5500000">5,500,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '6000000' ) {
                                    ?><option selected value="6000000">6,000,000 AED</option><?php
                                } else {
                                    ?><option value="6000000">6,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '7000000' ) {
                                    ?><option selected value="7000000">7,000,000 AED</option><?php
                                } else {
                                    ?><option value="7000000">7,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '8000000' ) {
                                    ?><option selected value="8000000">8,000,000 AED</option><?php
                                } else {
                                    ?><option value="8000000">8,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '9000000' ) {
                                    ?><option selected value="9000000">9,000,000 AED</option><?php
                                } else {
                                    ?><option value="9000000">9,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '10000000' ) {
                                    ?><option selected value="10000000">10,000,000 AED</option><?php
                                } else {
                                    ?><option value="10000000">10,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '25000000' ) {
                                    ?><option selected value="25000000">25,000,000 AED</option><?php
                                } else {
                                    ?><option value="25000000">25,000,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '50000000' ) {
                                    ?><option selected value="50000000">50,000,000 AED</option><?php
                                } else {
                                    ?><option value="50000000">50,000,000 AED</option><?php
                                }

                            } else {

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '20000' ) {
                                ?><option selected value="20000">20,000 AED</option><?php
                                } else {
                                    ?><option value="20000">20,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '30000' ) {
                                ?><option selected value="30000">30,000 AED</option><?php
                                } else {
                                    ?><option value="30000">30,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '40000' ) {
                                ?><option selected value="40000">40,000 AED</option><?php
                                } else {
                                    ?><option value="40000">40,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '50000' ) {
                                ?><option selected value="50000">50,000 AED</option><?php
                                } else {
                                    ?><option value="50000">50,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '60000' ) {
                                    ?><option selected value="60000">60,000 AED</option><?php
                                } else {
                                    ?><option value="60000">50,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '70000' ) {
                                    ?><option selected value="70000">70,000 AED</option><?php
                                } else {
                                    ?><option value="70000">70,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '80000' ) {
                                    ?><option selected value="80000">80,000 AED</option><?php
                                } else {
                                    ?><option value="80000">80,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '90000' ) {
                                    ?><option selected value="90000">90,000 AED</option><?php
                                } else {
                                    ?><option value="90000">90,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '100000' ) {
                                    ?><option selected value="100000">100,000 AED</option><?php
                                } else {
                                    ?><option value="100000">100,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '110000' ) {
                                    ?><option selected value="110000">110,000 AED</option><?php
                                } else {
                                    ?><option value="110000">110,000 AED</option><?php
                                }
                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '120000' ) {
                                    ?><option selected value="120000">120,000 AED</option><?php
                                } else {
                                    ?><option value="120000">120,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '130000' ) {
                                    ?><option selected value="130000">130,000 AED</option><?php
                                } else {
                                    ?><option value="130000">130,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '140000' ) {
                                    ?><option selected value="140000">140,000 AED</option><?php
                                } else {
                                    ?><option value="140000">140,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '150000' ) {
                                    ?><option selected value="150000">150,000 AED</option><?php
                                } else {
                                    ?><option value="150000">150,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '160000' ) {
                                    ?><option selected value="160000">160,000 AED</option><?php
                                } else {
                                    ?><option value="120000">160,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '170000' ) {
                                    ?><option selected value="170000">170,000 AED</option><?php
                                } else {
                                    ?><option value="170000">170,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '180000' ) {
                                    ?><option selected value="180000">180,000 AED</option><?php
                                } else {
                                    ?><option value="120000">180,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '190000' ) {
                                    ?><option selected value="190000">190,000 AED</option><?php
                                } else {
                                    ?><option value="190000">190,000 AED</option><?php
                                }

                                if ( isset( $_GET['minprice'] ) && $_GET['minprice'] == '1000000' ) {
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
                    <select name="maxprice" id="maxprice" class="selectpicker">
                        <option value="">Max. Price</option>
                        <?php

                        if( isset( $_GET['f'] ) && $_GET['f'] == 'sale' ) {
                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '300000' ) {
                                ?><option selected value="300000">300,000 AED</option><?php
                            } else {
                                ?><option value="300000">300,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '400000' ) {
                                ?><option selected value="400000">400,000 AED</option><?php
                            } else {
                                ?><option value="400000">400,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '500000' ) {
                                ?><option selected value="500000">500,000 AED</option><?php
                            } else {
                                ?><option value="500000">500,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '600000' ) {
                                ?><option selected value="600000">600,000 AED</option><?php
                            } else {
                                ?><option value="600000">600,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '700000' ) {
                                ?><option selected value="700000">700,000 AED</option><?php
                            } else {
                                ?><option value="700000">700,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '800000' ) {
                                ?><option selected value="800000">700,000 AED</option><?php
                            } else {
                                ?><option value="800000">700,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '900000' ) {
                                ?><option selected value="900000">900,000 AED</option><?php
                            } else {
                                ?><option value="900000">900,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1000000' ) {
                                ?><option selected value="1000000">1,000,000 AED</option><?php
                            } else {
                                ?><option value="1000000">1,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1100000' ) {
                                ?><option selected value="1100000">1,100,000 AED</option><?php
                            } else {
                                ?><option value="1100000">1,100,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1200000' ) {
                                ?><option selected value="1200000">1,200,000 AED</option><?php
                            } else {
                                ?><option value="1200000">1,200,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1300000' ) {
                                ?><option selected value="1300000">1,300,000 AED</option><?php
                            } else {
                                ?><option value="1300000">1,300,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1400000' ) {
                                ?><option selected value="1400000">1,400,000 AED</option><?php
                            } else {
                                ?><option value="1400000">1,400,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1500000' ) {
                                ?><option selected value="1500000">1,500,000 AED</option><?php
                            } else {
                                ?><option value="1500000">1,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1600000' ) {
                                ?><option selected value="1600000">1,600,000 AED</option><?php
                            } else {
                                ?><option value="1600000">1,600,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1700000' ) {
                                ?><option selected value="1700000">1,700,000 AED</option><?php
                            } else {
                                ?><option value="1700000">1,700,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1800000' ) {
                                ?><option selected value="1800000">1,800,000 AED</option><?php
                            } else {
                                ?><option value="1800000">1,800,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1900000' ) {
                                ?><option selected value="1900000">1,900,000 AED</option><?php
                            } else {
                                ?><option value="1900000">1,900,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2000000' ) {
                                ?><option selected value="2000000">2,000,000 AED</option><?php
                            } else {
                                ?><option value="2000000">2,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2100000' ) {
                                ?><option selected value="2100000">2,100,000 AED</option><?php
                            } else {
                                ?><option value="2100000">2,100,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2200000' ) {
                                ?><option selected value="2200000">2,200,000 AED</option><?php
                            } else {
                                ?><option value="2200000">2,200,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2300000' ) {
                                ?><option selected value="2300000">2,300,000 AED</option><?php
                            } else {
                                ?><option value="2300000">2,300,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2400000' ) {
                                ?><option selected value="2400000">2,400,000 AED</option><?php
                            } else {
                                ?><option value="2400000">2,400,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2500000' ) {
                                ?><option selected value="2500000">2,500,000 AED</option><?php
                            } else {
                                ?><option value="2500000">2,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2600000' ) {
                                ?><option selected value="2600000">2,600,000 AED</option><?php
                            } else {
                                ?><option value="2600000">2,600,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2700000' ) {
                                ?><option selected value="2700000">2,700,000 AED</option><?php
                            } else {
                                ?><option value="2700000">2,700,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2800000' ) {
                                ?><option selected value="2800000">2,800,000 AED</option><?php
                            } else {
                                ?><option value="2800000">2,800,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '2900000' ) {
                                ?><option selected value="2900000">2,900,000 AED</option><?php
                            } else {
                                ?><option value="2900000">2,900,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '3000000' ) {
                                ?><option selected value="3000000">3,000,000 AED</option><?php
                            } else {
                                ?><option value="3000000">3,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '3250000' ) {
                                ?><option selected value="3250000">3,250,000 AED</option><?php
                            } else {
                                ?><option value="3250000">3,250,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '3500000' ) {
                                ?><option selected value="3500000">3,500,000 AED</option><?php
                            } else {
                                ?><option value="3500000">3,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '4000000' ) {
                                ?><option selected value="4000000">4,000,000 AED</option><?php
                            } else {
                                ?><option value="4000000">4,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '4250000' ) {
                                ?><option selected value="4250000">4,250,000 AED</option><?php
                            } else {
                                ?><option value="4250000">4,250,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '4500000' ) {
                                ?><option selected value="4500000">4,500,000 AED</option><?php
                            } else {
                                ?><option value="4500000">4,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '5000000' ) {
                                ?><option selected value="5000000">5,000,000 AED</option><?php
                            } else {
                                ?><option value="5000000">5,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '5250000' ) {
                                ?><option selected value="5250000">5,250,000 AED</option><?php
                            } else {
                                ?><option value="5250000">5,250,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '5500000' ) {
                                ?><option selected value="5500000">5,500,000 AED</option><?php
                            } else {
                                ?><option value="5500000">5,500,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '6000000' ) {
                                ?><option selected value="6000000">6,000,000 AED</option><?php
                            } else {
                                ?><option value="6000000">6,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '7000000' ) {
                                ?><option selected value="7000000">7,000,000 AED</option><?php
                            } else {
                                ?><option value="7000000">7,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '8000000' ) {
                                ?><option selected value="8000000">8,000,000 AED</option><?php
                            } else {
                                ?><option value="8000000">8,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '9000000' ) {
                                ?><option selected value="9000000">9,000,000 AED</option><?php
                            } else {
                                ?><option value="9000000">9,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '10000000' ) {
                                ?><option selected value="10000000">10,000,000 AED</option><?php
                            } else {
                                ?><option value="10000000">10,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '25000000' ) {
                                ?><option selected value="25000000">25,000,000 AED</option><?php
                            } else {
                                ?><option value="25000000">25,000,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '50000000' ) {
                                ?><option selected value="50000000">50,000,000 AED</option><?php
                            } else {
                                ?><option value="50000000">50,000,000 AED</option><?php
                            }
                        } else {
                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '20000' ) {
                            ?><option selected value="20000">20,000 AED</option><?php
                            } else {
                                ?><option value="20000">20,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '30000' ) {
                            ?><option selected value="30000">30,000 AED</option><?php
                            } else {
                                ?><option value="30000">30,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '40000' ) {
                            ?><option selected value="40000">40,000 AED</option><?php
                            } else {
                                ?><option value="40000">40,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '50000' ) {
                            ?><option selected value="50000">50,000 AED</option><?php
                            } else {
                                ?><option value="50000">50,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '60000' ) {
                                ?><option selected value="60000">60,000 AED</option><?php
                            } else {
                                ?><option value="60000">50,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '70000' ) {
                                ?><option selected value="70000">70,000 AED</option><?php
                            } else {
                                ?><option value="70000">70,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '80000' ) {
                                ?><option selected value="80000">80,000 AED</option><?php
                            } else {
                                ?><option value="80000">80,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '90000' ) {
                                ?><option selected value="90000">90,000 AED</option><?php
                            } else {
                                ?><option value="90000">90,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '100000' ) {
                                ?><option selected value="100000">100,000 AED</option><?php
                            } else {
                                ?><option value="100000">100,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '110000' ) {
                                ?><option selected value="110000">110,000 AED</option><?php
                            } else {
                                ?><option value="110000">110,000 AED</option><?php
                            }
                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '120000' ) {
                                ?><option selected value="120000">120,000 AED</option><?php
                            } else {
                                ?><option value="120000">120,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '130000' ) {
                                ?><option selected value="130000">130,000 AED</option><?php
                            } else {
                                ?><option value="130000">130,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '140000' ) {
                                ?><option selected value="140000">140,000 AED</option><?php
                            } else {
                                ?><option value="140000">140,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '150000' ) {
                                ?><option selected value="150000">150,000 AED</option><?php
                            } else {
                                ?><option value="150000">150,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '160000' ) {
                                ?><option selected value="160000">160,000 AED</option><?php
                            } else {
                                ?><option value="120000">160,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '170000' ) {
                                ?><option selected value="170000">170,000 AED</option><?php
                            } else {
                                ?><option value="170000">170,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '180000' ) {
                                ?><option selected value="180000">180,000 AED</option><?php
                            } else {
                                ?><option value="120000">180,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '190000' ) {
                                ?><option selected value="190000">190,000 AED</option><?php
                            } else {
                                ?><option value="190000">190,000 AED</option><?php
                            }

                            if ( isset( $_GET['maxprice'] ) && $_GET['maxprice'] == '1000000' ) {
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
                    <select name="minbed" id="minbed" class="selectpicker">
                        <option value="">Min. Bed</option>
                        <?php
                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '0' ) {
                                ?><option selected value="0">Studio</option><?php
                            } else {
                                ?><option value="0">Studio</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '1' ) {
                                ?><option selected value="1">1 BR</option><?php
                            } else {
                                ?><option value="1">1 BR</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '2' ) {
                                ?><option selected value="2">2 BR</option><?php
                            } else {
                                ?><option value="2">2 BR</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '3' ) {
                                ?><option selected value="3">3 BR</option><?php
                            } else {
                                ?><option value="3">3 BR</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '4' ) {
                                ?><option selected value="4">4 BR</option><?php
                            } else {
                                ?><option value="4">4 BR</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '5' ) {
                                ?><option selected value="5">5 BR</option><?php
                            } else {
                                ?><option value="5">5 BR</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '6' ) {
                                ?><option selected value="6">6 BR</option><?php
                            } else {
                                ?><option value="6">6 BR</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '7' ) {
                                ?><option selected value="7">7 BR</option><?php
                            } else {
                                ?><option value="7">7 BR</option><?php
                            }

                            if ( isset( $_GET['minbed'] ) && $_GET['minbed'] == '8' ) {
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
                    <select name="maxbed" id="maxbed" class="selectpicker">
                        <option value="">Max. Bed</option>
                        <?php
                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '0' ) {
                                ?><option selected value="0">Studio</option><?php
                            } else {
                                ?><option value="0">Studio</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '1' ) {
                                ?><option selected value="1">1 BR</option><?php
                            } else {
                                ?><option value="1">1 BR</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '2' ) {
                                ?><option selected value="2">2 BR</option><?php
                            } else {
                                ?><option value="2">2 BR</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '3' ) {
                                ?><option selected value="3">3 BR</option><?php
                            } else {
                                ?><option value="3">3 BR</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '4' ) {
                                ?><option selected value="4">4 BR</option><?php
                            } else {
                                ?><option value="4">4 BR</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '5' ) {
                                ?><option selected value="5">5 BR</option><?php
                            } else {
                                ?><option value="5">5 BR</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '6' ) {
                                ?><option selected value="6">6 BR</option><?php
                            } else {
                                ?><option value="6">6 BR</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '7' ) {
                                ?><option selected value="7">7 BR</option><?php
                            } else {
                                ?><option value="7">7 BR</option><?php
                            }

                            if ( isset( $_GET['maxbed'] ) && $_GET['maxbed'] == '8' ) {
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


