(function(e){var t=function(e){var t,n,r;for(n=1;n<arguments.length;n++){t=arguments[n];for(r in t){if(t.hasOwnProperty(r)){e[r]=t[r]}}}return e},n={autoDisable:false},r=function(e){var r=this,i=false,s=t({},n,e||{});r.disableProgress={disable:function(){i=true;r.controlBar.progressControl.seekBar.off("mousedown");r.controlBar.progressControl.seekBar.off("touchstart");r.controlBar.progressControl.seekBar.off("click")},enable:function(){i=false;r.controlBar.progressControl.seekBar.on("mousedown",r.controlBar.progressControl.seekBar.onMouseDown);r.controlBar.progressControl.seekBar.on("touchstart",r.controlBar.progressControl.seekBar.onMouseDown);r.controlBar.progressControl.seekBar.on("click",r.controlBar.progressControl.seekBar.onClick)},getState:function(){return i}};if(s.autoDisable){r.disableProgress.disable()}};e.plugin("disableProgress",r)})(window.videojs)