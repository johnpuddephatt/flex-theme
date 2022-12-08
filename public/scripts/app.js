(self.webpackChunk=self.webpackChunk||[]).push([[742],{995:function(n,t,e){"use strict";e(915),e(918);var o=e(538),a=(e(771),e(243)),r=e.n(a),i=e(193),s=e(856),l=e(352),c=e(727),u=e(380),d={name:"groupMap",props:["type"],components:{LControlAttribution:i.Z,LIconDefault:s.Z,LMap:l.Z,LTileLayer:c.Z,LMarker:u.Z},data:function(){return{showing:"neighbourhood_networks",filterTab:"name",latLng:null,postcode:null,view:"map",groups:[],search:null,selected:null,imagePath:null,zoom:12,center:(0,a.latLng)(53.7993475,-1.5032696),blueIcon:r().icon({iconUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon.png"),iconRetinaUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-2x.png"),iconSize:[25,41],iconAnchor:[13,41]}),orangeIcon:r().icon({iconUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-orange.png"),iconRetinaUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-orange-2x.png"),iconSize:[25,41],iconAnchor:[13,41]}),url:"https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png",attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>'}},watch:{latLng:function(){this.latLng&&this.latLng.length?this.$refs.myMap.mapObject.flyTo((0,a.latLng)(this.latLng[0],this.latLng[1]),14):this.$refs.myMap.mapObject.flyTo(this.center,this.zoom)}},computed:{filteredList:function(){var n=this;if(!this.groups)return null;var t=this.groups.filter((function(n){return n.address})),e=this.getGroupsFilteredByType(t);return"name"==this.filterTab&&this.search?e.filter((function(t){return t.title.rendered.toLowerCase().includes(n.search.toLowerCase())||t.address.address.toLowerCase().includes(n.search.toLowerCase())})):"postcode"==this.filterTab&&this.postcode?e.map((function(t){return t.latitude&&t.longitude?t.distance=n.distanceFromUserLatLng(t):t.distance,t})).sort((function(n,t){return n.distance-t.distance})):e}},mounted:function(){var n=this;this.imagePath="".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/");fetch("/wp-json/wp/v2/".concat(this.type,"?orderby=title&per_page=100&order=asc")).then((function(n){return n.json()})).then((function(t){return n.groups=t}))},methods:{getGroupsFilteredByType:function(n){var t=this;return n||this.groups?n.filter((function(n){return"neighbourhood_networks"!=t.showing||n.neighbourhood_network})):null},scrollTo:function(n){this.selected=n,this.$refs["".concat(n,"-sidebar")][0].scrollIntoView({behavior:"smooth",block:"center",inline:"nearest"})},convertPostcodeToLatLng:function(){var n=this;fetch("//api.postcodes.io/postcodes/".concat(this.postcode.split(" ").join(""))).then((function(n){return n.json()})).then((function(t){200==t.status?(n.latLng=[t.result.latitude,t.result.longitude],n.error=null,n.postcode=n.postcode.toUpperCase()):n.error=t.error}))},distanceFromUserLatLng:function(n){var t=this.distance(n.address.lat,n.address.lng,this.latLng[0],this.latLng[1]);return Math.round(10*t)/10},distance:function(n,t,e,o){if(n==e&&t==o)return 0;var a=Math.PI*n/180,r=Math.PI*e/180,i=t-o,s=Math.PI*i/180,l=Math.sin(a)*Math.sin(r)+Math.cos(a)*Math.cos(r)*Math.cos(s);return l>1&&(l=1),l=60*(l=180*(l=Math.acos(l))/Math.PI)*1.1515},clearPostcode:function(){this.latLng=[],this.postcode=null}}},p=(e(959),e(900)),g=(0,p.Z)(d,(function(){var n=this,t=n.$createElement,e=n._self._c||t;return e("div",[e("div",{staticClass:"container max-w-5xl my-4"},[e("button",{staticClass:"px-4 mr-2 text-xl leading-loose rounded-full",class:"map"==n.view?"bg-blue text-white":"bg-sky-light",on:{click:function(t){n.view="map"}}},[n._v("\n      Map view\n    ")]),n._v(" "),e("button",{staticClass:"px-4 text-xl leading-loose rounded-full",class:"list"==n.view?"bg-blue text-white":"bg-sky-light hover:bg-sky",on:{click:function(t){n.view="list"}}},[n._v("\n      List view\n    ")])]),n._v(" "),"map"==n.view?e("div",{staticClass:"relative flex flex-col overflow-hidden border-t lg:flex-row"},[e("div",{staticClass:"relative flex-1 map-container"},[e("l-map",{ref:"myMap",attrs:{zoom:n.zoom,center:n.center,options:{attributionControl:!1}}},[e("l-control-attribution",{attrs:{position:"bottomleft"}}),n._v(" "),e("l-tile-layer",{attrs:{url:n.url,attribution:n.attribution}}),n._v(" "),n._l(n.filteredList,(function(t){return e("l-marker",{key:t.slug,ref:t.slug+"-marker",refInFor:!0,attrs:{icon:t.neighbourhood_network?n.orangeIcon:n.blueIcon,"lat-lng":[t.address.lat,t.address.lng]},on:{click:function(e){return n.scrollTo(t.slug)}}})}))],2)],1),n._v(" "),e("div",{staticClass:"top-0 bottom-0 right-0 overflow-y-auto shadow-2xl lg:absolute lg:w-1/3 lg:max-w-sm bg-sky-lightest map-sidebar bg-opacity-90"},[e("div",{staticClass:"bg-blue-lightest"},[e("div",{staticClass:"flex items-center gap-2 px-3 py-3"},[e("label",{attrs:{for:"type-selector"}},[n._v("Show:")]),n._v(" "),e("select",{directives:[{name:"model",rawName:"v-model",value:n.showing,expression:"showing"}],staticClass:"flex-grow",attrs:{id:"type-selector"},on:{change:function(t){var e=Array.prototype.filter.call(t.target.options,(function(n){return n.selected})).map((function(n){return"_value"in n?n._value:n.value}));n.showing=t.target.multiple?e:e[0]}}},[e("option",{attrs:{value:"neighbourhood_networks"}},[n._v("Neighbourhood Networks")]),n._v(" "),e("option",{attrs:{value:"all"}},[n._v("All groups")])])]),n._v(" "),e("div",{staticClass:"flex flex-row bg-blue-lightest"},[e("button",{staticClass:"px-4 py-3",class:{"bg-blue-light text-white":"name"==n.filterTab},on:{click:function(t){n.filterTab="name"}}},[n._v("\n            Filter by name\n          ")]),n._v(" "),e("button",{staticClass:"px-4 py-3",class:{"bg-blue-light text-white":"postcode"==n.filterTab},on:{click:function(t){n.filterTab="postcode"}}},[n._v("\n            Search by postcode\n          ")])]),n._v(" "),"name"==n.filterTab?e("div",{staticClass:"flex flex-row items-center gap-2 px-3 py-3 bg-blue-light"},[e("input",{directives:[{name:"model",rawName:"v-model",value:n.search,expression:"search"}],staticClass:"w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{type:"text","aria-label":"Filter results by name",placeholder:"Search by name.."},domProps:{value:n.search},on:{input:function(t){t.target.composing||(n.search=t.target.value)}}}),n._v(" "),e("button",{staticClass:"text-white",on:{click:function(t){n.search=null}}},[n._v("Clear")])]):n._e(),n._v(" "),"postcode"==n.filterTab?e("div",{staticClass:"flex flex-row items-center gap-2 px-3 py-3 bg-blue-light"},[e("input",{directives:[{name:"model",rawName:"v-model",value:n.postcode,expression:"postcode"}],staticClass:"w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{type:"text","aria-label":"Filter results by name",placeholder:"Enter postcode and press enter"},domProps:{value:n.postcode},on:{keyup:function(t){return!t.type.indexOf("key")&&n._k(t.keyCode,"enter",13,t.key,"Enter")?null:n.convertPostcodeToLatLng.apply(null,arguments)},input:function(t){t.target.composing||(n.postcode=t.target.value)}}}),n._v(" "),n.latLng?n._e():e("button",{staticClass:"text-white",on:{click:n.convertPostcodeToLatLng}},[n._v("\n            Search\n          ")]),n._v(" "),n.latLng?e("button",{staticClass:"text-white",on:{click:function(t){n.latLng=n.postcode=null}}},[n._v("\n            Clear\n          ")]):n._e()]):n._e()]),n._v(" "),n._l(n.filteredList,(function(t){return e("a",{key:t.slug,ref:t.slug+"-sidebar",refInFor:!0,staticClass:"block px-4 py-6 border-b border-blue-lightest hover:bg-sky-light",class:{"bg-sky-light ml-0 border-l-8 border-blue":n.selected==t.slug},attrs:{href:t.link}},[t.neighbourhood_network?e("p",{staticClass:"inline-block -ml-1 px-2 pt-0.5 mb-1 text-sm font-normal rounded-md bg-orange-light"},[n._v("\n          Neighbourhood Network\n        ")]):n._e(),n._v(" "),e("h3",{staticClass:"text-lg font-bold leading-tight",domProps:{innerHTML:n._s(t.title.rendered)}}),n._v(" "),t.area_covered?e("div",{staticClass:"text-sm",domProps:{innerHTML:n._s(t.area_covered)}}):n._e()])})),n._v(" "),n.filteredList.length?n._e():e("div",{staticClass:"p-4 rounded"},[n._v("\n        No groups to show you.\n      ")])],2)]):e("div",{staticClass:"container max-w-5xl my-12"},[e("div",{staticClass:"flex flex-col gap-8 px-8 py-4 mb-6 lg:flex-row bg-blue-lightest"},[e("div",{staticClass:"flex items-center flex-grow max-w-lg gap-4"},[e("label",{attrs:{for:"type-selector"}},[n._v("Show:")]),n._v(" "),e("select",{directives:[{name:"model",rawName:"v-model",value:n.showing,expression:"showing"}],staticClass:"flex-grow",attrs:{id:"type-selector"},on:{change:function(t){var e=Array.prototype.filter.call(t.target.options,(function(n){return n.selected})).map((function(n){return"_value"in n?n._value:n.value}));n.showing=t.target.multiple?e:e[0]}}},[e("option",{attrs:{value:"neighbourhood_networks"}},[n._v("Neighbourhood Networks")]),n._v(" "),e("option",{attrs:{value:"all"}},[n._v("All groups")])])]),n._v(" "),e("div",{staticClass:"flex flex-row items-center flex-grow gap-2"},[e("label",{attrs:{for:"list-search"}},[n._v("Search:")]),n._v(" "),e("input",{directives:[{name:"model",rawName:"v-model",value:n.search,expression:"search"}],staticClass:"w-full max-w-lg px-3 py-3 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{id:"list-search",type:"text",placeholder:"Search by name.."},domProps:{value:n.search},on:{input:function(t){t.target.composing||(n.search=t.target.value)}}})])]),n._v(" "),n._l(n.getGroupsFilteredByType(n.groups),(function(t){return e("a",{key:t.slug,ref:t.slug+"-sidebar",refInFor:!0,staticClass:"block py-8",attrs:{href:t.link}},[e("h3",{staticClass:"text-xl font-bold"},[e("span",{domProps:{innerHTML:n._s(t.title.rendered)}}),n._v(" "),t.neighbourhood_network?e("p",{staticClass:"inline-block px-2 pt-0.5 ml-3 text-base font-normal rounded-lg bg-blue-lightest"},[n._v("\n          Neighbourhood network\n        ")]):n._e()]),n._v(" "),t.area_covered?e("div",{staticClass:"text",domProps:{innerHTML:n._s(t.area_covered)}}):n._e()])}))],2)])}),[],!1,null,"5d1b4b1a",null).exports,h={name:"groupMap",props:["type"],components:{LControlAttribution:i.Z,LIconDefault:s.Z,LMap:l.Z,LTileLayer:c.Z,LMarker:u.Z},data:function(){return{showing:"neighbourhood_networks",filterTab:"name",latLng:null,postcode:null,view:"map",groups:[],search:null,selected:null,imagePath:null,zoom:12,center:(0,a.latLng)(53.7993475,-1.5032696),blueIcon:r().icon({iconUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon.png"),iconRetinaUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-2x.png"),iconSize:[25,41],iconAnchor:[13,41]}),orangeIcon:r().icon({iconUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-orange.png"),iconRetinaUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-orange-2x.png"),iconSize:[25,41],iconAnchor:[13,41]}),url:"https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png",attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>'}},watch:{latLng:function(){this.latLng&&this.latLng.length?this.$refs.myMap.mapObject.flyTo((0,a.latLng)(this.latLng[0],this.latLng[1]),14):this.$refs.myMap.mapObject.flyTo(this.center,this.zoom)}},computed:{filteredList:function(){var n=this;if(!this.groups)return null;var t=this.groups.filter((function(n){return n.address}));return"name"==this.filterTab&&this.search?t.filter((function(t){return t.title.rendered.toLowerCase().includes(n.search.toLowerCase())||t.address.address.toLowerCase().includes(n.search.toLowerCase())})):"postcode"==this.filterTab&&this.postcode?t.map((function(t){return t.latitude&&t.longitude?t.distance=n.distanceFromUserLatLng(t):t.distance,t})).sort((function(n,t){return n.distance-t.distance})):t}},mounted:function(){var n=this;this.imagePath="".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/");fetch("/wp-json/wp/v2/business?orderby=title&per_page=100&order=asc".concat(this.type?"&type="+this.type:null)).then((function(n){return n.json()})).then((function(t){return n.groups=t}))},methods:{scrollTo:function(n){this.selected=n,this.$refs["".concat(n,"-sidebar")][0].scrollIntoView({behavior:"smooth",block:"center",inline:"nearest"})},convertPostcodeToLatLng:function(){var n=this;fetch("//api.postcodes.io/postcodes/".concat(this.postcode.split(" ").join(""))).then((function(n){return n.json()})).then((function(t){200==t.status?(n.latLng=[t.result.latitude,t.result.longitude],n.error=null,n.postcode=n.postcode.toUpperCase()):n.error=t.error}))},distanceFromUserLatLng:function(n){var t=this.distance(n.address.lat,n.address.lng,this.latLng[0],this.latLng[1]);return Math.round(10*t)/10},distance:function(n,t,e,o){if(n==e&&t==o)return 0;var a=Math.PI*n/180,r=Math.PI*e/180,i=t-o,s=Math.PI*i/180,l=Math.sin(a)*Math.sin(r)+Math.cos(a)*Math.cos(r)*Math.cos(s);return l>1&&(l=1),l=60*(l=180*(l=Math.acos(l))/Math.PI)*1.1515},clearPostcode:function(){this.latLng=[],this.postcode=null}}},f=(e(949),(0,p.Z)(h,(function(){var n=this,t=n.$createElement,e=n._self._c||t;return e("div",[e("div",{staticClass:"container max-w-5xl my-4"},[e("button",{staticClass:"px-4 mr-2 text-xl leading-loose rounded-full",class:"map"==n.view?"bg-blue text-white":"bg-sky-light",on:{click:function(t){n.view="map"}}},[n._v("\n      Map view\n    ")]),n._v(" "),e("button",{staticClass:"px-4 text-xl leading-loose rounded-full",class:"list"==n.view?"bg-blue text-white":"bg-sky-light hover:bg-sky",on:{click:function(t){n.view="list"}}},[n._v("\n      List view\n    ")])]),n._v(" "),"map"==n.view?e("div",{staticClass:"relative flex flex-col overflow-hidden border-t lg:flex-row"},[e("div",{staticClass:"relative flex-1 map-container"},[e("l-map",{ref:"myMap",attrs:{zoom:n.zoom,center:n.center,options:{attributionControl:!1}}},[e("l-control-attribution",{attrs:{position:"bottomleft"}}),n._v(" "),e("l-tile-layer",{attrs:{url:n.url,attribution:n.attribution}}),n._v(" "),n._l(n.filteredList,(function(t){return e("l-marker",{key:t.slug,ref:t.slug+"-marker",refInFor:!0,attrs:{icon:t.neighbourhood_network?n.orangeIcon:n.blueIcon,"lat-lng":[t.address.lat,t.address.lng]},on:{click:function(e){return n.scrollTo(t.slug)}}})}))],2)],1),n._v(" "),e("div",{staticClass:"top-0 bottom-0 right-0 overflow-y-auto shadow-2xl lg:absolute lg:w-1/3 lg:max-w-sm bg-sky-lightest map-sidebar bg-opacity-90"},[e("div",{staticClass:"bg-blue-lightest"},[e("div",{staticClass:"flex flex-row bg-blue-lightest"},[e("button",{staticClass:"px-4 py-3",class:{"bg-blue-light text-white":"name"==n.filterTab},on:{click:function(t){n.filterTab="name"}}},[n._v("\n            Filter by name\n          ")]),n._v(" "),e("button",{staticClass:"px-4 py-3",class:{"bg-blue-light text-white":"postcode"==n.filterTab},on:{click:function(t){n.filterTab="postcode"}}},[n._v("\n            Search by postcode\n          ")])]),n._v(" "),"name"==n.filterTab?e("div",{staticClass:"flex flex-row items-center gap-2 px-3 py-3 bg-blue-light"},[e("input",{directives:[{name:"model",rawName:"v-model",value:n.search,expression:"search"}],staticClass:"w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{type:"text","aria-label":"Filter results by name",placeholder:"Search by name.."},domProps:{value:n.search},on:{input:function(t){t.target.composing||(n.search=t.target.value)}}}),n._v(" "),e("button",{staticClass:"text-white",on:{click:function(t){n.search=null}}},[n._v("Clear")])]):n._e(),n._v(" "),"postcode"==n.filterTab?e("div",{staticClass:"flex flex-row items-center gap-2 px-3 py-3 bg-blue-light"},[e("input",{directives:[{name:"model",rawName:"v-model",value:n.postcode,expression:"postcode"}],staticClass:"w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{type:"text","aria-label":"Filter results by name",placeholder:"Enter postcode and press enter"},domProps:{value:n.postcode},on:{keyup:function(t){return!t.type.indexOf("key")&&n._k(t.keyCode,"enter",13,t.key,"Enter")?null:n.convertPostcodeToLatLng.apply(null,arguments)},input:function(t){t.target.composing||(n.postcode=t.target.value)}}}),n._v(" "),n.latLng?n._e():e("button",{staticClass:"text-white",on:{click:n.convertPostcodeToLatLng}},[n._v("\n            Search\n          ")]),n._v(" "),n.latLng?e("button",{staticClass:"text-white",on:{click:function(t){n.latLng=n.postcode=null}}},[n._v("\n            Clear\n          ")]):n._e()]):n._e()]),n._v(" "),n._l(n.filteredList,(function(t){return e("a",{key:t.slug,ref:t.slug+"-sidebar",refInFor:!0,staticClass:"block px-4 py-6 border-b border-blue-lightest hover:bg-sky-light",class:{"bg-sky-light ml-0 border-l-8 border-blue":n.selected==t.slug},attrs:{target:"_blank",href:t.url}},[e("h3",{staticClass:"text-lg font-bold leading-tight",domProps:{innerHTML:n._s(t.title.rendered)}}),n._v(" "),e("p",{staticClass:"text-sm truncate"},[t.area_covered?e("span",{staticClass:"inline-block px-3 mr-1 rounded-full bg-sky text-blue"},[n._v(n._s(t.area_covered))]):n._e(),n._v("\n          "+n._s(t.address.address)+"\n        ")])])})),n._v(" "),n.filteredList.length?n._e():e("div",{staticClass:"p-4 rounded"},[n._v("\n        No businesses to show you.\n      ")])],2)]):e("div",{staticClass:"container max-w-5xl my-12"},[e("div",{staticClass:"flex flex-col gap-8 px-8 py-4 mb-6 lg:flex-row bg-blue-lightest"},[e("div",{staticClass:"flex flex-row items-center flex-grow gap-2"},[e("label",{attrs:{for:"list-search"}},[n._v("Search:")]),n._v(" "),e("input",{directives:[{name:"model",rawName:"v-model",value:n.search,expression:"search"}],staticClass:"w-full max-w-lg px-3 py-3 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{id:"list-search",type:"text",placeholder:"Search by name.."},domProps:{value:n.search},on:{input:function(t){t.target.composing||(n.search=t.target.value)}}})])]),n._v(" "),n._l(n.filteredList,(function(t){return e("a",{key:t.slug,ref:t.slug+"-sidebar",refInFor:!0,staticClass:"block py-8",attrs:{target:"_blank",href:t.url}},[e("h3",{staticClass:"text-xl font-bold"},[e("span",{domProps:{innerHTML:n._s(t.title.rendered)}})]),n._v(" "),e("p",{staticClass:"text-sm truncate"},[t.area_covered?e("span",{staticClass:"inline-block px-3 mr-1 rounded-full bg-sky text-blue"},[n._v(n._s(t.area_covered))]):n._e(),n._v("\n        "+n._s(t.address.address)+"\n      ")])])}))],2)])}),[],!1,null,"142ffc3a",null).exports),m={name:"groupMap",props:["category"],components:{LControlAttribution:i.Z,LIconDefault:s.Z,LMap:l.Z,LTileLayer:c.Z,LMarker:u.Z},data:function(){return{showing:"neighbourhood_networks",filterTab:"name",latLng:null,postcode:null,view:"map",groups:[],search:null,selected:null,imagePath:null,zoom:12,center:(0,a.latLng)(53.7993475,-1.5032696),blueIcon:r().icon({iconUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon.png"),iconRetinaUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-2x.png"),iconSize:[25,41],iconAnchor:[13,41]}),orangeIcon:r().icon({iconUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-orange.png"),iconRetinaUrl:"".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/marker-icon-orange-2x.png"),iconSize:[25,41],iconAnchor:[13,41]}),url:"https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png",attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>'}},watch:{latLng:function(){this.latLng&&this.latLng.length?this.$refs.myMap.mapObject.flyTo((0,a.latLng)(this.latLng[0],this.latLng[1]),14):this.$refs.myMap.mapObject.flyTo(this.center,this.zoom)}},computed:{filteredList:function(){var n=this;if(!this.groups)return null;var t=this.groups.filter((function(n){return n.latitude&&n.longitude}));return"name"==this.filterTab&&this.search?t.filter((function(t){return t.name.toLowerCase().includes(n.search.toLowerCase())})):"postcode"==this.filterTab&&this.postcode&&this.latLng?t.map((function(t){return t.latitude&&t.longitude?t.distance=n.distanceFromUserLatLng(t):t.distance,t})).sort((function(n,t){return n.distance-t.distance})):t}},mounted:function(){var n=this;this.imagePath="".concat(window.directory_uri.stylesheet_directory_uri,"/public/images/leaflet/");fetch("https://localleeds.org.uk/api/services/category/".concat(this.category,"/true")).then((function(n){return n.json()})).then((function(t){return n.groups=t}))},methods:{scrollTo:function(n){this.selected=n,this.$refs["".concat(n,"-sidebar")][0].scrollIntoView({behavior:"smooth",block:"center",inline:"nearest"})},convertPostcodeToLatLng:function(){var n=this;fetch("//api.postcodes.io/postcodes/".concat(this.postcode.split(" ").join(""))).then((function(n){return n.json()})).then((function(t){200==t.status?(n.latLng=[t.result.latitude,t.result.longitude],n.error=null,n.postcode=n.postcode.toUpperCase()):n.error=t.error}))},distanceFromUserLatLng:function(n){console.log(this.latLng);var t=this.distance(n.latitude,n.longitude,this.latLng[0],this.latLng[1]);return Math.round(10*t)/10},distance:function(n,t,e,o){if(n==e&&t==o)return 0;var a=Math.PI*n/180,r=Math.PI*e/180,i=t-o,s=Math.PI*i/180,l=Math.sin(a)*Math.sin(r)+Math.cos(a)*Math.cos(r)*Math.cos(s);return l>1&&(l=1),l=60*(l=180*(l=Math.acos(l))/Math.PI)*1.1515},clearPostcode:function(){this.latLng=[],this.postcode=null}}},b=(e(966),(0,p.Z)(m,(function(){var n=this,t=n.$createElement,e=n._self._c||t;return e("div",[e("div",{staticClass:"container max-w-5xl my-4"},[e("button",{staticClass:"px-4 mr-2 text-xl leading-loose rounded-full",class:"map"==n.view?"bg-blue text-white":"bg-sky-light",on:{click:function(t){n.view="map"}}},[n._v("\n      Map view\n    ")]),n._v(" "),e("button",{staticClass:"px-4 text-xl leading-loose rounded-full",class:"list"==n.view?"bg-blue text-white":"bg-sky-light hover:bg-sky",on:{click:function(t){n.view="list"}}},[n._v("\n      List view\n    ")])]),n._v(" "),"map"==n.view?e("div",{staticClass:"relative flex flex-col overflow-hidden border-t lg:flex-row"},[e("div",{staticClass:"relative flex-1 map-container"},[e("l-map",{ref:"myMap",attrs:{zoom:n.zoom,center:n.center,options:{attributionControl:!1}}},[e("l-control-attribution",{attrs:{position:"bottomleft"}}),n._v(" "),e("l-tile-layer",{attrs:{url:n.url,attribution:n.attribution}}),n._v(" "),n._l(n.filteredList,(function(t){return e("l-marker",{key:t.id,ref:t.id+"-marker",refInFor:!0,attrs:{icon:t.neighbourhood_network?n.orangeIcon:n.blueIcon,"lat-lng":[t.latitude,t.longitude]},on:{click:function(e){return n.scrollTo(t.id)}}})}))],2)],1),n._v(" "),e("div",{staticClass:"top-0 bottom-0 right-0 overflow-y-auto shadow-2xl lg:absolute lg:w-1/3 lg:max-w-sm bg-sky-lightest map-sidebar bg-opacity-90"},[e("div",{staticClass:"bg-blue-lightest"},[e("div",{staticClass:"flex flex-row bg-blue-lightest"},[e("button",{staticClass:"px-4 py-3",class:{"bg-blue-light text-white":"name"==n.filterTab},on:{click:function(t){n.filterTab="name"}}},[n._v("\n            Filter by name\n          ")]),n._v(" "),e("button",{staticClass:"px-4 py-3",class:{"bg-blue-light text-white":"postcode"==n.filterTab},on:{click:function(t){n.filterTab="postcode"}}},[n._v("\n            Search by postcode\n          ")])]),n._v(" "),"name"==n.filterTab?e("div",{staticClass:"flex flex-row items-center gap-2 px-3 py-3 bg-blue-light"},[e("input",{directives:[{name:"model",rawName:"v-model",value:n.search,expression:"search"}],staticClass:"w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{type:"text","aria-label":"Filter results by name",placeholder:"Search by name.."},domProps:{value:n.search},on:{input:function(t){t.target.composing||(n.search=t.target.value)}}}),n._v(" "),e("button",{staticClass:"text-white",on:{click:function(t){n.search=null}}},[n._v("Clear")])]):n._e(),n._v(" "),"postcode"==n.filterTab?e("div",{staticClass:"flex flex-row items-center gap-2 px-3 py-3 bg-blue-light"},[e("input",{directives:[{name:"model",rawName:"v-model",value:n.postcode,expression:"postcode"}],staticClass:"w-full px-3 py-2 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{type:"text","aria-label":"Filter results by name",placeholder:"Enter postcode and press enter"},domProps:{value:n.postcode},on:{keyup:function(t){return!t.type.indexOf("key")&&n._k(t.keyCode,"enter",13,t.key,"Enter")?null:n.convertPostcodeToLatLng.apply(null,arguments)},input:function(t){t.target.composing||(n.postcode=t.target.value)}}}),n._v(" "),n.latLng?n._e():e("button",{staticClass:"text-white",on:{click:n.convertPostcodeToLatLng}},[n._v("\n            Search\n          ")]),n._v(" "),n.latLng?e("button",{staticClass:"text-white",on:{click:function(t){n.latLng=n.postcode=null}}},[n._v("\n            Clear\n          ")]):n._e()]):n._e()]),n._v(" "),n._l(n.filteredList,(function(t){return e("a",{key:t.id,ref:t.id+"-sidebar",refInFor:!0,staticClass:"block px-4 py-6 border-b border-blue-lightest hover:bg-sky-light",class:{"bg-sky-light ml-0 border-l-8 border-blue":n.selected==t.id},attrs:{target:"_blank",href:t.url}},[e("h3",{staticClass:"text-lg font-bold leading-tight",domProps:{innerHTML:n._s(t.name)}}),n._v(" "),e("p",{staticClass:"text-sm truncate"},[n._v("\n          "+n._s(t.organisation)+"\n        ")]),n._v(" "),t.distance?e("p",{staticClass:"rounded-full bg-blue-lightest py-1 px-3 inline-block mt-2 text-xs"},[n._v("\n          "+n._s(t.distance)+" miles away\n        ")]):n._e()])})),n._v(" "),n.filteredList.length?n._e():e("div",{staticClass:"p-4 rounded"},[n._v("\n        No businesses to show you.\n      ")])],2)]):e("div",{staticClass:"container max-w-5xl my-12"},[e("div",{staticClass:"flex flex-col gap-8 px-8 py-4 mb-6 lg:flex-row bg-blue-lightest"},[e("div",{staticClass:"flex flex-row items-center flex-grow gap-2"},[e("label",{attrs:{for:"list-search"}},[n._v("Search:")]),n._v(" "),e("input",{directives:[{name:"model",rawName:"v-model",value:n.search,expression:"search"}],staticClass:"w-full max-w-lg px-3 py-3 leading-tight text-gray-700 border rounded-full shadow appearance-none focus:outline-none focus:shadow-outline",attrs:{id:"list-search",type:"text",placeholder:"Search by name.."},domProps:{value:n.search},on:{input:function(t){t.target.composing||(n.search=t.target.value)}}})])]),n._v(" "),n._l(n.filteredList,(function(t){return e("a",{key:t.id,ref:t.id+"-sidebar",refInFor:!0,staticClass:"block py-8",attrs:{target:"_blank",href:t.url}},[e("h3",{staticClass:"text-xl font-bold"},[e("span",{domProps:{innerHTML:n._s(t.name)}})]),n._v(" "),e("p",{staticClass:"text-sm truncate"},[n._v("\n        "+n._s(t.organisation)+"\n      ")])])}))],2)])}),[],!1,null,"bc9ca632",null).exports);o.Z.component("group-map",g),o.Z.component("business-map",f),o.Z.component("localleeds-map",b);new o.Z({el:"#app"});document.getElementById("main-menu-button").addEventListener("click",(function(n){n.currentTarget.innerText="Menu"==n.currentTarget.innerText?"Close menu":"Menu",document.body.scrollTop=0,document.body.classList.toggle("overflow-hidden"),document.getElementById("main-menu").classList.toggle("-translate-x-full"),document.getElementById("main-menu-container").scrollTop=0}))},915:function(){function n(n,e){var o="undefined"!=typeof Symbol&&n[Symbol.iterator]||n["@@iterator"];if(!o){if(Array.isArray(n)||(o=function(n,e){if(!n)return;if("string"==typeof n)return t(n,e);var o=Object.prototype.toString.call(n).slice(8,-1);"Object"===o&&n.constructor&&(o=n.constructor.name);if("Map"===o||"Set"===o)return Array.from(n);if("Arguments"===o||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o))return t(n,e)}(n))||e&&n&&"number"==typeof n.length){o&&(n=o);var a=0,r=function(){};return{s:r,n:function(){return a>=n.length?{done:!0}:{done:!1,value:n[a++]}},e:function(n){throw n},f:r}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,s=!0,l=!1;return{s:function(){o=o.call(n)},n:function(){var n=o.next();return s=n.done,n},e:function(n){l=!0,i=n},f:function(){try{s||null==o.return||o.return()}finally{if(l)throw i}}}}function t(n,t){(null==t||t>n.length)&&(t=n.length);for(var e=0,o=new Array(t);e<t;e++)o[e]=n[e];return o}!function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:t.createElement("b").style,o=(arguments.length>2&&void 0!==arguments[2]||(e.gap=0),arguments.length>3&&void 0!==arguments[3]?arguments[3]:new WeakMap),a=arguments.length>4&&void 0!==arguments[4]?arguments[4]:/^(normal|0px)+$/,r=arguments.length>5&&void 0!==arguments[5]?arguments[5]:function(n){if(!o.has(n)&&(o.set(n,!0),!n.shadowRoot)){var e=getComputedStyle(n);if(/^(inline-)?flex$/.test(e.display)&&!a.test(e.rowGap+e.columnGap)){var r=n.attachShadow({mode:"open"}),i=r.appendChild(t.createElement("style"));r.appendChild(t.createElement("slot"));!function n(){i.textContent="::slotted(*){margin:calc(".concat(e.rowGap,"/2) calc(").concat(e.columnGap,"/2)}slot{display:inherit;flex-direction:inherit;flex-wrap:inherit;margin:calc(").concat(e.rowGap,"/-2) calc(").concat(e.columnGap,"/-2);}"),requestAnimationFrame(requestAnimationFrame.bind(null,n))}()}}},i=arguments.length>6&&void 0!==arguments[6]?arguments[6]:function(){Array.from(t.all,r),new MutationObserver((function(t){var e,o=n(t);try{for(o.s();!(e=o.n()).done;){var a,i=n(e.value.addedNodes);try{for(i.s();!(a=i.n()).done;){var s=a.value;1===s.nodeType&&r(s)}}catch(n){i.e(n)}finally{i.f()}}}catch(n){o.e(n)}finally{o.f()}})).observe(t,{childList:!0,subtree:!0})};e.gap||i()}(document)},918:function(){var n;n=document.querySelectorAll(".wp-block-person .wp-block-columns"),Array.prototype.forEach.call(n,(function(n){var t=n.querySelector("button"),e=n.nextElementSibling;e.hidden=!0,t.onclick=function(){var n="true"===t.getAttribute("aria-expanded")||!1;t.setAttribute("aria-expanded",!n),e.hidden=n}}))},330:function(n,t,e){"use strict";e.r(t);var o=e(15),a=e.n(o),r=e(645),i=e.n(r)()(a());i.push([n.id,".map-container[data-v-142ffc3a]{padding-top:56.25%}@media (orientation:portrait){.map-container[data-v-142ffc3a]{padding-top:100vw}}.map-sidebar[data-v-142ffc3a]{z-index:999}.vue2leaflet-map[data-v-142ffc3a]{position:absolute;top:0;left:0;right:0;bottom:0}","",{version:3,sources:["webpack://./resources/scripts/components/business-map.vue"],names:[],mappings:"AAmWA,gCACE,kBAlWF,CAmWE,8BAFF,gCAGI,iBAhWF,CACF,CAmWA,8BACE,WAhWF,CAmWA,kCACE,iBAAA,CACA,KAAA,CACA,MAAA,CACA,OAAA,CACA,QAhWF",sourcesContent:["\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n.map-container {\n  padding-top: 56.25%;\n  @media (orientation: portrait) {\n    padding-top: 100vw;\n  }\n}\n\n.map-sidebar {\n  z-index: 999;\n}\n\n.vue2leaflet-map {\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n}\n"],sourceRoot:""}]),t.default=i},988:function(n,t,e){"use strict";e.r(t);var o=e(15),a=e.n(o),r=e(645),i=e.n(r)()(a());i.push([n.id,".map-container[data-v-bc9ca632]{padding-top:56.25%}@media (orientation:portrait){.map-container[data-v-bc9ca632]{padding-top:100vw}}.map-sidebar[data-v-bc9ca632]{z-index:999}.vue2leaflet-map[data-v-bc9ca632]{position:absolute;top:0;left:0;right:0;bottom:0}","",{version:3,sources:["webpack://./resources/scripts/components/localleeds-map.vue"],names:[],mappings:"AAoVA,gCACE,kBAnVF,CAoVE,8BAFF,gCAGI,iBAjVF,CACF,CAoVA,8BACE,WAjVF,CAoVA,kCACE,iBAAA,CACA,KAAA,CACA,MAAA,CACA,OAAA,CACA,QAjVF",sourcesContent:["\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n.map-container {\n  padding-top: 56.25%;\n  @media (orientation: portrait) {\n    padding-top: 100vw;\n  }\n}\n\n.map-sidebar {\n  z-index: 999;\n}\n\n.vue2leaflet-map {\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n}\n"],sourceRoot:""}]),t.default=i},797:function(n,t,e){"use strict";e.r(t);var o=e(15),a=e.n(o),r=e(645),i=e.n(r)()(a());i.push([n.id,".map-container[data-v-5d1b4b1a]{padding-top:56.25%}@media (orientation:portrait){.map-container[data-v-5d1b4b1a]{padding-top:100vw}}.map-sidebar[data-v-5d1b4b1a]{z-index:999}.vue2leaflet-map[data-v-5d1b4b1a]{position:absolute;top:0;left:0;right:0;bottom:0}","",{version:3,sources:["webpack://./resources/scripts/components/map.vue"],names:[],mappings:"AAwYA,gCACE,kBAvYF,CAwYE,8BAFF,gCAGI,iBArYF,CACF,CAwYA,8BACE,WArYF,CAwYA,kCACE,iBAAA,CACA,KAAA,CACA,MAAA,CACA,OAAA,CACA,QArYF",sourcesContent:["\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n.map-container {\n  padding-top: 56.25%;\n  @media (orientation: portrait) {\n    padding-top: 100vw;\n  }\n}\n\n.map-sidebar {\n  z-index: 999;\n}\n\n.vue2leaflet-map {\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n}\n"],sourceRoot:""}]),t.default=i},736:function(){},836:function(){},949:function(n,t,e){var o=e(330);o.__esModule&&(o=o.default),"string"==typeof o&&(o=[[n.id,o,""]]),o.locals&&(n.exports=o.locals);(0,e(346).Z)("0e9801be",o,!0,{})},966:function(n,t,e){var o=e(988);o.__esModule&&(o=o.default),"string"==typeof o&&(o=[[n.id,o,""]]),o.locals&&(n.exports=o.locals);(0,e(346).Z)("fcd0afb8",o,!0,{})},959:function(n,t,e){var o=e(797);o.__esModule&&(o=o.default),"string"==typeof o&&(o=[[n.id,o,""]]),o.locals&&(n.exports=o.locals);(0,e(346).Z)("79d0d067",o,!0,{})}},function(n){"use strict";var t=function(t){return n(n.s=t)};n.O(0,[126,692,941],(function(){return t(995),t(736),t(836)}));n.O()}]);
//# sourceMappingURL=app.js.map