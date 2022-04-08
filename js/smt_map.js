/*若要修改國家定位，需要先將顯示index.php頁面上面的
js/KBmapmarkersCords.js
目前預設為隱藏
*/
var json =
{
    "mapMarker1": {
        "cordX": "85.14",
        "cordY": "43.51",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "日 本",
            "content": "<p></p>"
        }
    },
    "mapMarker2": {
        "cordX": "82.03",
        "cordY": "44.13",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "韓 國",
            "content": "<p></p>"
        }
    },
    "mapMarker3": {
        "cordX": "79.91",
        "cordY": "45.77",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "大中華地區",
            "content": "<p></p>"
        }
    },
    "mapMarker4": {
        "cordX": "79.86",
        "cordY": "49.14",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "大中華地區",
            "content": "<p></p>"
        }
    },
    "mapMarker5": {
        "cordX": "78.26",
        "cordY": "51.49",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "大中華地區",
            "content": "<p></p>"
        }
    },

    "mapMarker6": {
        "cordX": "59.01",
        "cordY": "50.08",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "中東地區",
            "content": "<p></p>"
        }
    },


    "mapMarker7": {
        "cordX": "55.80",
        "cordY": "46.95",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "以 色  列",
            "content": "<p></p>"
        }
    },

    "mapMarker8": {
        "cordX": "48.60",
        "cordY": "35.41",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "歐洲市場",
            "content": "<p></p>"
        }
    },

    "mapMarker9": {
        "cordX": "45.94",
        "cordY": "29.35",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "英國",
            "content": "<p></p>"
        }
    },

    "mapMarker10": {
        "cordX": "27.28",
        "cordY": "37.72",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "美洲市場",
            "content": "<p></p>"
        }
    },

    "mapMarker11": {
        "cordX": "18.26",
        "cordY": "53.35",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "美洲市場",
            "content": "<p></p>"
        }
    },

    "mapMarker12": {
        "cordX": "16.29",
        "cordY": "40.18",
        "icon": "img/map-marker.png",
        "modal": {
            "title": "美洲市場",
            "content": "<p></p>"
        }
    }
};

(function ($) {

    $(document).ready(function () {

        createKBmap('KBtestmap', 'img/mapa.png');

        KBtestmap.importJSON(json);

        KBtestmap.showAllMapMarkers();

    });

})(jQuery);