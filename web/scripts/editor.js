/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/scripts/editor"],{

/***/ "./resources/scripts/editor.js":
/*!*************************************!*\
  !*** ./resources/scripts/editor.js ***!
  \*************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ \"@wordpress/element\");\n/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/edit-post */ \"@wordpress/edit-post\");\n/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1__);\n\n // import domReady from '@wordpress/dom-ready';\n// import { unregisterBlockStyle, registerBlockStyle } from '@wordpress/blocks';\n\nwp.domReady(function () {\n  // wp.data\n  //   .dispatch('core/edit-post')\n  //   .removeEditorPanel('taxonomy-panel-category');\n  wp.data.dispatch('core/edit-post').removeEditorPanel('taxonomy-panel-post_tag');\n  wp.blocks.unregisterBlockStyle('core/button', 'outline');\n  wp.blocks.registerBlockStyle('core/button', {\n    name: 'outline',\n    label: 'Outline'\n  });\n  wp.data.dispatch('core/edit-post').removeEditorPanel('discussion-panel');\n  wp.blocks.unregisterBlockType('core/verse');\n  wp.blocks.unregisterBlockType('core/cover');\n  wp.blocks.unregisterBlockType('core/more');\n  wp.blocks.unregisterBlockType('core/code');\n  wp.blocks.unregisterBlockType('core/nextpage');\n  wp.blocks.unregisterBlockType('core/preformatted'); // wp.blocks.unregisterBlockType('core/html');\n\n  wp.blocks.unregisterBlockType('core/embed');\n  wp.blocks.unregisterBlockType('core/archives');\n  wp.blocks.unregisterBlockType('core/categories');\n  wp.blocks.unregisterBlockType('core/calendar');\n  wp.blocks.unregisterBlockType('core/tag-cloud');\n  wp.blocks.unregisterBlockType('core/rss');\n  wp.blocks.unregisterBlockType('core/search');\n  wp.blocks.unregisterBlockType('core/shortcode');\n  wp.blocks.unregisterBlockType('core/latest-posts'); // wp.blocks.unregisterBlockType('core/latest-comments');\n\n  wp.blocks.unregisterBlockType('core/spacer');\n  wp.blocks.unregisterBlockStyle('core/quote', 'default');\n  wp.blocks.unregisterBlockStyle('core/image', 'circle-mask');\n  wp.blocks.unregisterBlockStyle('core/image', 'rounded');\n  wp.blocks.unregisterBlockStyle('core/pullquote', 'solid-color');\n  wp.blocks.registerBlockStyle('core/paragraph', {\n    name: 'large',\n    label: 'Large'\n  });\n  wp.blocks.registerBlockStyle('core/image', {\n    name: 'cut-corner-bottom-left',\n    label: 'Cut corner (bottom left)'\n  });\n  wp.blocks.registerBlockType('mrn/details-summary-block', {\n    title: 'Contact details',\n    icon: 'arrow-right',\n    keywords: ['summary', 'details', 'expanded'],\n    category: 'common',\n    attributes: {\n      facebook: {\n        type: 'string',\n        source: 'html',\n        selector: 'span'\n      }\n    },\n    edit: function edit(props) {\n      var _props$attributes = props.attributes,\n          twitter = _props$attributes.twitter,\n          facebook = _props$attributes.facebook,\n          instagram = _props$attributes.instagram,\n          email = _props$attributes.email,\n          phone = _props$attributes.phone,\n          setAttributes = props.setAttributes,\n          className = props.className;\n      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(\"ul\", {\n        className: className\n      }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(\"li\", null, \"Facebook:\", (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(wp.blockEditor.RichText, {\n        tagName: \"span\",\n        placeholder: \"Enter full URL to Facebook page\",\n        value: facebook,\n        onChange: function onChange(newContent) {\n          setAttributes({\n            facebook: newContent\n          });\n        }\n      })));\n    },\n    save: function save(props) {\n      var _props$attributes2 = props.attributes,\n          twitter = _props$attributes2.twitter,\n          facebook = _props$attributes2.facebook,\n          instagram = _props$attributes2.instagram,\n          email = _props$attributes2.email,\n          phone = _props$attributes2.phone;\n      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(wp.element.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(\"ul\", null, facebook && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(\"li\", null, \"Facebook:\", (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(wp.blockEditor.RichText.Content, {\n        tagName: \"span\",\n        value: facebook\n      }))));\n    }\n  }); // wp.blocks.registerBlockType('mrn/button', {\n  //   title: 'Read more button',\n  //   edit: () => {\n  //     return (\n  //       <button className=\"button\" aria-expanded=\"false\" aria-label=\"Read more\">\n  //         <svg\n  //           xmlns=\"http://www.w3.org/2000/svg\"\n  //           className=\"inline-block w-16 h-16 ml-auto align-text-bottom stroke-2 md:w-28 md:h-28 text-violet-200\"\n  //           viewBox=\"0 0 1738 1551\"\n  //         >\n  //           <path\n  //             d=\"M1155.465 778.26H503.79M763.84 503.792l469.958 271.333L763.84 1046.45\"\n  //             fill=\"none\"\n  //             stroke=\"currentColor\"\n  //             strokeWidth=\"100\"\n  //           ></path>\n  //         </svg>\n  //       </button>\n  //     );\n  //   },\n  //   save: () => {\n  //     return (\n  //       <button className=\"button\" aria-expanded=\"false\" aria-label=\"Read more\">\n  //         <svg\n  //           xmlns=\"http://www.w3.org/2000/svg\"\n  //           className=\"inline-block w-16 h-16 ml-auto align-text-bottom stroke-2 md:w-28 md:h-28 text-violet-200\"\n  //           viewBox=\"0 0 1738 1551\"\n  //         >\n  //           <path\n  //             d=\"M1155.465 778.26H503.79M763.84 503.792l469.958 271.333L763.84 1046.45\"\n  //             fill=\"none\"\n  //             stroke=\"currentColor\"\n  //             strokeWidth=\"100\"\n  //           ></path>\n  //         </svg>\n  //       </button>\n  //     );\n  //   },\n  // });\n  // wp.blocks.registerBlockType('mrn/person', {\n  //   title: 'Person',\n  //   category: 'widgets',\n  //   edit: () => {\n  //     return wp.element.createElement(wp.blockEditor.InnerBlocks, {\n  //       template: [\n  //         [\n  //           'core/group',\n  //           {\n  //             className: 'wp-block-person',\n  //             templateLock: true,\n  //           },\n  //           [\n  //             [\n  //               'core/columns',\n  //               {\n  //                 templateLock: true,\n  //               },\n  //               [\n  //                 [\n  //                   'core/column',\n  //                   {\n  //                     width: '20%',\n  //                     templateLock: true,\n  //                   },\n  //                   [\n  //                     [\n  //                       'core/image',\n  //                       {\n  //                         sizeSlug: 'thumbnail',\n  //                         height: 150,\n  //                         width: 150,\n  //                       },\n  //                     ],\n  //                   ],\n  //                 ],\n  //                 [\n  //                   'core/column',\n  //                   {\n  //                     width: '80%',\n  //                     templateLock: 'all',\n  //                   },\n  //                   [\n  //                     [\n  //                       'core/heading',\n  //                       {\n  //                         placeholder: 'Name',\n  //                         level: 3,\n  //                       },\n  //                     ],\n  //                     [\n  //                       'core/heading',\n  //                       {\n  //                         placeholder: 'Position/title',\n  //                         level: 4,\n  //                       },\n  //                     ],\n  //                     [\n  //                       'mrn/button',\n  //                       {\n  //                         label: 'View details',\n  //                       },\n  //                     ],\n  //                   ],\n  //                 ],\n  //               ],\n  //             ],\n  //             [\n  //               'core/group',\n  //               {\n  //                 className: 'person-details',\n  //                 templateLock: false,\n  //                 hidden: true,\n  //               },\n  //               [\n  //                 [\n  //                   'core/paragraph',\n  //                   {\n  //                     placeholder: 'About this person',\n  //                   },\n  //                 ],\n  //               ],\n  //             ],\n  //           ],\n  //         ],\n  //       ],\n  //       templateLock: true,\n  //     });\n  //   },\n  //   save: () => {\n  //     return wp.element.createElement(wp.blockEditor.InnerBlocks.Content, {});\n  //   },\n  // });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2NyaXB0cy9lZGl0b3IuanM/ZjFlMyJdLCJuYW1lcyI6WyJ3cCIsIm5hbWUiLCJsYWJlbCIsInRpdGxlIiwiaWNvbiIsImtleXdvcmRzIiwiY2F0ZWdvcnkiLCJhdHRyaWJ1dGVzIiwiZmFjZWJvb2siLCJ0eXBlIiwic291cmNlIiwic2VsZWN0b3IiLCJlZGl0IiwicHJvcHMiLCJ0d2l0dGVyIiwiaW5zdGFncmFtIiwiZW1haWwiLCJwaG9uZSIsInNldEF0dHJpYnV0ZXMiLCJjbGFzc05hbWUiLCJuZXdDb250ZW50Iiwic2F2ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7O0NBQ0E7QUFDQTs7QUFFQUEsRUFBRSxDQUFGQSxTQUFZLFlBQVc7QUFDckI7QUFDQTtBQUNBO0FBQ0FBLElBQUUsQ0FBRkE7QUFJQUEsSUFBRSxDQUFGQTtBQUVBQSxJQUFFLENBQUZBLHlDQUE0QztBQUMxQ0MsUUFBSSxFQURzQztBQUUxQ0MsU0FBSyxFQUFFO0FBRm1DLEdBQTVDRjtBQUlBQSxJQUFFLENBQUZBO0FBRUFBLElBQUUsQ0FBRkE7QUFDQUEsSUFBRSxDQUFGQTtBQUNBQSxJQUFFLENBQUZBO0FBQ0FBLElBQUUsQ0FBRkE7QUFDQUEsSUFBRSxDQUFGQTtBQUNBQSxJQUFFLENBQUZBLDJCQXJCcUIsbUJBcUJyQkEsRUFyQnFCLENBc0JyQjs7QUFDQUEsSUFBRSxDQUFGQTtBQUNBQSxJQUFFLENBQUZBO0FBQ0FBLElBQUUsQ0FBRkE7QUFDQUEsSUFBRSxDQUFGQTtBQUNBQSxJQUFFLENBQUZBO0FBQ0FBLElBQUUsQ0FBRkE7QUFDQUEsSUFBRSxDQUFGQTtBQUNBQSxJQUFFLENBQUZBO0FBQ0FBLElBQUUsQ0FBRkEsMkJBL0JxQixtQkErQnJCQSxFQS9CcUIsQ0FnQ3JCOztBQUNBQSxJQUFFLENBQUZBO0FBRUFBLElBQUUsQ0FBRkE7QUFDQUEsSUFBRSxDQUFGQTtBQUNBQSxJQUFFLENBQUZBO0FBQ0FBLElBQUUsQ0FBRkE7QUFFQUEsSUFBRSxDQUFGQSw0Q0FBK0M7QUFDN0NDLFFBQUksRUFEeUM7QUFFN0NDLFNBQUssRUFBRTtBQUZzQyxHQUEvQ0Y7QUFLQUEsSUFBRSxDQUFGQSx3Q0FBMkM7QUFDekNDLFFBQUksRUFEcUM7QUFFekNDLFNBQUssRUFBRTtBQUZrQyxHQUEzQ0Y7QUFLQUEsSUFBRSxDQUFGQSxzREFBeUQ7QUFDdkRHLFNBQUssRUFEa0Q7QUFFdkRDLFFBQUksRUFGbUQ7QUFHdkRDLFlBQVEsRUFBRSx1QkFINkMsVUFHN0MsQ0FINkM7QUFJdkRDLFlBQVEsRUFKK0M7QUFLdkRDLGNBQVUsRUFBRTtBQUNWQyxjQUFRLEVBQUU7QUFDUkMsWUFBSSxFQURJO0FBRVJDLGNBQU0sRUFGRTtBQUdSQyxnQkFBUSxFQUFFO0FBSEY7QUFEQSxLQUwyQztBQWF2REMsUUFBSSxFQUFFLHFCQUFTO0FBQ2IsOEJBSUlDLEtBSko7QUFBQSxVQUNnQkMsT0FEaEI7QUFBQSxVQUN5Qk4sUUFEekI7QUFBQSxVQUNtQ08sU0FEbkM7QUFBQSxVQUM4Q0MsS0FEOUM7QUFBQSxVQUNxREMsS0FEckQ7QUFBQSxVQUVFQyxhQUZGLEdBSUlMLEtBSko7QUFBQSxVQUdFTSxTQUhGLEdBSUlOLEtBSko7QUFNQSxhQUNFO0FBQUksaUJBQVMsRUFBRU07QUFBZixTQUNFLDJGQUVFLGtFQUFDLEVBQUQsWUFBQyxDQUFEO0FBQ0UsZUFBTyxFQURUO0FBRUUsbUJBQVcsRUFGYjtBQUdFLGFBQUssRUFIUDtBQUlFLGdCQUFRLEVBQUUsOEJBQWM7QUFDdEJELHVCQUFhLENBQUM7QUFBRVYsb0JBQVEsRUFBRVk7QUFBWixXQUFELENBQWJGO0FBQ0Q7QUFOSCxRQUZGLENBREYsQ0FERjtBQXBCcUQ7QUFxQ3ZERyxRQUFJLEVBQUUscUJBQVM7QUFDYiwrQkFFSVIsS0FGSjtBQUFBLFVBQ2dCQyxPQURoQjtBQUFBLFVBQ3lCTixRQUR6QjtBQUFBLFVBQ21DTyxTQURuQztBQUFBLFVBQzhDQyxLQUQ5QztBQUFBLFVBQ3FEQyxLQURyRDtBQUlBLGFBQ0Usa0VBQUMsRUFBRCxRQUFDLENBQUQsZ0JBQ0UsOEVBQ0dULFFBQVEsSUFDUCwyRkFFRSxrRUFBQyxFQUFELFlBQUMsQ0FBRCxRQUFDLENBQUQ7QUFDRSxlQUFPLEVBRFQ7QUFFRSxhQUFLLEVBQUVBO0FBRlQsUUFGRixDQUZKLENBREYsQ0FERjtBQWVEO0FBekRzRCxHQUF6RFIsRUFsRHFCLENBOEdyQjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFsUEZBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3NjcmlwdHMvZWRpdG9yLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICdAd29yZHByZXNzL2VkaXQtcG9zdCc7XG4vLyBpbXBvcnQgZG9tUmVhZHkgZnJvbSAnQHdvcmRwcmVzcy9kb20tcmVhZHknO1xuLy8gaW1wb3J0IHsgdW5yZWdpc3RlckJsb2NrU3R5bGUsIHJlZ2lzdGVyQmxvY2tTdHlsZSB9IGZyb20gJ0B3b3JkcHJlc3MvYmxvY2tzJztcblxud3AuZG9tUmVhZHkoZnVuY3Rpb24oKSB7XG4gIC8vIHdwLmRhdGFcbiAgLy8gICAuZGlzcGF0Y2goJ2NvcmUvZWRpdC1wb3N0JylcbiAgLy8gICAucmVtb3ZlRWRpdG9yUGFuZWwoJ3RheG9ub215LXBhbmVsLWNhdGVnb3J5Jyk7XG4gIHdwLmRhdGFcbiAgICAuZGlzcGF0Y2goJ2NvcmUvZWRpdC1wb3N0JylcbiAgICAucmVtb3ZlRWRpdG9yUGFuZWwoJ3RheG9ub215LXBhbmVsLXBvc3RfdGFnJyk7XG5cbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1N0eWxlKCdjb3JlL2J1dHRvbicsICdvdXRsaW5lJyk7XG5cbiAgd3AuYmxvY2tzLnJlZ2lzdGVyQmxvY2tTdHlsZSgnY29yZS9idXR0b24nLCB7XG4gICAgbmFtZTogJ291dGxpbmUnLFxuICAgIGxhYmVsOiAnT3V0bGluZScsXG4gIH0pO1xuICB3cC5kYXRhLmRpc3BhdGNoKCdjb3JlL2VkaXQtcG9zdCcpLnJlbW92ZUVkaXRvclBhbmVsKCdkaXNjdXNzaW9uLXBhbmVsJyk7XG5cbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvdmVyc2UnKTtcbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvY292ZXInKTtcbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvbW9yZScpO1xuICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9jb2RlJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL25leHRwYWdlJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL3ByZWZvcm1hdHRlZCcpO1xuICAvLyB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9odG1sJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL2VtYmVkJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL2FyY2hpdmVzJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL2NhdGVnb3JpZXMnKTtcbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvY2FsZW5kYXInKTtcbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvdGFnLWNsb3VkJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL3JzcycpO1xuICB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9zZWFyY2gnKTtcbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvc2hvcnRjb2RlJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tUeXBlKCdjb3JlL2xhdGVzdC1wb3N0cycpO1xuICAvLyB3cC5ibG9ja3MudW5yZWdpc3RlckJsb2NrVHlwZSgnY29yZS9sYXRlc3QtY29tbWVudHMnKTtcbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1R5cGUoJ2NvcmUvc3BhY2VyJyk7XG5cbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1N0eWxlKCdjb3JlL3F1b3RlJywgJ2RlZmF1bHQnKTtcbiAgd3AuYmxvY2tzLnVucmVnaXN0ZXJCbG9ja1N0eWxlKCdjb3JlL2ltYWdlJywgJ2NpcmNsZS1tYXNrJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tTdHlsZSgnY29yZS9pbWFnZScsICdyb3VuZGVkJyk7XG4gIHdwLmJsb2Nrcy51bnJlZ2lzdGVyQmxvY2tTdHlsZSgnY29yZS9wdWxscXVvdGUnLCAnc29saWQtY29sb3InKTtcblxuICB3cC5ibG9ja3MucmVnaXN0ZXJCbG9ja1N0eWxlKCdjb3JlL3BhcmFncmFwaCcsIHtcbiAgICBuYW1lOiAnbGFyZ2UnLFxuICAgIGxhYmVsOiAnTGFyZ2UnLFxuICB9KTtcblxuICB3cC5ibG9ja3MucmVnaXN0ZXJCbG9ja1N0eWxlKCdjb3JlL2ltYWdlJywge1xuICAgIG5hbWU6ICdjdXQtY29ybmVyLWJvdHRvbS1sZWZ0JyxcbiAgICBsYWJlbDogJ0N1dCBjb3JuZXIgKGJvdHRvbSBsZWZ0KScsXG4gIH0pO1xuXG4gIHdwLmJsb2Nrcy5yZWdpc3RlckJsb2NrVHlwZSgnbXJuL2RldGFpbHMtc3VtbWFyeS1ibG9jaycsIHtcbiAgICB0aXRsZTogJ0NvbnRhY3QgZGV0YWlscycsXG4gICAgaWNvbjogJ2Fycm93LXJpZ2h0JyxcbiAgICBrZXl3b3JkczogWydzdW1tYXJ5JywgJ2RldGFpbHMnLCAnZXhwYW5kZWQnXSxcbiAgICBjYXRlZ29yeTogJ2NvbW1vbicsXG4gICAgYXR0cmlidXRlczoge1xuICAgICAgZmFjZWJvb2s6IHtcbiAgICAgICAgdHlwZTogJ3N0cmluZycsXG4gICAgICAgIHNvdXJjZTogJ2h0bWwnLFxuICAgICAgICBzZWxlY3RvcjogJ3NwYW4nLFxuICAgICAgfSxcbiAgICB9LFxuXG4gICAgZWRpdDogcHJvcHMgPT4ge1xuICAgICAgY29uc3Qge1xuICAgICAgICBhdHRyaWJ1dGVzOiB7IHR3aXR0ZXIsIGZhY2Vib29rLCBpbnN0YWdyYW0sIGVtYWlsLCBwaG9uZSB9LFxuICAgICAgICBzZXRBdHRyaWJ1dGVzLFxuICAgICAgICBjbGFzc05hbWUsXG4gICAgICB9ID0gcHJvcHM7XG5cbiAgICAgIHJldHVybiAoXG4gICAgICAgIDx1bCBjbGFzc05hbWU9e2NsYXNzTmFtZX0+XG4gICAgICAgICAgPGxpPlxuICAgICAgICAgICAgRmFjZWJvb2s6XG4gICAgICAgICAgICA8d3AuYmxvY2tFZGl0b3IuUmljaFRleHRcbiAgICAgICAgICAgICAgdGFnTmFtZT1cInNwYW5cIlxuICAgICAgICAgICAgICBwbGFjZWhvbGRlcj1cIkVudGVyIGZ1bGwgVVJMIHRvIEZhY2Vib29rIHBhZ2VcIlxuICAgICAgICAgICAgICB2YWx1ZT17ZmFjZWJvb2t9XG4gICAgICAgICAgICAgIG9uQ2hhbmdlPXtuZXdDb250ZW50ID0+IHtcbiAgICAgICAgICAgICAgICBzZXRBdHRyaWJ1dGVzKHsgZmFjZWJvb2s6IG5ld0NvbnRlbnQgfSk7XG4gICAgICAgICAgICAgIH19XG4gICAgICAgICAgICAvPlxuICAgICAgICAgIDwvbGk+XG4gICAgICAgIDwvdWw+XG4gICAgICApO1xuICAgIH0sXG5cbiAgICBzYXZlOiBwcm9wcyA9PiB7XG4gICAgICBjb25zdCB7XG4gICAgICAgIGF0dHJpYnV0ZXM6IHsgdHdpdHRlciwgZmFjZWJvb2ssIGluc3RhZ3JhbSwgZW1haWwsIHBob25lIH0sXG4gICAgICB9ID0gcHJvcHM7XG5cbiAgICAgIHJldHVybiAoXG4gICAgICAgIDx3cC5lbGVtZW50LkZyYWdtZW50PlxuICAgICAgICAgIDx1bD5cbiAgICAgICAgICAgIHtmYWNlYm9vayAmJiAoXG4gICAgICAgICAgICAgIDxsaT5cbiAgICAgICAgICAgICAgICBGYWNlYm9vazpcbiAgICAgICAgICAgICAgICA8d3AuYmxvY2tFZGl0b3IuUmljaFRleHQuQ29udGVudFxuICAgICAgICAgICAgICAgICAgdGFnTmFtZT1cInNwYW5cIlxuICAgICAgICAgICAgICAgICAgdmFsdWU9e2ZhY2Vib29rfVxuICAgICAgICAgICAgICAgIC8+XG4gICAgICAgICAgICAgIDwvbGk+XG4gICAgICAgICAgICApfVxuICAgICAgICAgIDwvdWw+XG4gICAgICAgIDwvd3AuZWxlbWVudC5GcmFnbWVudD5cbiAgICAgICk7XG4gICAgfSxcbiAgfSk7XG5cbiAgLy8gd3AuYmxvY2tzLnJlZ2lzdGVyQmxvY2tUeXBlKCdtcm4vYnV0dG9uJywge1xuICAvLyAgIHRpdGxlOiAnUmVhZCBtb3JlIGJ1dHRvbicsXG4gIC8vICAgZWRpdDogKCkgPT4ge1xuICAvLyAgICAgcmV0dXJuIChcbiAgLy8gICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidXR0b25cIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIiBhcmlhLWxhYmVsPVwiUmVhZCBtb3JlXCI+XG4gIC8vICAgICAgICAgPHN2Z1xuICAvLyAgICAgICAgICAgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Z1wiXG4gIC8vICAgICAgICAgICBjbGFzc05hbWU9XCJpbmxpbmUtYmxvY2sgdy0xNiBoLTE2IG1sLWF1dG8gYWxpZ24tdGV4dC1ib3R0b20gc3Ryb2tlLTIgbWQ6dy0yOCBtZDpoLTI4IHRleHQtdmlvbGV0LTIwMFwiXG4gIC8vICAgICAgICAgICB2aWV3Qm94PVwiMCAwIDE3MzggMTU1MVwiXG4gIC8vICAgICAgICAgPlxuICAvLyAgICAgICAgICAgPHBhdGhcbiAgLy8gICAgICAgICAgICAgZD1cIk0xMTU1LjQ2NSA3NzguMjZINTAzLjc5TTc2My44NCA1MDMuNzkybDQ2OS45NTggMjcxLjMzM0w3NjMuODQgMTA0Ni40NVwiXG4gIC8vICAgICAgICAgICAgIGZpbGw9XCJub25lXCJcbiAgLy8gICAgICAgICAgICAgc3Ryb2tlPVwiY3VycmVudENvbG9yXCJcbiAgLy8gICAgICAgICAgICAgc3Ryb2tlV2lkdGg9XCIxMDBcIlxuICAvLyAgICAgICAgICAgPjwvcGF0aD5cbiAgLy8gICAgICAgICA8L3N2Zz5cbiAgLy8gICAgICAgPC9idXR0b24+XG4gIC8vICAgICApO1xuICAvLyAgIH0sXG4gIC8vICAgc2F2ZTogKCkgPT4ge1xuICAvLyAgICAgcmV0dXJuIChcbiAgLy8gICAgICAgPGJ1dHRvbiBjbGFzc05hbWU9XCJidXR0b25cIiBhcmlhLWV4cGFuZGVkPVwiZmFsc2VcIiBhcmlhLWxhYmVsPVwiUmVhZCBtb3JlXCI+XG4gIC8vICAgICAgICAgPHN2Z1xuICAvLyAgICAgICAgICAgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Z1wiXG4gIC8vICAgICAgICAgICBjbGFzc05hbWU9XCJpbmxpbmUtYmxvY2sgdy0xNiBoLTE2IG1sLWF1dG8gYWxpZ24tdGV4dC1ib3R0b20gc3Ryb2tlLTIgbWQ6dy0yOCBtZDpoLTI4IHRleHQtdmlvbGV0LTIwMFwiXG4gIC8vICAgICAgICAgICB2aWV3Qm94PVwiMCAwIDE3MzggMTU1MVwiXG4gIC8vICAgICAgICAgPlxuICAvLyAgICAgICAgICAgPHBhdGhcbiAgLy8gICAgICAgICAgICAgZD1cIk0xMTU1LjQ2NSA3NzguMjZINTAzLjc5TTc2My44NCA1MDMuNzkybDQ2OS45NTggMjcxLjMzM0w3NjMuODQgMTA0Ni40NVwiXG4gIC8vICAgICAgICAgICAgIGZpbGw9XCJub25lXCJcbiAgLy8gICAgICAgICAgICAgc3Ryb2tlPVwiY3VycmVudENvbG9yXCJcbiAgLy8gICAgICAgICAgICAgc3Ryb2tlV2lkdGg9XCIxMDBcIlxuICAvLyAgICAgICAgICAgPjwvcGF0aD5cbiAgLy8gICAgICAgICA8L3N2Zz5cbiAgLy8gICAgICAgPC9idXR0b24+XG4gIC8vICAgICApO1xuICAvLyAgIH0sXG4gIC8vIH0pO1xuXG4gIC8vIHdwLmJsb2Nrcy5yZWdpc3RlckJsb2NrVHlwZSgnbXJuL3BlcnNvbicsIHtcbiAgLy8gICB0aXRsZTogJ1BlcnNvbicsXG4gIC8vICAgY2F0ZWdvcnk6ICd3aWRnZXRzJyxcbiAgLy8gICBlZGl0OiAoKSA9PiB7XG4gIC8vICAgICByZXR1cm4gd3AuZWxlbWVudC5jcmVhdGVFbGVtZW50KHdwLmJsb2NrRWRpdG9yLklubmVyQmxvY2tzLCB7XG4gIC8vICAgICAgIHRlbXBsYXRlOiBbXG4gIC8vICAgICAgICAgW1xuICAvLyAgICAgICAgICAgJ2NvcmUvZ3JvdXAnLFxuICAvLyAgICAgICAgICAge1xuICAvLyAgICAgICAgICAgICBjbGFzc05hbWU6ICd3cC1ibG9jay1wZXJzb24nLFxuICAvLyAgICAgICAgICAgICB0ZW1wbGF0ZUxvY2s6IHRydWUsXG4gIC8vICAgICAgICAgICB9LFxuICAvLyAgICAgICAgICAgW1xuICAvLyAgICAgICAgICAgICBbXG4gIC8vICAgICAgICAgICAgICAgJ2NvcmUvY29sdW1ucycsXG4gIC8vICAgICAgICAgICAgICAge1xuICAvLyAgICAgICAgICAgICAgICAgdGVtcGxhdGVMb2NrOiB0cnVlLFxuICAvLyAgICAgICAgICAgICAgIH0sXG4gIC8vICAgICAgICAgICAgICAgW1xuICAvLyAgICAgICAgICAgICAgICAgW1xuICAvLyAgICAgICAgICAgICAgICAgICAnY29yZS9jb2x1bW4nLFxuICAvLyAgICAgICAgICAgICAgICAgICB7XG4gIC8vICAgICAgICAgICAgICAgICAgICAgd2lkdGg6ICcyMCUnLFxuICAvLyAgICAgICAgICAgICAgICAgICAgIHRlbXBsYXRlTG9jazogdHJ1ZSxcbiAgLy8gICAgICAgICAgICAgICAgICAgfSxcbiAgLy8gICAgICAgICAgICAgICAgICAgW1xuICAvLyAgICAgICAgICAgICAgICAgICAgIFtcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgICdjb3JlL2ltYWdlJyxcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgIHtcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgICAgc2l6ZVNsdWc6ICd0aHVtYm5haWwnLFxuICAvLyAgICAgICAgICAgICAgICAgICAgICAgICBoZWlnaHQ6IDE1MCxcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgICAgd2lkdGg6IDE1MCxcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgIH0sXG4gIC8vICAgICAgICAgICAgICAgICAgICAgXSxcbiAgLy8gICAgICAgICAgICAgICAgICAgXSxcbiAgLy8gICAgICAgICAgICAgICAgIF0sXG4gIC8vICAgICAgICAgICAgICAgICBbXG4gIC8vICAgICAgICAgICAgICAgICAgICdjb3JlL2NvbHVtbicsXG4gIC8vICAgICAgICAgICAgICAgICAgIHtcbiAgLy8gICAgICAgICAgICAgICAgICAgICB3aWR0aDogJzgwJScsXG4gIC8vICAgICAgICAgICAgICAgICAgICAgdGVtcGxhdGVMb2NrOiAnYWxsJyxcbiAgLy8gICAgICAgICAgICAgICAgICAgfSxcbiAgLy8gICAgICAgICAgICAgICAgICAgW1xuICAvLyAgICAgICAgICAgICAgICAgICAgIFtcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgICdjb3JlL2hlYWRpbmcnLFxuICAvLyAgICAgICAgICAgICAgICAgICAgICAge1xuICAvLyAgICAgICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcjogJ05hbWUnLFxuICAvLyAgICAgICAgICAgICAgICAgICAgICAgICBsZXZlbDogMyxcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgIH0sXG4gIC8vICAgICAgICAgICAgICAgICAgICAgXSxcbiAgLy8gICAgICAgICAgICAgICAgICAgICBbXG4gIC8vICAgICAgICAgICAgICAgICAgICAgICAnY29yZS9oZWFkaW5nJyxcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgIHtcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgICAgcGxhY2Vob2xkZXI6ICdQb3NpdGlvbi90aXRsZScsXG4gIC8vICAgICAgICAgICAgICAgICAgICAgICAgIGxldmVsOiA0LFxuICAvLyAgICAgICAgICAgICAgICAgICAgICAgfSxcbiAgLy8gICAgICAgICAgICAgICAgICAgICBdLFxuICAvLyAgICAgICAgICAgICAgICAgICAgIFtcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgICdtcm4vYnV0dG9uJyxcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgIHtcbiAgLy8gICAgICAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICdWaWV3IGRldGFpbHMnLFxuICAvLyAgICAgICAgICAgICAgICAgICAgICAgfSxcbiAgLy8gICAgICAgICAgICAgICAgICAgICBdLFxuICAvLyAgICAgICAgICAgICAgICAgICBdLFxuICAvLyAgICAgICAgICAgICAgICAgXSxcbiAgLy8gICAgICAgICAgICAgICBdLFxuICAvLyAgICAgICAgICAgICBdLFxuICAvLyAgICAgICAgICAgICBbXG4gIC8vICAgICAgICAgICAgICAgJ2NvcmUvZ3JvdXAnLFxuICAvLyAgICAgICAgICAgICAgIHtcbiAgLy8gICAgICAgICAgICAgICAgIGNsYXNzTmFtZTogJ3BlcnNvbi1kZXRhaWxzJyxcbiAgLy8gICAgICAgICAgICAgICAgIHRlbXBsYXRlTG9jazogZmFsc2UsXG4gIC8vICAgICAgICAgICAgICAgICBoaWRkZW46IHRydWUsXG4gIC8vICAgICAgICAgICAgICAgfSxcbiAgLy8gICAgICAgICAgICAgICBbXG4gIC8vICAgICAgICAgICAgICAgICBbXG4gIC8vICAgICAgICAgICAgICAgICAgICdjb3JlL3BhcmFncmFwaCcsXG4gIC8vICAgICAgICAgICAgICAgICAgIHtcbiAgLy8gICAgICAgICAgICAgICAgICAgICBwbGFjZWhvbGRlcjogJ0Fib3V0IHRoaXMgcGVyc29uJyxcbiAgLy8gICAgICAgICAgICAgICAgICAgfSxcbiAgLy8gICAgICAgICAgICAgICAgIF0sXG4gIC8vICAgICAgICAgICAgICAgXSxcbiAgLy8gICAgICAgICAgICAgXSxcbiAgLy8gICAgICAgICAgIF0sXG4gIC8vICAgICAgICAgXSxcbiAgLy8gICAgICAgXSxcbiAgLy8gICAgICAgdGVtcGxhdGVMb2NrOiB0cnVlLFxuICAvLyAgICAgfSk7XG4gIC8vICAgfSxcbiAgLy8gICBzYXZlOiAoKSA9PiB7XG4gIC8vICAgICByZXR1cm4gd3AuZWxlbWVudC5jcmVhdGVFbGVtZW50KHdwLmJsb2NrRWRpdG9yLklubmVyQmxvY2tzLkNvbnRlbnQsIHt9KTtcbiAgLy8gICB9LFxuICAvLyB9KTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/scripts/editor.js\n");

/***/ }),

/***/ "@wordpress/edit-post":
/*!**********************************!*\
  !*** external ["wp","editPost"] ***!
  \**********************************/
/***/ (function(module) {

"use strict";
module.exports = window["wp"]["editPost"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ (function(module) {

"use strict";
module.exports = window["wp"]["element"];

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ var __webpack_exports__ = (__webpack_exec__("./resources/scripts/editor.js"));
/******/ }
]);