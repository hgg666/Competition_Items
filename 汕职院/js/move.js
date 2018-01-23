	$(function() {
		function getStyle(obj, name) {
			if (obj.currentStyle) {
				return obj.currentStyle[name];
			} else {
				return getComputedStyle(obj, false)[name];
			}
		}

		function startMove(obj, json, fnEnd) {
			clearInterval(obj.timer);
			obj.timer = setInterval(function() {
				var bStop = true; //假设：所有值都已经到了

				for (var attr in json) {
					var cur = 0;

					if (attr == 'opacity') {
						cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
					} else {
						cur = parseInt(getStyle(obj, attr));
					}

					var speed = (json[attr] - cur) / 6;
					speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);

					if (cur != json[attr])
						bStop = false;

					if (attr == 'opacity') {
						obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
						obj.style.opacity = (cur + speed) / 100;
					} else {
						obj.style[attr] = cur + speed + 'px';
					}
				}

				if (bStop) {
					clearInterval(obj.timer);

					if (fnEnd) fnEnd();
				}
			}, 30);
		}
		var roll1 = document.getElementById('roll1');
		var roll2 = document.getElementById('roll2');
		toShow(roll1, 4000);
		toShow(roll2, 6000);

		function toShow(obj, time) {
			var aDiv = obj.getElementsByTagName('div');
			var iNow = 0;
			var timer = null;
			var bBtn = true;

			setInterval(function() {
				toChange();
			}, time);

			var toChange = function() {
				clearInterval(timer);
				timer = setInterval(function() {
					if (iNow == aDiv.length) {
						clearInterval(timer);
						iNow = 0;
						bBtn = !bBtn;
					} else if (bBtn) {
						startMove(aDiv[iNow], {
							top: -30
						});
						iNow++;
					} else {
						startMove(aDiv[iNow], {
							top: 7
						});
						iNow++;
					}
				}, 100);
			};
		}
		toShow(roll1, 4000);

		toShow(roll2, 6000);

	});