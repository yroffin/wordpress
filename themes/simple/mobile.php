<!doctype html>
<!--
Copyright 2014 Yannick Roffin.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html lang="en" ng-app="myApp">
    <head>
        <title>Wordpress mobile template</title>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css" />
    </head>
    <body ng-controller="BootstrapCtrl" ng-init="load()">

        <!-- Main page -->
        <div data-role="page" id="home" data-theme="{{wp.theme}}">
            <div data-role="header">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#home" data-icon="home">Accueil</a></li>
                        <li><a href="#" data-icon="grid" ng-click="loadPosts('#posts')">Posts</a></li>
                    </ul>
                </div>
                <h1>Jarvis</h1>
            </div><!-- /header -->

            <div role="main" class="ui-content">
                <p>Another wordpress mobile client.</p>
            </div><!-- /content -->

            <div data-role="footer">
            </div>
        </div><!-- /page -->

        <!-- Configuration page -->
        <div data-role="page" id="posts" data-theme="{{wp.theme}}">
            <div data-role="header">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#home" id="home" data-icon="home">Accueil</a></li>
                    </ul>
                </div>
                <h1>Posts</h1>
            </div>
            <div role="main" class="ui-content">
                <div>
                	<h1>Posts</h1>
                    <table data-role="table" id="configuration-clients" data-mode="reflow" class="ui-responsive table-stroke">
                    	<thead>
                    		<tr>
                    			<th data-priority = "1">Id</th>
                    			<th data-priority = "1">Slug</th>
                    			<th data-priority = "1">Content</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                        	<tr ng-repeat="item in wp.data.posts">
                        		<td>{{item.ID}}</td>
                        		<td>{{item.slug}}</td>
                        		<td>{{item.content}}</td>
                        	</tr>
                    	</tbody>
                    </table>
                </div>
            </div>
            <div data-role="footer">
            </div>
        </div>

        <!-- Global var -->
        <?php $wplocation = dirname("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>
        <?php $wpRestApilocation = dirname(dirname(dirname(dirname("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")))); ?>
        <script>var wordpressUrl="<?php echo $wplocation; ?>";</script>
        <script>var wpRestApiUrl="<?php echo $wpRestApilocation; ?>";</script>

        <!-- JQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script>
        <!-- AngularJS -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-resource.min.js"></script>

        <!-- Application -->
        <script src="<?php echo $wplocation; ?>/js/app.js"></script>
        <script src="<?php echo $wplocation; ?>/js/services.js"></script>
        <script src="<?php echo $wplocation; ?>/js/controllers.js"></script>
        <script src="<?php echo $wplocation; ?>/js/filters.js"></script>
        <script src="<?php echo $wplocation; ?>/js/directives.js"></script>
    </body>
</html>