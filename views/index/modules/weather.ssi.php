<div class="small-12 module weather">
    <h1 class="title">Weather</h1>

    <div class="small-12 columns content">
        <div class="head">
            <div class="small-8 columns date">
                <?php echo date('l');?>
                    <span class="black">
                        <?php echo date('M');?>
                        <span class="numbers"><?php echo date('j');?>, <?php echo date('Y');?></span>
                    </span>
            </div><!--date-->

            <div class="small-4 columns time">
                <span class="black numbers"><?php echo date('g:i');?></span>
                <span class="meridiem"><?php echo date('A');?></span>&nbsp;
                EST
            </div><!--time-->

            <div class="clearfix"></div>
        </div><!--head-->

        <div class="small-12 city-search">
            <form method="post">
                <div class="row collapse">
                    <label for="search">Search</label>
                    <div class="small-10 columns search-box"><input type="search" name="search" placeholder="City or Zip"></div>

                    <div class="small-2 columns search-submit"><input type="submit" name="search-submit" value="" class="postfix"></div>
                </div
            </form>
        </div>

        <div class="small-12 city-info">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="1" class="thermometer <?php echo $this->weatherConditions->currently->thermometer;?>"></td>

                    <td colspan="1" class="main-stats">
                        <table cellpadding="0" cellspacing="0">
                            <tr class="location">
                                <td>
                                    <p class="city">Columbia, <span class="black">SC</span></p>

                                    <p class="latlong">Lon. <?php echo sprintf('%0.2f',$this->weatherConditions->longitude);?>
                                        Lat. <?php echo sprintf('%0.2f',$this->weatherConditions->latitude);?></p>
                                </td>
                            </tr><!--location-->

                            <tr class="forecast">
                                <td>
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td colspan="1" class="current-stats">
                                                <table cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td colspan="2" class="temperature">
                                                            <h2 class="white">
                                                                <?php echo round($this->weatherConditions->currently->temperature);?>&deg;F
                                                            </h2>
                                                            <h2 class="light"> /
                                                                <?php echo round(($this->weatherConditions->currently->temperature-32)*(9/5));?>&deg;C
                                                            </h2>

                                                            <div class="feels-like">
                                                                <span class="small">Feels Like </span>
                                                                <span class="white">
                                                                    <?php echo round($this->weatherConditions->currently->apparentTemperature);?>&deg;F&deg;F
                                                                </span>
                                                                / <?php echo round(($this->weatherConditions->currently->apparentTemperature-32)*(9/5));?>&deg;C
                                                            </div><!--feel like-->
                                                        </td><!--temperature-->
                                                    </tr>

                                                    <tr>
                                                        <td colpsan="1" class="sunrise">
                                                            <h6>Sunrise</h6>
                                                            <h4><?php echo date('g:ia',strtotime($this->weatherConditions->sunrise));?></h4>
                                                        </td><!--sunrise-->

                                                        <td colpsan="1" class="sunset">
                                                            <h6>Sunset</h6>
                                                            <h4><?php echo date('g:ia',strtotime($this->weatherConditions->sunset));?></h4>
                                                        </td><!--sunset-->
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" class="chances">
                                                            <table cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td class="precipitation">
                                                                        <p>Chance of</p>
                                                                        <p>Precipitation</p>
                                                                        <h5>
                                                                            <?php echo $this->weatherConditions->currently->precipProbability;?>%
                                                                        </h5>
                                                                    </td><!--precipitation-->

                                                                    <td class="uv">
                                                                        <p>UV</p>
                                                                        <p>Index</p>
                                                                        <h5><?php echo $this->weatherConditions->currently->uvIndex;?>-
                                                                            <?php echo $this->weatherConditions->currently->uvText;?></h5>
                                                                    </td><!--uv-->

                                                                    <td class="pollen">
                                                                        <p>Pollen</p>
                                                                        <p>Count</p>
                                                                        <h5>2-Low</h5>
                                                                    </td><!--pollen-->
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td><!--current stats-->

                                            <td class="current-weather">
                                                <img src="<?php echo URL."public/images/weather/".$this->weatherConditions->currently->icon.".png";?>"
                                                     alt="<?php echo $this->weatherConditions->currently->summary;?>"/>

                                                <h3><?php echo $this->weatherConditions->currently->summary;?></h3>
                                            </td><!--current weather-->
                                        </tr>
                                    </table>
                                </td>
                            </tr><!--forecast-->
                        </table>
                    </td><!--main stats-->
                </tr>

                <tr>
                    <td colspan="2" class="other-stats">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="category">Wind</td>
                                <td class="category">Humidity</td>
                                <td class="category">Pressure</td>
                                <td class="category">Dew Point</td>
                                <td class="category visibility">Visibility</td>
                            </tr>

                            <tr>
                                <td class="info">
                                    <h4>
                                        <?php
                                            $compass = array("N","NNE","NE","NEE","E","SEE","SE","SSE","S","SSW","SW","SWW","W"
                                            ,"NWW","NW","NNW");
                                            $compcount = round($this->weatherConditions->currently->windBearing / 22.5);
                                            echo $compass[$compcount];
                                        ?>
                                    </h4>
                                    <h4 class="light"><?php echo $this->weatherConditions->currently->windSpeed;?> mph</h4>
                                </td>

                                <td class="info">
                                    <h4><?php echo round($this->weatherConditions->currently->humidity*100);?>%</h4>
                                </td>

                                <td class="info">
                                    <?php //TODO: Make arrow move up or down depending on pressure.?>
                                    <h4><?php echo round($this->weatherConditions->currently->pressure);?> &#8673;</h4>
                                </td>

                                <td class="info">
                                    <h4><?php echo round($this->weatherConditions->currently->dewPoint);?>&deg;</h4>
                                </td>

                                <td class="info visibility">
                                    <h4><?php echo $this->weatherConditions->currently->visibility;?> mi</h4>
                                </td>
                            </tr>
                        </table>
                    </td><!--other stats-->
                </tr>
            </table>
        </div><!--info-->
    </div><!--columns-->

    <div class="clearfix"></div>
</div><!--weather-->