/* 
 * Copyright 2015 yannick.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

'use strict';

/* Services */

var myAppServices = angular.module('myApp.services', [ 'ngResource' ]);

myAppServices.factory('wpServices', [ '$resource', function($resource, $windows) {
	return $resource('', {}, {
		getPosts : {
			method : 'GET',
			url : wpRestApiUrl + '/?json_route=/posts',
			params : {},
			isArray : true,
			cache : false
		},
		getClients : {
			method : 'GET',
			url : wordpressUrl + '/info/clients',
			params : {},
			isArray : false,
			cache : false
		},
		getEvents : {
			method : 'GET',
			url : wordpressUrl + '/info/events',
			params : {},
			isArray : false,
			cache : false
		},
		send : {
			method : 'GET',
			url : wordpressUrl + '/send',
			params : {},
			isArray : false,
			cache : false
		}
            })
} ]);
