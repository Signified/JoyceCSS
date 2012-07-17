<?php echo $this->Html->doctype('html5'); ?>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; ?> - <?php echo __('Preview'); ?> - <?php echo Configure::read('App.name'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url(array('action' => 'view', $stylesheet['Stylesheet']['id'], 'ext' => 'css')); ?>" />
</head>
<body>
<div class="page">
    <div class="head">
        <div class="mod">
            <div class="inner">
                <div class="bd">
                    <h1><?php echo $title_for_layout; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="leftCol">
            <div class="mod">
                <div class="inner">
                    <div class="hd">
                        <h2>Left Column</h2>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><a href="#headings">Headings</a></li>
                            <li><a href="#lists">Lists</a></li>
                            <li><a href="#forms">Forms</a></li>
                            <li><a href="#tables">Tables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightCol">
            <div class="mod">
                <div class="inner">
                    <div class="hd">
                        <h2>Right Column</h2>
                    </div>
                    <div class="bd">
                        <p>TODO</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="mod">
                <div class="inner">
                    <div class="hd">
                        <h2 id="sections">Headings</h2>
                    </div>
                    <div class="bd">
                        <h1>Heading 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at nunc nec lorem ullamcorper condimentum. Phasellus dignissim augue eu dolor vulputate sed vestibulum velit mattis. Cras consectetur cursus velit a euismod. Vestibulum vel felis mi. Etiam porta nibh ut nibh lacinia elementum vel sit amet leo.</p>
                        <h2>Heading 2</h2>
                        <p>Ut eleifend dapibus purus, ut rutrum quam volutpat et. Maecenas mattis hendrerit ornare. Fusce magna arcu, ullamcorper porta tincidunt iaculis, ultrices vel orci. Vestibulum tempor, nisl nec pellentesque luctus, turpis mauris porttitor felis, eu malesuada nibh risus ut dolor.</p>
                        <h3>Heading 3</h3>
                        <p>Integer bibendum condimentum lectus sit amet auctor. Etiam tincidunt, nunc at vehicula pellentesque, velit turpis malesuada turpis, id vehicula dolor augue ac arcu. Praesent vulputate sodales eros, a adipiscing sapien gravida vitae. Phasellus facilisis rhoncus pharetra. Phasellus lobortis volutpat lorem sit amet euismod.</p>
                        <h4>Heading 4</h4>
                        <p>Vestibulum ornare semper rutrum. Donec tempus leo sed est accumsan ornare. Etiam dignissim, orci et vehicula ultrices, odio neque posuere nisl, eget consectetur diam elit nec nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce quis nisl pulvinar magna feugiat tincidunt.</p>
                        <h5>Heading 5</h5>
                        <p>Nam eleifend velit sed ante vestibulum facilisis. Donec eu mi ac odio mattis fermentum a id leo. Vestibulum dapibus metus a neque posuere congue. Duis pellentesque sapien et nunc porttitor fringilla eu in ligula. Nullam pulvinar, diam sit amet sollicitudin dictum, orci erat porta orci, vitae hendrerit ipsum dui quis ante.</p>
                        <h6>Heading 6</h6>
                        <p>Nunc dictum, sem in lacinia interdum, orci felis varius risus, in gravida lorem sem et dui. Morbi in ornare metus. Curabitur massa nunc, semper sed fringilla ut, egestas ut lacus. Nam pretium vestibulum neque, vel porta erat pharetra in. Fusce at magna risus. Nulla vel convallis enim.</p>
                    </div>
                    <div class="ft">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="mod">
                <div class="inner">
                    <div class="hd">
                        <h2 id="lists">Lists</h3>
                    </div>
                    <div class="bd">
                        <h3>Unordered List</h2>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Nunc eget mauris non libero luctus ultrices.</li>
                            <li>Nunc id turpis gravida dolor fermentum adipiscing.</li>
                            <li>Nam mattis aliquet ipsum, facilisis euismod quam mollis vitae.</li>
                        </ul>
                        <h3>Ordered List</h3>
                        <ol>
                            <li>Phasellus scelerisque risus volutpat magna pellentesque posuere.</li>
                            <li>Sed eu tellus turpis, ut vestibulum tellus.</li>
                            <li>Vestibulum tempus dolor vitae felis sagittis imperdiet.</li>
                            <li>Sed sit amet nisi tortor, id vehicula massa.</li>
                        </ol>
                        <h3>Definition List</h3>
                        <dl>
                            <dt>Pellentesque dignissim elit</dt>
                            <dd>Fusce ac lectus tortor, nec commodo arcu.</dd>
                            <dt>Integer pretium sagittis</dt>
                            <dd>Vivamus volutpat est nec est euismod tempus ut non nisl.</dd>
                            <dt>Suspendisse lobortis nisi</dt>
                            <dd>Quisque laoreet erat eget lorem pellentesque varius.</dd>
                            <dt>Ut sit amet est arcu</dt>
                            <dd>Phasellus scelerisque nibh ac purus dignissim ut viverra risus convallis.</dd>
                        </dl>
                    </div>
                    <div class="ft">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="mod">
                <div class="inner">
                    <div class="hd">
                        <h2 id="images">Images</h3>
                    </div>
                    <div class="bd">
                        <img alt="Thumbnail" src="http://placehold.it/150x150" width="150" height="150" />
                        <img alt="Thumbnail" src="http://placehold.it/150x150" width="150" height="150" />
                        <img alt="Thumbnail" src="http://placehold.it/150x150" width="150" height="150" />
                        <img alt="Thumbnail" src="http://placehold.it/150x150" width="150" height="150" />
                    </div>
                    <div class="ft">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="mod">
                <div class="inner">
                    <div class="hd">
                        <h2 id="forms">Forms</h2>
                    </div>
                    <div class="bd">
                        <form method="post" action="#">
                            <fieldset>
                                <legend>Input Elements</legend>
                                <label for="text">Text</label>
                                <input type="text" name="text" id="text" />
                                <label for="search">Search</label>
                                <input type="search" name="search" id="search" />
                                <label for="telephone">Telephone</label>
                                <input type="telephone" name="telephone" id="telephone" />
                                <label for="url">Url</label>
                                <input type="url" name="url" id="url" />
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" />
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                                <label for="date">Date</label>
                                <input type="date" name="date" id="date" />
                                <label for="month">Month</label>
                                <input type="month" name="month" id="month" />
                                <label for="week">Week</label>
                                <input type="week" name="week" id="week" />
                                <label for="time">Time</label>
                                <input type="time" name="time" id="time" />
                                <label for="datetimelocal">Datetimelocal</label>
                                <input type="datetimelocal" name="datetimelocal" id="datetimelocal" />
                                <label for="number">Number</label>
                                <input type="number" name="number" id="number" />
                                <label for="range">Range</label>
                                <input type="range" name="range" id="range" />
                                <label for="color">Color</label>
                                <input type="color" name="color" id="color" />
                                <label for="checkbox">Checkbox</label>
                                <input type="checkbox" name="checkbox" id="checkbox" />
                                <label for="radio">Radio</label>
                                <input type="radio" name="radio" id="radio" />
                                <label for="file">File</label>
                                <input type="file" name="file" id="file" />
                                <label for="image">Image</label>
                                <input type="image" name="image" id="image" />
                            </fieldset>
                            <fieldset>
                                <input type="submit" name="submit" id="submit" />
                                <input type="reset" name="reset" id="reset" />
                                <input type="button" name="button" id="button" value="Button" />
                            </fieldset>
                        </form>
                    </div>
                    <div class="ft">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="mod">
                <div class="inner">
                    <div class="hd">
                        <h2 id="tables">Tables</h2>
                    </div>
                    <div class="bd">
                        <table summary="Wholesale and retail prices of imported and domestic oranges and apples in Sydney and Melbourne. There are two levels of column headings.">
                            <caption>Imported and domestic orange and apple prices in Sydney and Melbourne</caption>
                            <thead>
                                <tr>
                                    <td>&nbsp;</td>
                                    <th colspan="2" id="imported">Imported</th>
                                    <th colspan="2" id="domestic">Domestic</th>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <th id="oranges-imp">Oranges</th>
                                    <th id="apples-imp">Apples</th>
                                    <th id="oranges-dom">Oranges</th>
                                    <th id="apples-dom">Apples</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th id="sydney" colspan="5">Sydney</th>
                                </tr>
                                <tr>
                                    <th headers="sydney" id="wholesale-sydney">Wholesale</th>
                                    <td headers="imported oranges-imp sydney wholesale-sydney">$1.00</td>
                                    <td headers="imported apples-imp sydney wholesale-sydney">$1.25</td>
                                    <td headers="domestic oranges-dom sydney wholesale-sydney">$1.20</td>
                                    <td headers="domestic apples-dom sydney wholesale-sydney">$1.00</td>
                                </tr>
                                <tr>
                                    <th headers="sydney" id="retail-sydney">Retail</th>
                                    <td headers="imported oranges-imp sydney retail-sydney">$2.00</td>
                                    <td headers="imported apples-imp sydney retail-sydney">$3.00</td>
                                    <td headers="domestic oranges-dom sydney retail-sydney">$1.80</td>
                                    <td headers="domestic apples-dom sydney retail-sydney">$1.60</td>
                                </tr>
                                <tr>
                                    <th id="melbourne" colspan="5">Melbourne</th>
                                </tr>
                                <tr>
                                    <th headers="melbourne" id="wholesale-melbourne">Wholesale</th>
                                    <td headers="imported oranges-imp melbourne wholesale-melbourne">$1.20</td>
                                    <td headers="imported apples-imp melbourne wholesale-melbourne">$1.30</td>
                                    <td headers="domestic oranges-dom melbourne wholesale-melbourne">$1.00</td>
                                    <td headers="domestic apples-dom melbourne wholesale-melbourne">$0.80</td>
                                </tr>
                                <tr>
                                    <th headers="melbourne" id="retail-melbourne">Retail</th>
                                    <td headers="imported oranges-imp melbourne retail-melbourne">$1.60</td>
                                    <td headers="imported apples-imp melbourne retail-melbourne">$2.00</td>
                                    <td headers="domestic oranges-dom melbourne retail-melbourne">$2.00</td>
                                    <td headers="domestic apples-dom melbourne retail-melbourne">$1.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ft">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="mod">
            <div class="inner">
                <div class="bd">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo Configure::read('App.name'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>