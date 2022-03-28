(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/gallery"],{

/***/ "./source/_assets/js/gallery.js":
/*!**************************************!*\
  !*** ./source/_assets/js/gallery.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function () {\n  var initPhotoSwipeFromDOM = function initPhotoSwipeFromDOM(gallerySelector) {\n    var parseThumbnailElements = function parseThumbnailElements(el) {\n      var thumbElements = el.childNodes,\n          numNodes = thumbElements.length,\n          items = [],\n          el,\n          childElements,\n          thumbnailEl,\n          size,\n          item;\n\n      for (var i = 0; i < numNodes; i++) {\n        el = thumbElements[i]; // include only element nodes \n\n        if (el.nodeType !== 1) {\n          continue;\n        }\n\n        childElements = el.children;\n        size = el.getAttribute('data-size').split('x'); // create slide object\n\n        item = {\n          src: el.getAttribute('href'),\n          w: parseInt(size[0], 10),\n          h: parseInt(size[1], 10),\n          location: el.getAttribute('data-location')\n        };\n        item.el = el; // save link to element for getThumbBoundsFn\n\n        if (childElements.length > 0) {\n          item.msrc = childElements[0].getAttribute('src'); // thumbnail url\n\n          if (childElements.length > 1) {\n            item.title = childElements[1].innerHTML; // caption (contents of figure)\n          }\n        }\n\n        var mediumSrc = el.getAttribute('data-med');\n\n        if (mediumSrc) {\n          size = el.getAttribute('data-med-size').split('x'); // \"medium-sized\" image\n\n          item.m = {\n            src: mediumSrc,\n            w: parseInt(size[0], 10),\n            h: parseInt(size[1], 10)\n          };\n        } // original image\n\n\n        item.o = {\n          src: item.src,\n          w: item.w,\n          h: item.h\n        };\n        items.push(item);\n      }\n\n      return items;\n    }; // find nearest parent element\n\n\n    var closest = function closest(el, fn) {\n      return el && (fn(el) ? el : closest(el.parentNode, fn));\n    };\n\n    var onThumbnailsClick = function onThumbnailsClick(e) {\n      e = e || window.event;\n      e.preventDefault ? e.preventDefault() : e.returnValue = false;\n      var eTarget = e.target || e.srcElement;\n      var clickedListItem = closest(eTarget, function (el) {\n        return el.tagName === 'A';\n      });\n\n      if (!clickedListItem) {\n        return;\n      }\n\n      var clickedGallery = clickedListItem.parentNode;\n      var childNodes = clickedListItem.parentNode.childNodes,\n          numChildNodes = childNodes.length,\n          nodeIndex = 0,\n          index;\n\n      for (var i = 0; i < numChildNodes; i++) {\n        if (childNodes[i].nodeType !== 1) {\n          continue;\n        }\n\n        if (childNodes[i] === clickedListItem) {\n          index = nodeIndex;\n          break;\n        }\n\n        nodeIndex++;\n      }\n\n      if (index >= 0) {\n        openPhotoSwipe(index, clickedGallery);\n      }\n\n      return false;\n    };\n\n    var photoswipeParseHash = function photoswipeParseHash() {\n      var hash = window.location.hash.substring(1),\n          params = {};\n\n      if (hash.length < 5) {\n        // pid=1\n        return params;\n      }\n\n      var vars = hash.split('&');\n\n      for (var i = 0; i < vars.length; i++) {\n        if (!vars[i]) {\n          continue;\n        }\n\n        var pair = vars[i].split('=');\n\n        if (pair.length < 2) {\n          continue;\n        }\n\n        params[pair[0]] = pair[1];\n      }\n\n      if (params.gid) {\n        params.gid = parseInt(params.gid, 10);\n      }\n\n      return params;\n    };\n\n    var openPhotoSwipe = function openPhotoSwipe(index, galleryElement, disableAnimation, fromURL) {\n      var pswpElement = document.querySelectorAll('.pswp')[0],\n          gallery,\n          options,\n          items;\n      items = parseThumbnailElements(galleryElement); // define options (if needed)\n\n      options = {\n        galleryUID: galleryElement.getAttribute('data-pswp-uid'),\n        getThumbBoundsFn: function getThumbBoundsFn(index) {\n          // See Options->getThumbBoundsFn section of docs for more info\n          var thumbnail = items[index].el.children[0],\n              pageYScroll = window.pageYOffset || document.documentElement.scrollTop,\n              rect = thumbnail.getBoundingClientRect();\n          return {\n            x: rect.left,\n            y: rect.top + pageYScroll,\n            w: rect.width\n          };\n        },\n        addCaptionHTMLFn: function addCaptionHTMLFn(item, captionEl, isFake) {\n          if (!item.title) {\n            captionEl.children[0].innerText = '';\n            return false;\n          }\n\n          captionEl.children[0].innerHTML = item.title + '<br/><small>Photo: ' + item.location + '</small>';\n          return true;\n        }\n      };\n\n      if (fromURL) {\n        if (options.galleryPIDs) {\n          // parse real index when custom PIDs are used \n          // http://photoswipe.com/documentation/faq.html#custom-pid-in-url\n          for (var j = 0; j < items.length; j++) {\n            if (items[j].pid == index) {\n              options.index = j;\n              break;\n            }\n          }\n        } else {\n          options.index = parseInt(index, 10) - 1;\n        }\n      } else {\n        options.index = parseInt(index, 10);\n      } // exit if index not found\n\n\n      if (isNaN(options.index)) {\n        return;\n      }\n\n      var radios = document.getElementsByName('gallery-style');\n\n      for (var i = 0, length = radios.length; i < length; i++) {\n        if (radios[i].checked) {\n          if (radios[i].id == 'radio-all-controls') {} else if (radios[i].id == 'radio-minimal-black') {\n            options.mainClass = 'pswp--minimal--dark';\n            options.barsSize = {\n              top: 0,\n              bottom: 0\n            };\n            options.captionEl = false;\n            options.fullscreenEl = false;\n            options.shareEl = false;\n            options.bgOpacity = 0.85;\n            options.tapToClose = true;\n            options.tapToToggleControls = false;\n          }\n\n          break;\n        }\n      }\n\n      if (disableAnimation) {\n        options.showAnimationDuration = 0;\n      } // Pass data to PhotoSwipe and initialize it\n\n\n      gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options); // see: http://photoswipe.com/documentation/responsive-images.html\n\n      var realViewportWidth,\n          useLargeImages = false,\n          firstResize = true,\n          imageSrcWillChange;\n      gallery.listen('beforeResize', function () {\n        var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;\n        dpiRatio = Math.min(dpiRatio, 2.5);\n        realViewportWidth = gallery.viewportSize.x * dpiRatio;\n\n        if (realViewportWidth >= 1200 || !gallery.likelyTouchDevice && realViewportWidth > 800 || screen.width > 1200) {\n          if (!useLargeImages) {\n            useLargeImages = true;\n            imageSrcWillChange = true;\n          }\n        } else {\n          if (useLargeImages) {\n            useLargeImages = false;\n            imageSrcWillChange = true;\n          }\n        }\n\n        if (imageSrcWillChange && !firstResize) {\n          gallery.invalidateCurrItems();\n        }\n\n        if (firstResize) {\n          firstResize = false;\n        }\n\n        imageSrcWillChange = false;\n      });\n      gallery.listen('gettingData', function (index, item) {\n        if (useLargeImages) {\n          item.src = item.o.src;\n          item.w = item.o.w;\n          item.h = item.o.h;\n        } else {\n          item.src = item.m.src;\n          item.w = item.m.w;\n          item.h = item.m.h;\n        }\n      });\n      gallery.init();\n    }; // select all gallery elements\n\n\n    var galleryElements = document.querySelectorAll(gallerySelector);\n\n    for (var i = 0, l = galleryElements.length; i < l; i++) {\n      galleryElements[i].setAttribute('data-pswp-uid', i + 1);\n      galleryElements[i].onclick = onThumbnailsClick;\n    } // Parse URL and open gallery if it contains #&pid=3&gid=1\n\n\n    var hashData = photoswipeParseHash();\n\n    if (hashData.pid && hashData.gid) {\n      openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);\n    }\n  };\n\n  initPhotoSwipeFromDOM('.demo-gallery');\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9qcy9nYWxsZXJ5LmpzPzcwOWUiXSwibmFtZXMiOlsiaW5pdFBob3RvU3dpcGVGcm9tRE9NIiwiZ2FsbGVyeVNlbGVjdG9yIiwicGFyc2VUaHVtYm5haWxFbGVtZW50cyIsImVsIiwidGh1bWJFbGVtZW50cyIsImNoaWxkTm9kZXMiLCJudW1Ob2RlcyIsImxlbmd0aCIsIml0ZW1zIiwiY2hpbGRFbGVtZW50cyIsInRodW1ibmFpbEVsIiwic2l6ZSIsIml0ZW0iLCJpIiwibm9kZVR5cGUiLCJjaGlsZHJlbiIsImdldEF0dHJpYnV0ZSIsInNwbGl0Iiwic3JjIiwidyIsInBhcnNlSW50IiwiaCIsImxvY2F0aW9uIiwibXNyYyIsInRpdGxlIiwiaW5uZXJIVE1MIiwibWVkaXVtU3JjIiwibSIsIm8iLCJwdXNoIiwiY2xvc2VzdCIsImZuIiwicGFyZW50Tm9kZSIsIm9uVGh1bWJuYWlsc0NsaWNrIiwiZSIsIndpbmRvdyIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJyZXR1cm5WYWx1ZSIsImVUYXJnZXQiLCJ0YXJnZXQiLCJzcmNFbGVtZW50IiwiY2xpY2tlZExpc3RJdGVtIiwidGFnTmFtZSIsImNsaWNrZWRHYWxsZXJ5IiwibnVtQ2hpbGROb2RlcyIsIm5vZGVJbmRleCIsImluZGV4Iiwib3BlblBob3RvU3dpcGUiLCJwaG90b3N3aXBlUGFyc2VIYXNoIiwiaGFzaCIsInN1YnN0cmluZyIsInBhcmFtcyIsInZhcnMiLCJwYWlyIiwiZ2lkIiwiZ2FsbGVyeUVsZW1lbnQiLCJkaXNhYmxlQW5pbWF0aW9uIiwiZnJvbVVSTCIsInBzd3BFbGVtZW50IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZ2FsbGVyeSIsIm9wdGlvbnMiLCJnYWxsZXJ5VUlEIiwiZ2V0VGh1bWJCb3VuZHNGbiIsInRodW1ibmFpbCIsInBhZ2VZU2Nyb2xsIiwicGFnZVlPZmZzZXQiLCJkb2N1bWVudEVsZW1lbnQiLCJzY3JvbGxUb3AiLCJyZWN0IiwiZ2V0Qm91bmRpbmdDbGllbnRSZWN0IiwieCIsImxlZnQiLCJ5IiwidG9wIiwid2lkdGgiLCJhZGRDYXB0aW9uSFRNTEZuIiwiY2FwdGlvbkVsIiwiaXNGYWtlIiwiaW5uZXJUZXh0IiwiZ2FsbGVyeVBJRHMiLCJqIiwicGlkIiwiaXNOYU4iLCJyYWRpb3MiLCJnZXRFbGVtZW50c0J5TmFtZSIsImNoZWNrZWQiLCJpZCIsIm1haW5DbGFzcyIsImJhcnNTaXplIiwiYm90dG9tIiwiZnVsbHNjcmVlbkVsIiwic2hhcmVFbCIsImJnT3BhY2l0eSIsInRhcFRvQ2xvc2UiLCJ0YXBUb1RvZ2dsZUNvbnRyb2xzIiwic2hvd0FuaW1hdGlvbkR1cmF0aW9uIiwiUGhvdG9Td2lwZSIsIlBob3RvU3dpcGVVSV9EZWZhdWx0IiwicmVhbFZpZXdwb3J0V2lkdGgiLCJ1c2VMYXJnZUltYWdlcyIsImZpcnN0UmVzaXplIiwiaW1hZ2VTcmNXaWxsQ2hhbmdlIiwibGlzdGVuIiwiZHBpUmF0aW8iLCJkZXZpY2VQaXhlbFJhdGlvIiwiTWF0aCIsIm1pbiIsInZpZXdwb3J0U2l6ZSIsImxpa2VseVRvdWNoRGV2aWNlIiwic2NyZWVuIiwiaW52YWxpZGF0ZUN1cnJJdGVtcyIsImluaXQiLCJnYWxsZXJ5RWxlbWVudHMiLCJsIiwic2V0QXR0cmlidXRlIiwib25jbGljayIsImhhc2hEYXRhIl0sIm1hcHBpbmdzIjoiQUFBRyxDQUFDLFlBQVc7QUFFUCxNQUFJQSxxQkFBcUIsR0FBRyxTQUF4QkEscUJBQXdCLENBQVNDLGVBQVQsRUFBMEI7QUFFbEQsUUFBSUMsc0JBQXNCLEdBQUcsU0FBekJBLHNCQUF5QixDQUFTQyxFQUFULEVBQWE7QUFDdEMsVUFBSUMsYUFBYSxHQUFHRCxFQUFFLENBQUNFLFVBQXZCO0FBQUEsVUFDSUMsUUFBUSxHQUFHRixhQUFhLENBQUNHLE1BRDdCO0FBQUEsVUFFSUMsS0FBSyxHQUFHLEVBRlo7QUFBQSxVQUdJTCxFQUhKO0FBQUEsVUFJSU0sYUFKSjtBQUFBLFVBS0lDLFdB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Q0FBaEI7QUFDSDtBQUNKLE9BVkQ7QUFZQXlDLGFBQU8sQ0FBQ29ELElBQVI7QUFDSCxLQXRJRCxDQXpJa0QsQ0FpUmxEOzs7QUFDQSxRQUFJQyxlQUFlLEdBQUd2RCxRQUFRLENBQUNDLGdCQUFULENBQTJCNUQsZUFBM0IsQ0FBdEI7O0FBQ0EsU0FBSSxJQUFJWSxDQUFDLEdBQUcsQ0FBUixFQUFXdUcsQ0FBQyxHQUFHRCxlQUFlLENBQUM1RyxNQUFuQyxFQUEyQ00sQ0FBQyxHQUFHdUcsQ0FBL0MsRUFBa0R2RyxDQUFDLEVBQW5ELEVBQXVEO0FBQ25Ec0cscUJBQWUsQ0FBQ3RHLENBQUQsQ0FBZixDQUFtQndHLFlBQW5CLENBQWdDLGVBQWhDLEVBQWlEeEcsQ0FBQyxHQUFDLENBQW5EO0FBQ0FzRyxxQkFBZSxDQUFDdEcsQ0FBRCxDQUFmLENBQW1CeUcsT0FBbkIsR0FBNkJyRixpQkFBN0I7QUFDSCxLQXRSaUQsQ0F3UmxEOzs7QUFDQSxRQUFJc0YsUUFBUSxHQUFHdEUsbUJBQW1CLEVBQWxDOztBQUNBLFFBQUdzRSxRQUFRLENBQUNuQyxHQUFULElBQWdCbUMsUUFBUSxDQUFDaEUsR0FBNUIsRUFBaUM7QUFDN0JQLG9CQUFjLENBQUV1RSxRQUFRLENBQUNuQyxHQUFYLEVBQWlCK0IsZUFBZSxDQUFFSSxRQUFRLENBQUNoRSxHQUFULEdBQWUsQ0FBakIsQ0FBaEMsRUFBc0QsSUFBdEQsRUFBNEQsSUFBNUQsQ0FBZDtBQUNIO0FBQ0osR0E3UkQ7O0FBK1JBdkQsdUJBQXFCLENBQUMsZUFBRCxDQUFyQjtBQUVILENBblNGIiwiZmlsZSI6Ii4vc291cmNlL19hc3NldHMvanMvZ2FsbGVyeS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiAgIChmdW5jdGlvbigpIHtcblxuICAgICAgICB2YXIgaW5pdFBob3RvU3dpcGVGcm9tRE9NID0gZnVuY3Rpb24oZ2FsbGVyeVNlbGVjdG9yKSB7XG5cbiAgICAgICAgICAgIHZhciBwYXJzZVRodW1ibmFpbEVsZW1lbnRzID0gZnVuY3Rpb24oZWwpIHtcbiAgICAgICAgICAgICAgICB2YXIgdGh1bWJFbGVtZW50cyA9IGVsLmNoaWxkTm9kZXMsXG4gICAgICAgICAgICAgICAgICAgIG51bU5vZGVzID0gdGh1bWJFbGVtZW50cy5sZW5ndGgsXG4gICAgICAgICAgICAgICAgICAgIGl0ZW1zID0gW10sXG4gICAgICAgICAgICAgICAgICAgIGVsLFxuICAgICAgICAgICAgICAgICAgICBjaGlsZEVsZW1lbnRzLFxuICAgICAgICAgICAgICAgICAgICB0aHVtYm5haWxFbCxcbiAgICAgICAgICAgICAgICAgICAgc2l6ZSxcbiAgICAgICAgICAgICAgICAgICAgaXRlbTtcblxuICAgICAgICAgICAgICAgIGZvcih2YXIgaSA9IDA7IGkgPCBudW1Ob2RlczsgaSsrKSB7XG4gICAgICAgICAgICAgICAgICAgIGVsID0gdGh1bWJFbGVtZW50c1tpXTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBpbmNsdWRlIG9ubHkgZWxlbWVudCBub2RlcyBcbiAgICAgICAgICAgICAgICAgICAgaWYoZWwubm9kZVR5cGUgIT09IDEpIHtcbiAgICAgICAgICAgICAgICAgICAgICBjb250aW51ZTtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgIGNoaWxkRWxlbWVudHMgPSBlbC5jaGlsZHJlbjtcblxuICAgICAgICAgICAgICAgICAgICBzaXplID0gZWwuZ2V0QXR0cmlidXRlKCdkYXRhLXNpemUnKS5zcGxpdCgneCcpO1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIGNyZWF0ZSBzbGlkZSBvYmplY3RcbiAgICAgICAgICAgICAgICAgICAgaXRlbSA9IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNyYzogZWwuZ2V0QXR0cmlidXRlKCdocmVmJyksXG4gICAgICAgICAgICAgICAgICAgICAgICB3OiBwYXJzZUludChzaXplWzBdLCAxMCksXG4gICAgICAgICAgICAgICAgICAgICAgICBoOiBwYXJzZUludChzaXplWzFdLCAxMCksXG4gICAgICAgICAgICAgICAgICAgICAgICBsb2NhdGlvbjogZWwuZ2V0QXR0cmlidXRlKCdkYXRhLWxvY2F0aW9uJylcbiAgICAgICAgICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgICAgICAgICBpdGVtLmVsID0gZWw7IC8vIHNhdmUgbGluayB0byBlbGVtZW50IGZvciBnZXRUaHVtYkJvdW5kc0ZuXG5cbiAgICAgICAgICAgICAgICAgICAgaWYoY2hpbGRFbGVtZW50cy5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAgICAgICAgICAgaXRlbS5tc3JjID0gY2hpbGRFbGVtZW50c1swXS5nZXRBdHRyaWJ1dGUoJ3NyYycpOyAvLyB0aHVtYm5haWwgdXJsXG4gICAgICAgICAgICAgICAgICAgICAgaWYoY2hpbGRFbGVtZW50cy5sZW5ndGggPiAxKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgIGl0ZW0udGl0bGUgPSBjaGlsZEVsZW1lbnRzWzFdLmlubmVySFRNTDsgLy8gY2FwdGlvbiAoY29udGVudHMgb2YgZmlndXJlKVxuICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfVxuXG5cbiAgICAgICAgICAgICAgICAgICAgdmFyIG1lZGl1bVNyYyA9IGVsLmdldEF0dHJpYnV0ZSgnZGF0YS1tZWQnKTtcblxuICAgICAgICAgICAgICAgICAgICBpZihtZWRpdW1TcmMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNpemUgPSBlbC5nZXRBdHRyaWJ1dGUoJ2RhdGEtbWVkLXNpemUnKS5zcGxpdCgneCcpO1xuICAgICAgICAgICAgICAgICAgICAgICAgLy8gXCJtZWRpdW0tc2l6ZWRcIiBpbWFnZVxuICAgICAgICAgICAgICAgICAgICAgICAgaXRlbS5tID0ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNyYzogbWVkaXVtU3JjLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHc6IHBhcnNlSW50KHNpemVbMF0sIDEwKSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBoOiBwYXJzZUludChzaXplWzFdLCAxMClcbiAgICAgICAgICAgICAgICAgICAgICAgIH07XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgLy8gb3JpZ2luYWwgaW1hZ2VcbiAgICAgICAgICAgICAgICAgICAgaXRlbS5vID0ge1xuICAgICAgICAgICAgICAgICAgICAgICAgc3JjOiBpdGVtLnNyYyxcbiAgICAgICAgICAgICAgICAgICAgICAgIHc6IGl0ZW0udyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGg6IGl0ZW0uaFxuICAgICAgICAgICAgICAgICAgICB9O1xuXG4gICAgICAgICAgICAgICAgICAgIGl0ZW1zLnB1c2goaXRlbSk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgcmV0dXJuIGl0ZW1zO1xuICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgLy8gZmluZCBuZWFyZXN0IHBhcmVudCBlbGVtZW50XG4gICAgICAgICAgICB2YXIgY2xvc2VzdCA9IGZ1bmN0aW9uIGNsb3Nlc3QoZWwsIGZuKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGVsICYmICggZm4oZWwpID8gZWwgOiBjbG9zZXN0KGVsLnBhcmVudE5vZGUsIGZuKSApO1xuICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgdmFyIG9uVGh1bWJuYWlsc0NsaWNrID0gZnVuY3Rpb24oZSkge1xuICAgICAgICAgICAgICAgIGUgPSBlIHx8IHdpbmRvdy5ldmVudDtcbiAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0ID8gZS5wcmV2ZW50RGVmYXVsdCgpIDogZS5yZXR1cm5WYWx1ZSA9IGZhbHNlO1xuXG4gICAgICAgICAgICAgICAgdmFyIGVUYXJnZXQgPSBlLnRhcmdldCB8fCBlLnNyY0VsZW1lbnQ7XG5cbiAgICAgICAgICAgICAgICB2YXIgY2xpY2tlZExpc3RJdGVtID0gY2xvc2VzdChlVGFyZ2V0LCBmdW5jdGlvbihlbCkge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gZWwudGFnTmFtZSA9PT0gJ0EnO1xuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgaWYoIWNsaWNrZWRMaXN0SXRlbSkge1xuICAgICAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgdmFyIGNsaWNrZWRHYWxsZXJ5ID0gY2xpY2tlZExpc3RJdGVtLnBhcmVudE5vZGU7XG5cbiAgICAgICAgICAgICAgICB2YXIgY2hpbGROb2RlcyA9IGNsaWNrZWRMaXN0SXRlbS5wYXJlbnROb2RlLmNoaWxkTm9kZXMsXG4gICAgICAgICAgICAgICAgICAgIG51bUNoaWxkTm9kZXMgPSBjaGlsZE5vZGVzLmxlbmd0aCxcbiAgICAgICAgICAgICAgICAgICAgbm9kZUluZGV4ID0gMCxcbiAgICAgICAgICAgICAgICAgICAgaW5kZXg7XG5cbiAgICAgICAgICAgICAgICBmb3IgKHZhciBpID0gMDsgaSA8IG51bUNoaWxkTm9kZXM7IGkrKykge1xuICAgICAgICAgICAgICAgICAgICBpZihjaGlsZE5vZGVzW2ldLm5vZGVUeXBlICE9PSAxKSB7IFxuICAgICAgICAgICAgICAgICAgICAgICAgY29udGludWU7IFxuICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgaWYoY2hpbGROb2Rlc1tpXSA9PT0gY2xpY2tlZExpc3RJdGVtKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpbmRleCA9IG5vZGVJbmRleDtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIG5vZGVJbmRleCsrO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIGlmKGluZGV4ID49IDApIHtcbiAgICAgICAgICAgICAgICAgICAgb3BlblBob3RvU3dpcGUoIGluZGV4LCBjbGlja2VkR2FsbGVyeSApO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICB9O1xuXG4gICAgICAgICAgICB2YXIgcGhvdG9zd2lwZVBhcnNlSGFzaCA9IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgICAgIHZhciBoYXNoID0gd2luZG93LmxvY2F0aW9uLmhhc2guc3Vic3RyaW5nKDEpLFxuICAgICAgICAgICAgICAgIHBhcmFtcyA9IHt9O1xuXG4gICAgICAgICAgICAgICAgaWYoaGFzaC5sZW5ndGggPCA1KSB7IC8vIHBpZD0xXG4gICAgICAgICAgICAgICAgICAgIHJldHVybiBwYXJhbXM7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgdmFyIHZhcnMgPSBoYXNoLnNwbGl0KCcmJyk7XG4gICAgICAgICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCB2YXJzLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmKCF2YXJzW2ldKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb250aW51ZTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB2YXIgcGFpciA9IHZhcnNbaV0uc3BsaXQoJz0nKTsgIFxuICAgICAgICAgICAgICAgICAgICBpZihwYWlyLmxlbmd0aCA8IDIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbnRpbnVlO1xuICAgICAgICAgICAgICAgICAgICB9ICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgcGFyYW1zW3BhaXJbMF1dID0gcGFpclsxXTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBpZihwYXJhbXMuZ2lkKSB7XG4gICAgICAgICAgICAgICAgICAgIHBhcmFtcy5naWQgPSBwYXJzZUludChwYXJhbXMuZ2lkLCAxMCk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgcmV0dXJuIHBhcmFtcztcbiAgICAgICAgICAgIH07XG5cbiAgICAgICAgICAgIHZhciBvcGVuUGhvdG9Td2lwZSA9IGZ1bmN0aW9uKGluZGV4LCBnYWxsZXJ5RWxlbWVudCwgZGlzYWJsZUFuaW1hdGlvbiwgZnJvbVVSTCkge1xuICAgICAgICAgICAgICAgIHZhciBwc3dwRWxlbWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5wc3dwJylbMF0sXG4gICAgICAgICAgICAgICAgICAgIGdhbGxlcnksXG4gICAgICAgICAgICAgICAgICAgIG9wdGlvbnMsXG4gICAgICAgICAgICAgICAgICAgIGl0ZW1zO1xuXG4gICAgICAgICAgICAgICAgaXRlbXMgPSBwYXJzZVRodW1ibmFpbEVsZW1lbnRzKGdhbGxlcnlFbGVtZW50KTtcblxuICAgICAgICAgICAgICAgIC8vIGRlZmluZSBvcHRpb25zIChpZiBuZWVkZWQpXG4gICAgICAgICAgICAgICAgb3B0aW9ucyA9IHtcblxuICAgICAgICAgICAgICAgICAgICBnYWxsZXJ5VUlEOiBnYWxsZXJ5RWxlbWVudC5nZXRBdHRyaWJ1dGUoJ2RhdGEtcHN3cC11aWQnKSxcblxuICAgICAgICAgICAgICAgICAgICBnZXRUaHVtYkJvdW5kc0ZuOiBmdW5jdGlvbihpbmRleCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2VlIE9wdGlvbnMtPmdldFRodW1iQm91bmRzRm4gc2VjdGlvbiBvZiBkb2NzIGZvciBtb3JlIGluZm9cbiAgICAgICAgICAgICAgICAgICAgICAgIHZhciB0aHVtYm5haWwgPSBpdGVtc1tpbmRleF0uZWwuY2hpbGRyZW5bMF0sXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFnZVlTY3JvbGwgPSB3aW5kb3cucGFnZVlPZmZzZXQgfHwgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcCxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWN0ID0gdGh1bWJuYWlsLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpOyBcblxuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIHt4OnJlY3QubGVmdCwgeTpyZWN0LnRvcCArIHBhZ2VZU2Nyb2xsLCB3OnJlY3Qud2lkdGh9O1xuICAgICAgICAgICAgICAgICAgICB9LFxuXG4gICAgICAgICAgICAgICAgICAgIGFkZENhcHRpb25IVE1MRm46IGZ1bmN0aW9uKGl0ZW0sIGNhcHRpb25FbCwgaXNGYWtlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZighaXRlbS50aXRsZSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNhcHRpb25FbC5jaGlsZHJlblswXS5pbm5lclRleHQgPSAnJztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBjYXB0aW9uRWwuY2hpbGRyZW5bMF0uaW5uZXJIVE1MID0gaXRlbS50aXRsZSArICAnPGJyLz48c21hbGw+UGhvdG86ICcgKyBpdGVtLmxvY2F0aW9uICsgJzwvc21hbGw+JztcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiB0cnVlO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIH07XG5cblxuICAgICAgICAgICAgICAgIGlmKGZyb21VUkwpIHtcbiAgICAgICAgICAgICAgICAgICAgaWYob3B0aW9ucy5nYWxsZXJ5UElEcykge1xuICAgICAgICAgICAgICAgICAgICAgICAgLy8gcGFyc2UgcmVhbCBpbmRleCB3aGVuIGN1c3RvbSBQSURzIGFyZSB1c2VkIFxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gaHR0cDovL3Bob3Rvc3dpcGUuY29tL2RvY3VtZW50YXRpb24vZmFxLmh0bWwjY3VzdG9tLXBpZC1pbi11cmxcbiAgICAgICAgICAgICAgICAgICAgICAgIGZvcih2YXIgaiA9IDA7IGogPCBpdGVtcy5sZW5ndGg7IGorKykge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmKGl0ZW1zW2pdLnBpZCA9PSBpbmRleCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBvcHRpb25zLmluZGV4ID0gajtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgb3B0aW9ucy5pbmRleCA9IHBhcnNlSW50KGluZGV4LCAxMCkgLSAxO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgb3B0aW9ucy5pbmRleCA9IHBhcnNlSW50KGluZGV4LCAxMCk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgLy8gZXhpdCBpZiBpbmRleCBub3QgZm91bmRcbiAgICAgICAgICAgICAgICBpZiggaXNOYU4ob3B0aW9ucy5pbmRleCkgKSB7XG4gICAgICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgICAgICB9XG5cblxuICAgICAgICAgICAgICAgIHZhciByYWRpb3MgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5TmFtZSgnZ2FsbGVyeS1zdHlsZScpO1xuICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwLCBsZW5ndGggPSByYWRpb3MubGVuZ3RoOyBpIDwgbGVuZ3RoOyBpKyspIHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKHJhZGlvc1tpXS5jaGVja2VkKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZihyYWRpb3NbaV0uaWQgPT0gJ3JhZGlvLWFsbC1jb250cm9scycpIHtcblxuICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIGlmKHJhZGlvc1tpXS5pZCA9PSAncmFkaW8tbWluaW1hbC1ibGFjaycpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvcHRpb25zLm1haW5DbGFzcyA9ICdwc3dwLS1taW5pbWFsLS1kYXJrJztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvcHRpb25zLmJhcnNTaXplID0ge3RvcDowLGJvdHRvbTowfTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvcHRpb25zLmNhcHRpb25FbCA9IGZhbHNlO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9wdGlvbnMuZnVsbHNjcmVlbkVsID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgb3B0aW9ucy5zaGFyZUVsID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgb3B0aW9ucy5iZ09wYWNpdHkgPSAwLjg1O1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9wdGlvbnMudGFwVG9DbG9zZSA9IHRydWU7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgb3B0aW9ucy50YXBUb1RvZ2dsZUNvbnRyb2xzID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIGlmKGRpc2FibGVBbmltYXRpb24pIHtcbiAgICAgICAgICAgICAgICAgICAgb3B0aW9ucy5zaG93QW5pbWF0aW9uRHVyYXRpb24gPSAwO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIC8vIFBhc3MgZGF0YSB0byBQaG90b1N3aXBlIGFuZCBpbml0aWFsaXplIGl0XG4gICAgICAgICAgICAgICAgZ2FsbGVyeSA9IG5ldyBQaG90b1N3aXBlKCBwc3dwRWxlbWVudCwgUGhvdG9Td2lwZVVJX0RlZmF1bHQsIGl0ZW1zLCBvcHRpb25zKTtcblxuICAgICAgICAgICAgICAgIC8vIHNlZTogaHR0cDovL3Bob3Rvc3dpcGUuY29tL2RvY3VtZW50YXRpb24vcmVzcG9uc2l2ZS1pbWFnZXMuaHRtbFxuICAgICAgICAgICAgICAgIHZhciByZWFsVmlld3BvcnRXaWR0aCxcbiAgICAgICAgICAgICAgICAgICAgdXNlTGFyZ2VJbWFnZXMgPSBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgZmlyc3RSZXNpemUgPSB0cnVlLFxuICAgICAgICAgICAgICAgICAgICBpbWFnZVNyY1dpbGxDaGFuZ2U7XG5cbiAgICAgICAgICAgICAgICBnYWxsZXJ5Lmxpc3RlbignYmVmb3JlUmVzaXplJywgZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgICAgICAgICAgICAgdmFyIGRwaVJhdGlvID0gd2luZG93LmRldmljZVBpeGVsUmF0aW8gPyB3aW5kb3cuZGV2aWNlUGl4ZWxSYXRpbyA6IDE7XG4gICAgICAgICAgICAgICAgICAgIGRwaVJhdGlvID0gTWF0aC5taW4oZHBpUmF0aW8sIDIuNSk7XG4gICAgICAgICAgICAgICAgICAgIHJlYWxWaWV3cG9ydFdpZHRoID0gZ2FsbGVyeS52aWV3cG9ydFNpemUueCAqIGRwaVJhdGlvO1xuXG5cbiAgICAgICAgICAgICAgICAgICAgaWYocmVhbFZpZXdwb3J0V2lkdGggPj0gMTIwMCB8fCAoIWdhbGxlcnkubGlrZWx5VG91Y2hEZXZpY2UgJiYgcmVhbFZpZXdwb3J0V2lkdGggPiA4MDApIHx8IHNjcmVlbi53aWR0aCA+IDEyMDAgKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZighdXNlTGFyZ2VJbWFnZXMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB1c2VMYXJnZUltYWdlcyA9IHRydWU7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaW1hZ2VTcmNXaWxsQ2hhbmdlID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYodXNlTGFyZ2VJbWFnZXMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB1c2VMYXJnZUltYWdlcyA9IGZhbHNlO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGltYWdlU3JjV2lsbENoYW5nZSA9IHRydWU7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICBpZihpbWFnZVNyY1dpbGxDaGFuZ2UgJiYgIWZpcnN0UmVzaXplKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBnYWxsZXJ5LmludmFsaWRhdGVDdXJySXRlbXMoKTtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgIGlmKGZpcnN0UmVzaXplKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBmaXJzdFJlc2l6ZSA9IGZhbHNlO1xuICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgaW1hZ2VTcmNXaWxsQ2hhbmdlID0gZmFsc2U7XG5cbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgIGdhbGxlcnkubGlzdGVuKCdnZXR0aW5nRGF0YScsIGZ1bmN0aW9uKGluZGV4LCBpdGVtKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmKCB1c2VMYXJnZUltYWdlcyApIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGl0ZW0uc3JjID0gaXRlbS5vLnNyYztcbiAgICAgICAgICAgICAgICAgICAgICAgIGl0ZW0udyA9IGl0ZW0uby53O1xuICAgICAgICAgICAgICAgICAgICAgICAgaXRlbS5oID0gaXRlbS5vLmg7XG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBpdGVtLnNyYyA9IGl0ZW0ubS5zcmM7XG4gICAgICAgICAgICAgICAgICAgICAgICBpdGVtLncgPSBpdGVtLm0udztcbiAgICAgICAgICAgICAgICAgICAgICAgIGl0ZW0uaCA9IGl0ZW0ubS5oO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICBnYWxsZXJ5LmluaXQoKTtcbiAgICAgICAgICAgIH07XG5cbiAgICAgICAgICAgIC8vIHNlbGVjdCBhbGwgZ2FsbGVyeSBlbGVtZW50c1xuICAgICAgICAgICAgdmFyIGdhbGxlcnlFbGVtZW50cyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoIGdhbGxlcnlTZWxlY3RvciApO1xuICAgICAgICAgICAgZm9yKHZhciBpID0gMCwgbCA9IGdhbGxlcnlFbGVtZW50cy5sZW5ndGg7IGkgPCBsOyBpKyspIHtcbiAgICAgICAgICAgICAgICBnYWxsZXJ5RWxlbWVudHNbaV0uc2V0QXR0cmlidXRlKCdkYXRhLXBzd3AtdWlkJywgaSsxKTtcbiAgICAgICAgICAgICAgICBnYWxsZXJ5RWxlbWVudHNbaV0ub25jbGljayA9IG9uVGh1bWJuYWlsc0NsaWNrO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAvLyBQYXJzZSBVUkwgYW5kIG9wZW4gZ2FsbGVyeSBpZiBpdCBjb250YWlucyAjJnBpZD0zJmdpZD0xXG4gICAgICAgICAgICB2YXIgaGFzaERhdGEgPSBwaG90b3N3aXBlUGFyc2VIYXNoKCk7XG4gICAgICAgICAgICBpZihoYXNoRGF0YS5waWQgJiYgaGFzaERhdGEuZ2lkKSB7XG4gICAgICAgICAgICAgICAgb3BlblBob3RvU3dpcGUoIGhhc2hEYXRhLnBpZCwgIGdhbGxlcnlFbGVtZW50c1sgaGFzaERhdGEuZ2lkIC0gMSBdLCB0cnVlLCB0cnVlICk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH07XG5cbiAgICAgICAgaW5pdFBob3RvU3dpcGVGcm9tRE9NKCcuZGVtby1nYWxsZXJ5Jyk7XG5cbiAgICB9KSgpOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./source/_assets/js/gallery.js\n");

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/sass/main.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9zYXNzL21haW4uc2Nzcz85Y2YxIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vc291cmNlL19hc3NldHMvc2Fzcy9tYWluLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./source/_assets/sass/main.scss\n");

/***/ }),

/***/ 0:
/*!****************************************************************************!*\
  !*** multi ./source/_assets/js/gallery.js ./source/_assets/sass/main.scss ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/adrians/cromatic/proiecte/dc-dental/source/_assets/js/gallery.js */"./source/_assets/js/gallery.js");
module.exports = __webpack_require__(/*! /Users/adrians/cromatic/proiecte/dc-dental/source/_assets/sass/main.scss */"./source/_assets/sass/main.scss");


/***/ })

},[[0,"/js/manifest"]]]);